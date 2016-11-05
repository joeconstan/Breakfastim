<?php

?>

<html>


	<br />
	<head>
		<title>BreakfastIM</title>
		
		<style type = "text/css">
			body {
				font-family: Arial, Helvetica, sans-serif;
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

	<body bgcolor = "#FFFFFF">
	
		  <div align = "center">
			<div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">

			<form method="POST" action="Login.php" id="form1">
				<input type="text" name="uname"> Username </input><br />
				<input type="password" name="pass"> Password</input><br />
				<button type="submit" class = "login_page" value="Submit">Login</button><br />
                <button type="submit" class = "create_profile" value="Submit">Register</button><br />
			</form>
					
            </div>
			</div>
			
		</div>

	</body>


</html>
