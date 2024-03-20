<?php

$a = "10";

echo $a;
echo '<br>';
echo gettype((int)$a);
echo '<br>';

echo $a;
echo '<br>';
echo gettype(+$a);
echo '<br>';

echo $a;
echo '<br>';
echo gettype(intval($a));
echo '<br>';

echo $a;
settype($a, 'integer');
echo '<br>';
echo gettype ($a);
echo '<br>';

echo $a++;
echo '<br>';
echo gettype($a);
echo '<br>';
