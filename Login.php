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

$query = "SELECT password FROM users WHERE username = 'admin'";
$var = 1;
    $stmt = mysqli_prepare($connection, $query);
    if(!mysqli_stmt_bind_param('i', $var))
        die('could not connect:'.mysqli_stmt_error($stmt));
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $actualPass);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);




    $pswd = $_POST['pass'];

    if ($pswd == $actualPass){
        header("location: http://www.breakfastim.com/second.php", true);
        exit;
    }else{
        echo 'Invalid Password';
    }

    mysqli_close($connection);

?>