<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"> 
	<title>forger_password_link</title>
	<style type="text/css">
		div{
			font-family: sans-serif;
				text-align:center;
				padding-top: 30px;
				font-size:25px; 	
				margin-left:400px;
				margin-right:400px;
				margin-top: 150px;
		}
		input{
			width: 550px;
			height: 50px;
			font-size: 25px;
		}
		button{
				background-color:rgb(84, 190, 124);
				width:100%;
				height:40px;
			}
	</style>
</head>
<body>
	<form>
	<div>
		<p>Please enter your email address or user-Handle. An email will be sent to your registered email.</p>
		<input type="text-box" name="username" placeholder="username/Email" required>
		<p>
		<button>Reset Password</button>
		</p>
		<p  style="text-align: left"><a href="/web/php/login_page.php" target="_blank">login/register</a></p>
	</div>
	</form>
</body>
</html>