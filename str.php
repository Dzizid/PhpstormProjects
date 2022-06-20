<?php

    $line = trim(fgetc(STDIN));

    function check_prime($num) {
        if ($num == 1)
            return 'false';
        for ($i = 2; $i <= $num/2; $i++)
        {
            if ($num % $i == 0)
                return 'false';
        }
        return 'true';
    }

    fwrite(STDOUT, check_prime(intval($line)));

/*

    На вход подаётся натуральное число n(0 < n <= 1000) Вернуть строковое значение true сли число простое, иначе вернуть false

 */