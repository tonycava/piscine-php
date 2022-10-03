<?php
function joinWords(array $arr, string $word = " "): string
{
    $result = "";
    foreach ($arr as $mot) {
        $result .= $mot . $word;
    }

    return substr($result, 0, -1);
}