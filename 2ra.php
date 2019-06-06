<?php

echo convertToSecondary(70);

function convertToSecondary($x){
    $array = [];
    $arrayIndex = 0;
    $currentIndex = 0;
    
    while(intdiv($x, 2) != 0 || $x == 1) {
        if ($x % 2 == 0) {
            $array[$currentIndex] = 0;
        }
        else {
            $array[$currentIndex] = 1;
        }
        $x = intdiv($x, 2);
        
        $currentIndex++;
    }
    
    $reversedArray = [];
    $arrayCount = count($array);
    for($i=$arrayCount-1;$i>=0;$i--){
        $reversedArray[$arrayIndex] = $array[$i];
        $arrayIndex++;
    }
    return implode("",$reversedArray);
}

?>
