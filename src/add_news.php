<?php

$data = [];
if ($_POST > 0) {
    $data['title'] = $_POST['title'];
    $data['content'] = $_POST['content'];
    $data['id'] = time();
}

echo $dataString = serialize($data);

file_put_contents('data/' . $data['id'] . '.txt', $dataString);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h3>Добавить новость</h3>
<form action="add_news.php" method="post">
    <label for="title">Title</label><br>
    <input type="text" name="title" value="<?php if (isset($data['title'])) echo $data['title'];?>"><br>
    <label for="content">Content</label><br>
    <textarea name="content" cols="30" rows="10"><?php if (isset($data['content'])) echo $data['content'];?></textarea><br>
    <button type="submit">Send</button>
</form>

</body>
</html>