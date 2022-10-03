<?php

function myArrayFilter(callable|array $func, array|callable $arr = []): array
{
    $result = [];

    if (count($func) > 0) return $arr;

    if (count($func) > 0) {
        foreach ($func as $ar) {
            if ($func($ar)) $result[] = $ar;
        }
    }

    return $result;

}

function odd($var)
{
    return $var & 1;
}

function even($var)
{
    return !($var & 1);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo "Impair :\n";
print_r(array_filter(["odd"], $array1));
echo "Pair :\n";
print_r(array_filter($array2, "even"));