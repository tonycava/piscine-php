<?php

function f()
{
    return array(
        "+" => static fn(int $x, int $y) => $x + $y,
        "-" => static fn(int $x, int $y) => $x - $y,
        "*" => static fn(int $x, int $y) => $x * $y,
    );
}

