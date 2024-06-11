<?php

//    A unit fraction contains 1 in the numerator. The decimal representation of the unit fractions with denominators 2 to 10 are given:
//
//    1/2 = 0.5
//    1/3 = 0.(3)
//    1/4 = 0.25
//    1/5 = 0.2
//    1/6 = 0.1(6)
//    1/7 = 0.(142857)
//    1/8 = 0.125
//    1/9 = 0.(1)
//    1/10 = 0.1
//
//    Find the value of d < 1000 for which 1/d contains the longest recurring cycle in its decimal fraction part.

//    Единичная дробь содержит 1 в числителе. Дано десятичное представление единичных дробей со знаменателями от 2 до 10:
//
//    1/2 = 0,5
//    1/3 = 0.(3)
//    1/4 = 0,25
//    1/5 = 0,2
//    1/6 = 0,1(6)
//    1/7 = 0.(142857)
//    1/8 = 0,125
//    1/9 = 0.(1)
//    1/10 = 0,1
//
//    Найдите значение d< 1000, при котором 1/d содержит самый длинный повторяющийся цикл в своей десятичной дробной части.

function getCycleLength($d) {
    $seenRemainders = [];
    $value = 1;
    $position = 0;

    while (!isset($seenRemainders[$value]) && $value != 0) {
        $seenRemainders[$value] = $position;
        $value *= 10;
        $value %= $d;
        $position++;
    }

    return $value == 0 ? 0 : $position - $seenRemainders[$value];
}

$maxLength = 0;
$maxD = 0;

for ($d = 2; $d < 1000; $d++) {
    $cycleLength = getCycleLength($d);
    if ($cycleLength > $maxLength) {
        $maxLength = $cycleLength;
        $maxD = $d;
    }
}

echo "The value of d < 1000 with the longest recurring cycle is: " . $maxD;

