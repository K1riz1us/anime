<?php
	function getSquareSum($arr) {
		$sum = 0;

		foreach ($arr as $elem) {
			$sum += pow( $elem);
		}

		return $sum;
	}

	func();
?>