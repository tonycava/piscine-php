<?php

function getFloor(int $current, int|null $requested, array $list): ?int
{
    if ($requested == null) return $current;
    if (count($list) > 1) return end($list);

    if ($requested == null && count($list) == 0) return null;
    return $requested;
}

function getDirection(int $current, int|null $requested, array $list): int
{
    if ($requested == null) return 0;
    if ($current > $requested) return -1;
    if ($current == $requested) return 0;
    return 1;
}

echo getFloor(0, null, [-3, 2]);