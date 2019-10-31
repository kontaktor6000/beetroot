<?php
session_start();

echo 'Welcome home, <strong>' . $_SESSION['userName'] . '</strong><br>';
echo 'Вы аторизовывались <strong>' . $_SESSION['countEnter'] . '</strong> раз.<br>';



