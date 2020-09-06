<?php
$array = [50, 30, 10, 20, 80];
$sumTeam1 = 0;
$sumTeam2 = 0;
$arrayResult = [];
for ($i = 0; $i < count($array); $i+=2){
    $sumTeam1 += $array[$i];
}
for ($i = 1; $i < count($array); $i+=2){
    $sumTeam2 += $array[$i];
}
array_push($arrayResult, $sumTeam1);
array_push($arrayResult, $sumTeam2);

print_r($arrayResult);