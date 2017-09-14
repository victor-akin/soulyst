<?php

/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 06/09/2017
 * Time: 06:42 PM
 */

namespace App\Controllers;

use App\Core\Controller;

class ErrorController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    //-----------------------------                             >>
    //  Renders custom error view for a specified error type    >>
    //  @param null $type                                       >>
    //  @return mixed|void                                      >>
    //-----------------------------                             >>

    public function index($type = null, $status = "")
    {
        $this->notice = $status;
        switch ($type) {
            case 404:
                $this->view->render('_error/404');
                break;
            case 500:
                $this->view->render('_error/500');
                break;
            default:
                $this->view->render('_error/index');
        }
    }

}