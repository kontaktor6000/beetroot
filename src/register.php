<?php
session_start();
$userLoginPassword = [];
$userLoginEnter = trim($_POST['username']);
$userPasswordEnter = trim($_POST['password']);

$userData = $userLoginEnter . ' ' . $userPasswordEnter;

$loginPasswordList = file('login_password.txt');

if (file_exists($userLoginEnter . '.txt')) {
    $countEnter = file_get_contents($userLoginEnter . '.txt');
}

for ($i = 0; $i < count($loginPasswordList); $i++) {
    if (trim($loginPasswordList[$i]) == trim($userData)) {
        $countEnter = (int)$countEnter + 1;
        $_SESSION['userName'] = $userLoginEnter;
        $_SESSION['countEnter'] = $countEnter;
        $file = fopen($userLoginEnter . '.txt','w');
        fwrite($file, $countEnter);
        fclose($file);
        header("Location: index.php");exit();

    } else {
        //header("Location : form.html");
    }

}


