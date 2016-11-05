<?php


?>


<html>
<head>
    <title>Welcome To Chat</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>


<body>



<div class="container-fluid chatBox">
    <div class="chatHeader">
        <h3>Welcome to Chat</h3>
        <hr>
    </div>

    <div class="chatMessages">
    </div>
    <hr width="96%">
    <div class="chatBottom">
        <form action="#" onsubmit="return false" id="chatForm">
            <input type="hidden" id="name"/>
            <input type="text" name="text" id="text" value="" placeholder="type your message here"/>
            <button type="submit" name="submit" value="Post"> Post </button>
        </form>
    </div>
</div>




</body>



</html>
