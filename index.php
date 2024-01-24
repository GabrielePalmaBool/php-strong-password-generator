<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link css style-->
    <link rel="stylesheet" href="css\style.css">
    
    <title>Pass-gen</title>
</head>
<body>

<?php

$lenght = $_GET['lng'] ?? '-1';

function Genpw($lenght){

    if($lenght == '-1'){
        echo 'fai la tua scelta';
        
    }
    
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';

    $pass = array(); //remember to declare $pass as an array

    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache

    for ($i = 0; $i < $lenght; $i++) {

        $n = rand(0, $alphaLength);

        $pass[] = $alphabet[$n];
        
    }
    $array = implode($pass);
   
    
    return $array ; //trasformo l'array in una stringa
}
    
?>

<form class="input">

  <h2 for="quantity">Scegli la lunghezza della password da 1 a 10</h2>
  <input type="number" id="quantity" name="lng" min="1" max="10">
  <input type="submit" value="Seleziona">
</form>


<?php

    if($lenght !== '-1') echo'<h4>la tua password sar&agrave;: '.$pass=Genpw($lenght).'</h4>';

?>
  


</body>
</html>