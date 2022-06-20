<?php

    $line = trim(fgetc(STDIN));

    $result = 0;

    $line = str_split($line);

    foreach ($line as $a) {
        $result += intval($a);
    };

    fwrite(STDOUT, $result);

/*
    Дано целое положительное число. Вернуть сумму всех цифр этого числа.
 */