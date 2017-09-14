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
            $query = $this->db->query("SELECT password,salt FROM {$this->table} WHERE email=:email", ['email'=>$data['email']]);
            $result = $query->fetch();
            if(password_verify($data['password'],$result->password)) {
                Session::set(USER_SALT, $result->salt);
                redirect_to('dashboard');
            }
        }
        return false;

    }

    /*
     *
     */
    public function logout()
    {
        session_destroy();
        redirect_to('home');
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
     * get user base on salt provided
     */
    public function getUser($salt)
    {
        $user = $this->db->query("SELECT * FROM {$this->table} WHERE salt=:salt", ['salt'=>"$salt"]);
        return $user->fetch();
    }

    /*
     *
     */
    public function register($data)
    {
        $slug_string = $data['username'].' '._generate_id();
        $data['slug'] = _generate_slug($slug_string,$this->table);
        $data['password'] = hashpass($data['password']);
        $data['salt'] = hashpass($data['email']);

        if(!$this->__userExits($data['email'])) {
            $insert = $this->db->insert($this->table, $data);
            if($insert) return true;
            return false; //if record could not be created
        }else return false;
    }

    public static function loggedin()
    {
        return Session::get();
    }

    /*
     *
     */
    private function __userExits($email)
    {
        $email = $this->db->query("SELECT email FROM {$this->table} WHERE email=:email", ['email'=>$email] );
        if($email->rowCount() > 0) return true; //user exists
        return false;
    }

}