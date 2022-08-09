<?php 
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
    }
    include "header.php";
}

?>

        <?php 

            $data=file_get_contents("../model/packageData.json");
            $temp=json_decode($data);

            if(!empty($temp))
            {
                foreach($temp as $tempData)
                {

                        $packagename=$tempData->packagename;
                        $hotelname=$tempData->hotelname;
                        $location=$tempData->location;
                        $cost=$tempData->cost;
                        $rate=$tempData->rate;
                }

                
            }
?>
<head>
    <title>Ordered Packages</title>
</head>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="GET">
            <h1>Ordered Package :</h1>
                <fieldset>
                    
                    <span><b>Package Name : </b></span> 
                    <span><?php echo $packagename;?> </span>
                    <br><br>
                    <span><b>Hotel Name : </b> </span>
                    <span><?php echo $hotelname;?> </span>
                    <br><br>
                    <span><b>Location : </b></span> 
                    <span><?php echo $location;?> </span>
                    <br><br>
                    <span><b>Cost : </b></span> 
                    <span><?php echo $cost;?> </span>
                    <br><br>
                    <span><b>Rating : </b></span> 
                    <span><?php echo $rate;?> </span>
                    <button type="submit" formaction="rating.php">Rate</button>
                   <br><br> 

                </fieldset>
                    <button type="submit" formaction="packageList.php">Cancel</button>
                   <br><br> 
            <button type="submit" formaction="../controller/logout.php">Logout</button>
            <br><br>
        </form>
<?php
    include('footer.php');
?>
    