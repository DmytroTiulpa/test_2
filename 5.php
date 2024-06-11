<?php

//    The first three consecutive numbers to have three distinct prime factors are:
//    644 = 22 × 7 × 23
//    645 = 3 × 5 × 43
//    646 = 2 × 17 × 19.
//    Find the first four consecutive integers to have four distinct prime factors each. What is the first of these numbers?

//    Первые три последовательных числа, имеющие три различных простых множителя:
//    644 = 2^2×7×23
//    645 = 3 × 5 × 43
//    646 = 2×17×19.
//    Найдите первые четыре последовательных целых числа, каждое из которых имеет по четыре различных простых делителя. Какое первое из этих чисел?

function primeFactors($n) {
    $factors = [];
    $d = 2;
    while ($n > 1) {
        while ($n % $d === 0) {
            if (!in_array($d, $factors, true)) {
                $factors[] = $d;
            }
            $n /= $d;
        }
        $d++;
    }
    return $factors;
}

$n = 1;
$count = 0;
$result = [];

while ($count < 4) {
    if (count(primeFactors($n)) === 4) {
        $count++;
    } else {
        $count = 0;
    }
    if ($count === 4) {
//        echo "Найдены четыре последовательных числа и их простые множители:<br>";
        for ($i = $n - 3; $i <= $n; $i++) {
            echo "$i: ";
            $factors = primeFactors($i);
            echo implode("×", $factors) . "<br>";
//            foreach ($factors as $factor) {
//                echo "Простой множитель $factor <br>";
//            }
            $result[] = $i;
        }
    }
    $n++;
}

echo $result[0];