<?php

session_start();

if (empty($_SESSION['products'])) {
    $_SESSION['products'][0] = $_POST['name'];
} else {
    $_SESSION['products'][] = $_POST['name'];
}

$_SESSION['products'][] = $_POST['name'];