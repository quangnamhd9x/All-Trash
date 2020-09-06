<?php
$array = [
    [0,1,2,0],
    [2,0,0,1],
    [1,1,2,0]
];
for ($i = 0; $i < count($array); $i++){
  for ($j = 0; $j < count($array); $j++){
      if ($array[$j][$i] == 0){
          break;
      }
  }
}
$sum = 0;
$sum += $array[$j][$i];
echo $sum;