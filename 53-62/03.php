<?php

$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here

echo str_repeat(strtolower(chunk_split($str, $num, $char)), 3);

// aaa_aaa_aaa_
