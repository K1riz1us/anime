<?php
    $arr = ['пн', 'вт', 'ср', 'чт', 'пт','сб', 'вс'];
    foreach ($arr as $key => $value) {
        if ($key < 5) {
            echo $value.'<br>';
        }
        else {
            echo '<b>'.$value.'</b><br>';
        }
    }
    echo '<hr>';
?>