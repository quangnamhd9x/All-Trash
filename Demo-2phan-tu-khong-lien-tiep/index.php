<?php
$array = [0, 0, 1, 4, 7];
//function findArray($array){
//    for ($i = 0; $i < count($array); $i++){
//        if ($array[$i+1] - $array[$i] == 1 || $array[$i+1] - $array[$i] == -1){
//            return 'chuan';
//        } elseif ($array[$i+1] - $array[$i] !== 1 || $array[$i+1] - $array[$i] !== -1){
//            return 'sai';
//        }
//    }
//}
//
//print_r(findArray($array));
//
//function findArray($array){
//    for ($i = 0; $i < count($array); $i++){
//        if ($array[$i+1] = $array[$i] == 0){
//            return 'chuan';
//        } else {
//            return 'sai';
//        }
//    }
//}
//
//print_r(findArray($array));
$number = 134008;
function findLucky($number)
{
    $str1 = substr($number, 0, strlen($number)/2);
    $str2 = substr($number, strlen($number)/2, strlen($number));
    $array1 = str_split($str1);
    $array2 = str_split($str2);
    if (array_sum($array1) == array_sum($array2)){
        return "chuan roi";
    } else {
        return "sai roi";
    }
}
print_r(findLucky($number));

