<?php
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
    <title>Welcome To Chat</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet" />
</head>


<body>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 chatBox">
                <div class="chatHeader">
                    <h3>Welcome to Chat</h3>
                    <hr>
                </div>

                <div class="chatMessages">
                </div>

                <hr width="96%">
                <div class="chatBottom">
                    <form action="" method="POST" id="chatForm">
                        <input type="hidden" id="name"/>
                        <input type="text" name="text" id="text" value="" placeholder="type your message here"/>
                        <button type="submit" name="submit" value="Post"> Send </button>
                    </form>
               </div>
            </div>

            <div class="col-md-4 marg userBox">
                <div class="chatUser">
                    <h3>Users</h3>
                    <p><?php echo $foundName; ?></p>

                </div>
                <hr width="94%">

                <div class="userList">
                </div>

                <hr width="94%">
                <div class="searchUser">
                    <form method="POST" id="userSearch">
                        <input type="hidden" id="name"/>
                        <input type="text" name="searchTerm" id="text" value="" placeholder="search for friends"/>
                        <button type="submit" name="submit" value="Post"> Search </button>
                    </form>
                </div>

            </div>
    </div>
</div>









</body>



</html>
