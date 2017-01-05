<?php

    include 'dbconnect.php';
    $connection = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $dbname);
    if (!$connection){
        die('could not connect:'.mysqli_connect_error());
    }

	$currentuser = $_COOKIE['user'];
	$query = "select user_id from users where username=?";
    $stmt = mysqli_stmt_init($connection);
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, 's', $currentuser);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $one);


    mysqli_stmt_store_result($stmt);
    mysqli_stmt_fetch($stmt);
    $count = mysqli_stmt_num_rows($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($connection);
	
	
	$secondUser = $_POST['searchTerm'];
	$query = "select user_id from users where username=?";
    $stmt = mysqli_stmt_init($connection);
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, 's', $secondUser);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $two);


    mysqli_stmt_store_result($stmt);
    mysqli_stmt_fetch($stmt);
    $count = mysqli_stmt_num_rows($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($connection);
	
	

    
    $query = "insert into friends(id_1, id_2) values(?,?)";
    $stmt = mysqli_stmt_init($connection);
    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, 'ss', $one, $two);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $actualPass);


    $pswd = $_POST['pass'];
    mysqli_stmt_store_result($stmt);
    mysqli_stmt_fetch($stmt);
    $count = mysqli_stmt_num_rows($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($connection);



?>