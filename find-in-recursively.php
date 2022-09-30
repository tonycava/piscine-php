<?php
function findIn(string $keyOfArg, array $array): string|bool
{
    $last = "";
    foreach ($array as $key => $value) {
        if ($key == $keyOfArg) {
            return $value;
        }

        if (is_array($value)) {
            $last = findIn($keyOfArg, $value);
        }
    }
    if ($last) return $last;
    return false;
}

$tab = [
    "name" => "forIn",
    "type" => "function",
    "arguments" => [
        "firstParam" => [
            "paramType" => "string",
            "description" => "the value key to find"
        ],
        "secondParam" => "array"
    ],
    "return" => "string or bool"
];

echo findIn("name", $tab) . "\n";
// returns "forIn"

echo findIn('description', $tab) . "\n";
// returns "the value key to find"

echo findIn('secondParam', $tab) . "\n";
// returns "array"

echo findIn('return', $tab) . "\n";
// returns "string or bool";