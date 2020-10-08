<?php
    $userInput = $_GET['value']; 
    $search = "'%". $userInput . "%'";
     $db = new mysqli("localhost", "nasaUser", "123", "NasaDatabase");
     $queryString = "SELECT title FROM news WHERE title LIKE $search LIMIT 0, 5";
    $var = mysqli_query ($db, $queryString);
  
    //$output = [];
    //   while ( $temp = mysqli_fetch_assoc($var)) {
    //       array_push ($output, $temp);
    //   }

      $output[] = mysqli_fetch_all($var);
     //print_r($output[0]);

     foreach($output as $value) {
        $temp = implode ($value[0]);
        echo "<p> $temp </p>";
     }
     //echo "<p> DONE </p>"



?>