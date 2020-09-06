<?php
$array = [
    [1, 3, 4, 5],
    [3, 7, 9, 8],
    [1, 3, 3, 8],
    [1, 0, 3, 9]
];
$sum = 0;
$sum2 = 0;
for ($i = 0; $i < count($array); $i++) {
    $sum += $array[$i][count($array) - 1 - $i];
}
for ($j = 0; $j < count($array) - 1; $j++) {
    $sum2 += $array[$j][$j + 1];
}
echo $sum;
echo '<br>';
echo $sum2;