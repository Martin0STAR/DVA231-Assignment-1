<?php session_start();
    $userInput = $_GET['value']; 
    $search = "'%". $userInput . "%'";
    $db = new mysqli("localhost", "nasaUser", "123", "NasaDatabase");
    $queryString = "SELECT title, id FROM news WHERE title LIKE $search LIMIT 0, 5";
    $var = mysqli_query ($db, $queryString);
  

    if ($var != null) {
        for ($c = 0; $c < (mysqli_num_rows($var)) ; $c++) {
            $output[$c] = mysqli_fetch_array($var);
          }

        $size =mysqli_num_rows($var);           
        for ($i = 0; $size > $i; $i++) {
            $value = $output[$i];
            if ($value != null) {
                $temp = $value['title'];
                $id = strval($value['id']);
                $url = "newspage.php\?id=" . $id;
                echo "<p> <a class=\"NavLinks\" href=$url > $temp</a> </p>";
            }
            else {
                echo "<p> No results found </p>";
            }            
        }

    }

    
    

    


   

?>