<?php
function findMin($array){
    $index = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < $index) {
            $index = $array[$i];
        }
    }
    return $index;
}
$min = findMin([1,2,5,7,8,9,1,5]);
echo $min;