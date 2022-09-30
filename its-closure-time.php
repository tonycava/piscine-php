<?php

$sub = function (int $x, int $y): int {
    return $x - $y;
};

$add = function (int $x, int $y): int {
    return $x + $y;
};

$mult = function (int $x, int $y): int {
    return $x * $y;
};

$toReturn = [$add, $sub, $mult];

function f(): array
{
    $toReturn = [];
    return $toReturn;
}

