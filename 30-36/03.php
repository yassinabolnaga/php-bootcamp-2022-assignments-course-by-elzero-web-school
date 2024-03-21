<?php
$admins = ["Osama", "Ahmed", "Sayed"];

if ($_SERVER["REQUEST_METHOD"]==="POST"){
    echo  "The Request Method Is Post And Username Is " . $_POST['user'];

    if (in_array($_POST['user'],$admins)){
        echo '<br>';
        echo "This Username " . $_POST['user'] . " Is Admin";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>
</body>
</html>
