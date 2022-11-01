<?php
    $arr = [2, 5, 9, 15, 1, 4];
    foreach ($arr as $elem) {
        if ($elem > 3) {
            if ($elem < 10){
            echo $elem.'<br>';
            }
        }
    }
?>