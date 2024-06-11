<?php

//    if p is the perimeter of a right angle triangle with integral length sides, { a,b,c }, there are exactly three solutions for p = 120.
//    { 20,48,52}, { 24,45,51}, { 30,40,50 }
//    for which value of p ≤ 1000, is the number of solutions maximised ?

//    если p — периметр прямоугольного треугольника со сторонами целой длины, {a,b,c}, то для p = 120 существует ровно три решения.
//    { 20,48,52 }, { 24,45,51 }, { 30,40,50 }
//    для какого значения p ≤ 1000 максимальное количество решений?

function gcd($a, $b)
{
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function count_solutions($limit)
{
    $counts = array_fill(0, $limit + 1, 0);

    for ($m = 2; $m <= sqrt($limit); $m++) {
        for ($n = 1; $n < $m; $n++) {
            if (($m - $n) % 2 === 1 && gcd($m, $n) === 1) {
                $p = 2 * $m * ($m + $n);
                if ($p > $limit) {
                    break;
                }
                for ($k = 1; $k * $p <= $limit; $k++) {
                    $counts[$k * $p]++;
                }
            }
        }
    }

    $max_count = max($counts);
    $max_p = array_search($max_count, $counts);

    return [$max_p, $max_count];
}

$limit = 1000;
$result = count_solutions($limit);

list($p, $count) = $result;

echo $p;