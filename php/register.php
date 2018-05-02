<?php
  	session_start();

	require_once('database.php');

	function validate($value) {
		$value = strip_tags($value);
		$value = htmlentities($str, ENT_QUOTES, "UTF-8");
	}

	$cleaning = '0';
	$washing = '0';
	$cooking = '0';
	$babySitting = '0';

	if(isset($_GET['First_Name']) and !empty($_GET['First_Name'])) {
		$firstName = validate($_GET['First_Name']);
	}
	else {
		header('location:/web/php/register_page.php?error=1');
	}

	if(isset($_GET['Last_Name']) and !empty($_GET['Last_Name'])) {
		$lastName = $_GET['Last_Name'];
	}
	else {
		$lastName = '';
	}

	if(isset($_GET['fathers_name']) and !empty($_GET['fathers_name'])) {
		$fathersFirstName = $_GET["fathers_name"];
	}
	else {
		header('location:/web/php/register_page.php?error=2');
	}

	if(isset($_GET['lastname']) and !empty($_GET['lastname'])) {
		$fathersLastName = $_GET['lastname'];
	}
	else {
		$fathersLastName = '';
	}

	if(isset($_GET['bday']) and !empty($_GET['bday'])) {
		$dob = $_GET['bday'];
		$currYear = (int)date('Y');
			list($year,$month,$day)= explode('-',$dob);
			$day = (int)$day;
			$month = $month;
			$year = (int)$year;
			if($currYear - $year >= 18) {
				if(in_array($month, array('01','03','05','07','08','10','12'))) {
					if($day <= 1 and $day >= 31) {
						header('location:/web/php/register_page.php?error=5');
					}
				}
				elseif (in_array($month, array('04','06','09','11'))) {
					if($day <=1 and $day >=30) {
						header('location:/web/php/register_page.php?error=5');
					}
				}
				elseif($month == '02') {
					if($day <= 1 and $day >= 28) {
						header('location:/web/php/register_page.php?error=5');
					}
				}
				else {
					header('location:/web/php/register_page.php?error=7');
				}
			}
		else {
		header('location:/web/php/register_page.php?error=8');
		}
	}
	else {
		header('location:/web/php/register_page.php?error=3');
	}

	if(isset($_GET['phonenumber']) and !empty($_GET['phonenumber'])) {
		$phoneNumber = $_GET['phonenumber'];
		if(!empty($phoneNumber)) {
			if(preg_match('/^9[0-9]{9}/', $phoneNumber) == FALSE or  preg_match('/^9[0-9]{9}/', $phoneNumber) == 0) {
				header('location:/web/php/register_page.php?error=9');
			}
		}
	}
	else {
		header('location:/web/php/register_page.php?error=10');
	}

	if(isset($_GET['gender']) and !empty($_GET['gender'])) {
		$gender = $_GET['gender'];
		if(!(in_array($gender, array('Male', 'Female', 'Other')))) {
			header('location:/web/php/register_page.php?error=11');
		}
	}
	else {
		header('location:/web/php/register_page.php?error=11');
	}

	if(isset($_GET['Language']) and !empty($_GET['Language'])) {
		$language = $_GET['Language'];
		if(empty($language) or preg_match('/[a-zA-Z]+/', $language) == 0) {
			header('location:/web/php/register_page.php?error=12');
		}
	}
	else {
		header('location:/web/php/register_page.php?error=12');
	}

	if(isset($_GET['proof']) and !empty($_GET['proof'])) {
		$proof = $_GET['proof'];
		if(empty($proof) or ($proof != 'Driving License' and $proof != 'Aadhaar Card')) {
			header('location:/web/php/register_page.php?error=13');
		}
	}
	else {
		header('location:/web/php/register_page.php?error=13');
	}

	if(isset($_GET['Religion']) and !empty($_GET['Religion'])) {
		$religion = $_GET['Religion'];
	}
	else {
		$religion = '';
	}

	if(isset($_GET['Address1']) and !empty($_GET['Address1'])) {
		$address1 = $_GET['Address1'];
	}
	else {
		header('location:/web/php/register_page.php?error=17');
	}

	if(isset($_GET['Address2']) and !empty($_GET['Address2'])) {
		$address2 = $_GET['Address2'];
	}
	else {
		$address2 = '';
	}

	if(isset($_GET['Address3']) and !empty($_GET['Address3'])) {
		$address3 = $_GET['Address3'];
	}
	else {
		$address3 = '';
	}

	if(isset($_GET['Address4']) and !empty($_GET['Address4'])) {
		$address4 = $_GET['Address4'];
	}
	else {
		header('location:/web/php/register_page.php?error=17');
	}

	if(isset($_GET['Address5']) and !empty($_GET['Address5'])) {
		$address5 = $_GET['Address5'];
	}
	else {
		header('location:/web/php/register_page.php?error=17');
	}

	if(isset($_GET['Address5']) and !empty($_GET['Address5'])) {
		$address6 = $_GET['Address6'];
	}
	else {
		$address6 = '';
	}

	if(isset($_GET['cleaning']))
		$cleaning = '1';
	else
		$cleaning = '0';

	if(isset($_GET['washing']))
		$washing = '1';
	else
		$washing = '0';

	if(isset($_GET['cooking']))
		$cooking = '1';
	else
		$cooking = '0';

	if(isset($_GET['babysitting']))
		$babySitting = '1';
	else
		$babySitting = '0';

	if(empty($cleaning) and empty($washing) and empty($cooking) and empty($babySitting)) {
			header('location:/web/php/register_page.php?error=14');
		}

	if(isset($_GET["submit"])) {
		$name = $firstName;
		if($lastName != '')
			$name = $name . ' ' . $lastName;
		$fathersName = $fathersFirstName;
		if($fathersLastName != '')
			$fathersName = $fathersName . ' ' . $fathersLastName;
		$address = $address1;
		if($address2 != '')
			 $address = $address . ', ' . $address2;
		if($address3 != '')
			 $address = $address . ', ' . $address3;
		$address = $address . ', ' . $address4 ;
		$address = $address . ', ' . $address5 ;
		if($address6 != '')
			 $address = $address . ', ' . $address6;
		$name = mysqli_escape_string($connection,$name);
		$fathersName = mysqli_escape_string($connection,$fathersName);
		$dob = mysqli_escape_string($connection,$dob);
		$phoneNumber = mysqli_escape_string($connection,$phoneNumber);
		$gender = mysqli_escape_string($connection,$gender);
		$language = mysqli_escape_string($connection,$language);
		$proof = mysqli_escape_string($connection,$proof);
		$religion = mysqli_escape_string($connection,$religion);
		$address = mysqli_escape_string($connection,$address);
		$cleaning = mysqli_escape_string($connection,$cleaning);
		$washing = mysqli_escape_string($connection,$washing);
		$cooking = mysqli_escape_string($connection,$cooking);
		$babySitting = mysqli_escape_string($connection,$babySitting);
		$sql = "INSERT INTO `bai_information` (`bainame`,`bai_fathers_name`,`dob`,`contactnumber`,`gender`,`language`,`addressproof`,`religion`,`address`,`cleaning`,`washing`,`cooking`,`babysitting`) VALUES ('$name','$fathersName','$dob','$phoneNumber','$gender','$language','$proof','$religion','$address','$cleaning','$washing','$cooking','$babySitting')";
		$result = mysqli_query($connection,$sql);
		if($result) {
			header('location:/web/php/register_page.php?error=16');
		}
		else {
			header('location:/web/php/register_page.php?error=15');
		}
	}
?>

