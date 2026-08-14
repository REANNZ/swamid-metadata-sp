<?php

//Load composer's autoloader
require_once __DIR__ . '/../html/vendor/autoload.php';

$config = new \metadata\Configuration();

$import = new \metadata\NormalizeXML();
$import->fromFile($argv[1]);
if ($import->getStatus()) {
  $entityID = $import->getEntityID();
  printf("%s\n", $entityID);
  $metadata = new \metadata\Metadata($import->getEntityID(), 'Prod');
  $metadata->importXML($import->getXML());
  $metadata->updateFeed($argv[2]);

  $parser = $config->getExtendedClass('ParseXML', $metadata->id());

  if ($parser->getResult() <> "Updated in db") {
    printf("Import -> %s\n", $parser->getResult());
  }

  $parser->clearResult();
  $parser->clearWarning();
  $parser->clearError();
  $parser->parseXML();
  $validator = $config->getExtendedClass('Validate', $metadata->id());
  $validator->saml();
  $validator->validateURLs();

  if ($validator->getResult() <> "") {
    printf("\nValidate ->\n%s#\n", $validator->getResult());
  }
  if ($validator->getWarning() <> "") {
    printf("\nWarning ->\n%s\n", $validator->getWarning());
  }
  if ($validator->getError() <> "") {
    printf("\nError ->\n%s\n", $validator->getError());
  }
} else {
  print $import->getError();
}
