<?php

	$messages = $_POST['message'];
	include 'dbconnect.php';
	$connection = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $dbname);
	if (isset($_POST['searchTerm'])){
		setcookie("searchTermm", $_POST['searchTerm'], time()+30);
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

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome To GOAT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<style>
    li a:hover {
        background-color: #111;
    }

    h1 {
        color: #1e90ff;
        padding: 50px;
    }
    h3{
        padding-bottom: 32px;
    }

    body {
        font-family: 'Oswald', sans-serif;
    }

</style>
</head>


<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li><a href="#">BREAKFASTIM</a></li>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Messages</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Goat Pics</a></li>
        </ul>
    </div>
</nav>

<div class="container-fluid">

    <div class="row">
        <h1 align="center" > Welcome <?php echo $_COOKIE["user"]; ?>!</h1>
        <div class="col-md-6 chatBox">
                <div class="chatHeader">
                    <h3>Messages</h3>
                   <hr>
                </div>
                <div class="chatMessages">
					<p><?php echo $messages; ?></p>
                </div>

                <hr width="96%">
                <div class="chatBottom">
                    <form action="" method="POST" id="chatForm">
                        <input type="hidden" id="name"/>
                        <input type="text" name="message" id="text" value="" placeholder="Type your message here"/>
                        <button type="submit" name="submit" class="btn btn-primary" value="Post"> Send </button>
                    </form>
               </div>
            </div>
            <div class="col-md-6 userBox">
                <div class="chatUser">
                    <h3>Users</h3>
                    <hr>
                </div>
                <p><?php echo $foundName; ?></p>
                <div class="userList">
				<form method="POST" action="addfriend.php">
					<button type="submit" name="add" id="addd" value="Post" class="btn btn-primary" style="display: block"> Add </button>
                </form>
				</div>
                <hr width="96%">
                <div class="searchUser">
                    <form method="POST" id="userSearch">
                        <input type="hidden" id="name"/>
                        <input type="text" name="searchTerm" id="text" value="" placeholder="Search for friends"/>
                        <button type="submit" name="submit" value="Post" class="btn btn-primary" id="search"> Search </button>
                    </form>
                </div>

            </div>

    </div>


</div>
<!-- js code to display add button after search button is clicked..
<script type="text/javascript">
    var button = document.getElementById('search')
    button.addEventListener('click',showadd,false);
    function showadd() {

       // document.getElementById('addd').style.display = 'block';
       //  if(found != ""){
       //  addd.style.display = "block";

   // }
</script>

-->
</body>

</html>