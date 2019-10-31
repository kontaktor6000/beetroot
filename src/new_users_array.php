<?php 
/* Используя массив юзеров с предыдущего урока и циклы, выполните следующие действия:

   - с помощью цикла сформируйте новый массив, содержащий пользователей в обратном порядке от исходного массива (первый пользователь станет последним, второй — предпоследним и т.д.) */

   require_once 'array.php';
   
   $arrayReversUsers = [];
   $cnt = count($users);
   foreach ($users as $key => $user) {
        $arrayReversUsers[$cnt-1] = $user;
        $cnt--;
    }

    for ($i = 0; $i < count($arrayReversUsers); $i++) {
        $finallyArrayUsers[] = $arrayReversUsers[$i];
    }

    foreach ($finallyArrayUsers as $key => $user) {
        $finallyArrayUsers2[$user['id']] = $user;
    }

    echo '<pre>';
    print_r($finallyArrayUsers2);
    echo '</pre>';

   
   
   
   
/* 	echo '<pre>';
	print_r($users);
	echo '</pre>';

	$reversUsers = array_reverse($users, true);

	echo '<pre>';
	print_r($reversUsers);
	echo '</pre>'; */