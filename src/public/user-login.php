<?php
session_start();
if (!empty($_SESSION['auth_user'])) {
    echo 'ACCESS DENIED';
    die;
}
require_once 'index.html';