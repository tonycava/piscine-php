<?php
$nbrRicard = 1;
do {
    if ($nbrRicard === 7){
        echo "Come on number $nbrRicard";
        break;
    }
    echo "Come on number $nbrRicard\n";
    if ($nbrRicard === 3) echo "I'll have to stop soon!\n";
    if ($nbrRicard === 5) echo "I am no longer very fresh ...\n";
    $nbrRicard++;
} while ($nbrRicard != 8);