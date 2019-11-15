<?php
session_start();
$login = $_POST['login'];
$password = $_POST['password'];

$users = file_get_contents('users.txt');
$users = explode(PHP_EOL, $users);

if (isset($_SESSION[$login])) {
    echo 'ACCESS DENIED';
    die;
}

foreach ($users as $user) {
    $user = explode(' ', $user);
    if (trim($login) === trim($user[0]) && trim($password) === trim(($user[1]))) {
        $_SESSION['auth_user'] = $user;
        echo 'Auth completed: Welcome: ' . $_SESSION['auth_user'][0];
        die;
        break;
    }
}
echo 'Unauth';