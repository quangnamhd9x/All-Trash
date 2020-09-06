<?php
$array = [1, 2, 3];
$array2 = [1, 2, 3];
function findTrung($array, $array2)
{
    if (count($array) == count($array2)) {
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] == $array2[$i + 1]) {
                if ($array[$i + 1] == $array2[$i]) {
                    if ($array[$i + 2] == $array2[$i + 2]) {
                        return true;
                    } else {
                        return false;
                    }
                }
            }
            if ($array[$i] == $array2[$i]) {
                return true;
            }
        }
    } else {
        return false;
    }
}
var_dump(findTrung($array, $array2));