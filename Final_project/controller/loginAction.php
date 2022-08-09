<?php
    
    session_start();
    include('../model/Connection.php'); 
    if(isset($_POST['submit']))
    {
        $remember="";
        $username = $_POST['username'];
        $password = $_POST['password'];
       
        if($remember==1)
        {
            setcookie('username', $username, time()+3600*24,"/");
            setcookie('password', $password, time()+3600*24,"/");

        }

        $sql = "SELECT * FROM users WHERE username = '$username' && password = '$password'";
        require_once('../model/Connection.php');

        $qry = mysqli_query($conn, $sql) or die ("Login failed");
        $count = mysqli_num_rows($qry);
        if($count==1)
        {
            $_SESSION['username'] = $username;
            header("Location:../view/customer.php");
            
        }
        else
        {
            echo "Login failed";
        }
         

    }
    $username="";
    $userErrMsg="";
    $password="";
    $passErrMsg="";
    
    if ($_SERVER['REQUEST_METHOD'] === "POST") {

            function test_input($data) {
                $data = htmlspecialchars($data);
                return $data;
            }

            $username=test_input($_POST['username']);
            $password=test_input($_POST['password']);

            $message = "";
            if (empty($username)) {
                $userErrMsg = "Empty username";
            }
            if (empty($password)) {
                $passErrMsg = "Empty password";
            }
            else {
                echo $message;
            }
        }
    

    


?>
