<?php
function factorial(int $arg): int
{
    if ($arg == 1) return 1;
    return $arg * factorial($arg - 1);
}