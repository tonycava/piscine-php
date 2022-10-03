<?php
function myArrayReduce($array, $callback, $initial=null)
{
    $acc = $initial;
    foreach($array as $a)
        $acc = $callback($acc, $a);
    return $acc;
}