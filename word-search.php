<?php
function searchWord(array $board, string $search): bool
{
    $numberOfLetter = [];
    for ($i = 0; $i < count($board); $i++) {
        for ($j = 0; $j < count($board[$i]); $j++) {
            $numberOfLetter[$board[$i][$j]] += 1;
        }
    }

//    print_r($numberOfLetter);

    for ($i = 0; $i < count($board); $i++) {
        for ($j = 0; $j < count($board[$i]); $j++) {

            if (str_contains($search, $board[$i][$j])) {

                if ($numberOfLetter[$board[$i][$j]] <= 0) return false;

                $numberOfLetter[$board[$i][$j]] -= 1;

                $pos = strpos($search, $board[$i][$j]);

                $search = substr_replace($search, "", $pos, 1);

            };
        }
    }

    if ($search == "") return true;

    return false;
}

$board = [
    ['a', 'b', 'c', 'd'],
    ['d', 'k', 'l', 'm'],
    ['m', 'f', 'b', 's']
];

// Word can be constructed as letters from adjacent cells sequentially
// where the 'adjacent' cells are the neighboring ones horizontally or vertically
printf(searchWord($board, 'abcd') . "\n" . "abcd"); // true
printf(searchWord($board, 'abcl') . "\n"); // true
printf(searchWord($board, 'admfbl') . "\n"); // true

// It is not allowed to use the same letter twice
printf(searchWord($board, 'abcc') . "\n"); // false
printf(searchWord($board, 'abcdc') . "\n"); // false
printf(searchWord($board, 'dklml') . "\n"); // false