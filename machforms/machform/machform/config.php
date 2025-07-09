<?php
/*
MachForm Configuration File
*/

/** MySQL settings **/
define('MF_DB_NAME', 'Inetforms'); //The name of your database. Note that this database must exist before running installer.php
define('MF_DB_USER', 'phpmyadmin'); //Your database username
define('MF_DB_PASSWORD', 'IwpSoftware1!'); //Your database users password
define('MF_DB_HOST', 'localhost'); //The hostname for your database



/** YOU CAN LEAVE THE SETTINGS BELOW THIS LINE UNCHANGED **/

/** Optional Settings **/
/** All settings below this line are optionals, you can leave them as they are now **/
define('MF_TABLE_PREFIX', 'ap_'); //The prefix for all machform tables

//by default (false), deleting field from the form won't actually remove all the data within the table, so that we can manually recover it
//by setting this value to 'true' the data will be removed completely, unrecoverable
define('MF_CONF_TRUE_DELETE',false);

//by default (true), duplicate form entries will be discarded to prevent spam
//by setting this value to 'false', server-side validation for duplicate submissions will be disabled
define('MF_DISCARD_DUPLICATE_ENTRY',true);

/** reCAPTCHA settings **/
/** Below is a global key. If you prefer to use your own reCAPTCHA key, get an API key from https://www.google.com/recaptcha/admin/create **/
define('RECAPTCHA_PUBLIC_KEY','6LdDtMcSAAAAAL0O2fhNlYObanlKlbQzSfYsdHRY');
define('RECAPTCHA_PRIVATE_KEY','6LdDtMcSAAAAACXVxR-niVXMe-5KnVQQkvaZP_dw');
define('RECAPTCHA_THEME','red'); //available themes: red, white, blackglass, clean
define('RECAPTCHA_LANGUAGE','en'); //available languages: en, nl, fr, de, pt, ru, es, tr

/** LDAP options **/
define('MF_OPENLDAP_LOGIN_ATTRIBUTE','uid'); //if your LDAP is using different auth attribute than uid (ex: cn), change this setting
define('MF_LDAP_MAIL_ATTRIBUTE','mail'); //The attribute that contain user's email address
define('MF_DISABLE_LDAPTLS_REQCERT',false); //if set to 'true', certificate will be ignored during connection
define('MF_LDAP_OPT_REFERRALS',0); //most likely you don't need to change this one. if you aren't sure, leave it as it is

?>