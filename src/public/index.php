<?php
session_start();
if (empty($_SESSION['auth_user'])) {
    echo 'Access dinied';
    require_once 'index.html';
    die;
}
echo 'Hello user: ' . $_SESSION['auth_user'][0];
echo '<br>';
echo '<a href="logout.php">LOGOUT</a>';

require_once 'add_product.phtml';
