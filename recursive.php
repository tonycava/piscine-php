<?php
function factorial(int $arg): float
{
    $result = 1;
    for ($i = $arg; $i >= 1; $i--) {
        $result *= $i;
    }
    return $result;
}

echo factorial(35);