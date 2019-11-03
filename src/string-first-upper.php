<?php
/*Используя строковые функции сделайте следующее:
- дана строка 'london is the capital of great britain'.
Сделайте из нее строку 'London Is The Capital Of Great Britain'
*/
$string = 'london is the capital of great britain';
echo $string = mb_convert_case($string, MB_CASE_TITLE, "UTF-8");
