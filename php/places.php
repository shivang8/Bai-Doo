<?php
  session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/web/css/style.css" />
	</head>
	<body>
		<div class="header">
          <h1>Welcome to Bai-Do</h1> 
        </div>

        <br><br>


        <div class="topnav">
				  <a href="/web/php/index.php">Home</a>
				  <a href="/web/php/services.php">Services</a>
				  <a href="/web/php/register_page.php">Bai-Portal</a>
				  <a class="active" href="/web/php/places.php">Places</a>
				  <a href="/web/php/aboutus.php">About</a>
				  <a href="/web/php/login_page.php" style="float: right;" id="login"><?php
			        if(isset($_SESSION['username'])) {
			          echo $_SESSION['username'];
			        }
			        else{
			          echo 'Login';
			        }
			        ?></a>
		</div>
		<div align="center">
			<h2 style="color: rgb(84, 190, 124)">Coming soon..</h2>
		</div>
		<script type="text/javascript">
			if(document.getElementById('login').innerHTML != 'Login') {
			  $('#login').attr('href','/web/php/logout.php');
			}
		</script>
	</body>
</html>

