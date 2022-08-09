
<?php

	include('../model/Connection.php');
 	
	$firstname = "";
	$firstnameErrMsg = "";

	$lastname = "";
	$lastnameErrMsg = "";

	$username="";
	$userErrMsg="";

	$password="";
	$passErrMsg="";

	$cpassword="";
	$cpassErrMsg="";

	$gender = "";
	$genderErrMsg = "";

	$email = "";
	$emailErrMsg = "";

	$mobileno = "";
	$mobileErrMsg = "";

	$address1 = "";
	$adsErrMsg = "";


	if ($_SERVER['REQUEST_METHOD'] === "POST") {

			function test_input($data) {
				$data = htmlspecialchars($data);
				return $data;
			}

			$firstname = test_input($_POST['firstname']);
			$lastname = test_input($_POST['lastname']);
			$username = test_input($_POST['username']);
			$password = test_input($_POST['password']);
			$cpassword = test_input($_POST['cpassword']);
			$gender = isset($_POST['gender']) ? test_input($_POST['gender']) : "";
			$email = test_input($_POST['email']);
			$mobileno = test_input($_POST['mobileno']);
			$address1 = test_input($_POST['address1']);
			$country = isset($_POST['country']) ? test_input($_POST['country']) : "";

			$message = "";
			if (empty($firstname)) {
				$firstnameErrMsg = "First Name is Empty";
			}
			else {
				if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
				$firstnameErrMsg = "Only letters and spaces allowed.";
				}
			}
			if (empty($lastname)) {
				$lastnameErrMsg .= "Last Name is Empty";
				$message .= "<br>";
			}
			else {
				if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
				$lastnameErrMsg = "Only letters and spaces allowed.";
				}
			}
			if (empty($username)) {
				$userErrMsg .= "Username is Empty";
				$message .= "<br>";
			}
			if (empty($password)) {
				$passErrMsg .= "Password is Empty";
				$message .= "<br>";
			}
			if (empty($cpassword)) {
				$cpassErrMsg .= "Confirm Password is Empty";
				$message .= "<br>";
			}
			if (empty($gender)) {
				$genderErrMsg .= "Gender not Selected";
				$message .= "<br>";
			}
			if (empty($email)) {
				$emailErrMsg .= "Email is Empty";
				$message .= "<br>";
			}
			else {
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$emailErrMsg .= "Please correct email.";
					$message .= "<br>";
				}
			}
			if (empty($mobileno)) {
				$mobileErrMsg .= "Mobileno is Empty";
				$message .= "<br>";
			}
			else {
				if (!preg_match("/^[0-9-' ]*$/",$mobileno)) {
				$mobileErrMsg = "Only numbers allowed.";
				}
			}
			if (empty($address1)) {
				$adsErrMsg .= "Street/House/Road is Empty";
				$message .= "<br>";
			}
			if (!isset($country) or empty($country)) {
				$message .= "Country not Seletect";
				$message .= "<br>";
			}

			if ($message === "") {
				$regiUpdate = "Registration Successful";

			}
			else {
				echo $message;
			}
		}
	if(isset($_POST['submit']))
	{
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$mobileno = $_POST['mobileno'];
		$address1 = $_POST['address1'];
		$country = $_POST['country'];

		if ($firstname != '' && $lastname != '' && $username != ''&& $password != '' && $gender != '' && $email != '' && $mobileno !='' && $address1 != '' && $country != '')
		{
			$sql = "INSERT INTO users(firstname, lastname, username, password, gender, email, mobileno, address1, country) VALUES('$firstname', '$lastname', '$username', '$password', '$gender', '$email', '$mobileno', '$address1', '$country')";

		if($conn->query($sql)==true)
		{
			echo "Registration successful";
		}

		}
		else
		{
			echo "Fill up all forms";
		}

		$conn->close();

		

		
	}
?>