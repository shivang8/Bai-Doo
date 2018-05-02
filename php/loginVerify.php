<?php
  	session_start();
	require_once('database.php');
	$username = '';
	$password = ''; 

	function validate($value) {
		$value = strip_tags($value);
		$value = htmlentities($value, ENT_QUOTES, "UTF-8");
		return $value;
	}

	if(isset($_POST['Submit'])) {

		if (isset($_POST['Login']) and !empty($_POST['Login'])) {
			$username = validate($_POST['Login']);
		}

		if(isset($_POST['Password']) and !empty($_POST['Password'])) {
			$password = validate($_POST['Password']);
		}
		
		$sql = "SELECT bainame FROM bai_information WHERE contactnumber = $username";
		$result = mysqli_query($connection,$sql);
		if($result) {
			$value = mysqli_fetch_assoc($result);
			if(mysqli_num_rows($result) == 1) {
				$_SESSION['username'] = $value['bainame'];
				header('location:/web/php/index.php');
			}
			else {
				echo mysqli_error($connection);
			}
		}
	}
?>