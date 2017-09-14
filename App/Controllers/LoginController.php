<?php

/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 06/09/2017
 * Time: 10:25 PM
 */

namespace App\Controllers;

use App\Core\Controller;
use App\Libs\Classes\Users;
use App\Models\LoginModel;


class LoginController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }


    /*
     * login dashboard
     */
    public function index()
    {
        if(isset($_POST['login'])) {
            $usermodel = new LoginModel();
            $usermodel->userLogin($_POST) ;

        }
        $this->view->render('login/index');
    }


}