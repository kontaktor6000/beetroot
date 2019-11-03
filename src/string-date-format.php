<?php
/*Используя строковые функции сделайте следующее:

 - в переменной $date лежит дата формата '31-12-2020'. Преобразуйте эту дату в формат '2020.12.31'. */

$date = '31-12-2020';

$date = explode('-', $date);
$newFormatDate = array_reverse($date);
$newStringDate = implode('.', $newFormatDate);

var_dump($newStringDate);
