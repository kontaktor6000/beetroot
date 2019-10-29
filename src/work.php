<?php
$randNumberArray[] = '';
for ($i = 0; $i < 100; $i++) {
    $randNumberArray[$i] = mt_rand(-11, 22);
}

$minus = 0;
$plus = 0;
$zero = 0;

foreach ($randNumberArray as $value ) {
    if ($value > 0) {
        $plus++;
    } elseif ($value < 0) {
        $minus++;
    } else {
        $zero++;
    }
}

echo $plus . '<br>';
echo $minus . '<br>';
echo $zero . '<br>';




//$stringArray = implode(', ', $randNumberArray);
//echo $stringArray;
//$plusArray[] = '';
//$minusArray[] = '';
//$zeroArray[] = '';





/*foreach ($randNumberArray as $value) {
    if ($value > 0) {
        $plusArray[] = $value;
    } elseif ($value < 0) {
        $minusArray[] = $value;
    } else {
        $zeroArray[] = $value;
    }
}

echo 'Plus - ' . count($plusArray) . '<br>';
echo 'Minus - ' . count($minusArray) . '<br>';
echo 'Zero - ' . count($zeroArray) . '<br>';*/



