<?php
	$arr = [
		1 => 125,
		2 => 225,
		3 => 128,
		4 => 356,
		5 => 145,
		6 => 281,
		7 => 452,
	];
    $arr_fin = [];
    foreach ($arr as $key => $elem){
        $str = (string)$elem;
        if($str[0] == '1' or $str[0] == '2'){
            $arr_fin[] = $elem;

        }
    }
    var_dump($arr_fin);
?>