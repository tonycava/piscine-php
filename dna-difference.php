<?php

function dnaDiff(string $code, string $code2): int|bool {
    if (strlen($code) < strlen($code2) || strlen($code) > strlen($code2)) return false;
    $total = 0;
    for ($i = 0; $i< strlen($code); $i++) {
        if ($code[$i] != $code2[$i]) $total += 1;
    }
    return $total;
}

echo dnaDiff('GAGCCTACTAACGGGAT', 'CATCGTAATGACGGCCT') . "\n"; // 7
echo dnaDiff('GAGCCTACTAACGGGAT', 'CATCGTAATGACGGCCTAZA'); // 7