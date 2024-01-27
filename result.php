<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Link css style-->
     <link rel="stylesheet" href="css\style.css">

    <title>Document</title>
    
    <?php

        require_once __DIR__ ."/partials/function.php";

        session_start();

        $pass = $_SESSION['password'];

    ?>
</head>
<body>
    <?php

            echo'<h4>la tua password sar&agrave;: '.$pass.'</h4>';
    ?>

    <button type="submit" class="btn" onclick="location.href='index.php'"><span><span>Torna indietro</span></span></button>
    
</body>
</html>


<?php


?>