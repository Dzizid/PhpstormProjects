<?php

    $line = trim(fgets(STDIN));

    $line = explode(' ', $line);

    function is_anagram($string_1, $string_2)
    {
        if (count_chars($string_1, 1) == count_chars($string_2, 1))
            return 'true';
        else
            return 'false';
    }

    fwrite(STDOUT, is_anagram($line[0],$line[1]));

    var_dump('2');

//readme
/*

    Дано 2 строки, переданные через пробел. Вернуть строковое значение true, если строки являются анаграммами, иначе вернуть false

*/


