<?php

    $line = trim(fgetc(STDIN));

    $result = explode(" ", $line);

    $a = doubleval($result[0]);
    $b = doubleval($result[1]);

    $result = 6.28 * $a * ($a + $b);

    $result = numfmt_format($result, 2, '.', '');

    fwrite(STDOUT, $result);

    var_dump('3');
/*

    Написать программу для нахождения площади цилиндра по его радиусу основания и высоте.

    На вход программе подаётся 2 дробных числа - радиус основания цилиндра и его высота. Ответ округлить строго до 2х знаков после запятой

    Число pi считается равной 3.14

 */