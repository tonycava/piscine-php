<?php
function factorial(int $arg): int
{
    if ($arg <= 1) return 1;
    return intval($arg * factorial($arg - 1));
}