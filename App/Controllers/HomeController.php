<?php

/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 06/09/2017
 * Time: 07:27 PM
 */

namespace App\Controllers;


use App\Core\Controller;
use App\Models\HomeModel;
use App\Libs\Classes\Users;
use App\Libs\Classes\Validator;


class HomeController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $homeModel = new homeModel();
        $this->view->users = $homeModel->getAllUsers();
        $this->view->render('home/index');
    }

    public function register()
    {
        $this->view->msg = 'Sign Up';

        if(isset($_POST['register'])) {
            unset($_POST['register']);
            $data = $_POST;
            $errors = Validator::validateForms($data);
            if(empty($errors)) {
                $users = new Users;
                if($users->register($data)) {
                    $this->view->msg = "Account Created Successfully";
                } else $this->view->msg = "Account could not be created";

            } else $this->view->msg = 'Errors in fields';
        }
        $this->view->render('home/register');
    }



}