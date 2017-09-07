<?php

/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 06/09/2017
 * Time: 06:19 PM
 */


namespace App\Core;


class Controller
{
    public $view;

    public function __construct()
    {
        $this->view =new Views();
    }

}