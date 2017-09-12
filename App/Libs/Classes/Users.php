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

    /*
     * @param $data is an associative array
     */
    public function login($data)
    {
        $query = $this->db->query("SELECT email FROM {$this->table} WHERE email=:email", ['email'=>$data['email'] ]);
        if($query->rowCount() > 0) {
            //password verification
            $query = $this->db->query("SELECT password FROM {$this->table} WHERE email=:email", ['email'=>$data['email']]);
            $password = $query->fetch();
            if($data['password'] === $password->password) redirect_to('dashboard');
        }
        return false;

    }

    /*
     *
     */
    public function logout()
    {

    }

    /*
     *
     */
    public function getAllUsers()
    {
        $users = $this->db->query("SELECT * FROM {$this->table}");
        return $users->fetchAll();
    }

    /*
     *
     */
    public function register()
    {

    }

    /*
     *
     */
    private function __userExits()
    {

    }

}