<?php

    $lenght = $_GET['lng'] ?? '-1';
    $number = isset($_GET['num']);
    $char = isset($_GET['cs']);
    $symbol = isset($_GET['sym']);
    $duplicate = isset($_GET['dup']);
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


    //Seconda versione 
    function Genpw2($lenght,$number,$Char,$Symbol,$duplicate){

        $Charset='';

        if($number){

            //restisce la posizione di un carattere nella tabella di mappatura del set di caratteri convertendolo in numero
            for($x=ord('1'); $x<=ord('9');$x++){

                //converto in carattere e inserisco in lista
                $Charset .=chr($x);

            }
        }

        if($Char){

            //restisce la posizione di un carattere nella tabella di mappatura del set di caratteri convertendolo in numero
            for($x=ord('a'); $x<=ord('z');$x++){

                //converto in carattere e inserisco in lista
                $Charset .=chr($x);

            }

            //restisce la posizione di un carattere nella tabella di mappatura del set di caratteri convertendolo in numero
            for($x=ord('A'); $x<=ord('Z');$x++){

                //converto in carattere e inserisco in lista
                $Charset .=chr($x);

            }
        }

        if($Symbol){

            //restisce la posizione di un carattere nella tabella di mappatura del set di caratteri convertendolo in numero
            for($x=ord('!'); $x<=ord('/');$x++){
                
                //converto in carattere e inserisco in lista
                $Charset .=chr($x);

            }
        }

        //array finale da restituire
        $array = '';

       

        //in base alla lunghezza della password scelta
        for($x=0; $x<$lenght; $x++){

            //seleziono un indice random dalla lista precedentemente creata (Charset)
            $randCharIndex = rand(0, strlen($Charset)-1);

            //acquisisco il valore di tale indice
            $randChar = $Charset[$randCharIndex];

            if(strpos($array,$randChar) !== false && !$duplicate){

                $x--;
                continue;

            }

            $array .= $randChar;
        }
        
        return $array ; //restituisco l'arrays
    }

?>