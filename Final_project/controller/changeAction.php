<?php 


        include('../model/Connection.php');
            
            
            
            $flag=false;
            $username="";
            $password="";
            $userErr="";
            $passErr="";
            $loginmsg="";
            $errorMsg="";
            

            if($_SERVER['REQUEST_METHOD']=='POST')
            {

                if(empty($_POST['username']))
                {
                    $userErr="Empty username";
                    $flag=true;
                    
                }


                if(empty($_POST['password']))
                {
                    $passErr="Password is empty";
                    $flag=true;
                    
                    
                }
            }


            function test_input($data)
            {
            $data=trim($data);
            $data=stripcslashes($data);
            $data=htmlspecialchars($data);
            return $data;
            }

        $username = $_SESSION['username'];
        $findresult = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

        if($res = mysqli_fetch_array($findresult))
        {
            $username = $res['username'];
            $password = $res['password'];
            
        }

        if(isset($_POST['submit']))
        {
            $password = $_POST['password'];
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $res = mysqli_query($conn, $sql);

        if(mysqli_num_rows($res)>0)
        {
            $row = mysqli_fetch_assoc($res);


        }
        $result = mysqli_query($conn, "UPDATE users SET password='$password' WHERE username = '$username'");
        if($result)
        {
            echo "password changed";
        }
        else
        {
            echo "Failed";
        }
        }



?>
