<?php
$arrayNumbers = [1, 2, 3, 1, 2, 5, 6, 7, 8, 1, 2];
function delete($array)
{
    $arr = array_reverse($array);
    for ($i = count($arr); $i >= 1; $i--) {
        for ($j = $i - 1; $j >= 0; $j--) {
            if ($arr[$i] == $arr[$j]) {
                if (isset($arr[$j])) {
                    unset($arr[$j]);
                }
            }
        }
    }
    return array_reverse($arr);
}
echo "<pre>";
print_r(delete($arrayNumbers));
