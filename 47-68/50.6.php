<?php
    $day = date('w');
    $arr = ['пн', 'вт', 'ср', 'чт', 'пт','сб', 'вс'];
    foreach ($arr as $key => $value) {
        if ($key == $day) {
            echo '<i>'.$value.'</i><br>';
        }
        else {
            echo $value.'<br>';
        }
    }
    echo '<hr>';
?>