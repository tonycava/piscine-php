<?php

function myArrayFilter(callable $func, array $arr)
{
    $result = [];

    foreach ($arr as $ar) {
        if ($func($ar)) $result[] = $ar;
    }
    return $result;
}
