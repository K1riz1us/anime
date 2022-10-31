<?php
	session_start();
    $_SESSION['a'] = '4';
    $_SESSION['b'] = '9';
    $_SESSION['summ'] = $_SESSION['a'] + $_SESSION['b'];
?>