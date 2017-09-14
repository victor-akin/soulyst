<?php
/**
 * Created by PhpStorm.
 * User: GBADEBO
 * Date: 12/09/2017
 * Time: 03:25 PM
 */

namespace App\Controllers;


use App\Core\Controller;
use App\Models\UploadModel;
use App\Libs\Classes\Users;
use App\Libs\Classes\Validator;

class DashboardController extends Controller
{
    public $logged_in = false;

    public function __construct()
    {
        parent::__construct();
        $this->logged_in = is_loggedin();
    }

    public function index()
    {
        if($this->logged_in) {
            $user = new Users;
            $this->view->user = $user->getUser($this->logged_in);
            $this->view->render('dashboard/index');
        }
        else{ redirect_to('home');}
    }

    public function upload()
    {
        if(isset($_POST['upload'])) {
            $files = $_FILES;
            $errors = Validator::validateUpload($files);
            if(isset($errors['Valid File'])) {
                //load uploadmodel
                $upload = new UploadModel;
            } else {
                $this->view->msg = isset($errors) ? $errors['Invalid File'] : $errors['File Size'];
            }
        }

        $this->view->render('dashboard/upload');
    }


}