<?php

namespace metadata;

/**
 * A trait collecting all constants used for SAML
 */
trait SAMLTrait
{
  public const SAML_ALG_DIGESTMETHOD = 'alg:DigestMethod';
  public const SAML_ALG_SIGNATUREMETHOD = 'alg:SignatureMethod';
  public const SAML_ALG_SIGNINGMETHOD = 'alg:SigningMethod';
  public const SAML_ATTRIBUTE_REMD = 'remd:contactType';
  public const SAML_BINDING_HTTP_REDIRECT = 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect';
  public const SAML_DS_KEYINFO = 'ds:KeyInfo';
  public const SAML_DS_KEYNAME = 'ds:KeyName';
  public const SAML_DS_X509CERTIFICATE = 'ds:X509Certificate';
  public const SAML_DS_X509DATA = 'ds:X509Data';
  public const SAML_EC_COCOV1 =
    'http://www.geant.net/uri/dataprotection-code-of-conduct/v1'; # NOSONAR Should be http://
  public const SAML_IDPDISC_DISCOVERYRESPONSE = 'idpdisc:DiscoveryResponse';
  public const SAML_MD_ADDITIONALMETADATALOCATION = 'md:AdditionalMetadataLocation';
  public const SAML_MD_AFFILIATIONDESCRIPTOR = 'md:AffiliationDescriptor';
  public const SAML_MD_ARTIFACTRESOLUTIONSERVICE = 'md:ArtifactResolutionService';
  public const SAML_MD_ASSERTIONCONSUMERSERVICE = 'md:AssertionConsumerService';
  public const SAML_MD_ASSERTIONIDREQUESTSERVICE = 'md:AssertionIDRequestService';
  public const SAML_MD_ATTRIBUTEAUTHORITYDESCRIPTOR = 'md:AttributeAuthorityDescriptor';
  public const SAML_MD_ATTRIBUTECONSUMINGSERVICE = 'md:AttributeConsumingService';
  public const SAML_MD_ATTRIBUTESERVICE = 'md:AttributeService';
  public const SAML_MD_AUTHNAUTHORITYDESCRIPTOR = 'md:AuthnAuthorityDescriptor';
  public const SAML_MD_COMPANY = 'md:Company';
  public const SAML_MD_CONTACTPERSON = 'md:ContactPerson';
  public const SAML_MD_EMAILADDRESS = 'md:EmailAddress';
  public const SAML_MD_ENCRYPTIONMETHOD = 'md:EncryptionMethod';
  public const SAML_MD_ENTITYDESCRIPTOR = 'md:EntityDescriptor';
  public const SAML_MD_EXTENSIONS = 'md:Extensions';
  public const SAML_MD_GIVENNAME = 'md:GivenName';
  public const SAML_MD_IDPSSODESCRIPTOR = 'md:IDPSSODescriptor';
  public const SAML_MD_KEYDESCRIPTOR = 'md:KeyDescriptor';
  public const SAML_MD_MANAGENAMEIDSERVICE = 'md:ManageNameIDService';
  public const SAML_MD_NAMEIDFORMAT = 'md:NameIDFormat';
  public const SAML_MD_NAMEIDMAPPINGSERVICE = 'md:NameIDMappingService';
  public const SAML_MD_PDPDESCRIPTOR = 'md:PDPDescriptor';
  public const SAML_MD_ORGANIZATION = 'md:Organization';
  public const SAML_MD_ORGANIZATIONDISPLAYNAME = 'md:OrganizationDisplayName';
  public const SAML_MD_ORGANIZATIONNAME = 'md:OrganizationName';
  public const SAML_MD_ORGANIZATIONURL = 'md:OrganizationURL';
  public const SAML_MD_REQUESTEDATTRIBUTE = 'md:RequestedAttribute';
  public const SAML_MD_SERVICEDESCRIPTION = 'md:ServiceDescription';
  public const SAML_MD_SERVICENAME = 'md:ServiceName';
  public const SAML_MD_SINGLELOGOUTSERVICE = 'md:SingleLogoutService';
  public const SAML_MD_SINGLESIGNONSERVICE = 'md:SingleSignOnService';
  public const SAML_MD_SPSSODESCRIPTOR = 'md:SPSSODescriptor';
  public const SAML_MD_SURNAME = 'md:SurName';
  public const SAML_MD_TELEPHONENUMBER = 'md:TelephoneNumber';
  public const SAML_MDATTR_ENTITYATTRIBUTES = 'mdattr:EntityAttributes';
  public const SAML_MDRPI_REGISTRATIONINFO = 'mdrpi:RegistrationInfo';
  public const SAML_MDRPI_REGISTRATIONPOLICY = 'mdrpi:RegistrationPolicy';
  public const SAML_MDUI = 'mdui:';
  public const SAML_MDUI_DESCRIPTION = 'mdui:Description';
  public const SAML_MDUI_DISCOHINTS = 'mdui:DiscoHints';
  public const SAML_MDUI_DISPLAYNAME = 'mdui:DisplayName';
  public const SAML_MDUI_DOMAINHINT = 'mdui:DomainHint';
  public const SAML_MDUI_GEOLOCATIONHINT = 'mdui:GeolocationHint';
  public const SAML_MDUI_IPHINT = 'mdui:IPHint';
  public const SAML_MDUI_INFORMATIONURL = 'mdui:InformationURL';
  public const SAML_MDUI_KEYWORDS = 'mdui:Keywords';
  public const SAML_MDUI_LOGO = 'mdui:Logo';
  public const SAML_MDUI_PRIVACYSTATEMENTURL = 'mdui:PrivacyStatementURL';
  public const SAML_MDUI_UIINFO = 'mdui:UIInfo';
  public const SAML_PROTOCOL_SAML1 = 'urn:oasis:names:tc:SAML:1.0:protocol';
  public const SAML_PROTOCOL_SAML11 = 'urn:oasis:names:tc:SAML:1.1:protocol';
  public const SAML_PROTOCOL_SAML2 = 'urn:oasis:names:tc:SAML:2.0:protocol';
  public const SAML_PROTOCOL_SHIB = 'urn:mace:shibboleth:1.0';
  public const SAML_PSC_REQUESTEDPRINCIPALSELECTION = 'psc:RequestedPrincipalSelection';
  public const SAML_SHIBMD_SCOPE = 'shibmd:Scope';
  public const SAML_SAMLA_ATTRIBUTE = 'samla:Attribute';
  public const SAML_SAMLA_ATTRIBUTEVALUE = 'samla:AttributeValue';

