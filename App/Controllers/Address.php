<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 4/22/2019
 * Time: 3:34 PM
 */

namespace App\Controllers;
use App;
use Core\View;

class Address
{
    public function address()
    {
        View::renderTemplate('Home/address.php');
    }
}
