<?php session_start();?>

<!DOCTYPE html>
    <head>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: black;
            background-image: url(images/nasa-logo.svg);
            background-repeat: no-repeat;
            background-position-y: 1%;
            background-position-x: 10%;
            z-index: 10;
            color:white;
        }
        div {
            margin:auto;
            width:50%;
        }
    </style>
    <meta charset=“UTF-8”>
        <link rel="stylesheet" type="text/css" href="index.css">
        <?php
            require 'loadJson.php';
             $output = GetById(intval($_GET['id'])); 
             $title = $output['title'];
             $content = $output['content'];
             $imageURL = $output['image'];
             
             ?> 
        <title>Nasa News : <?php echo "$title"; ?>  </title> 
        <meta name=“viewport” content=“width=device-width, initial-scale=1.0”>
        <meta http-equiv=“X-UA-Compatible” content=“ie=edge”>
    </head>
    <body >
        <div>
        
        <h1> <?php echo " $title"; ?> </h1>
        <img src= "<?php echo "$imageURL"; ?>" >
        <p> <?php echo "$content";  ?> </p>
        
        </div>

    </body>
</html>