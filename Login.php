<?php

    include 'dbconnect.php';
    $connection = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $dbname);

    if (!$connection){
        die('could not connect:'.mysqli_connect_error());
    }


//    ( $_POST["uname"] == "admin")
//    ( $_POST["pass"] == "admin")
//take this all into a different file
//    header('Location: second.php');


?>