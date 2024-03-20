<?php

$a = 200;
$b = &$a; # add '&' to be assigned by Reference
$a = 100;

echo $b; // 100
