<?php 
include("header.php");
        include "../controller/forgetAction.php" ;      
?>
<html>
<head>
    <title>Recover Password</title>
    <script src="js/forgetValidation.js"></script>
</head>

    <body>
      
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate onsubmit="return validate(this);">
          <form>
            <fieldset>
          <h1>Recover password</h1>
          <label for="username">Username</label>
          <input type="text" name="username" id="username">
          <span id="userErrMsg"></span>
          
          <span><?php echo $userErr;?></span>
          
          
          <br><br>
          <label for="password">Password </label>
          <input type="password" name="password" id="password">
          
          <span><?php echo $passErr;?></span>
          
          <br><br>
          <input type="submit" name="submit" value="Recover">
          <span><?php echo $recoverMsg; ?></span>
          <br><br>

          </fieldset>
          <button type = "submit" formaction="../controller/logout.php">Logout</button>
      </form>
      <span><?php echo $errorMsg; ?></span>
  </form>
</body>
</html>
           
            
        
  