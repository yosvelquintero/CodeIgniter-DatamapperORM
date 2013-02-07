<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

if (preg_match("/localhost/", $_SERVER['SERVER_NAME']))
{
  $active_group = 'default';
}
elseif (preg_match("/mzconnection/", $_SERVER['SERVER_NAME'])) 
{
  $active_group = 'mzconnection';
}

$active_record = TRUE;

$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'root';
$db['default']['password'] = 'control';
$db['default']['database'] = 'ci';
$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;


$db['mzconnection']['hostname'] = 'localhost';
$db['mzconnection']['username'] = 'mzcon_inuser';
$db['mzconnection']['password'] = '5qas4652924b1bc172cc79df27b56075e15';
$db['mzconnection']['database'] = 'mzconnec_informes';
$db['mzconnection']['dbdriver'] = 'mysql';
$db['mzconnection']['dbprefix'] = '';
$db['mzconnection']['pconnect'] = TRUE;
$db['mzconnection']['db_debug'] = TRUE;
$db['mzconnection']['cache_on'] = FALSE;
$db['mzconnection']['cachedir'] = '';
$db['mzconnection']['char_set'] = 'utf8';
$db['mzconnection']['dbcollat'] = 'utf8_general_ci';
$db['mzconnection']['swap_pre'] = '';
$db['mzconnection']['autoinit'] = TRUE;
$db['mzconnection']['stricton'] = FALSE;


/* End of file database.php */
/* Location: ./application/config/database.php */