<?php

	include("../controller/regiAction.php");
	
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="regist.css">
		
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Registration</title>
	<script src="js/regiValidation.js"></script>

</head>
<body>	
      <div class="regtitle">


	  <div class="reg1">

	<h1> Registation</h1>
	</table>
	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate onsubmit="return validate(this);">
	<div class="container8">
	     <fieldset>
		
			<legend>General</legend>
			
			<label for="firstname">First Name</label>
			<input type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>">
			<span id ="firstErrMsg"></span>
			<span><?php echo $firstnameErrMsg; ?></span>
			


			<br><br>

			<label for="lastname">Last Name</label>
			<input type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>">
			<span id ="lastErrMsg"></span>
			<span><?php echo $lastnameErrMsg; ?></span>
			
			<br><br>

			<label for="username">Username</label>
			<input type="text" name="username" id="username" value="<?php echo $username; ?>">
			<span id ="userErrMsg"></span>
			<span><?php echo $userErrMsg; ?></span>
			
			<br><br>

			<label for="password">Password</label>
			<input type="password" name="password" id="password" value="<?php echo $password; ?>">
			<span id ="passErrMsg"></span>
			<span><?php echo $passErrMsg; ?></span>

			

			<br><br>

			<label for="cpassword">Confirm Password</label>
			<input type="password" name="cpassword" id="cpassword" value="<?php echo $cpassword; ?>">
			<span id ="cpassErrMsg"></span>
			<span><?php echo $cpassErrMsg; ?></span>
			
			<br><br>

			<label for ="gender">Gender</label>
			<input type="radio" name="gender" id="male" value="male"<?php echo ($gender == 'male')?'cheked':''?>>
			<label for="male">Male</label>
			<input type="radio" name="gender" id="female" value="female" <?php echo ($gender == 'female')?'cheked':''?>>
			<label for="female">Female</label>
			<span id ="genderErrMsg"></span>
			<span><?php echo $genderErrMsg; ?></span>
			
			<br><br>

		</fieldset>

		<fieldset>
		
			<legend>Contact</legend>

			<label for="email">Email</label>
			<input type="email" name="email" id="email"
			value="<?php echo $email; ?>">
			<span id ="emailErrMsg"></span>
			<span><?php echo $emailErrMsg; ?></span>

			
			<br><br>

			<label for="mobileno">Mobile no</label>
			<input type="mobileno" name="mobileno" id="mobileno"
			value="<?php echo $mobileno; ?>">
			<span id ="mobileErrMsg"></span>
			<span><?php echo $mobileErrMsg; ?></span>
			
			<br><br>

		</fieldset>

		<fieldset>
			<legend>Address</legend>

			<label for="address1">Street/House/Road</label>
			<input type="text" name="address1" id="address1"value="<?php echo $address1; ?>">
			<span id ="address1ErrMsg"></span>
			<span><?php echo $adsErrMsg; ?></span>
			

			<br><br>

			<label for="country">Country</label>
			<select name="country" id="country">
				<option value="bd">Bangladesh</option>
				<option value="usa">USA</option>
			</select>

			<br><br>

		</fieldset>
		<input type="submit" name="submit" value="Register">
		
		
	</form>
	<a href="login.php">Login</a></label>
	
</body>
<?php
        $formdata = array(
            'Fisrt Name        :' => $firstname,
            'Last  Name        :' => $lastname,      
            'Username             :' => $username,
			'Password          :' => $password,
			'Gender            :' => $gender,
			'Email             :' => $email,
			'Phonenumber            :' => $mobileno,
			

        );
        $existingdata = file_get_contents('../model/data11.json'); 
        $tempJSONdata = json_decode($existingdata);
        $tempJSONdata[] = $formdata;
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
        if (file_put_contents("../model/data11.json", $jsondata)) {
            $dataerr = "Data successfully Saved <br>";
        } else {
            $dataerr = "No data saved";
        }
    


?>
</html>

