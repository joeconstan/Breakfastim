<?php

	$messages = $_POST['message'];
	include 'dbconnect.php';
	$connection = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $dbname);
	if (isset($_POST['searchTerm'])){
		$searchName = $_POST['searchTerm'];
		$query = "SELECT username FROM users WHERE username=?";
		$stmt = mysqli_stmt_init($connection);
		mysqli_stmt_prepare($stmt, $query);
		mysqli_stmt_bind_param($stmt, 's', $searchName);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $foundName);
	
		//$result = mysqli_stmt_fetch($stmt);
		mysqli_stmt_store_result($stmt);
		mysqli_stmt_fetch($stmt);
	}
	
?>

<html>
<head>
    <title>Welcome To GOAT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 chatBox">
                <div class="chatHeader">
                    <h3>Welcome to GOAT</h3>
                    <hr>
                </div>

                <div class="chatMessages">
					<p><?php echo $messages; ?></p>
                </div>

                <hr width="96%">
                <div class="chatBottom">
                    <form action="" method="POST" id="chatForm">
                        <input type="hidden" id="name"/>
                        <input type="text" name="message" id="text" value="" placeholder="type your message here"/>
                        <button type="submit" name="submit" class="btn btn-primary" value="Post"> Send </button>
                    </form>
               </div>
            </div>
            <!-- changed md-4 to md-6 -->
            <div class="col-md-4 marg userBox">
                <div class="chatUser">
                    <h3>Users</h3>
            

                </div>
                <hr width="94%">
                <p><?php echo $foundName; ?></p>
                <div class="userList">
				<form method="POST" action="addfriend.php">
					<button type="submit" name="add"  value="Post" class="btn btn-primary" style="display:block;"> Add </button>

                </form>
				</div>

                <hr width="94%">
                <div class="searchUser">
                    <form method="POST" id="userSearch">
                        <input type="hidden" id="name"/>
                        <input type="text" name="searchTerm" id="text" value="" placeholder="search for friends"/>
                        <button type="submit" name="submit" value="Post" class="btn btn-primary"> Search </button>

                    </form>
                </div>

            </div>
    </div>
</div>

</body>

</html>
