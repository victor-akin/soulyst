<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 12/09/2017
 * Time: 03:25 PM
 */

namespace App\Controllers;


use App\Core\Controller;

class DashboardController extends Controller
{

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $this->view->render('user/index');
    }

}