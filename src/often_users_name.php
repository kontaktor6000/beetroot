<?php
/* Используя массив юзеров с предыдущего урока и циклы, выполните следующие действия:

   - выведите на экран имена пользователей, которые встречаются более одного раза и количество повторений имени; */
   
require_once 'array.php';

$arrayEqualName = [];

foreach ($users as $key => $user) {
	$arrayEqualName[$user['name']][] = $key; 
	unset($users[$key]); 
} 

echo '<pre>';
print_r($arrayEqualName);
echo '</pre>';

foreach ($arrayEqualName as $userName => $userId) {
	if (count($userId) > 1) {
		echo $userName . ' - ' . count($userId) . '<br>';
	}
}
   