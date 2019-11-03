<?php
/*Используя строковые функции сделайте следующее:

- дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'.
Удалите из нее все цифры. В нашем случае должна получится строка 'abcbdefgh' */

$string = '1a2b3c4b5d6e7f8g9h0';
$pattern = '/(\d+)/i';
$replacement = '';
echo preg_replace($pattern, $replacement, $string);