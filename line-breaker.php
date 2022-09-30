<?php

function breakLines(string $str, int $at): string{
    return wordwrap($str, $at);
}