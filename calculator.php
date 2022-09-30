<?php

function calc(string $str): int
{
    return matheval($str);
}

function matheval($equation){
    $equation = preg_replace("/[^0-9+\-.*\/()%]/","",$equation);
    $equation = preg_replace("/([+-])([0-9]+)(%)/","*(1\$1.\$2)",$equation);
    // you could use str_replace on this next line
    // if you really, really want to fine-tune this equation
    $equation = preg_replace("/([0-9]+)(%)/",".\$1",$equation);
    if ( $equation == "" ) {
        $return = 0;
    } else {
        eval("\$return=" . $equation . ";" );
    }
    return $return;
}

echo calc("1+1");