  public const SAMLNF_URI = 'urn:oasis:names:tc:SAML:2.0:attrname-format:uri';
  public const SAMLXML_LANG = 'xml:lang';
  public const SAMLXMLNS_URI = 'http://www.w3.org/2000/xmlns/';
  public const SAMLXMLNS_DS = 'xmlns:ds';
  public const SAMLXMLNS_DS_URL = 'http://www.w3.org/2000/09/xmldsig#';
  public const SAMLXMLNS_IDPDISC = 'xmlns:idpdisc';
  public const SAMLXMLNS_IDPDISC_URL = 'urn:oasis:names:tc:SAML:profiles:SSO:idp-discovery-protocol';
  public const SAMLXMLNS_MDUI = 'xmlns:mdui';
  public const SAMLXMLNS_MDUI_URL = 'urn:oasis:names:tc:SAML:metadata:ui';

  public const ORDER_ATTRIBUTEREQUESTINGSERVICE = array (self::SAML_MD_SERVICENAME => 1,
    self::SAML_MD_SERVICEDESCRIPTION => 2,
    self::SAML_MD_REQUESTEDATTRIBUTE => 3);
  public const ORDER_CONTACTPERSON = array (self::SAML_MD_COMPANY => 1,
    self::SAML_MD_GIVENNAME => 2,
    self::SAML_MD_SURNAME => 3,
    self::SAML_MD_EMAILADDRESS => 4,
    self::SAML_MD_TELEPHONENUMBER => 5,
    self::SAML_MD_EXTENSIONS => 6);
  public const ORDER_ORGANIZATION = array (self::SAML_MD_EXTENSIONS => 1,
    self::SAML_MD_ORGANIZATIONNAME => 2,
    self::SAML_MD_ORGANIZATIONDISPLAYNAME => 3,
    self::SAML_MD_ORGANIZATIONURL => 4);
}
