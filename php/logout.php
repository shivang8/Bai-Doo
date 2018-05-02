<?php
	session_start();
	session_unset();
	session_destroy();
	header('location:/web/php/index.php');
?>