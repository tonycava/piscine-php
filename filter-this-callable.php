<?php

function myArrayFilter($arr, $func = null): array
{
    $result = [];

    if ($func == null) {
        $func = function ($arg) {
            return !!$arg;
        };
    }

    foreach ($arr as $ar) {
        if ($func($ar)) $result[] = $ar;
    }


    return $result;

}
