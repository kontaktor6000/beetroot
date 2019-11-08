<?php
function getUsersData($pathUsersFile = 'user_data.txt')
{
    $usersDataList = file_get_contents($pathUsersFile);

    $da=123123;

    $usersDataArray = explode(PHP_EOL, $usersDataList);
    $userData = [];
    foreach ($usersDataArray as $userId => $user) {
        $userData[$userId] = explode(' ', $user);
    }
    return $userData;
}

function validateAuth($login, $password) {
    $usersList = getUsersData();

    foreach ($usersList as $userData) {
        if ($login === $userData[1] && $password === $userData[2]) {
            return $userData;
        }
    }
}

function pretty_print($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}


