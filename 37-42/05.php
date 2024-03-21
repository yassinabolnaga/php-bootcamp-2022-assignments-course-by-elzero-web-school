<?php

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for ($i = $start; $i < count($mix); $i++ ) {
    if (is_int($mix[$i])){

        if (($mix[0])){

            continue;

        }

        echo $mix[$i];
        echo '<br>';
    }
}
