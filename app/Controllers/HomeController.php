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

}