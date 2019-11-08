<?php


$file = fopen('users_users.txt', 'r');
$fileData = fread($file, filesize('users_users.txt'));
$users = explode(PHP_EOL, $fileData);
echo '<pre>';
print_r($users);
echo '<pre>';

$tempArrayOldUsers = [];
$tempArrayYoungUsers = [];
foreach ($users as $user) {
    if (!$user) {
        continue;
    }
    $user = unserialize($user);
    if ((int)$user['age'] > 1000) {
        $tempArrayOldUsers[] = $user;
    } else {
        $tempArrayYoungUsers[] = $user;
    }
}

$fileResource = fopen('old_users.txt', 'w+');
foreach ($tempArrayOldUsers as $oldUser) {
    fwrite($fileResource,  serialize($oldUser) . PHP_EOL);
}
fclose($fileResource);

$fileResource2 = fopen('users_users.txt', 'w+');
foreach ($tempArrayYoungUsers as $youngUser) {
    fwrite($fileResource2, serialize($youngUser) . PHP_EOL);
}

fclose($fileResource2);
    // удалить всех кто старше 1000 лет и записать их в файл отдельный
    // результат два файла, в первом оставшиеся юзера
    // во втором у нас те кого мы удалили.
    // плюс аналогичное сделать через filegetcontents();
    //echo $user['age'] . PHP_EOL;


