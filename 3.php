<?php

//    How many distinct terms are in the sequence generated by ab for 2 ≤ a ≤ 100 and 2 ≤ b ≤ 100?
//
//    Example
//    How many distinct terms are in the sequence generated by ab for 2 ≤ a ≤ 5 and 2 ≤ b ≤ 5? Consider all integer combinations of ab for 2 ≤ a ≤ 5 and 2 ≤ b ≤ 5:
//
//    22=4, 23=8, 24=16, 25=32
//    32=9, 33=27, 34=81, 35=243
//    42=16, 43=64, 44=256, 45=1024
//    52=25, 53=125, 54=625, 55=3125
//
//    If they are then placed in numerical order, with any repeats removed, we get the following sequence of 15 distinct terms:
//    4, 8, 9, 16, 25, 27, 32, 64, 81, 125, 243, 256, 625, 1024, 3125
//
//    The output is "15 ".

//    Сколько различных терминов содержится в последовательности, созданной оператором ab для 2 ≤a≤ 100 и 2 ≤b≤ 100?
//
//    Пример
//    Сколько различных терминов содержится в последовательности, созданной выражением ab для 2 ≤a≤ 5 и 2 ≤b≤ 5? Рассмотрим все целочисленные комбинации ab для 2 ≤a≤ 5 и 2 ≤b≤ 5:
//
//    22=4, 23=8, 24=16, 25=32
//    32=9, 33=27, 34=81, 35=243
//    42=16, 43=64, 44=256, 45=1024
//    52=25, 53=125, 54=625, 55=3125
//
//    Если затем разместить их в числовом порядке и удалить все повторы, мы получим следующую последовательность из 15 различных терминов:
//    4, 8, 9, 16, 25, 27, 32, 64, 81, 125, 243, 256, 625, 1024, 3125.
//
//    Выход — «15».

// Создаем пустое множество для хранения уникальных значений
$unique_terms = [];

// Перебираем все значения a от 2 до 100
for ($a = 2; $a <= 100; $a++) {
    // Перебираем все значения b от 2 до 100
    for ($b = 2; $b <= 100; $b++) {
        // Вычисляем a^b как строку
        $term = (string)($a ** $b);
        // Добавляем результат в массив, если его там еще нет
        if (!in_array($term, $unique_terms, true)) {
            $unique_terms[] = $term;
        }
    }
}

// Выводим количество уникальных значений
echo count($unique_terms);