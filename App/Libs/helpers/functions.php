<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 07/09/2017
 * Time: 02:30 PM
 */

/**
 * Redirects to supplied uri
 * @param $uri
 */
function redirect_to ($uri)
{
    echo '<script>document.title = "Redirecting..."; window.location="' . PROJECT_PATH . $uri . '"</script>';
    die();
}

function hashpass($pass, $algorithm = PASSWORD_BCRYPT)
{
    return password_hash($pass,$algorithm);
}

function is_loggedin()
{
    if(empty(\App\Libs\Classes\Users::loggedin()) || \App\Libs\Classes\Users::loggedin() === '') return false;
    return $_SESSION[USER_SALT];
}


/**
 * Generates random mixed case string
 * @param $length
 * @return string
 */
function _generate_id($length = 8)
{
    $chars = array_merge(range('A', 'Z'), range(0, 9), range('a', 'z'));
    shuffle($chars);
    if ($length > count($chars)) $length = count($chars);
    return implode(array_slice($chars, 0, $length));
}

/**
 * Generates a unique slug for a specified table; assumes the `slug` column exists
 * @credit Banjo Mofesola Paul
 * @param  string $string The string to slug
 * @param  string [$check_table = ''] The database table to check in
 * @return string
 */
function _generate_slug($string, $check_table = '', $check_col = 'slug')
{
    #!- regex
    $s = array('/[^A-Za-z0-9\s]/', '/\s+/');
    $r = array('-', '-');

    #!- initial slug
    $pregged = preg_replace($s, $r, strtolower($string));
    $pregged = preg_replace('/\-+/', '-', $pregged);
    $slug = $s = substr($pregged, 0, 30);

    #!- clean up
    if ($check_table != '') {
        $db = new \App\Libs\Classes\Helpers\Database();
        while ($db->exists($slug, $check_col, $check_table)) $slug = $s . '-' . rand(0, 999);
    }

    return $slug;
}