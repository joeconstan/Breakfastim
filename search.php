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
	<body>
		<table>
			<tr>
			<td><?php echo $foundName; ?></td>
			
			</tr>
		</table>
	</body>

?>