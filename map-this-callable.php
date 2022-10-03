<?php
function myArrayMap(
    callable|null $func,
    array|null   $arr,
    array|null    ...$arr2
)
{
    $result = [];

    foreach ($arr as $key => $value) {
        if (!is_array($value)) {
            array_push($result, $func($value));

        } else {
            array_push($result,myArrayMap(
                $func,
                $arr[$key],
                $arr2
            ));
        }
    }


    if ($arr2 != null) {
        foreach ($arr as $key => $value) {
            if (!is_array($value)) {
                array_push($result, $func($value));

            } else {
                array_push($result,myArrayMap(
                    $func,
                    $arr[$key],
                    $arr2
                ));
            }
        }
    }


    return $result;
}

print_r(myArrayMap(static fn($n) => $n * $n * $n, [1, 2, 3, 4, 5]));
print_r([1,2,3]);