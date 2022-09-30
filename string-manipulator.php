<?php
function capsMe(string $str): string
{
    return strtoupper($str);
}

function lowerMe(string $str): string
{
    return strtolower($str);
}

function upperCaseFirst(string $str): string
{
    return ucwords($str);
}

function lowerCaseFirst(string $str): string
{
    $final = "";
    $arr = explode(" ", $str);
    foreach ($arr as $words) {
        if (lcfirst($words[0]) === $words[0]) {
            $final .= $words . " ";
        } else {
            $final .= lcfirst($words) . " ";
        }
    }
    return trim($final);
}

function removeBlankSpace(string $str): string
{
    return trim($str);
}

echo lowerCaseFirst("Hello BaBe");
