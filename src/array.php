<?php
error_reporting(E_ALL);

$users = []; 

$users['1'] = ["name" => "Andrey", "email" => "andrey@andrey.com", "lang" => "ua"];
$users['3'] = ["name" => "Anton", "email" => "anton@anton.com", "lang" => "ru"];
$users['23'] = ["name" => "Yakov", "email" => "yakov@yakov.com", "lang" => "en"];
$users['12'] = ["name" => "Boris", "email" => "boris@boris.com", "lang" => "fr"];
$users['16'] = ["name" => "Andrey", "email" => "andrey2@andrey2.com", "lang" => "fr"];
$users['15'] = ["name" => "Tolyan", "email" => "tolyan@tolyan.com", "lang" => "ru"];
$users['6'] = ["name" => "Samuil", "email" => "samuil@samuil.com", "lang" => "de"];
$users['8'] = ["name" => "Nikolya", "email" => "nikolya@nikolya.com", "lang" => "ua"];
$users['5'] = ["name" => "Isaak", "email" => "isaak@isaak.com", "lang" => "de"];
$users['4'] = ["name" => "Tolyan", "email" => "tolyan2@tolyan2.com", "lang" => "de"];
$users['10'] = ["name" => "Kuzma", "email" => "kuzma@kuzma.com", "lang" => "ua"];
$users['20'] = ["name" => "Abram", "email" => "abram@abram.com", "lang" => "de"];
$users['22'] = ["name" => "Andrey", "email" => "andrey3@andrey3.com", "lang" => "de"];

$salutation = [
	'en' => [
		'hi' => 'Welcome home',
		'separator' => ' and ',
	],
	'ru' => [
		'hi' => 'Здоровеньки булы',
		'separator' => ' и ',
	],
	'fr' => [
		'hi' => 'Vous êtes les bienvenus',
		'separator' => ' et ',
	],
	'ua' => [
		'hi' => 'Хау ду ю ду',
		'separator' => ' та ',
	],
	
	'de' => [
		'hi' => 'Willkommen zurück',
		'separator' => ' und ',
	],
];

$orderNumber = 0;
foreach ($users as $idArray => $user) {
	$users[$idArray]['id'] = $idArray;
	$users[$idArray]['orderNumber'] = $orderNumber;
	$orderNumber++;
}






	
 





