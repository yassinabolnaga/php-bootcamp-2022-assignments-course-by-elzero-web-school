<?php
// Write Function Content Here

function sum_all(...$nums){

    $result=0;
    
    foreach ($nums as $num) :
        if ($num == 5){
            continue;
        }
        elseif ($num == 10){
            $num += 10;
        }

        $result += $num;
    endforeach;
    return $result;
    echo '<br>';
}

// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40
