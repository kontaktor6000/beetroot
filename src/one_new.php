<?php
session_start();
$newName = $_GET['newtitle'];
$newData = file_get_contents("data/$newName");
$newArray = unserialize($newData);
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
<?php if ($_SESSION['user']): ?>
    <p><a href="edit_new.php?editnew=<?=$newName;?>">Редактировать новость</a></p>
<?php endif; ?>
<p><a href="index.php">Вернуться на главную</a></p>


</body>
</html>