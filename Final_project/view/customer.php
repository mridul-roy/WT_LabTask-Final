<?php
    
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
    }
 
      
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="home.css">
    <title>Customer</title>
</head>


<body>
<fieldset>
<div class="hometitle">
    <table>
    <div class="home2">
<h1>Welcome</h1>
</table>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
            <br>

                     <table>
                     <div class="option1">
                        <button type="submit" formaction="customerProfile.php">View profile</button>
                        <br><br></table>
                         </table>
                         
                         <table>
                         <div class="option2">
                        <button type="submit" formaction="packageList.php"> My Cart</button>
                            <br><br></table>

                            <table>
                            <div class="option3">
                        <button type="submit" formaction="changePass.php">Change Password</button>
                            </table>
                            <table>
                        <br><br>
                        <div class="option4">
                        <button type="submit" formaction="../controller/logout.php">Logout</button>
                
                         </table>
            
        </form>
</fieldset>
    </body>
</html>
<?php
  
?>