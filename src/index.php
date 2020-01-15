<?php
session_start();
require_once 'functions.php';
$news = scandir('data/');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Articles list</title>
</head>
<body>

<?php foreach ($news as $new): ?>
    <?php if (is_file("data/$new")): ?>
        <?php $newCut = str_replace('.txt', '', $new); ?>
        <?php $newTitle = explode('__', $newCut); ?>
        <div><a href="one_new.php?newtitle=<?=$new;?>"><?=$newTitle[1];?></a></div><hr>
    <?php endif; ?>
<?php endforeach; ?>

<button><a href="add_new.php">Добавить новость</a></button>
<hr>

<?php if ($_SESSION['user']): ?>
    <form action="logout.php">
        <button type="submit">Выйти</button>
    </form>
<?php else: ?>
    <button><a href="login.php">Войти</a></button>
<?php endif; ?>
</body>
</html>