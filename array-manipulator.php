<?php
function reverse(array $arr): array
{
    return array_reverse($arr);
}

function push(array &$arr, string ...$new): int
{
    $arr = [...$arr, ...$new];
    return count($arr);
}

function sum(array $arr): int
{
    return (array_sum($arr));
}

function arrayContains(array $arr, int|string|float $value): mixed
{
    if (in_array($value, $arr)) return $value;
    return "Nothing";
}

function merge(array $arr1, array $arr2, array $arr3)
{
    return array_merge($arr1, $arr2, $arr3);
}

$test = [];
echo push($test, "new") . "\n";
print_r($test);