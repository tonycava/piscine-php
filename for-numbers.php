<?php
function isPrime($nbr)
{
    if ($nbr == 1) return false;
    for ($i = 2; $i <= $nbr / 2; $i++) {
        if ($nbr % $i == 0) return false;
    }
    return true;
}
for ($i = 2; $i <= 96; ++$i) {
    if (isPrime($i)) echo "$i, ";
}
echo "97";