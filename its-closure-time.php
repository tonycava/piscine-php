<?php

function f() use(&$add)
{
    return array(
        "+" => static fn (int $x, int $y) => $x + $y,
        "-" => static fn (int $x, int $y) => $x - $y,
        "*" => static fn (int $x, int $y) => $x * $y,
    );
}

