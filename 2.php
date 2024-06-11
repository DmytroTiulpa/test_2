<?php

//Десятичное число 585 = 1001001001 (двоичное) является палиндромным в обоих основаниях.
//Найдите сумму всех чисел меньше миллиона, являющихся палиндромами по основанию 10 и 2.
//(Обратите внимание, что палиндромное число в любом основании не может включать ведущие нули.)

// Функция для проверки, является ли строка палиндромом
function is_palindrome($str) {
    return $str === strrev($str);
}

$sum = 0;
$limit = 1000000;

for ($i = 1; $i < $limit; $i++) {
    $decimal_str = (string)$i;
    $binary_str = decbin($i);

    if (is_palindrome($decimal_str) && is_palindrome($binary_str)) {
        $sum += $i;
    }
}

echo $sum;

/*function is_palindrome($str) {
    $is_palindrome = ($str === strrev($str));
    if ($is_palindrome) {
        echo 1;
    } else {
        echo 0;
    }
}

$sum = 0;
$limit = 1000000;

for ($i = 1; $i < $limit; $i++) {
    $decimal_str = (string)$i;
    $binary_str = decbin($i);

    ob_start();
    is_palindrome($decimal_str);
    $is_decimal_palindrome = (int) ob_get_clean();

    ob_start();
    is_palindrome($binary_str);
    $is_binary_palindrome = (int) ob_get_clean();

    if ($is_decimal_palindrome && $is_binary_palindrome) {
        $sum += $i;
    }
}

echo $sum;*/