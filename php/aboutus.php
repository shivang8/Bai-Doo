<?php
  session_start();
?>

<!DOCTYPE>
<html>
 	<head>
 		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<meta charset="UTF-8"> 
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
 		<title> About Us</title>
 		<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="/web/css/style.css" />
 		<style type="text/css">
 			h1{ 
 				font-size: 35px;
 				margin-left: 550px;
 				color: rgb(84, 190, 124);
 			}
 			h2{
 				margin-left: 575px;
 			}
 			.left{
 				margin-left: 250px;
 			}
 			.hg{

 				float: right;
 				margin-right: 250px;
 			}
 			.right{
 				float: right;
 				margin-right: 250px;
 			}
 		</style>
 	</head>
 	<body>
 		<h1>Welcome to Bai-Doo</h1> 
        </div>

        <br><br>
        
        <div class="topnav">
				  <a href="/web/php/index.php">Home</a>
				  <a href="/web/php/services.php">Services</a>
				  <a href="/web/php/register_page.php">Bai-Portal</a>
				  <a href="/web/php/places.php">Places</a>
				  <a class="active" href="/web/php/aboutus.php">About</a>
				  <a href="/web/php/login_page.php" style="float: right;" id="login"><?php
			        if(isset($_SESSION['username'])) {
			          echo $_SESSION['username'];
			        }
			        else{
			          echo 'Login';
			        }
			        ?></a>
		</div>
		<div>
			<h1>The Bai-Doo Team</h1>
		</div>
 		<br>
 		<h2><strong>Members</strong></h2>
 		<div class="hg">
 			<img src="/web/collaborators/hardik.png" height="150" width="150">
 			<p><strong>Hardik Gaur</strong></p>
 			<p>B.tech CSE-CC Graphic Era University</p>
 		</div>
 		<div class="left">
 			<img src="/web/collaborators/shivang.jpg" height="150" width="150">
 			<p><strong>Shivang Srivastava (Team Leader)</strong></p>
 			<p>B.tech CSE-CC Graphic Era University</p>
 		</div>
 		<br>
 		<div class="right">
 			<img src="/web/collaborators/tj.jpg" height="150" width="150">
 			<p><strong>Tanisha Jain</strong></p>
 			<p>B.tech CSE-CC Graphic Era University</p>
 		</div>
 		<div class="left">
 			<img src="/web/collaborators/shivani.jpg" height="150" width="150">
 			<p><strong>Shivani Mittal</strong></p>
 			<p>B.tech CSE-CC Graphic Era University</p>
 		</div>
		
 		<br>
 		<div class="right">
 			<img src="/web/collaborators/rajat.jpg" height="150" width="150">
 			<p><strong>Rajat Pandey</strong></p>
 			<p>B.tech CSE-CC Graphic Era University</p>
 		</div>

 		<div class="left">
 			<img src="/web/collaborators/parth.jpg" height="150" width="150" >
  			<p><strong>Parth Trehan</strong></p>
 			<p>B.tech CSE-CC Graphic Era University</p>
 		</div>
 		<div style="text-align: center;margin-top: 1vw" class="container">
				<h3>Contact Us</h3>
			</div>
			<script type="text/javascript">
				if(document.getElementById('login').innerHTML != 'Login') {
				  $('#login').attr('href','/web/php/logout.php');
				}
			</script>
 	</body>	
</html>
