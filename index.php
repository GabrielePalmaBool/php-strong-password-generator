<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link css style-->
    <link rel="stylesheet" href="css\style.css">

    <?php
    
            require_once __DIR__ ."/partials/function.php";
    ?>
    
    <title>Pass-gen</title>
</head>
<body>



<form class="input">

  <h2 for="quantity">Scegli la lunghezza della password da 1 a 10</h2>
  <input type="number" id="quantity" name="lng" min="1" max="10">
  <input type="submit" value="Seleziona">
</form>


<?php
     

    if($lenght != -1 && $lenght != '') echo'<h4>la tua password sar&agrave;: '.$pass=Genpw($lenght).'</h4>';

?>
  


</body>
</html>