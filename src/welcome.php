<?php
include 'array.php';

$userMaxId = '0';
$userMinId = '0';
foreach ($users as $user) {
	if ($user['id'] > $userMaxId) {
		$userMaxId = $user['id'];
	}
}
$userMinId = $userMaxId;
foreach ($users as $user) {
	if ($user['id'] < $userMinId) {
		$userMinId = $user['id'];
	}
}


$langMinIdUser = $users[$userMinId]['lang'];
$langMaxIdUser = $users[$userMaxId]['lang'];

if ( (isset($users[$userMinId]['lang']) && isset($users[$userMaxId]['lang'] )) && ($users[$userMinId]['lang'] === $users[$userMaxId]['lang']) ) {	
	echo $salutation[$langMinIdUser]['hi'] . ', ' . $users[$userMinId]['name'] . $salutation[$langMinIdUser]['separator'] . $users[$userMaxId]['name'] . '!';
} else {
	echo $salutation[$langMinIdUser]['hi'] . ', ' . $users[$userMinId]['name'] . '!<br>' . 
	$salutation[$langMaxIdUser]['hi'] . ', ' .$users[$userMaxId]['name'] . '!<br>';
}







?>