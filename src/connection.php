<?php 
 function connect()
 {
    static $connection = null;
    if (null === $connection)
    {
        $dataBase = "mydb";
        $host = "localhost";
        $login = "root";
        $password = "11091982";
        $connection = mysqli_connect($host, $login, $password, $dataBase) or die('connection Error');

    }

   return $connection;
 }