<?php

$help_num = 4;
$nums = [2, 4, 5, 6, 10];

foreach ($nums as $num) {

    echo $num + $nums[$help_num];
    echo '<br>';
    $help_num--;
}
