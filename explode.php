<?php
function explodeWords(string $toExp, string $word = " ", int $delimiter = PHP_INT_MAX): array
{
    $stock = "";
    $res = [];
    $canPush = true;
    $toExp .= $word;

    for ($i = 0; $i < strlen($toExp); $i++) {
        if ($toExp[$i] == $word && $canPush) {

            if (count($res) + 1 == $delimiter) $canPush = false;

            if (count($res) + 1 != $delimiter) {
                $res[] = ltrim($stock, $word);
            }

            if ($delimiter != 2) $stock = "";
        }
        $stock .= $toExp[$i];
    }


    if ($delimiter == 2) array_push($res, ltrim($stock, $res[0] . $word));

    if ($delimiter < 0) {
        for ($i = $delimiter; $i < 0; $i++) {
            array_pop($res);
        }
    }

    return $res;
}

print_r(explodeWords('My name is John')); // ['My', 'name', 'is', 'John']

print_r(explodeWords('My-name/is-John', '/')); // ['My-name', 'is-John']

print_r(explodeWords('My-name/is-John/and-i-love-apple', '/', 2)); // ['My-name', 'is-John/and-i-love-apple']

print_r(explodeWords('My-name/is-John/and-i-love-apple', '/', -1)); // ['My-name', 'is-John']

print_r(explodeWords('La-fonction/explode/est/trop-bien', '/', 2)); // ['My-name', 'is-John']