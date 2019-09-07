<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 4/12/2019
 * Time: 10:07 PM
 */

namespace App\Controllers;

use \Core\View;
use PDO;


class AuthController extends \Core\Controller
{

    public function Login()
    {
        View::renderTemplate('Auth/login.php');
    }
    public function LoginQuery()
    {
        header(View::renderTemplate('Auth/login.php'));
    }
    public function RegisterQuery()
    {
        $firstname = $this->post('firstname');
        $lastname = $this->post('lastname');
        $email = $this->post('email');
        $password = $this->post('password');
        $pass_hash = md5($password);
        $db = static::getDB();
        $register = $db->query("INSERT INTO users (firstname,lastname, email, password) VALUES('$firstname', '$lastname', '$email', '$pass_hash')");
        return $register->fetchAll(PDO::I);
    }
    public function Register()
    {
        View::renderTemplate('Auth/register.php');
    }
}