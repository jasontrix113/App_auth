<?php

namespace Core;

class DB
{
    public static function connect()
    {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "auth";
        $msg = "Cannot connect";

        $db_con = mysqli_connect($host,$user,$pass, $db)or die($msg);

        return $db_con;
    }
}



