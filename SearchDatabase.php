<?php
    $userInput = $_REQUEST["q"]; 
     $db = new mysqli("localhost", "nasaUser", "123", "NasaDatabase");
     $queryString = "SELECT * FROM news WHERE title LIKE '%. $userInput .%' LIMIT 0, 5";
    $var = mysqli_query ($db, $queryString);

    $output = [];
     while ( $temp = mysqli_fetch_assoc($var)) {
        array_push ($output, $temp);
     }
    echo "<p> Yoooo </p>";
?>