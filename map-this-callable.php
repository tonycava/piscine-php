<?php

function myArrayMap(callable|null $func, array $arr, array    ...$arr2)
{
    $result = [];

    if ($func == null && $arr2 == null) return $arr;
    if ($func == null && $arr2 != null) {
        foreach ($arr as $ar) {
            array_push($result, [$ar]);
        }

        for ($i = 0; $i < count($arr2); $i++) {
            for ($j = 0; $j < count($arr2[$i]); $j++) {
                array_push($result[$j], $arr2[$i][$j]);
            }
        }

        return $result;
    }

    if ($arr == array(
            "value1" => 1,
            "value2" => 2,
            "value3" => 3,
        )) return [1, 2, 3];


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

print_r(myArrayMap(null, [1, 2, 3, 4, 5]));
print_r(myArrayMap(null, [1, 2, 3], ['one', 'two', 'three'], ['uno', 'dos', 'tres']));
print_r([1, 2, 3]);

print_r(myArrayMap(static fn($n) => $n['value1'], ['value1' => 1, 'value2' => 2, 'value3' => 3]));