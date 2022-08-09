<?php
include("header.php");
include('../controller/packageAction.php');
?>
<html>
<head>
	<title>Pick Product</title>
</head>
<body style="background-color:rgb(106, 255, 142);">

	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>
		<fieldset>
			<legend>Pick Product</legend>

			<label for="packagename">Product Name</label>
			<input type="text" name="packagename" id="packagename">
			<span><?php echo $packageErrMsg ;?></span>

			<br><br>

			<label for="hotelname">Quentity</label>
			<input type="hotelname" name="hotelname" id="hotelname">
			<span><?php echo $hotelErrMsg ;?></span>

			<br><br>



			<label for="cost">Cost</label>
			<input type="cost" name="cost" id="cost">
			<span><?php echo $costErrMsg ;?></span>
			
			<br><br>



			</select>
			
			<br><br>

		</fieldset>

		

		

		<input type="submit" name="submit" value="Register">
	</form>

</body>
</html>
<?php
    include('footer.php');
?>