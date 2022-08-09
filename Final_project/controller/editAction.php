<?php

	include('../model/Connection.php');

	$flag=false;
	$username="";
	$userErr="";
	$password="";
	$passwordErr="";
	$firstname="";
	$firstnameErr="";
	$lastname="";
	$lastnameErr="";
	$gender="";
	$genderErr="";
	$mobileno="";
	$mobilenoErr="";
	$email="";
	$emailErr="";
	$address1="";
	$country="";
	$addressErr="";
	$updateMsg="";
	$errorMsg="";
	
		if ($_SERVER['REQUEST_METHOD'] == "POST")
		{

			if (empty($_POST['firstname'])) {
				$firstnameErr = "First Name is Empty";
				$flag=true;
			}
			
			if (empty($_POST['lastname'])) {
				$lastnameErr = "Last Name is Empty";
				$flag=true;
				
			}
			
			if (empty($_POST['email'])) 
			{
				$emailErr = "Email is Empty";
				$flag=true;
			}
			
			if (empty($_POST['mobileno'])) 
			{
				$mobilenoErr = "Mobileno is Empty";
				$flag=true;
			}
			
			if (empty($_POST['address1'])) 
			{
				$addressErr = "Street/House/Road is Empty";
				$flag=true;
			}

			function test_input($data)
        	{
            	$data=trim($data);
            	$data=stripcslashes($data);
        	    $data=htmlspecialchars($data);
        	    return $data;
        	}
        }

        $username = $_SESSION['username'];
        $findresult = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

        if($res = mysqli_fetch_array($findresult))
        {
        	$username = $res['username'];
        	$firstname = $res['firstname'];
        	$lastname = $res['lastname'];
        	$email = $res['email'];
        	$mobileno = $res['mobileno'];
        	$address1 = $res['address1'];
        }

        if(isset($_POST['update']))
        {
        	$firstname = $_POST['firstname'];
        	$lastname = $_POST['lastname'];
        	$email = $_POST['email'];
        	$mobileno = $_POST['mobileno'];
        	$address1 = $_POST['address1'];
        	$sql = "SELECT * FROM users WHERE username = '$username'";
        	$res = mysqli_query($conn, $sql);

        if(mysqli_num_rows($res)>0)
        {
        	$row = mysqli_fetch_assoc($res);


        }
        $result = mysqli_query($conn, "UPDATE users SET firstname = '$firstname', lastname = '$lastname', email = '$email', mobileno = '$mobileno', address1='$address1' WHERE username = '$username'");
        if($result)
        {
        	header("Location: customerProfile.php");
        }
        else
        {
        	echo "Failed";
        }
        }
        

			
?>