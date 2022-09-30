<?php
function reverse(string $str): string
{
    return strrev($str);
}

function isPalindrome(string $str): bool
{
    return $str === reverse($str);
}