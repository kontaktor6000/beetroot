<?php


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


