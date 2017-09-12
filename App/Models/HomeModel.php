<?php

/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 07/09/2017
 * Time: 01:21 PM
 */

namespace App\Models;

use App\Core\Models;
use App\Libs\Classes\Users;

class HomeModel extends Models
{
    private $table;
    private $users;

    public function __construct()
    {
        parent::__construct();
        $this->table = 'usersz';
        $this->users = new Users();
    }

    public function getAllUsers()
    {
        return $this->users->getAllUsers();
    }

}