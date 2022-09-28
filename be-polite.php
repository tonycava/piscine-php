<?php
$hour = date("H");
if ($hour > 6 and $hour < 12) {
    echo "Hello! Have a nice day :)";
} else if ($hour > 12 and $hour <= 18) {
    echo "Have a good afternoon!";
} else if ($hour > 18 and $hour < 21) {
    echo "Good evening! Hope you had a good day!";
} else {
    echo "Good night! See you tomorrow :)";
}
