<?php
session_start();
$newName = $_GET['newtitle'];
if ($newName != '' && file_exists("data/$newName") && is_file("data/$newName")) {
    $newData = file_get_contents("data/$newName");
    $newArray = unserialize($newData);
} else {
    $error = 'Страница не найдена';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>One new</title>
</head>
<body>

<h2><?=$newArray['title'];?></h2>
<div><?=$newArray['content'];?></div>
<hr>
<?php if (isset($error)): ?>
    <h3><?=$error;?></h3>
<?php endif; ?>
<?php if ($_SESSION['user']): ?>
    <p><a href="edit_new.php?editnew=<?=$newName;?>">Редактировать новость</a></p>
<?php endif; ?>
<p><a href="index.php">Вернуться на главную</a></p>


</body>
</html>