<?php
$array = [14, 4, 5, 1, 18, 6];         // tạo mảng

function bubleSort($arr)                // khai báo hàm sắp xếp "nổi bọt"
{
    for ($i = 0; $i < count($arr); $i++) {         //vòng lặp 1 duyệt mảng arr
        for ($j = 0; $j < count($arr); $j++) {      // vòng lặp 2 so sánh các phần từ liên tiếp
            if ($arr[$i] < $arr[$j]) {
                $temp = $arr[$j];             // hoán vị đổi chỗ phần tử cho nhau
                $arr[$j] = $arr[$i];
                $arr[$i] = $temp;
            }
        }
    }
    return $arr;
}

//print_r(bubleSort($array));

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

//print_r(selectionSort($array));

function insertionSort($arr){
    for ($i = 0; $i < count($arr); $i++){
        $value = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] > $value){
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $value;
    }
    return $arr;
}

print_r(insertionSort($array));