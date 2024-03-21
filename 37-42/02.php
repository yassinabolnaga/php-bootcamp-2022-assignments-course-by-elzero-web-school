<?php

// while
$index = 0;
while ($index <=20 ){

    if ($index  %2 == 0 && $index != 0){
        echo "$index <br>"; 
    }
    $index++;
}

// for
for ($index = 0; $index <= 20; $index++){

    if ($index  %2 == 0 && $index != 0){
        echo "$index <br>"; 
    }
}

// do while
$index = 0;
do {
    if ($index  %2 == 0 && $index != 0){
        echo "$index <br>"; 
    }
        $index++;
} while ($index <= 20);
