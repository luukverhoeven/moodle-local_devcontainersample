<?php
unset($CFG);
global $CFG;
$CFG = new stdClass();
$CFG->dbtype = getenv('MOODLE_DBTYPE');
$CFG->dblibrary = 'native';
$CFG->dbhost = getenv('MOODLE_DBHOST');
$CFG->dbname = getenv('MOODLE_DBNAME');
$CFG->dbuser = getenv('MOODLE_DBUSER');
$CFG->dbpass = getenv('MOODLE_DBPASSWORD');
$CFG->prefix = 'mdl_';
$CFG->dboptions = [
    'dbpersist' => 0,
    'dbport' => getenv('MOODLE_DBPORT'),
    'dbsocket' => '',
];

// echo '<pre>';print_r($_SERVER);echo '</pre>';die(__LINE__.' '.__FILE__);

$CFG->reverseproxy = true;
$CFG->sslproxy  = 1;
$CFG->loginsloginhttps = true;

$CFG->wwwroot = 'https://'.$_SERVER['HTTP_X_FORWARDED_HOST'];
$CFG->dirroot = '/var/www/html';
$CFG->dataroot = '/var/www/moodledata';
$CFG->unicodedb = true;
$CFG->phpunit_prefix = 'test_';
$CFG->phpunit_dataroot = '/var/www/phpunitdata';

// Admin settings
$CFG->lang = 'en';
$CFG->admin = 'admin';
$CFG->noreplyaddress = 'noreply@example.com';
$CFG->smtphosts = getenv('MOODLE_SMTPHOSTS');

// NOT FOR PRODUCTION SERVERS!
@error_reporting(E_ALL | E_STRICT);
@ini_set('display_errors', '1');
$CFG->debug = (E_ALL | E_STRICT);
$CFG->debugdisplay = 1;

require_once("$CFG->dirroot/lib/setup.php");
