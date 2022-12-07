<?php
function getDivisors($num) {
	$i=0;
	$result = [];
	foreach ($num as $i) {
		$i++;
if($num % $i == 0)
array_push($result, $i);
return $result;
}
}
func();
?>