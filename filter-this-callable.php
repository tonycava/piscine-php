<?php

function myArrayFilter($arr, $func = null)
{
    $result = array();

    if ($func == null) {
        $func = function ($arg) {
            return !!$arg;
        };
    }

    foreach ($arr as $key => $value) {

        if ($func($value)) $result[$key] = $value;
    }

    return $result;
}
//
//$entry = [
//    0 => 'foo',
//    1 => false,
//    2 => -1,
//    3 => null,
//    4 => '',
//    5 => '0',
//    6 => 0,
//];
//
//print_r(myArrayFilter($entry));

//function odd($var)
//{
//    return $var & 1;
//}
//
//function even($var)
//{
//    return !($var & 1);
//}
//
//$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
//$array2 = [6, 7, 8, 9, 10, 11, 12];
//
//echo "Impair :\n";
//print_r(myArrayFilter($array1, "odd"));
//echo "Pair :\n";
//print_r(myArrayFilter($array2, "even"));
//
//print_r(array_filter($array2, "even"));