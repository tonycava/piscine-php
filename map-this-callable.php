<?php
function myArrayMap(
    callable $func,
    array    $arr
)
{
    $result = [];

    foreach ($arr as $key => $value) {
        $updated_key = $func($key);
        if (!is_array($value)) {

            $result[$updated_key] = $func($value);

        } else {
            $result[$updated_key] = array_map_recursive(
                $func,
                $arr[$key]
            );
        }
    }

    return $result;

}