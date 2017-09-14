<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 12/09/2017
 * Time: 03:25 PM
 */

namespace App\Controllers;


use App\Core\Controller;
use App\Libs\Classes\Users;

class DashboardController extends Controller
{
    public $logged_in = false;

    public function __construct()
    {
        parent::__construct();
        $this->logged_in = is_loggedin();
    }

    public function index()
    {
        if($this->logged_in) {
            $this->view->render('dashboard/index');

        }
        else{ redirect_to('home');}
    }

}