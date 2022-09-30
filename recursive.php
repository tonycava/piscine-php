<?php
function factorial(int $arg): int
{
    if ($arg > 25 || $arg < 0) return 0;
    if ($arg == 1) return 1;
    return $arg * factorial($arg - 1);
}