<?php

if (!empty($_POST)) {
include_once 'add_news.php';
}

$data = scandir('data/');
?>


<?php foreach ($data as $key => $value):?>
    <ul>
    <?php if ($value !== '.' and $value !== '..'): ?>
        <li><a href="data/<?=$value?>"><?=$value;?></a></li>
    <?php endif; ?>
    </ul>
<?php endforeach; ?>
