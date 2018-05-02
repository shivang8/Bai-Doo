<?php
  session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/web/css/style.css" />
        <!-- Add icon library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>
		<div class="header">
          <h1>Welcome to Bai-Do</h1> 
        </div>

        <br><br>

        <div class="topnav">
				<a class="active" href="/web/php/index.php"><i class="fa fa-home" style="border:none"></i> Home</a>
				<a href="/web/php/services.php">Services</a>
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


		<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="/web/images/16166.jpg" style="width: 100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="/web/images/images.jpg" style="width: 100%">
   <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="/web/images/kaamwali-bai.jpg" style="width: 100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
if(document.getElementById('login').innerHTML != 'Login') {
  $('#login').attr('href','/web/php/logout.php');
}
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<div class="footer">
          <p>&copy 2018</p>
        </div>
	</body>
</html>