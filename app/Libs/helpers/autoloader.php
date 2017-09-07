<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 07/09/2017
 * Time: 02:30 PM
 */

//echo __DIR__;

spl_autoload_register(function($className) {
    $className = preg_replace('/\\\/', DIRECTORY_SEPARATOR, $className);
    $project_dir = str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']);
    require_once $project_dir . $className . '.php';
});

//spl_autoload_extensions(".php");
//spl_autoload_register();