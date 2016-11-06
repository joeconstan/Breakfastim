<?php


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
                    <form action="#" onsubmit="return false" id="chatForm">
                        <input type="hidden" id="name"/>
                        <input type="text" name="text" id="text" value="" placeholder="type your message here"/>
                        <button type="submit" name="submit" value="Post"> Post </button>
                    </form>
               </div>
            </div>

            <div class="col-md-4 marg userBox">
                <div class="chatUser">
                    <h3>Users</h3>

                </div>
                <hr width="94%">

                <div class="userList">
                </div>

                <hr width="94%">
                <div class="searchUser">
                    <form action="#" onsubmit="return false" id="userSearch">
                        <input type="hidden" id="name"/>
                        <input type="text" name="text" id="text" value="" placeholder="seach for friends"/>
                        <button type="submit" name="submit" value="Post"> Search </button>
                    </form>
                </div>

            </div>
    </div>
</div>









</body>



</html>
