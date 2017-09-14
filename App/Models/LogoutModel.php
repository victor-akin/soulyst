<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 12/09/2017
 * Time: 04:09 PM
 */

namespace App\Models;


use App\Libs\Classes\Users;
use App\Core\Models;

class LogoutModel extends Models
{
    public function __construct()
    {
        parent::__construct();
    }

    public function logout()
    {
        $user = new Users;
        $user->logout();
    }

}