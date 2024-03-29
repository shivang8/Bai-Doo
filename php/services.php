<?php
  session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/style.css" />
        <meta charset="UTF-8"> 
        <!-- Add icon library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<!-- HEADER BEGIN -->
		<!-- DO NOT DISTURB -->
		<div class="header">
          <h1>Welcome to Bai-Doo</h1> 
        </div>

        <br><br>
        
        <div class="topnav">
				<a href="/web/php/index.php"><i class="fa fa-home" style="border:none"></i> Home</a>
				<a class="active" href="/web/php/services.php">Services</a>
				<a href="/web/php/register_page.php">Bai-Portal</a>
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
		<!-- HEADER ENDS-->

		<!-- MY CONTENT BEGIN -->
		<div>
			<div class="dropdown">
				<br>
				<table> <!-- Query Buttons -->
					<th>
						<td>
							<button onclick="myFunctionTOS()" class="dropbtn">Type of Service <i class="down-arrow"></i>
							</button>
						  	<div id="TypeOfService" class="dropdown-content">
						    	<a href="#">Task 1</a>
						    	<a href="#">Task 2</a>
						    	<a href="#">Task 3</a>
						  	</div>
						</td>
						<td>
							<button onclick="myFunctionAge()" class="dropbtn">Age <i class="down-arrow"></i>
							</button>
						  	<div id="Age" class="dropdown-content">
						    	<a href="#">10-17</a>
						    	<a href="#">18-25</a>
						    	<a href="#">25-40</a>
						    	<a href="#">40+</a>
						  	</div>
						</td>
						<td>
							<button onclick="myFunctionGender()" class="dropbtn">Gender <i class="down-arrow"></i>
							</button>
						  	<div id="Gender" class="dropdown-content">
						    	<a href="#">Male</a>
						    	<a href="#">Female</a>
						    	<a href="#">Others</a>
						  	</div>
						</td>
						<td>
							<button onclick="myFunctionReligion()" class="dropbtn">Religion <i class="down-arrow"></i>
							</button>
						  	<div id="Religion" class="dropdown-content">
						    	<a href="#">Hindu</a>
						    	<a href="#">Muslim</a>
						    	<a href="#">Sikh</a>
						    	<a href="#">Cristian</a>
						  	</div>
						</td>
						<td>
							<!-- Add run query on this button -->
						  	<button class="dropbtn">Search <i class="fa fa-search" style="border:none"></i>
							</button>
						</td>
					</th>
				</table>
			</div>
		</div>
		<br><br><br><br><br>
		<!-- MY CONTENT ENDS -->
		
		<!-- FOOTER BEGIN -->
		<!-- DO NOT DISTURB -->
		<div class="footer">
          	<p>&copy 2018</p>
        </div>
        <!-- FOOTER ENDS -->

		<script type="text/javascript">
			if(document.getElementById('login').innerHTML != 'Login') {
			  $('#login').attr('href','/web/php/logout.php');
			}
			/* When the user clicks on the button, toggle between hiding and showing the dropdown content */
			function myFunctionAge() {
    			document.getElementById("Age").classList.toggle("show");
			}
			function myFunctionTOS() {
    			document.getElementById("TypeOfService").classList.toggle("show");
			}
			function myFunctionGender() {
    			document.getElementById("Gender").classList.toggle("show");
			}
			function myFunctionReligion() {
    			document.getElementById("Religion").classList.toggle("show");
			}

			// Close the dropdown menu if the user clicks outside of it
			window.onclick = function(event) {
			  	if (!event.target.matches('.dropbtn')) 
			  	{
			    	var dropdowns = document.getElementsByClassName("dropdown-content");
			    	var i;
			    	for (i = 0; i < dropdowns.length; i++) 
			    	{
			      		var openDropdown = dropdowns[i];
			      		if (openDropdown.classList.contains('show')) 
			      		{
			        		openDropdown.classList.remove('show');
			      		}
			    	}
			  	}
			}
		</script>
	</body>
</html>