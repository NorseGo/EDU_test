<?php

function mujSort($pole) {
    $n = count($pole);
    for ($i = 0; $i < $n; $i++) {
        $min = $i;
        for ($j = $i; $j < $n; $j++) {
            if ($pole[$j] < $pole[$min]) {
                $min = $j;
            }
        }   
        $mezipole = $pole[$min];
        $pole[$min] = $pole[$i];
        $pole[$i] = $mezipole;
    }
    return $pole;
}

$pole = [64, 34, 25, 12, 22, 11, 90];
$pole = mujSort($pole);
print_r($pole); 