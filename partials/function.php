<?php
    $lenght = $_GET['lng'] ?? '-1';

    function Genpw($lenght){

        if($lenght == '-1') return-1;

        $alphabet = 'abcdefghijklmnABCDEFGHIJKLMN1234567890[]@❦❧{}&?^*§';

        $pass = array(); //remember to declare $pass as an array

        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache

        for ($i = 0; $i < $lenght; $i++) {

            $n = rand(0, $alphaLength);

            $pass[] = $alphabet[$n];
            
        }
        $array = implode($pass);
    
        
        return $array ; //restituisco l'arrays
    }

?>