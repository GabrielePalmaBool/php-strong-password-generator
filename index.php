<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link css style-->
    <link rel="stylesheet" href="css\style.css">

    <?php
    
            require_once __DIR__ ."/partials/function.php";

            session_start();
    ?>
    
    <title>Pass-gen</title>
</head>
<body>



<form class="input">

  <h2 >Scegli la lunghezza della password da 1 a 10</h2><br>
  <input type="number" name="lng" min="1" max="10" class="number"><br>
  

  <input type="checkbox" name="num" value="Bike">
  <label for="vehicle1"> Con numeri?</label><br>
  <input type="checkbox"  name="cs" value="Car">
  <label for="vehicle2"> Con lettere?</label><br>
  <input type="checkbox"  name="sym" value="Boat">
  <label for="vehicle3"> con simboli?</label><br>
  <input type="checkbox"  name="dup" value="Boat">
  <label for="vehicle3"> con duplicati?</label><br><br>
  <input type="submit" value="Seleziona">
</form>


<?php

    $_SESSION['password'] = $pass=Genpw2($lenght,$number,$char,$symbol,$duplicate);

    
    if($lenght != -1 && $lenght != '') {
      
      header('Location: ./result.php');

    }

    

?>
  


</body>
</html>