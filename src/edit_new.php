<?php
include_once 'functions.php';
$data = [];
if (count($_POST) > 0) {
    if ($_POST['save'] === 'Save') {
        $data['title'] = trim($_POST['title']);
        $data['content'] = trim($_POST['content']);
        $data['id'] = trim($_POST['id']);
        $dataString = serialize($data);
        file_put_contents('data/' . $data['id'] . '__' . $data['title'] . '.txt', $dataString);
        header("Location: index.php");die;
    }
    if ($_POST['delete'] === 'Delete') {
        $editName = trim($_GET['editnew']);
        //echo 'delete';
        //unlink('data/' . $data['id'] . '__' . $data['title'] . '.txt');
        unlink('data/' . $editName);
        header("Location: index.php");    }

} else {
    $editName = trim($_GET['editnew']);
    $newDataEdit = unserialize(file_get_contents("data/$editName"));
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
    <input type="text" name="title" value="<?=$newDataEdit['title'];?>"><br>
    <label for="title">Название статьи</label><br>
    <textarea name="content" id="" cols="30" rows="10"><?=$newDataEdit['content'];?></textarea><br>
    <input type="hidden" name="id" value="<?=$newDataEdit['id'];?>"><br>
    <input type="submit" name="save" value="Save"> | <input type="submit" name="delete" value="Delete">

</form>

</body>
</html>