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

class LoginController extends \Core\Controller
{

    public function LoginQuery()
    {
        if(!empty($_POST))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $pass_hash = md5($password);
            $db_query = mysqli_query(DB::connect(), "SELECT * FROM users");

            while($row = mysqli_fetch_assoc($db_query))
            {
                if($row['email'] == $email && $row['password'] == $pass_hash)
                {
                    $_SESSION['email'] = $email;
                    header(View::renderTemplate('home.php'));
                }
                else
                {
                    header(View::renderTemplate('Auth/login.php'));
                }
            }
        }
    }

}