<?php


$userDataList = file_get_contents('user_data.txt');

$usersDataArray = [];
$usersDataArray = explode(PHP_EOL, $userDataList);
$userData = [];
foreach ($usersDataArray as $userId => $user) {
    $userData[$userId] = explode(' ', $user);
}
