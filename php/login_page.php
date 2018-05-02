<?php
  session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Log-in</title>
		<meta charset="UTF-8"> 

		<style type="text/css">
			.header{
				text-align:center;
				padding-top: 100px; 
			}	
			.font{
				font-family: sans-serif;
				text-align:center;
				padding-top: 30px;
				font-size:25px; 
				border:2px solid black;	
				margin-left:500px;
				margin-right: 500px;
			}
			p{
				padding-right: 150px;
				font-size: 20px;
			}
			a{
				font-size: 20px;
				padding-left: 30px;
				float: left;
				color: rgb(84, 190, 124);
			}
			button{
				background-color:rgb(84, 190, 124);
				width:80%;
				height:40px;
			}
			body{
				 background-image: url(http://www.lifethrumyeyes.com/wp-content/uploads/2016/09/inext_p_Nat_3mar16P4.jpg);
    			 background-position: left bottom;
    			 background-repeat: no-repeat;
			}
			input{
				height: 20px;
			}
			h1{
				color:rgb(84, 190, 124);
			}
		</style>
		
	</head>
	<body>
		<div class="header">
			<h1><ins>BAI DOO</ins></h1>			
		</div>
		
		<form action = "/web/php/loginVerify.php" method="POST">
		<div class="font"> 
			<!--<img src="16166.jpg" width="150" height="150">-->
			Username:
			<input type="textbox" name="Login" placeholder="Phone Number" required><br>
			Password:
			<input type="password" name="Password" placeholder="Password" required><br>
			<p><input type="checkbox" name="RememberMe">Remember Me</p>
			<!--<button type="button" name="login">LOG IN</button>-->
			<br>
			<input type="submit" class="btn btn-default" value="Login" name="Submit" style="background-color: rgb(84, 190, 124);width: 70%;height: 30px;">
			<br>
				<p><a href="/web/php/register_page.php" target="_self">Register</a></p>		
			<a href="/web/php/password_reset_link.php" target="_self" style="float:right; padding-right:30px;">Forgot Password?</a>
			<br>
		</div>
	</form>
	</body>
</html>