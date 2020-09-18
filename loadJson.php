<?php

    function load() {

        $loadFile = file_get_contents("config.txt");

        $output = file_get_contents($loadFile);
        $output = json_decode($output, true);

        return $output;
    }

    function loadInput() {
        $file = fopen ("config.txt","w") or die ("Cannot open file!");
       
        $input = implode($_POST);
 
        if (file_exists($input) && $input != "news") {
            
         fwrite($file, $input);
         fclose();
         header('location:index.php');
        }
        else {
                
         fwrite($file, "news/Ass2News.json");
         fclose($file);
         
        }
    }

    function logInPageLoad() {
        if ($_SESSION["isLoggedin"] == true) {
            header('location:admin.php');
        }
    }

    function adminPageLoad() {
        if ($_SESSION["isLoggedin"] == false) {
            header('location:login.php');
        }
    }

    function setLoggedin() {
        $_SESSION["isLoggedin"] = true;
    }

    function setLoggedout() {
        $_SESSION["isLoggedin"] = false;
    }

?>