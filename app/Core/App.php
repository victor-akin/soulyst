<?php

/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 06/09/2017
 * Time: 06:19 PM
 */

namespace App\Core;

use App\Controllers\ErrorController;

class App
{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params;

    public static $hasError = false;

    public function __construct()
    {
        $url = $this->__parseUrl();
        #!- handling controller
        $url = $this->__handleController($url);
        $this->controller = new $this->controller;
        #!- handling method
        $url = $this->__handleMethod($url);
        #!- handle params
        $this->params = isset($url) ? $url : [];
        #!- Calling the controller with appropriate method and passing params if needed
        call_user_func_array([$this->controller,$this->method], $this->params);
    }// end public function __construct()

    private function __parseUrl()
    {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }

    private function __handleError($type)
    {
        App::$hasError = true;
        require_once __DIR__ . '/../Controllers/ErrorController.php';
        $err = new ErrorController();
        $err->index($type);
        die();
    }

    private function __hasMethod()
    {
        return method_exists($this->controller, $this->method);
    }

    private function __handleController($url)
    {
        if ( isset($url[0]) ) {
            $this->__checkForController($url[0]);
            unset($url[0]);
        }
        return array_values($url);
    }



    private function __handleMethod($url)
    {
        $this->method = isset($url[0]) ? $url[0] : $this->method;
        if ( !$this->__hasMethod() ) // if controller does not have this method
            $this->__handleError(404);
        unset($url[0]);
        return array_values($url);
    }

    private function __checkForController($controller)
    {
        $controller_file = __DIR__ . '/../Controllers/' . ucwords($controller) . 'Controller.php';
        if (file_exists($controller_file))
            $this->controller = 'app\controllers\\'.ucwords($controller) . 'Controller';
        else
            $this->__handleError(404);
    }

}