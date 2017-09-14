<?php

/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 06/09/2017
 * Time: 06:19 PM
 */


namespace App\Core;


class Views
{


    public function __construct() {}

    public function render($view='', $header='_includes/header', $footer='_includes/footer')
    {
        require_once 'App/views/'.$header.'.php';
        require_once 'App/views/'.$view.'.php';
        require_once 'App/views/'.$footer.'.php';
    }

}