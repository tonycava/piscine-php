<?php
function factorial(int $arg): float|int
{
    if ($arg <= 1) return 1;
    return $arg * factorial($arg - 1);
}
echo factorial(45);