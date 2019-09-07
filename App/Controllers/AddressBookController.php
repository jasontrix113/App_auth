<?php

namespace App\Controllers;

use \Core\View;
use \Core\DB;

class AddressBookController extends \Core\Controller
{
    public function insertAddress()
    {
        if(!empty($_POST))
        {
            $full_add = $_POST['fulladdress'];
            $province = $_POST['province'];
            $city = $_POST['city'];
            $brgy = $_POST['barangay'];
            $a_type = $_POST['a_type'];

            $db_query = mysqli_query(DB::connect(), "INSERT INTO address_book(full_add, province, city, barangay, address_type) VALUES('$full_add', '$province', '$city', '$brgy', '$a_type')");

            try{
                $db_query2 = mysqli_query(DB::connect(), "SELECT * FROM address_book");
                while ($row = mysqli_fetch_assoc($db_query2)) {
                    $results[] = $row;
                }
                View::renderTemplate('Home/view_address.php', array("results"=> $results));
            }
            catch(Exception $e)
            {

            }
        }
    }
    public function getAddress()
    {
        if(!empty($_POST)) {
            $id = $_POST['id'];
            $full_add = $_POST['fulladdress'];
            $province = $_POST['province'];
            $city = $_POST['city'];
            $brgy = $_POST['barangay'];
            $a_type = $_POST['a_type'];


            $results = array();
            array_push($results, $id, $full_add, $province, $city, $brgy, $a_type);

            View::renderTemplate("Home/edit_address.php", array('results'=>$results));
        }
    }
    public function editAddress()
    {
        if(!empty($_POST))
        {
            $id = $_POST['id'];
            $full_add = $_POST['fulladdress'];
            $province = $_POST['province'];
            $city = $_POST['city'];
            $brgy = $_POST['barangay'];
            $a_type = $_POST['a_type'];
            echo $id;
            $db_query = mysqli_query(DB::connect(), "UPDATE address_book SET full_add = '$full_add', province = '$province', city = '$city', barangay = '$brgy', address_type = '$a_type' WHERE id= '$id'");

            $db_query2 = mysqli_query(DB::connect(), 'SELECT * FROM address_book');
            while ($row = mysqli_fetch_assoc($db_query2)) {
                $results[] = $row;
            }
            View::renderTemplate('Home/view_address.php', array('results' => $results));
        }
    }
    public function ViewAll()
    {
        $db_query = mysqli_query(DB::connect(), 'SELECT * FROM address_book');
        while ($row = mysqli_fetch_assoc($db_query)) {
            $results[] = $row;
        }
        View::renderTemplate('Home/view_address.php', array('results' => $results));

    }
}