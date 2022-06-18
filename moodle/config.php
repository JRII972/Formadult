<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '127.0.0.1';
$CFG->dbname    = 'u213337140_t50mK';
$CFG->dbuser    = 'u213337140_dQgmt';
$CFG->dbpass    = 'UeB8JbhpB9';
$CFG->prefix    = 'fkv5_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '0',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'http://e-box.formadult.net';
$CFG->dataroot  = '/home/u213337140/domains/formadult.net/public_html/moodle/.htzyfmcg79jo7l.data/';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
