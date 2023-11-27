<?php

function calculate($x) {
    $result = 0;
    if ($x <= 10) {
        $result =  7 * $x + 18;
    }
    else if ($x < 20) {
        if ($x == 16) {
            return "division by zero";
        }
        $result = ($x - 17)/(8-$x*0.5);
    } else {
        $result =  ($x+4) * ($x-7);
    }
    return round($result, 3);
}

?>