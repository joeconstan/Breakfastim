<?php

    include 'dbconnect.php';
    $connection = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $dbname);

    if (!$connection){
        die('could not connect:'.mysqli_connect_error());
    }


    $un = ( $_POST["uname"]);
    $pd = ( $_POST["pass"]);
//take this all into a different file
//    header('Location: second.php');

    $query = "SELECT password FROM users WHERE username=?";
    $stmt = mysqli_stmt_init($connection);
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, 's', $un);
        //die('could not connect:'.mysqli_stmt_error($stmt));
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $actualPass);
    $result = mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    $pswd = $_POST['pass'];

    $count = mysqli_num_rows($result);
    if ($count<1) {
        echo 'Invalid Password';
    }


    if ($pswd == $actualPass){
        header("location: http://www.breakfastim.com/second.php", true);
        exit;
    }else{
        echo 'Invalid Password';
    }

    mysqli_close($connection);

?>