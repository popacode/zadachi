<?php

echo ConverToRoman(19);

function ConverToRoman($num){ 
    $n = intval($num); 
    $res = ''; 

    $symbolToNumber = array( 
        'M'  => 1000, 
        'CM' => 900, 
        'D'  => 500, 
        'CD' => 400, 
        'C'  => 100, 
        'XC' => 90, 
        'L'  => 50, 
        'XL' => 40, 
        'X'  => 10, 
        'IX' => 9, 
        'V'  => 5, 
        'IV' => 4, 
        'I'  => 1); 

    foreach ($symbolToNumber as $roman => $number){ 
        
        $matches = intval($n / $number); 
        $res .= str_repeat($roman, $matches); 
        $n = $n % $number; 
    } 
    return $res; 
} 

?>

