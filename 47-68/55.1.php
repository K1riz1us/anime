<?php
    $arr = ['a', 'b', 'c', 'd', 'e'];
    foreach ($arr as $elem) {
        if ($elem === 'c') {
            $flag = true;
            break;
        }
    }

    if ($flag === true) {
        echo 'есть';
    } else {
        echo 'нет';
    }
?>