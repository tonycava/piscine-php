<?php

function getFloor(int $currentFloor, int|null $requestedFloor, array $listOfButton): ?int
{
    if ($requestedFloor == null and count($listOfButton) == 0) {
        return null;
    } elseif (count($listOfButton) > 1 and $requestedFloor != null) {
        return end($listOfButton);
    } elseif (count($listOfButton) == 1) {
        return $currentFloor;
    } elseif (count($listOfButton) == 0) {
        return $requestedFloor;
    }elseif (count($listOfButton) > 1 and $listOfButton[0] < 0) {
        return $listOfButton[1];
    }
    return $listOfButton[0];
}

function getDirection(int $current, int|null $requested, array $list): int
{
    if ($requested == null) return 0;
    if ($current > $requested) return -1;
    if ($current == $requested) return 0;
    return 1;
}

echo getDirection(0, 1, []); // null