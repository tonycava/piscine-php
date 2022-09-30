<?php
function reverser(string $str): string
{
    return strrev($str);
}

function isPalindrome(string $str): bool
{
    return $str == reverser($str);
}