<?php
$date = "It is " . date('F t, Y');

$today = function () use ($date) {
    return $date;
};

$my_year = date("Y");

$isLeapYear = function($my_year) {
    if ($my_year % 4 == 0)
        return true;
    else
        return false;
};

echo $today();