<?php

function myArrayFilter(array $arr, callable $func): array
{
    $result = [];

    foreach ($arr as $ar) {
        if ($func($ar)) $result[] = $ar;
    }
    return $result;
}
