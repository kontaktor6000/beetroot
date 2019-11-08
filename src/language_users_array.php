<?php

/* Используя массив юзеров с предыдущего урока и циклы, выполните следующие действия:

   - разделите пользователей на массивы по языку, каждый массив будет содержать пользователей с одинаковым языком; */

   
require_once 'array.php';

$arrayEqualLanguage = [];

foreach ($users as $key => $user) {
	$arrayEqualLanguage[$user['lang']][$key] = $user; 
	unset($users[$key]); 
}

echo '<pre>';
print_r($arrayEqualLanguage);
echo '</pre>';