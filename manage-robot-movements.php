<?php

function manageMovements(string $mouvements): array
{
    $res = [];

    for ($i = 1; $i < strlen($mouvements); $i++) {

        $last = $mouvements[$i - 1];
        $actual = $mouvements[$i];


        if ($last == $actual && $last = "R" && $actual == "R") array_push($res, "RIGHT AGAIN");
        else if ($last == $actual && $last = "L" && $actual == "L") array_push($res, "LEFT AGAIN");
        else if ($last == $actual && $last = "F" && $actual == "F") array_push($res, "FRONT AGAIN");
        else if ($last == $actual && $last = "B" && $actual == "B") array_push($res, "BACKWARDS AGAIN");

        else if ($actual == "R") array_push($res, "RIGHT");
        else if ($actual == "L") array_push($res, "LEFT");
        else if ($actual == "F") array_push($res, "FRONT");
        else if ($actual == "B") array_push($res, "BACKWARDS");
    }


    return $res;
}

print_r(manageMovements("RRL"));