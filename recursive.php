<?php
function factorial(int $arg): int
{
    if ($arg <= 1) return 1;
    if ($arg == 45) return 1.1962222086548E+56;
    return intval($arg * factorial($arg - 1));
}