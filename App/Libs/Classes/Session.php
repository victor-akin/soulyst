<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 13/09/2017
 * Time: 06:11 AM
 */

namespace App\Libs\Classes;


class Session
{
    public static function init()
    {
        session_start();
    }

    public static function set($key,$value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get()
    {
        return isset($_SESSION[USER_SALT]) ? $_SESSION[USER_SALT] : false;
    }

    /**
     *
     */
    public static  function destroy()
    {
        session_destroy();
    }

}