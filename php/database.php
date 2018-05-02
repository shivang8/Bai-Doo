<?php
	$username = 'root';
	$password = '';
	$serverName = 'localhost';
	$dbname = 'baidoo';
	$connection = mysqli_connect($serverName,$username,$password,$dbname);
	if(mysqli_connect_errno()) {
			echo mysqli_error();
			echo "Try again after sometimes";
			header('location : ../index.html');
	}
?>