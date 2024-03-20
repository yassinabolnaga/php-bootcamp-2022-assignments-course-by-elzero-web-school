<?php
/*
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
###IN FIRST TO FIND SERVER DETAILS###
*/

echo "$_SERVER[DOCUMENT_ROOT]";
echo "<br>";
echo "$_SERVER[SERVER_NAME]";
echo "<br>";
echo "$_SERVER[SystemRoot]";
echo "<br>";
echo "$_SERVER[OPENSSL_CONF]";
echo "<br>";
