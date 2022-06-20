<?php

    $line = trim(fgetc(STDIN));

    function maxSubArraySum($a)
    {
        $max_so_far = PHP_INT_MIN;
        $max_ending_here = 0;

        for ($i = 0; $i < count($a); $i++) {
            $max_ending_here = $max_ending_here + intval($a[$i]);
            if ($max_so_far < $max_ending_here)
                $max_so_far = $max_ending_here;

            if ($max_ending_here < 0)
                $max_ending_here = 0;
        }
        return $max_so_far;
    }

    fwrite(STDOUT, maxSubArraySum(' ', $line));

/*

    Для массива целых чисел найдите непрерывный подмассив (содержащий хотя бы одно число), который имеет наибольшую сумму, и верните его сумму

 */