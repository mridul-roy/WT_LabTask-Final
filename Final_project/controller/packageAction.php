
<?php

	include('../model/Connection.php');
 	
	$packagename=$packageErrMsg=$hotelname=$hotelErrMsg=$location=$locationErrMsg=$cost=$costErrMsg=$rating=$ratingErrMsg="";


	if ($_SERVER['REQUEST_METHOD'] === "POST") {

			function test_input($data) {
				$data = htmlspecialchars($data);
				return $data;
			}

			$packagename = test_input($_POST['packagename']);
			$hotelname = test_input($_POST['hotelname']);
			$cost = test_input($_POST['cost']);
		
			

			$message = "";
			if (empty($packagename)) {
				$packageErrMsg = "Items Name is Empty";
			}
			
			if (empty($hotelname)) {
				$hotelErrMsg .= "Quentity is Empty";
				$message .= "<br>";
			}

			
			if (empty($cost)) {
				$costErrMsg .= "Cost is Empty";
				$message .= "<br>";
			}
			
			
			
		}
	if(isset($_POST['submit']))
	{
		$packagename = $_POST['packagename'];
		$hotelname = $_POST['hotelname'];
		$cost = $_POST['cost'];
	
		
		if ($packagename != '' && $hotelname != '' && $location != ''&& $cost != '' && $rating !='')
		{
			$sql = "INSERT INTO package(packagename, quentity, cost,) VALUES('$packagename', '$hotelname',, '$cost')";

		if($conn->query($sql)==true)
		{
			echo "Package Registration successful";
		}

		}
		else
		{
			echo "Fill up all forms";
		}

		$conn->close();

		

		
	}
?>