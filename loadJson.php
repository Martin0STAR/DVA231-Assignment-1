<?php

    function load() {

        $queryString = "SELECT * FROM news ORDER BY ID DESC LIMIT 0,3"; //Tar in tre senaste nyheterna
        $db = new mysqli("localhost", "nasaUser", "123", "NasaDatabase");
        $var = mysqli_query ($db, $queryString);
        $output = [];
        while ( $temp = mysqli_fetch_assoc($var)) {
            array_push ($output, $temp);
        }

        return $output;
    }

    function loadInput() {
        $userInput = $_POST["uInput"];
        $db = new mysqli("localhost", "nasaUser", "123", "NasaDatabase");
        
        $file = file_get_contents ($userInput);
       
        $input = json_decode($file,true);
         foreach($input as $InputNews) {
             $queryCount = "SELECT ID FROM news";
             $var = mysqli_num_rows(mysqli_query ($db, $queryCount)) + 1;
             printf($var);

            $iNewsTitle = '"' . $InputNews["title"] . '"'; 
            $iNewsContent = '"' . $InputNews["content"] . '"';
            $iNewsImage = '"' . $InputNews["imgurl"] . '"';


            printf($iNewsTitle);
            printf($iNewsContent);
            printf($iNewsImage);


            $queryString = "INSERT INTO news (title, content, image, ID) VALUES ($iNewsTitle,  $iNewsContent, $iNewsImage, $var)";
            printf($queryString);
            mysqli_query ($db, $queryString);
         }
    }

    function logInPageLoad() {
        if (isset( $_SESSION["isLoggedin"]) && $_SESSION["isLoggedin"] == true) {
            header('location:admin.php');
        }
    }

    function adminPageLoad() {
        if (!isset( $_SESSION["isLoggedin"]) && $_SESSION["isLoggedin"] == false) {
            header('location:login.php');
        }
    }

    function setLoggedin() {
        $_SESSION["isLoggedin"] = true;
    }

    function setLoggedout() {
        $_SESSION["isLoggedin"] = false;
    }

    function loginCheck() {
        $uname = "'" . $_POST["UsernameInput"] . "'";
        $pass = "'" . $_POST["PasswordInput"] . "'";
        $queryString = "SELECT * FROM users WHERE username = $uname AND password = $pass";
        $db = new mysqli("localhost", "nasaUser", "123", "NasaDatabase");
        $var = mysqli_query ($db, $queryString);

        return (mysqli_num_rows($var) != 0);    


        
    }

    function SearchDatabase () {
        $userInput = 
        $db = new mysqli("localhost", "nasaUser", "123", "NasaDatabase");
        $queryString = "SELECT * FROM news WHERE title LIKE '%e%' LIMIT 0, 5";
        $var = mysqli_query ($db, $queryString);

        $output = [];
        while ( $temp = mysqli_fetch_assoc($var)) {
            array_push ($output, $temp);
        }
        return $output;

    }
?>