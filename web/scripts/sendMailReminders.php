<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require_once __DIR__ . '/../html/vendor/autoload.php';

include_once __DIR__ . '/../html/config.php';  # NOSONAR

try {
  $db = new PDO("mysql:host=$dbServername;dbname=$dbName", $dbUsername, $dbPassword);
  // set the PDO error mode to exception
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "DB Error";
}

$updateMailRemindersHandler = $db->prepare('INSERT INTO MailReminders (`entity_id`, `type`, `level`, `mailDate`)
  VALUES (:Entity_Id, :Type, :Level, NOW()) ON DUPLICATE KEY UPDATE `level` = :Level, `mailDate` = NOW()');
$removeMailRemindersHandler = $db->prepare('DELETE FROM MailReminders
  WHERE `entity_id` = :Entity_Id AND `type` = :Type');

$getMailRemindersHandler = $db->prepare(
  'SELECT `entity_id`, `level` FROM MailReminders WHERE `type` = :Type');

# Time to confirm entities again ?
$reminders = array();
$getMailRemindersHandler->execute(array('Type' => 1));
while ($entity = $getMailRemindersHandler->fetch(PDO::FETCH_ASSOC)) {
  $reminders[$entity['entity_id']] = $entity['level'];
}
$getMailRemindersHandler->closeCursor();

$flagDates = $db->query('SELECT NOW() - INTERVAL 10 MONTH AS `warn1Date`,
  NOW() - INTERVAL 11 MONTH AS `warn2Date`,
  NOW() - INTERVAL 12 MONTH AS `errorDate`', PDO::FETCH_ASSOC);
foreach ($flagDates as $dates) {
  # Need to use foreach to fetch row. $flagDates is a PDOStatement
  $warn1Date = $dates['warn1Date'];
  $warn2Date = $dates['warn2Date'];
  $errorDate = $dates['errorDate'];
}
$flagDates->closeCursor();

$entitiesHandler = $db->prepare("SELECT DISTINCT Entities.`id`, `entityID`, `lastConfirmed`, `data` AS DisplayName
  FROM Entities
  LEFT JOIN EntityConfirmation ON EntityConfirmation.entity_id = id
  LEFT JOIN Mdui ON Mdui.entity_id = id AND `element` = 'DisplayName' AND `lang` = 'en'
  WHERE `status` = 1 AND publishIn > 1 ORDER BY `entityID`");

$entitiesHandler->execute();
while ($entity = $entitiesHandler->fetch(PDO::FETCH_ASSOC)) {
  if ($warn1Date > $entity['lastConfirmed']) {
    if (! isset($reminders[$entity['id']])) {
      $reminders[$entity['id']] = 0;
    }
    if ($errorDate > $entity['lastConfirmed'] && $reminders[$entity['id']] < 3) {
      printf('Error %s %s%s', $entity['lastConfirmed'], $entity['entityID'], "\n");
      $updateMailRemindersHandler->execute(array('Entity_Id' => $entity['id'], 'Type' => 1, 'Level' => 3));
      sendEntityConfirmation($entity['id'], $entity['entityID'],
        iconv("UTF-8", "ISO-8859-1", $entity['DisplayName']), 12);
    } elseif ($warn2Date > $entity['lastConfirmed'] && $reminders[$entity['id']] < 2) {
      printf('Warn2 %s %s%s', $entity['lastConfirmed'], $entity['entityID'], "\n");
      $updateMailRemindersHandler->execute(array('Entity_Id' => $entity['id'], 'Type' => 1, 'Level' => 2));
      sendEntityConfirmation($entity['id'], $entity['entityID'],
        iconv("UTF-8", "ISO-8859-1", $entity['DisplayName']), 11);
    } elseif ($warn1Date > $entity['lastConfirmed'] && $reminders[$entity['id']] < 1) {
      printf('Warn1 %s %s%s', $entity['lastConfirmed'], $entity['entityID'], "\n");
      $updateMailRemindersHandler->execute(array('Entity_Id' => $entity['id'], 'Type' => 1, 'Level' => 1));
      sendEntityConfirmation($entity['id'], $entity['entityID'],
        iconv("UTF-8", "ISO-8859-1", $entity['DisplayName']), 10);
    }
    unset($reminders[$entity['id']]);
  }
}

$removeMailRemindersHandler->bindValue(':Type', 1);
$removeMailRemindersHandler->bindParam(':Entity_Id', $reminder);
foreach ($reminders as $reminder => $level) {
  $removeMailRemindersHandler->execute();
}
$entitiesHandler->closeCursor();


function sendEntityConfirmation($id, $entityID, $displayName, $months) {
  global $SMTPHost, $SASLUser, $SASLPassword, $MailFrom, $SendOut, $baseURL;

  $mailContacts = new PHPMailer(true);
  $mailContacts->isSMTP();
  $mailContacts->Host = $SMTPHost;
  $mailContacts->SMTPAuth = true;
  $mailContacts->SMTPAutoTLS = true;
  $mailContacts->Port = 587;
  $mailContacts->SMTPAuth = true;
  $mailContacts->Username = $SASLUser;
  $mailContacts->Password = $SASLPassword;
  $mailContacts->SMTPSecure = 'tls';

  //Recipients
  $mailContacts->setFrom($MailFrom, 'Metadata - Admin');
  $mailContacts->addBCC('bjorn@sunet.se');
  $mailContacts->addReplyTo('operations@swamid.se', 'SWAMID Operations');

  $addresses = getTechnicalAndAdministrativeContacts($id);
  if ($SendOut) {
    foreach ($addresses as $address) {
      $mailContacts->addAddress($address);
    }
  }

  //Content
  $mailContacts->isHTML(true);
  $mailContacts->Body    = sprintf("<html>\n  <body>
    <p>Hi.</p>
    <p>The entity \"%s\" (%s) has not been validated/confirmed for %d months.
    The SWAMID SAML WebSSO Technology Profile requires an annual confirmation that the entity is operational
    and fulfils the Technology Profile. If not annually confirmed the Operations team will start the process
    to remove the entity from SWAMID metadata registry.</p>
    <p>You have received this email because you are either the technical and/or administrative contact.</p>
    <p>You can confirm, update or remove your entity at
    <a href=\"%sadmin/?showEntity=%d\">%sadmin/?showEntity=%d</a> .</p>
    <p>This is a message from the SWAMID SAML WebSSO metadata administration tool.<br>
    --<br>
    On behalf of SWAMID Operations</p>
  </body>\n</html>",
  $displayName, $entityID, $months, $baseURL, $id, $baseURL, $id);
  $mailContacts->AltBody = sprintf("Hi.\n\nThe entity \"%s\" (%s) has not been validated/confirmed for %d months.
    The SWAMID SAML WebSSO Technology Profile requires an annual confirmation that the entity is operational and fulfils
    the Technology Profile. If not annually confirmed the Operations team will start the process to remove the entity
    from SWAMID metadata registry.
    \nYou have received this email because you are either the technical and/or administrative contact.
    \nYou can confirm, update or remove your entity at %sadmin/?showEntity=%d .
    \nThis is a message from the SWAMID SAML WebSSO metadata administration tool.
    --
    On behalf of SWAMID Operations",
    $displayName, $entityID, $months, $baseURL, $id);

  $shortEntityid = preg_replace('/^https?:\/\/([^:\/]*)\/.*/', '$1', $entityID);
  $mailContacts->Subject  = 'Warning : SWAMID metadata for ' . $shortEntityid . ' needs to be validated';

  try {
    $mailContacts->send();
  } catch (Exception $e) {
    echo 'Message could not be sent to contacts.<br>';
  }
}

function getTechnicalAndAdministrativeContacts($id) {
  global $db;
  $addresses = array();

  $contactHandler = $db->prepare("SELECT DISTINCT emailAddress
    FROM Entities, ContactPerson
    WHERE id = entity_id
      AND id = :ID AND status = 1
      AND (contactType='technical' OR contactType='administrative')
      AND emailAddress <> ''");
  $contactHandler->execute(array('ID' => $id));
  while ($address = $contactHandler->fetch(PDO::FETCH_ASSOC)) {
    $addresses[] = substr($address['emailAddress'],7);
  }
  return $addresses;
}
