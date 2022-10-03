<?php
function myArrayMap(
    callable $func = null,
    array   $arr,
    array    ...$arr2
)
{
    $result = [];

    foreach ($arr as $key => $value) {
        if (!is_array($value)) {
            $result[] = $func($value);

        } else {
            $result[] = myArrayMap(
                $func,
                $arr[$key],
                $arr2
            );
        }
    }


    if ($arr2 != null) {
        foreach ($arr as $key => $value) {
            if (!is_array($value)) {
                $result[] = $func($value);

            } else {
                $result[] = myArrayMap(
                    $func,
                    $arr[$key],
                    $arr2
                );
            }
        }
    }


    return $result;
}

print_r(myArrayMap(static fn($n) => $n * $n * $n, [1, 2, 3, 4, 5]));
print_r([1,2,3]);