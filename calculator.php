<?php

function calc(string $str): int {
    $math_string ="print (".$str.");";
    $result = eval($math_string);

    echo $result;

    return $result;
}

