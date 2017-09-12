<?php


#!- read config.ini
$ini = parse_ini_file(__DIR__ . '/../../../config.ini');

# path config
define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR);
define('PROJECT_PATH', $ini['project_path']);
define('APP_ROOT', __DIR__.'/../../../');
define('STYLES', PROJECT_PATH.'App/public/css/');
define('VIEWS', PROJECT_PATH.'App/views/');


