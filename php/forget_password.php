<?php
  session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"> 
		<title>forget_password</title>
		<style type="text/css">
			div{
			font-family: sans-serif;
				padding-top: 30px;
				font-size:20px; 	
				margin-left:400px;
				margin-right:400px;
				margin-top: 150px;
			}
			input{
				width: 550px;
				height: 25px;
				font-size: 20px;
			}
			button{
				background-color:rgb(84, 190, 124);
				width:100%;
				height:30px;
			}
		</style>
	</head>
	<body>
		<form>
			<div> 
			<p>New Password:
			<input type="textbox" name="new_password" placeholder="New password" required><br></p>
			<p>
			Confirm Password:
			<input type="textbox" name="Confirm Password" placeholder="Confirm Password" required></p>
			<button type="Submit" class="btn btn-default">Reset Password</button>
			<br>
			<p><a href="/web/php/login_page.php" target="_blank">login/register</a></p>
			
		</div>
		</form>
	</body>
</html>