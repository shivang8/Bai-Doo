<?php
	session_start();
	$errorCode = '';
	$error = '';
	if(isset($_GET['error'])) {
		$errorCode = (int)$_GET['error'];
		if ($errorCode == 16) {
			$error = 'Data entered Successfully';
		}
		if ($errorCode == 1) {
			$error = 'First Name is empty';
		}
		elseif ($errorCode == 2) {
			$error = "Father's first name is empty";
		}
		elseif ($errorCode == 3) {
			$error = 'date of birth is empty';
		}
		elseif ($errorCode == 4 or $errorCode == 5 or $errorCode == 6) {
			$error = 'Number of days is invalid';
		}
		elseif ($errorCode == 7) {
			$error = 'Month is incorrect';
		}
		elseif ($errorCode == 8) {
			$error = 'Year is incorrect';
		}
		elseif ($errorCode == 9) {
			$error = 'Phone number is incorrect';
		}
		elseif ($errorCode == 10) {
			$error = 'Phone number is empty';
		}
		elseif ($errorCode == 11) {
			$error = 'Gender option is incorrect';
		}
		elseif ($errorCode == 12) {
			$error = 'Language is not valid';
		}
		elseif ($errorCode == 13) {
			$error = 'Proof is invalid';
		}
		elseif ($errorCode == 14) {
			$error = 'No work option is selected';
		}
		elseif ($errorCode == 15) {
			$error = 'Data could not be entered due to problem in sql query';
		}
		elseif ($errorCode == 17){
			$error = 'Address is incomplete';
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Bai-Portal</title>
	<style type="text/css">
		h3{
			text-align: center;
			font-size: 50px;
		}
		table{
			margin : 70px auto;
			padding: 30px;
			border-radius: 4px;
			background-color: rgb(84, 190, 124);
		}
		button
		{
			width:80%;
			height:40px;
		}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/web/css/style.css" />
    <meta charset="UTF-8"> 
</head>
<body>

	<div class="header">
        <h1>Welcome to Bai-Doo</h1> 
        </div>
        <br><br>
        <div class="topnav">
				  <a href="/web/php/index.php">Home</a>
				  <a href="/web/php/services.php">Services</a>
				  <a class="active" href="/web/php/register_page.php">Bai-Portal</a>
				  <a href="/web/php/places.php">Places</a>
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
				<h3 style="float: center; color: rgb(84, 190, 124);">Bai-Portal<img src="/web/images/images.jpg" style="float:center;width:200px;height:150px;"></h3>
				<h4 style="align-content: center; color: rgb(84, 190, 124);">"With a great bai comes great responsibility!"</h4>
				<?php 
					if(!empty($errorCode)) {
						if ($errorCode != 16) {
							echo "<h4 style='color:red;align-content: center'>".$error."</h4>";
						}
						else {
							echo "<h4 style='color:green;align-content: center'>".$error."</h4>";
						}
					}
				?>
				</div>
				<form action="/web/php/register.php" method="GET">
					<table>
						<tr>  <!-- Row for name of bai -->
							<td>Name*</td>
							<td><input type="text-box" name="First_Name" placeholder="First Name*" required></td>
							<td><input type="text" placeholder="Last Name" name="Last_Name"></td>
						</tr>
						<tr>   <!-- Father's name of bai-->
							<td>Father's Name</td>
							<td><input type="text-box" name="fathers_name" placeholder="First Name*" required></td>
							<td><input type="text-box" name="lastname" placeholder="Last Name"></td>
						</tr>
						<tr>  <!--Date of birth of bai -->
							<td>Date of Birth*</td>
							<td colspan="4"><input type="date" name="bday" required></td>
						</tr>
						<tr> 
							<td>Phone Number*</td>
							<td colspan="4"><input type="text-box" placeholder="Phone Number" required name="phonenumber"></td>
						</tr>
						<tr>  <!--Gender -->
							<td>Gender*</td>
							<td><select name="gender" required>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Other">Other</option>
							</select><br/></td>
						</tr>
						<tr> 
							<td>Language Known*</td>
							<td><input type="text-box" name="Language" placeholder="e.g, Hindi" required></td>
						</tr>
						<tr>  <!-- Address proof for verification of bai-->
							<td>Address Proof</td>
							<td><select name = "proof">
								<option value="Driving License">Driving License</option>
								<option value="Aadhaar Card">Aadhaar Card</option>
							</select></td>
						</tr>
						<tr> <!-- Religion -->
							<td>Religion</td>
							<td><input type="text-box" name="Religion" placeholder="e.g, Hindu"></td>
						</tr>
						<tr>  <!--Address of bai -->
							<td>Permanent Address</td>
							<td><input type="text-box" name="Address1" placeholder="Street Address*" required></td>
							<td><input type="text-box" name="Address2" placeholder="Street Line 2"></td>
						</tr>
						<tr>  <!-- Address of bai-->
							<td></td>
							<td><input type="text-box" name="Address3" placeholder="Landmark"></td>
							<td><input type="text-box" name="Address4" placeholder="City*" required></td>
						</tr>
						<tr>   <!--Address of bai-->
							<td></td>
							<td><input type="text-box" name="Address5" placeholder="State*" required></td>
							<td><input type="text-box" name="Address6" placeholder="Zip Code"></td>
						</tr>
						<tr>   <!-- Services provided by bai-->
							<td>Enter Qualities:</td>
							<td><input type="checkbox" name="cleaning">  Cleaning  <input type="checkbox" name="washing">   Washing</td>
							<td><input type="checkbox" name="cooking">Cooking</td>
						</tr>
						<tr>   <!-- Services provided by bai-->
							<td></td>
							<td><input type="checkbox" name="babysitting">Baby Sitting</td><br>
						</tr>
						<tr>  <!-- Submit button-->
							<td><br></td>
							<td><br><input type="submit" class="btn btn-default" name="submit" value="Submit">
						</tr>
					</table>
				</form>
			</div>
		</div>
		<script type="text/javascript">
			if(document.getElementById('login').innerHTML != 'Login') {
			  $('#login').attr('href','/web/php/logout.php');
			}
		</script>
	</body>
</html>