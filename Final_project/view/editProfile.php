<?php
	session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
    }
    include "header.php";

        include "../controller/editAction.php" ;      
?>

<html>
<head>
	<title>Edit Profile</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
	<fieldset>
		<legend>Customer Information</legend>
		<label for="firstname">First Name : </label>
		<input type="text" name="firstname" id="firstname" value="<?php echo $firstname ?>">
		<span><?php echo $firstnameErr;?></span>
		<br><br>

		<label for="lastname">Last Name : </label>
		<input type="text" name="lastname" id="lastname" value="<?php echo $lastname ?>">
		<span><?php echo $lastnameErr;?></span>
		<br><br>

		<label for="mobileno">Mobile No : </label>
		<input type="text" name="mobileno" id="mobileno" value="<?php echo $mobileno ?>">
		<span><?php echo $mobilenoErr;?></span>
		<br><br>

		<label for="email">Email : </label>
		<input type="text" name="email" id="email" value="<?php echo $email ?>">
		<span><?php echo $emailErr;?></span>
		<br><br>

		<label for="address1">Address : </label>
		<input type="text" name="address1" id="address1" value="<?php echo $address1 ?>">
		<span><?php echo $addressErr;?></span>
		<br><br>
		<input type = "submit" name = "update" value = "Update">

		<span><?php echo $updateMsg; ?></span>
		<button type = "submit" formaction="customerProfile.php">Back</button>
		<span><?php echo $errorMsg; ?></span>
		<br><br>
	</fieldset>
	<br>
	
         
            

 </form>
</body>
</html>
<?php

  include('footer.php');
?>