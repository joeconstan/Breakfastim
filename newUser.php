<?php
	include 'dbconnect.php';
	$connection = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $dbname);

    	if (!$connection){
        	die('could not connect:'.mysqli_connect_error());
    	}

	$newuname = $_POST['newuname'];
	$newpswd = $_POST['newpswd'];
	$query = "INSERT INTO users(username, password) VALUES(?, ?)";
    	$stmt = mysqli_stmt_init($connection);
    	mysqli_stmt_prepare($stmt, $query);
    	mysqli_stmt_bind_param($stmt, 'ss', $newuname, $newpswd);
    	mysqli_stmt_execute($stmt);
    	//mysqli_stmt_bind_result($stmt, $user, $pass);


    	
    	//mysqli_stmt_store_result($stmt);
    	//mysqli_stmt_fetch($stmt);
    	mysqli_stmt_close($stmt);


	header("location: http://www.breakfastim.com/index.php", true);

?>