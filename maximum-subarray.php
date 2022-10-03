<?php
function findMaximumSubarray(array $arr): int|float
{
    $max_sum = 0;
    $current_sum = 0;

    for ($i = 0; $i < count($arr); $i++) {
        $current_sum += $arr[$i];

        if ($current_sum < 0) $current_sum = 0;

        if ($max_sum < $current_sum) $max_sum = $current_sum;
    }
    return $max_sum;
}