<?php

?>

<html>


	<br />
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed" rel="stylesheet">


		<title>BreakfastIM</title>

		<style type = "text/css">

            .button {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 16px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                cursor: pointer;
            }

            .button2 {
                background-color: white;
                color: black;
                border: 2px solid #008CBA;
            }

            .button2:hover {
                background-color: #008CBA;
                color: white;
            }

            .button5 {
                background-color: white;
                color: black;
                border: 2px solid #555555;
            }

            .button5:hover {
                background-color: #555555;
                color: white;
            }

			body {
				font-family: 'Fira Sans Condensed', sans-serif;
				font-size: 16px;
			}
			
			label {
				font-weight: bold;
				width: 100px;
				font-size: 14px;
			}
			
			h1{
				color: white;
			}
			.blackbg{
				background-color: black;
			}

		</style>

	</head>

<div class="blackbg">
	      
	      <h1>BREAKFASTIM</h1>
</div>

		  <div align = "center">
			<div style = "width:300px; border: solid 1px #000000; " align = "left">
            <div style = "background-color:#000000; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">

			<form method="POST" action="Login.php" id="form1">

				<input type="text" name="uname" placeholder="username"> Username </input><br />
                <input type="password" name="pass" placeholder="password"> Password</input><br />
                <button type="submit" class= "btn btn-default button5" name="login" id="login" value="Submit" >Login</button>
            </form>

            <form method="POST" action="register.php" id="form2">
                <button type="submit" class = "btn btn-default button2" id="register" value="Submit">Register</button><br />
            </form>

            </div>
			</div>
		</div>
<!--
		  <form class="form-horizontal" method="POST" action="Login.php" id="form1">
			  <div class="form-group">
				  <label class="control-label col-sm-2" for="uname">Username:</label>
				  <div class="col-sm-10">
					  <input type="text" class= "form-control" placeholder="username">
				  </div>
			  </div>

			  <div class="form-group">
				  <label class="control-label col-sm-2" for="pwd">Password:</label>
				  <div class="col-sm-10">
					  <input type="password" class="form-control" id="pwd" placeholder="Enter password">
				  </div>
			  </div>
    -->          <!-- remember me doesnt work yet lol -->
<!--
			  	  <div class="form-group">
				  <div class="col-sm-offset-2 col-sm-10">
					  <div class="checkbox">
						  <label><input type="checkbox"> Remember me</label>
					  </div>
				  </div>
			  </div>
              <div class="form-group" >
				  <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default button5" name="login" id="login" value="Submit">Login</button>
				  </div>
			  </div>
		  </form>

    <form method="POST" action="register.php" id="form2">
        <button type="submit" class = "btn btn-default" id="register" value="Submit">Register</button><br />
    </form>
-->
	</body>
    </html>
