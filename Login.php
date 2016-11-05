<?php

    include 'dbconnect.php';
    $connection = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $dbname);

    if (!$connection){
        die('could not connect:'.mysqli_connect_error());
    }


    $un = ( $_POST["uname"]);
    $pd = ( $_POST["pass"]);

    $query = "SELECT password FROM users WHERE username=?";
    $stmt = mysqli_stmt_init($connection);
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, 's', $un);
        //die('could not connect:'.mysqli_stmt_error($stmt));
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $actualPass);


    $pswd = $_POST['pass'];
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_fetch($stmt);
    $count = mysqli_stmt_num_rows($stmt);
    mysqli_stmt_close($stmt);

    if ($pswd == $actualPass && $count > 0){
        header("location: http://www.breakfastim.com/chat.php", true);
        exit;
    }else{
        echo 'Invalid Password';
    }

    mysqli_close($connection);

?>