<?php
$array = [180, 20, 70, 10, -1, 90, -1];
$arrayIndex = [];
$arrayResult = [];
for ($i = 0; $i < count($array); $i++){
    if ($array[$i] !== -1){
        array_push($arrayResult, $array[$i]);
    }
    if ($array[$i] == -1){
        array_push($arrayIndex, $i);
    }
}
sort($arrayResult);
for ($j = 0; $j < count($arrayIndex); $j++){
    array_splice($arrayResult, $arrayIndex[$j],0 , -1);
}
echo "<pre>";
print_r($arrayResult);
echo '<br>';

