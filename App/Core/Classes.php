<?php

/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 06/09/2017
 * Time: 07:48 PM
 */

namespace App\Core;

use App\Libs\Classes\Helpers\Database;


class Classes
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }

}