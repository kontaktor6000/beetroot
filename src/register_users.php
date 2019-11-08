<?php
$name = $_POST['name'];
$family = $_POST['family'];
$age = $_POST['age'];

$userData = serialize($_POST);

//file_put_contents('users_users.txt', $userData . PHP_EOL, FILE_APPEND);


$fileResource = fopen('users_users.txt', 'a+');
fwrite($fileResource, $userData . PHP_EOL);
fclose($fileResource);
require_once 'validate_users.php';

header('Location: index2.php');
