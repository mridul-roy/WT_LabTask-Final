<?php
	        
            include('../model/Connection.php');
            $flag=false;
            $packagename="";
            $packageErr="";
            $rate="";
            $updateMsg="";
            $errorMsg="";
	
		if($_SERVER['REQUEST_METHOD']=='POST')
            {

                if(empty($_POST['packagename']))
                {
                    $packageErr="Empty packagename";
                    $flag=true;
                }
                if(empty($_POST['rating']))
                {
                    $ratingErr="Empty rating";
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


        $findresult = mysqli_query($conn, "SELECT * FROM package");

        if($res = mysqli_fetch_array($findresult))
        {
            $packagename = $res['packagename'];
            $rating = $res['rating'];
        }

        if(isset($_POST['update']))
        {
            $rating = $_POST['rating'];
            $sql = "SELECT * FROM package WHERE packagename = '$packagename'";
            $res = mysqli_query($conn, $sql);

        if(mysqli_num_rows($res)>0)
        {
            $row = mysqli_fetch_assoc($res);


        }
        $result = mysqli_query($conn, "UPDATE package SET rating = '$rating' WHERE packagename = '$packagename'");
        if($result)
        {
            echo "rating updated";
        }
        else
        {
            echo "Failed";
        }
        }

?>