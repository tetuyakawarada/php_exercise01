<?php

$answer = 0;
$error = false;
$ope = '';

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];

switch ($operator) {
    case 'addition';
        $answer = $num1 + $num2;
        $ope = '+';
        break;
    case 'subtraction';
        $answer = $num1 - $num2;
        $ope = '-';
        break;
    case 'multiplication';
        $answer = $num1 * $num2;
        $ope = '*';
        break;
    case 'division';
        $answer = $num1 / $num2;
        $ope = '/';
        break;
    default;
        $error = true;
        break;
}

if ($error) {
    echo '正しい演算子を指定してください';
} else {
    echo "{$num1} {$ope} {$num2} = {$answer}";
}
