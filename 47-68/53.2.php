<?php
$arr = [2, 5, 4, -1, 0, 7 ,9];
$sum =0;

foreach($arr as $key => $val) {
    if($val < 0) {
        break;
    }
    
    $sum += $val;
}

echo $sum;
?>