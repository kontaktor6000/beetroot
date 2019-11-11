<?php
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
</body>
</html>
