<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 07/09/2017
 * Time: 06:23 PM
 */

namespace App\Libs\Classes;


use App\Core\Classes;

class Users extends Classes
{
    private $table;
    private $name;
    private $email;

    public function __construct()
    {
        parent::__construct();
        $this->table = 'usersz';
    }

    public function login()
    {

    }

    public function logout()
    {

    }

    public function getAllUsers()
    {
        $users = $this->db->query("SELECT * FROM {$this->table}");
        return $users->fetchAll();
    }

    public function register()
    {

    }

    private function __userExits()
    {

    }

}