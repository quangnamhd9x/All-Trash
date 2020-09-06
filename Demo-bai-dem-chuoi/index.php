<?php
$arr = ['ab', 'cdef', 'abcd', 'ghi'];
$max = strlen($arr[0]);
$arrOut = [];
$count = 0;
for ($i = 0; $i < count($arr); $i++) {
    if (strlen($arr[$i]) > $max) {
        $max = strlen($arr[$i]);
        $count = $arr[$i];
        array_push($arrOut, $count);
    }
}
for ($j = 0; $j < count($arr); $j++) {
    if ($count !== $arr[$j]) {
        if ($max === strlen($arr[$j])) {
            array_push($arrOut, $arr[$j]);
        }
    }
}
    print_r($arrOut);

