<?php
    // Exercice Inverser une string

    // Premiere technique
    $string ="Bonjour Bonjour";

    echo strrev($string); 
    echo"\n";

    // Seconde technique

    $str = "Hello Hello";
    $length = strlen($str);

    for ($i=$length-1; $i>=0 ; $i--){
        echo $str[$i];
    }
    echo"\n";
        
    



?>