<?php
$arr = [1,5,10, -2];
function swap($arr) {
    $arrNew = [];
    for ($i = 0; $i < count($arr); $i++){
        $arrNew[$i] = $arr[count($arr) - ($i + 1)];
    }
    return $arrNew;
}
print_r(swap($arr));