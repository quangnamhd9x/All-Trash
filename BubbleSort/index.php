<?php

function bubbleSort($array)
{
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] < $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}

function insertSort($array)
{
    for ($i = 0; $i < count($array); $i++) {
        $value = $array[$i];
        $j = $i - 1;

        while ($j >= 0 && $array[$j] < $value) {
            $array[$j + 1] = $array[$j];
            $j--;
        }
        $array[$j + 1] = $value;
    }

    return $array;
}

function selectionSort($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        $min = $i;                                  // khai báo giá trị nhỏ nhất
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        if ($min != $i) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $temp;
        }
    }
    return $arr;
}

$start = microtime(true);
$arrayNumbers = [];

    for ($i =0; $i < 10000; $i++) {
        array_push($arrayNumbers, mt_rand(1, 10000));
    }

//randomArray($arrayNumbers);

echo "<pre>";

print_r(insertSort($arrayNumbers));

$end = microtime(true);
$time = $end - $start;

echo $time;

