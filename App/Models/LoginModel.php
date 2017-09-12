<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 07/09/2017
 * Time: 04:01 PM
 */

namespace App\Models;

use App\Core\Models;
use App\Libs\Classes\Users;

class LoginModel extends Models
{
    public $table;

    public function __construct()
    {
        parent::__construct();
    }

    public function userLogin($data)
    {
        $users = new Users;
        $login = $users->login($data);
        if($login) return true;
        return false;
    }




}