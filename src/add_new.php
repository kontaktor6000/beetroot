<?php
$data = [];
if (count($_POST) > 0) {
    $data['title'] = trim($_POST['title']);
    $data['content'] = trim($_POST['content']);
    $data['id'] = time();

    if ($data['title'] == '' || $data['content'] == '' || $data['id'] == '') {
        $message = 'Заполните все поля.';
    } elseif (file_exists('data/' . $data['id'] . '__' . $data['title'] . '.txt')) {
        $message = 'Статья с таким названием уже существует. Измените название';
    } else {
        $dataString = serialize($data);
        file_put_contents('data/' . $data['id'] . '__' . $data['title'] . '.txt', $dataString);
        header("Location: index.php");die;
    }

} else {
    $data['title'] = '';
    $data['content'] = '';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add new</title>
</head>
<body>

<form action="" method="post">
    <label for="title">Название статьи</label><br>
    <input type="text" name="title"><br>
    <label for="title">Название статьи</label><br>
    <textarea name="content" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" value="Сохранить">
</form>
<?php
if (isset($message)) {
    echo '<h3>' . $message . '</h3>';
}
?>

</body>
</html>