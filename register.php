<?php


?>

<html>.
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed" rel="stylesheet">


        <title>Register</title>
    <link rel = "stylesheet" type = "text/css" href = "reg_style.css" />



<style>

    .button2 {
        background-color: white;
        color: dodgerblue;
        border: 2px solid dodgerblue;
    }
    .button2:hover {
        background-color: dodgerblue;
        color: white;
        border: 2px solid white;
    }
    .button5 {
        background-color: white;
        color: black;
        border: 2px solid black;
    }

    .button5:hover {
        background-color: black;
        color: white;
        border: 2px solid white;
    }
    body {
        font-family: 'Fira Sans Condensed', sans-serif;
        font-size: 16px;
        background-color: white;
    }
    label {
        font-weight: bold;
        width: 100px;
        font-size: 15px;
    }
    h1{
        color: white;
        margin-left: 20px;
    }
    .bluebg{
        background-color: dodgerblue;
    }
    .col-sm-10{
        padding-left: 23px;
    }
    #form3{
        margin-left: 65px;
    }
    #pwd, #uname, #firstName, #lastName{
        color:dodgerblue;

    }

</style>

</head>

<body>

<div class = "regBox">
    <div class = "bluebg">
        <h1>Register</h1>
        <hr>
    </div>


        <div align = "center" style="margin-top: 40px">

            <div style = "width: 450px; border: solid 2px #1e90ff; " align = "left">
                <div style = "background-color: dodgerblue; color:white;"><b>Register</b></div>

                <div style = "margin:10px">
        <form method="POST" action="newUser.php" id="form3" class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="firstName" id="firstName">First Name:</label>
                <div class="col-sm-10">
                    <input type="text" name="firstName" placeholder="First Name"> <br />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" id="lastName" for="lastName">Last Name:</label>
                <div class="col-sm-10">
                    <input type="text" name="lastName" placeholder="Last Name"> <br />

                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" id="uname" for="uname">Username:</label>
                <div class="col-sm-10">
                    <input type="text" name="username" placeholder="Username"> <br />

                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" id="pwd" for="pwd">Password: </label>
                <div class="col-sm-10">
                    <input type="text" name="pass" placeholder="password"> <br />

                </div>
            </div>
            <div class="form-group" >
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class= "btn btn-default button2" name="createacc" id="createacc" value="Submit" style="width:180px;">Create Account</button>
                </div>
            </div>

        </form>
                    </div>
                </div>
            </div>
    </div>

</body>
</html>


