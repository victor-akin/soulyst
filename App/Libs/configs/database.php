<?php

$ini = parse_ini_file(__DIR__ . '/../../../config.ini');

# database config
define('DB_HOST', $ini['db_host']);
define('DB_USERNAME', $ini['db_user']);
define('DB_PASSWORD', $ini['db_pass']);
define('DB_NAME', $ini['db_name']);
