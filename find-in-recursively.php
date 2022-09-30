<?php


function findIn(string $needle, array $haystack): string|bool
{
    $iterator  = new RecursiveArrayIterator($haystack);
    $recursive = new RecursiveIteratorIterator(
        $iterator,
        RecursiveIteratorIterator::SELF_FIRST
    );
    foreach ($recursive as $key => $value) {
        if ($key === $needle) {
            return $value;
        }
    }
    return false;
}

//$tab = [
//    "name" => "forIn",
//    "type" => "function",
//    "arguments" => [
//        "firstParam" => [
//            "paramType" => "string",
//            "description" => "the value key to find"
//        ],
//        "secondParam" => "array"
//    ],
//    "return" => "string or bool"
//];

//echo recursiveFind('name', $tab);
// returns "forIn"
//echo recursiveFind('description', $tab);
// returns "the value key to find"
//echo recursiveFind('secondParam', $tab);
// returns "array"
//echo recursiveFind('yeah', $tab);
// returns "false"