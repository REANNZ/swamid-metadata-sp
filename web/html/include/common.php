<?php
$this->standardAttributes = array(
	'assurance-certification' => array(
		array('type' => 'IdP', 'value' => 'http://www.swamid.se/policy/assurance/al1', 'swamidStd' => true),
		array('type' => 'IdP', 'value' => 'http://www.swamid.se/policy/assurance/al2', 'swamidStd' => true),
		array('type' => 'IdP', 'value' => 'http://www.swamid.se/policy/assurance/al3', 'swamidStd' => true),
		array('type' => 'IdP/SP', 'value' => 'https://refeds.org/sirtfi', 'swamidStd' => true)),
	'entity-category' => array(
		array('type' => 'SP', 'value' => 'http://refeds.org/category/research-and-scholarship', 'swamidStd' => true),
		array('type' => 'SP', 'value' => 'https://refeds.org/category/anonymous', 'swamidStd' => true),
		array('type' => 'SP', 'value' => 'https://refeds.org/category/pseudonymous', 'swamidStd' => true),
		array('type' => 'SP', 'value' => 'https://refeds.org/category/personalized', 'swamidStd' => true),
		array('type' => 'SP', 'value' => 'http://www.geant.net/uri/dataprotection-code-of-conduct/v1', 'swamidStd' => true),
		array('type' => 'SP', 'value' => 'https://refeds.org/category/code-of-conduct/v2', 'swamidStd' => true),
		array('type' => 'SP', 'value' => 'https://myacademicid.org/entity-categories/esi', 'swamidStd' => true),
		array('type' => 'SP', 'value' => 'http://www.swamid.se/category/eu-adequate-protection', 'swamidStd' => false),
		array('type' => 'SP', 'value' => 'http://www.swamid.se/category/hei-service', 'swamidStd' => false),
		array('type' => 'SP', 'value' => 'http://www.swamid.se/category/nren-service', 'swamidStd' => false),
		array('type' => 'SP', 'value' => 'http://www.swamid.se/category/research-and-education', 'swamidStd' => false),
		array('type' => 'SP', 'value' => 'http://www.swamid.se/category/sfs-1993-1153', 'swamidStd' => false),
		array('type' => 'IdP', 'value' => 'http://refeds.org/category/hide-from-discovery', 'swamidStd' => true)),

	'entity-category-support' => array(
		array('type' => 'IdP', 'value' => 'http://refeds.org/category/research-and-scholarship', 'swamidStd' => true),
		array('type' => 'IdP', 'value' => 'http://www.geant.net/uri/dataprotection-code-of-conduct/v1', 'swamidStd' => true),
		array('type' => 'IdP', 'value' => 'https://refeds.org/category/code-of-conduct/v2', 'swamidStd' => true)),
	'subject-id:req' => array(
		array('type' => 'SP', 'value' => 'subject-id', 'swamidStd' => true),
		array('type' => 'SP', 'value' => 'pairwise-id', 'swamidStd' => true),
		array('type' => 'SP', 'value' => 'none', 'swamidStd' => true),
		array('type' => 'SP', 'value' => 'any', 'swamidStd' => true))
);
$this->FriendlyNames = array(
	'urn:oid:2.5.4.6'						=> array('desc' => 'c', 'swamidStd' => true),
	'urn:oid:2.5.4.3'						=> array('desc' => 'cn', 'swamidStd' => true),
	'urn:oid:0.9.2342.19200300.100.1.43'	=> array('desc' => 'co', 'swamidStd' => true),
	'urn:oid:2.16.840.1.113730.3.1.241'		=> array('desc' => 'displayName', 'swamidStd' => true),
	'urn:oid:1.3.6.1.4.1.5923.1.1.1.1'		=> array('desc' => 'eduPersonAffiliation', 'swamidStd' => true),
	'urn:oid:1.3.6.1.4.1.5923.1.1.1.11'		=> array('desc' => 'eduPersonAssurance', 'swamidStd' => true),
	'urn:oid:1.3.6.1.4.1.5923.1.1.1.7'		=> array('desc' => 'eduPersonEntitlement', 'swamidStd' => false),
	'urn:oid:1.3.6.1.4.1.5923.1.1.1.16'		=> array('desc' => 'eduPersonOrcid', 'swamidStd' => true),
	'urn:oid:1.3.6.1.4.1.5923.1.1.1.5'		=> array('desc' => 'eduPersonPrimaryAffiliation', 'swamidStd' => false),
	'urn:oid:1.3.6.1.4.1.5923.1.1.1.6'		=> array('desc' => 'eduPersonPrincipalName', 'swamidStd' => true),
	'urn:oid:1.3.6.1.4.1.5923.1.1.1.9'		=> array('desc' => 'eduPersonScopedAffiliation', 'swamidStd' => true),
	'urn:oid:1.3.6.1.4.1.5923.1.1.1.10'		=> array('desc' => 'eduPersonTargetedID', 'swamidStd' => true),
	'urn:oid:1.3.6.1.4.1.5923.1.1.1.13'		=> array('desc' => 'eduPersonUniqueId', 'swamidStd' => true),
	'urn:oid:2.16.840.1.113730.3.1.4'		=> array('desc' => 'employeeType', 'swamidStd' => false),
	'urn:oid:2.5.4.42'						=> array('desc' => 'givenName', 'swamidStd' => true),
	'urn:oid:0.9.2342.19200300.100.1.10'	=> array('desc' => 'manager', 'swamidStd' => false),
	'urn:oid:0.9.2342.19200300.100.1.3'		=> array('desc' => 'mail', 'swamidStd' => true),
	'urn:oid:1.3.6.1.4.1.2428.90.1.6'		=> array('desc' => 'norEduOrgAcronym', 'swamidStd' => true),
	'urn:oid:1.3.6.1.4.1.2428.90.1.5'		=> array('desc' => 'norEduPersonNIN', 'swamidStd' => true),
	'urn:oid:2.5.4.10'						=> array('desc' => 'o', 'swamidStd' => true),
	'urn:oid:1.2.752.29.4.13'				=> array('desc' => 'personalIdentityNumber', 'swamidStd' => true),
	'urn:oid:1.3.6.1.4.1.25178.1.2.3'		=> array('desc' => 'schacDateOfBirth', 'swamidStd' => true),
	'urn:oid:1.3.6.1.4.1.25178.1.2.9'		=> array('desc' => 'schacHomeOrganization', 'swamidStd' => true),
	'urn:oid:1.3.6.1.4.1.25178.1.2.10'		=> array('desc' => 'schacHomeOrganizationType', 'swamidStd' => true),
	'urn:oid:2.5.4.4'						=> array('desc' => 'sn', 'swamidStd' => true),
	'urn:oid:0.9.2342.19200300.100.1.1'		=> array('desc' => 'uid', 'swamidStd' => false),

	'urn:mace:dir:attribute-def:cn' => array('desc' => 'cn', 'swamidStd' => false),
	'urn:mace:dir:attribute-def:displayName' => array('desc' => 'displayName', 'swamidStd' => false),
	'urn:mace:dir:attribute-def:eduPersonPrincipalName' => array('desc' => 'eduPersonPrincipalName', 'swamidStd' => false),
	'urn:mace:dir:attribute-def:eduPersonScopedAffiliation' => array('desc' => 'eduPersonScopedAffiliation', 'swamidStd' => false),
	'urn:mace:dir:attribute-def:eduPersonTargetedID' => array('desc' => 'eduPersonTargetedID', 'swamidStd' => false),
	'urn:mace:dir:attribute-def:givenName' => array('desc' => 'givenName', 'swamidStd' => false),
	'urn:mace:dir:attribute-def:mail' => array('desc' => 'mail', 'swamidStd' => false),
	'urn:mace:dir:attribute-def:sn' => array('desc' => 'sn', 'swamidStd' => false),

	'urn:oid:1.2.840.113549.1.9.1.1' => array('desc' => 'Wrong - email', 'swamidStd' => false)
);
$this->langCodes = array(
	'en'	=>	'English',
	'sv'	=>	'Swedish',
	'da'	=>	'Danish',
	'no'	=>	'Norwegian',
	'fi'	=>	'Finnish',
	'is'	=>	'Icelandic',
	'de'	=>	'German',
	'fr'	=>	'French',
	'es'	=>	'Spanish',
	'se'	=>	'Northern Sami',
	'nb'	=>	'Bokmål, Norwegian',
	'nn'	=>	'Nynorsk, Norwegian',
	'ab'	=>	'Abkhazian',
	'aa'	=>	'Afar',
	'af'	=>	'Afrikaans',
	'ak'	=>	'Akan',
	'sq'	=>	'Albanian',
	'am'	=>	'Amharic',
	'ar'	=>	'Arabic',
	'an'	=>	'Aragonese',
	'hy'	=>	'Armenian',
	'as'	=>	'Assamese',
	'av'	=>	'Avaric',
	'ae'	=>	'Avestan',
	'ay'	=>	'Aymara',
	'az'	=>	'Azerbaijani',
	'bm'	=>	'Bambara',
	'ba'	=>	'Bashkir',
	'eu'	=>	'Basque',
	'be'	=>	'Belarusian',
	'bn'	=>	'Bengali',
	'bh'	=>	'Bihari languages',
	'bi'	=>	'Bislama',
	'bs'	=>	'Bosnian',
	'br'	=>	'Breton',
	'bg'	=>	'Bulgarian',
	'my'	=>	'Burmese',
	'ca'	=>	'Catalan',
	'km'	=>	'Central Khmer',
	'ch'	=>	'Chamorro',
	'ce'	=>	'Chechen',
	'zh'	=>	'Chinese',
	'za'	=>	'Chuang',
	'cv'	=>	'Chuvash',
	'kw'	=>	'Cornish',
	'co'	=>	'Corsican',
	'cr'	=>	'Cree',
	'hr'	=>	'Croatian',
	'cs'	=>	'Czech',
	'nl'	=>	'Dutch',
	'dz'	=>	'Dzongkha',
	'eo'	=>	'Esperanto',
	'et'	=>	'Estonian',
	'ee'	=>	'Ewe',
	'fo'	=>	'Faroese',
	'fj'	=>	'Fijian',
	'ff'	=>	'Fulah',
	'gl'	=>	'Galician',
	'lg'	=>	'Ganda',
	'ka'	=>	'Georgian',
	'ki'	=>	'Gikuyu',
	'el'	=>	'Greek, Modern (1453-)',
	'kl'	=>	'Greenlandic',
	'gn'	=>	'Guarani',
	'gu'	=>	'Gujarati',
	'ht'	=>	'Haitian Creole',
	'ha'	=>	'Hausa',
	'he'	=>	'Hebrew',
	'hz'	=>	'Herero',
	'hi'	=>	'Hindi',
	'ho'	=>	'Hiri Motu',
	'hu'	=>	'Hungarian',
	'io'	=>	'Ido',
	'ig'	=>	'Igbo',
	'id'	=>	'Indonesian',
	'ia'	=>	'Interlingua (IALA)',
	'ie'	=>	'Interlingue, Occidental',
	'iu'	=>	'Inuktitut',
	'ik'	=>	'Inupiaq',
	'ga'	=>	'Irish',
	'it'	=>	'Italian',
	'ja'	=>	'Japanese',
	'jv'	=>	'Javanese',
	'kn'	=>	'Kannada',
	'kr'	=>	'Kanuri',
	'ks'	=>	'Kashmiri',
	'kk'	=>	'Kazakh',
	'rw'	=>	'Kinyarwanda',
	'kv'	=>	'Komi',
	'kg'	=>	'Kongo',
	'ko'	=>	'Korean',
	'ku'	=>	'Kurdish',
	'kj'	=>	'Kwanyama',
	'ky'	=>	'Kyrgyz',
	'lo'	=>	'Lao',
	'la'	=>	'Latin',
	'lv'	=>	'Latvian',
	'li'	=>	'Limburgish',
	'ln'	=>	'Lingala',
	'lt'	=>	'Lithuanian',
	'lu'	=>	'Luba-Katanga',
	'lb'	=>	'Luxembourgish',
	'mk'	=>	'Macedonian',
	'mg'	=>	'Malagasy',
	'ms'	=>	'Malay',
	'ml'	=>	'Malayalam',
	'dv'	=>	'Maldivian',
	'mt'	=>	'Maltese',
	'gv'	=>	'Manx',
	'mi'	=>	'Maori',
	'mr'	=>	'Marathi',
	'mh'	=>	'Marshallese',
	'ro'	=>	'Moldovan',
	'mn'	=>	'Mongolian',
	'na'	=>	'Nauru',
	'nv'	=>	'Navaho',
	'nd'	=>	'Ndebele, North',
	'nr'	=>	'Ndebele, South',
	'ng'	=>	'Ndonga',
	'ne'	=>	'Nepali',
	'ii'	=>	'Nuosu',
	'ny'	=>	'Nyanja',
	'oj'	=>	'Ojibwa',
	'cu'	=>	'Old Church Slavonic',
	'or'	=>	'Oriya',
	'om'	=>	'Oromo',
	'os'	=>	'Ossetic',
	'pi'	=>	'Pali',
	'pa'	=>	'Panjabi',
	'fa'	=>	'Persian',
	'pl'	=>	'Polish',
	'pt'	=>	'Portuguese',
	'oc'	=>	'Provençal',
	'ps'	=>	'Pushto',
	'qu'	=>	'Quechua',
	'rm'	=>	'Romansh',
	'rn'	=>	'Rundi',
	'ru'	=>	'Russian',
	'sm'	=>	'Samoan',
	'sg'	=>	'Sango',
	'sa'	=>	'Sanskrit',
	'sc'	=>	'Sardinian',
	'gd'	=>	'Scottish Gaelic',
	'sr'	=>	'Serbian',
	'sn'	=>	'Shona',
	'sd'	=>	'Sindhi',
	'si'	=>	'Sinhalese',
	'sk'	=>	'Slovak',
	'sl'	=>	'Slovenian',
	'so'	=>	'Somali',
	'st'	=>	'Sotho, Southern',
	'su'	=>	'Sundanese',
	'sw'	=>	'Swahili',
	'ss'	=>	'Swati',
	'tl'	=>	'Tagalog',
	'ty'	=>	'Tahitian',
	'tg'	=>	'Tajik',
	'ta'	=>	'Tamil',
	'tt'	=>	'Tatar',
	'te'	=>	'Telugu',
	'th'	=>	'Thai',
	'bo'	=>	'Tibetan',
	'ti'	=>	'Tigrinya',
	'to'	=>	'Tonga (Tonga Islands)',
	'ts'	=>	'Tsonga',
	'tn'	=>	'Tswana',
	'tr'	=>	'Turkish',
	'tk'	=>	'Turkmen',
	'tw'	=>	'Twi',
	'uk'	=>	'Ukrainian',
	'ur'	=>	'Urdu',
	'ug'	=>	'Uyghur',
	'uz'	=>	'Uzbek',
	've'	=>	'Venda',
	'vi'	=>	'Vietnamese',
	'vo'	=>	'Volapük',
	'wa'	=>	'Walloon',
	'cy'	=>	'Welsh',
	'fy'	=>	'Western Frisian',
	'wo'	=>	'Wolof',
	'xh'	=>	'Xhosa',
	'yi'	=>	'Yiddish',
	'yo'	=>	'Yoruba',
	'zu'	=>	'Zulu',
);