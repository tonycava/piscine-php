<?php

function checkCircuits(int $code): array
{
    $res = [];

    if ($code % 2 === 0) array_push($res, "Left arm");
    if ($code % 3 === 0) array_push($res, "Right arm");
    if ($code % 5 === 0) array_push($res, "Motherboard");
    if ($code % 7 === 0) array_push($res, "Processor");
    if ($code % 11 === 0) array_push($res, "Zip Defluxer");
    if ($code % 13 === 0) array_push($res, "Motor");

    return $res;
}