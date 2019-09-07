<?php

namespace App\Controllers;

use Core\View;
class LogoutController extends \Core\Controller
{
    public function logout(){

        unset($_SESSION['email']);
        header(View::renderTemplate("Auth/login.php"));
    }
}