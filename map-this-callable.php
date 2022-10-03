<?php
function myArrayMap(
    callable $func,
    array    $arr,
    array    ...$arr2
)
{
    $result = [];

    foreach ($arr as $key => $value) {
        $updated_key = $func($key);

        if (!is_array($value)) {
            $result[$updated_key] = $func($value);

        } else {
            $result[$updated_key] = myArrayMap(
                $func,
                $arr[$key],
                $arr2
            );
        }
    }


    if ($arr2 != null) {
        foreach ($arr as $key => $value) {

            $updated_key = $func($key);
            if (!is_array($value)) {
                $result[$updated_key] = $func($value);

            } else {
                $result[$updated_key] = myArrayMap(
                    $func,
                    $arr[$key],
                    $arr2

                );
            }
        }
    }


    return $result;

}