<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 14/09/2017
 * Time: 01:36 PM
 */

namespace App\Models;

use App\Libs\Classes\Users;
use App\Core\Models;

class UploadModel extends Models
{
    public $userTable;
    public $lystsTable;


    public function __construct()
    {
        parent::__construct();
        $this->userTable = 'usersz';
        $this->lystsTable = 'lysts';
    }

}