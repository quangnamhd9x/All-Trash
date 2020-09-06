<?php
$n = 10;
$m = 3;
$result = 0;
if($n % $m == 0){
    $result = $n/$m;
} elseif (($n % $m > 0)){
    $result = $n - ($n % $m);
}
echo $result;
