
 <?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
    }
    
    include "header.php";
    include("../controller/changeAction.php");

?>    

<html>
<head>
    <title>Change Password</title>
    <script src="js/changeValidation.js"></script>
</head>
    <body style="background-color:rgb(163, 209, 225);">

      
        <form form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate onsubmit="return validate(this);">
          <form>
            <fieldset>
          <h1>Change password</h1>
          <label for="uname">User Name</label>
          <input type="text" name="username" id="uname">
          <span id="userErrMsg"></span>
          
          <span><?php echo $userErr;?></span>
          <br><br>
          <label for="password">New Password </label>
          <input type="password" name="password" id="password">
          <span id="passErrMsg"></span>
          
          <span><?php echo $passErr;?></span>
          
          <br><br>
          <input type="submit" name="submit" value="Update">
          <br><br>
          
          </fieldset>
          <a href="../controller/logout.php">Logout</a></label>
      </form>
      <span><?php echo $errorMsg; ?></span>
  </form>
</body>
</html>
<?php
    include('footer.php');
?>


           
            
        
  