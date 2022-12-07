<?php
	function isPositive($arr) {
		foreach ($arr as $elem) {
			if ($elem % 2 == 0) {
				return false;
			}
		}

		return true;
	}
?>