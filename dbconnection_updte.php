<?php
error_reporting(0);
$id = $_POST ['id']; 
$firstname = $_POST ['firstname']; 
$lastname=$_POST['lastname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$date=$_POST['date'];


$servername="localhost";
$username="root";
$password="";
$dbname="online_marketplace";
$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	//echo "Successful connection";
	
	
	$q = UPDATE register SET First_Name = '"$firstname"', Last_Name ='"$lastname"', Passwordr ='"$phone"',Email = '"$email"',Date_Of_Birth = '"$date"' where ID = '"$id"';
	
	
	$result=$conn->query($q);
	if($result) 
	  echo "data Updated";
   else
		echo "data not Updated";	
}
?>