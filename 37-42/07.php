<?php

$mix = [1, 2, "A", "B", "C", 3, 4];
$integer = 0;
$string = 0;

for ($i = 0; $i < count($mix); $i++){    
    if (is_int($mix[$i])){
        echo $mix[$i];
        echo '<br>';
        $integer++;
    }
    
    if (is_string($mix[$i])){
        $string++;
    }
}

echo   $integer . " Numbers Printed<br>";
echo   $string . " Letters Ignored";
