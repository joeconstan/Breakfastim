<?php

    include 'dbconnect.php';
    $connection = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $dbname);
    if (!$connection){
        die('could not connect:'.mysqli_connect_error());
    }
	
	
	$currentuser = $_COOKIE["user"];
	$query1 = "select user_id from users where username=?";
    $stmt1 = mysqli_stmt_init($connection);
    mysqli_stmt_prepare($stmt1, $query1);
    mysqli_stmt_bind_param($stmt1, 's', $currentuser);
    mysqli_stmt_execute($stmt1);

	
	mysqli_stmt_bind_result($stmt1, $one);
   mysqli_stmt_store_result($stmt1);   
    mysqli_stmt_fetch($stmt1);
    $count1 = mysqli_stmt_num_rows($stmt1);
    mysqli_stmt_close($stmt1);
	
	
	
	
	$stmt2 = mysqli_stmt_init($connection);
	$secondUser = $_COOKIE['searchTermm'];
	$query2 = "select user_id from users where username=?";
    mysqli_stmt_prepare($stmt2, $query2);
    mysqli_stmt_bind_param($stmt2, 's', $secondUser);
    mysqli_stmt_execute($stmt2);
    mysqli_stmt_bind_result($stmt2, $two);

    mysqli_stmt_store_result($stmt2);
    mysqli_stmt_fetch($stmt2);
    $count2 = mysqli_stmt_num_rows($stmt2);
    mysqli_stmt_close($stmt2);
	

	
    
    $query3 = "insert into friends(id_1, id_2) values(?,?)";
    $stmt3 = mysqli_stmt_init($connection);
    mysqli_stmt_prepare($stmt3, $query3);
    mysqli_stmt_bind_param($stmt3, 'dd', $one, $two);
    mysqli_stmt_execute($stmt3);
    

    mysqli_stmt_close($stmt3);
    mysqli_close($connection);
	
	
	header("location: http://www.breakfastim.com/chat.php", true);



?>