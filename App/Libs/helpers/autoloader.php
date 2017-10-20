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
    require_once $className . '.php';
});

//spl_autoload_extensions(".php");
//spl_autoload_register();