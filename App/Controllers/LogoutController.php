<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 12/09/2017
 * Time: 04:02 PM
 */

namespace App\Controllers;


use App\Core\Controller;
use App\Libs\Classes\Users;
use App\Models\LogoutModel;

class LogoutController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     *
     */
    public function index()
    {
        //load model
        $user = new LogoutModel();
        $user->logout();
    }

}