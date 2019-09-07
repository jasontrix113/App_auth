<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 4/12/2019
 * Time: 10:07 PM
 */

namespace App\Controllers;

use \Core\View;
use \Core\DB;
use \App;

class RegisterController extends \Core\Controller
{

    public function RegisterQuery()
    {
        if(!empty($_POST))
        {

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $c_email = $_POST['confirm_email'];
            $password = $_POST['password'];
            $c_pass = $_POST['confirm_password'];
            $pass_hash = md5($password);

            /*echo "success";*/
            $db_query = mysqli_query(DB::connect(),"INSERT INTO users (firstname,lastname, email, password) VALUES('$firstname', '$lastname', '$email', '$pass_hash')");

            if($email == $c_email and $password == $c_pass)
            {
                header(View::renderTemplate('Auth/login.php'));
            }else
            {
                header(View::renderTemplate('Auth/register.php'));
            }


        }
    }

}