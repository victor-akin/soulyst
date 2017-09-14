<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 13/09/2017
 * Time: 07:08 AM
 */

namespace App\Libs\Classes;


class Validator
{
    /**
     * Checks for a valid email (e.g example@email.com)
     * @param $email
     * @return bool
     */
    public static function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /**
     * Password Validator ensures password is at least 4 characters long
     * @param $password
     * @param int $length
     * @return bool
     */
    public static function validatePassword($password, $length = 3)
    {
        return strlen($password) > $length;
    }

    public static function validateForms($formData, $ignore = []){
        $errors = [];
        foreach ($formData as $key => $data) {
            if (in_array($key,$ignore))
                continue;
            if(empty($data)) {
                $errors[$key] = "Field is required";
            }
        }
        return empty($errors) ? false : $errors;
    }

}