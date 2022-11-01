<?php
    $arr = [10, 20, 30, 50, 235, 3000];
    $arr = array_filter($arr, function($i){
        $char = str_split($i)[0];
        $chars = [1, 2, 5];
        return in_array($char, $chars);
    });

    var_dump($arr);
?>