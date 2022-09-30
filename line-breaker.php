<?php

function breakLines(string $str, int $at)
{
    return wordwrap($str, $at);
}