<html><body>


<?php
    
   if( $_POST["uname"] == "admin")
        header("location: second.php");

?>


<form method="POST" id="form1">
    <input type="text" value="username" name="uname"></input>
    
</form>
<button type="submit" form="form1" value="Submit">Submit</button>



</body>


</html>