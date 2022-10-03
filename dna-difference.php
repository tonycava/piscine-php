<?php

function dnaDiff(string $code, string $code2): int|bool {
    $total = 0;
    for ($i = 0; $i< strlen($code); $i++) {
        if ($code[$i] != $code2[$i]) $total += 1;
    }
    return $total != 0 ? $total : false;
}

echo dnaDiff('GAGCCTACTAACGGGAT', 'CATCGTAATGACGGCCT');