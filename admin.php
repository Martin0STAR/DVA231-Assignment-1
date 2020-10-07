<?php session_start();?>
<!DOCTYPE html>
    <head>
        <link href="others.css" rel="stylesheet">
        <script src="functions.js"></script>
        <title>Nasa Unofficial Site</title>
        <?php
            require 'loadJson.php'; 
        ?>
    </head>
    <body onload="<?php adminPageLoad(); ?>">

    <div id="center">
        <form method="post" >
            <p> Specify filename for a new news-collection </p> 
            <label> File name </label> <input type="text" name="uInput" >
            <input type ="submit" value="Apply" name="sendButton"/>
        </form>
            
        <form method="post" >  
        <input type="submit"  value="Sign out" name="logoutbutton" > 
        </form>

        <?php 
            if (isset($_POST['logoutbutton'])) {
            setLoggedout();
            LogInPageLoad();
            }

            if(isset($_POST['sendButton'])) {
                loadInput();
            }
        ?>
    </div>

    </body>
</html>