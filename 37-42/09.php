<?php

$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

for ($i = 0; $i < count($names); $i++){

    if ($nums[$i] < $help_num){
        echo $names[$nums[$i]];
        echo'<br>';
    }

}
