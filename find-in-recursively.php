<?php
function findIn(string $keyOfArg, array $array): string|bool|null
{
    foreach ($array as $key => $value) {
        if (is_array($value)) {
           return findIn($keyOfArg, $value);

        } elseif ($key == $keyOfArg) {
            return $value;
        }

    }
    return false;
}