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