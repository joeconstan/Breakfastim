

<?php

?>
<html>

	<head>
		<title>Login</title>
		
		<style type = "text/css">
			body {
				font-family: Georgia, serif;
				font-size: 16px;
			}
			
			label {
				font-weight: bold;
				width: 100px;
				font-size: 14px;
			}
			
			.box {
				border: #666666 solid 1px;
			}
		</style>
	</head>

<body>

<form method="POST" action="login.php"id="form1">
    <input type="text" name="uname"> Username</input>
	<input type="password" name="pass"> Password</input>
    <button type="submit" form="form1" value="Submit">Submit</button>
</form>




</body>


</html>