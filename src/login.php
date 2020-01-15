<?php
session_start();
require_once 'functions.php';
if (count($_POST) > 0) {
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);
    $_SESSION['user'] = validateAuth($login, $password, 'users_data.txt');
    if ($_SESSION['user']) {
        header("Location: index.php");die;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <label for="login">Login</label><br>
    <input type="text" name="login" value=""><br>
    <label for="password">Password</label><br>
    <input type="text" name="password" value=""><br>
    <button type="submit">Send</button>
</form>

</body>
</html>