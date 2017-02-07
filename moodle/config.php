<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'sqlsrv';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '192.168.1.125';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'sa';
$CFG->dbpass    = 'Lux42821850';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 1433,
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://192.168.1.128/moodle';
$CFG->dataroot  = 'C:\\Apache24\\moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
