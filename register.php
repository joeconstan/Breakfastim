<?php


?>

<html>
<head>
    <title>Register</title>
    <link rel = "stylesheet" type = "text/css" href = "reg_style.css" />
</head>

<body>

<div class = "regBox">
    <div class = "regHeader">
        <h1>Register</h1>
        <hr>
    </div>
    
    <div class = "regInfo">
        <form method="POST" action="newUser.php" id="form3">
            <input type="text" name="firstName"> First Name </input><br />
            <input type="text" name="lastName"> Last Name </input><br />
            <input type="text" name="userName"> Username </input><br />
            <input type="password" name="password"> Password</input><br />
            <button type="submit" class = "login_page" value="Submit">Login</button><br />
        </form>
    </div>
</div>

</body>
</html>
