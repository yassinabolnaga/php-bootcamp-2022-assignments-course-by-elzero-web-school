<?php

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for ($start = 0; $start < count($mix); $start++ ) {
    if (is_int($mix[$start])){

        if (($mix[$start]) == 1){

            continue;

        }
        
        echo $mix[$start];
        echo '<br>';
    }
}
