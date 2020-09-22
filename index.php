<?php

    function Fatorial($num)
    {
        if ($num == 1)
        {
            return $num;
        } else {
            return $num * Fatorial($num -1);
        }
    }

    echo Fatorial(5) . "\n";
    echo Fatorial(7) . "\n";