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
    $user = unserialize($user);

    if ((int)$user['age'] > 1000) {
        $tempArrayOldUsers[] = $user;
/*        $fileResource = fopen('old_users.txt', 'a+');
        $user = serialize($user);
        fwrite($fileResource,  $user . PHP_EOL);
        fclose($fileResource);*/
    } else {
        $tempArrayYoungUsers[] = $user;
/*        $fileResource = fopen('users_users.txt', 'a+');
        $user = serialize($user);
        fwrite($fileResource, $user . PHP_EOL);
        fclose($fileResource);*/
    }
}
$arrayOldUsers = serialize($tempArrayOldUsers);
$fileResource = fopen('old_users.txt', 'w+');

fwrite($fileResource,  $arrayOldUsers . PHP_EOL);
fclose($fileResource);

$arrayYoungUsers = serialize($tempArrayYoungUsers);
$fileResource = fopen('users_users.txt', 'w+');

fwrite($fileResource, $arrayYoungUsers . PHP_EOL);
fclose($fileResource);

    // удалить всех кто старше 1000 лет и записать их в файл отдельный
    // результат два файла, в первом оставшиеся юзера
    // во втором у нас те кого мы удалили.
    // плюс аналогичное сделать через filegetcontents();
    //echo $user['age'] . PHP_EOL;


