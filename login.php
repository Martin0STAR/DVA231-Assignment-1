<?php session_start();?>
<!DOCTYPE html>
    <head>
        <link href="others.css" rel="stylesheet">
        <script src="functions.js"></script>
        <title>Nasa Unofficial Site</title>
        <?php require 'loadJson.php' ?>
        <?php 
     $db = new mysqli("localhost", "nasaUser", "123", "NasaDatabase") //AAAA

        ?>
    </head>
    <body onload="<?php logInPageLoad(); ?>">

    <div id="center">
        <form method="post" action="<?php logInPageLoad() ?>" >
            <p> Please sign in:  </p> 
            <label> Username </label> <input type="text" name="UsernameInput" >
            <br>
            <label> Password </label> <input type="password" name="PasswordInput" >
            <br>
            <input type ="submit" value="Log in" name="loginbutton"/>
        </form>
    </div>
<?php 
if (isset($_POST['loginbutton'])) {
    if (loginCheck()) {
        setLoggedin();
        logInPageLoad();
    }
    else {
    }

}
?>
    </body>
</html>