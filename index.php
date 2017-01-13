<?php

?>

<html>


	<br />
	<head>

		<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed" rel="stylesheet">


		<title>BreakfastIM</title>
		
		<style type = "text/css">


			body {
				font-family: 'Fira Sans Condensed', sans-serif;
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


	      <h1>GOAT</h1>

		  <div align = "center">
			<div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">

			<form method="POST" action="Login.php" id="form1">
				<input type="text" name="uname" placeholder="Large Potatoes"> Username </input><br />
				<input type="password" name="pass" placeholder="password"> Password</input><br />
				<button type="submit" class = "login_page" value="Submit">Login</button><br />
			</form>

            <form method="POST" action="register.php" id="form2">
                <button type="submit" class = "create_profile" value="Submit">Register</button><br />
            </form>
            </div>
			</div>
		</div>

<!--
		  <form class="form-horizontal">
			  <div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					  <input type="email" class="form-control" id="email" placeholder="Enter email">
				  </div>
			  </div>
			  <div class="form-group">
				  <label class="control-label col-sm-2" for="pwd">Password:</label>
				  <div class="col-sm-10">
					  <input type="password" class="form-control" id="pwd" placeholder="Enter password">
				  </div>
			  </div>
			  <div class="form-group">
				  <div class="col-sm-offset-2 col-sm-10">
					  <div class="checkbox">
						  <label><input type="checkbox"> Remember me</label>
					  </div>
				  </div>
			  </div>
			  <div class="form-group">
				  <div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-default">Submit</button>
				  </div>
			  </div>
		  </form>
		  <!--
		  <form class="form-inline">
			  <label class="sr-only" for="inlineFormInput">Name</label>
			  <input type="text" class="fo
			 rm-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Jane Doe">

			  <label class="sr-only" for="inlineFormInputGroup">Username</label>
			  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
				  <div class="input-group-addon">@</div>
				  <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
			  </div>

			  <div class="form-check mb-2 mr-sm-2 mb-sm-0">
				  <label class="form-check-label">
					  <input class="form-check-input" type="checkbox"> Remember me
				  </label>
			  </div>

			  <button type="submit" class="btn btn-primary">Submit</button>
		  </form>
-->
	</body>
</html>
