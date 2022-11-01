<?php
    $arr = [1, 2, -5, 9, -15, -1, 4];
    $res = 0;
    foreach ($arr as $elem) {
        if ($elem > 0) {
            $res += $elem;
        }
    }
    echo $res;
?>