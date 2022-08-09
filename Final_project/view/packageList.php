<?php 
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location:login.php");
    }
    include "header.php";
    include('../model/Connection.php');
?>

<head>
    <title>My Cart</title>
</head>
<body style="background-color:rgb(206, 255, 142);">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="GET">
<h1>Pick Items Information :</h1>

<table>
     <?php echo "<table border='1'>" ?>
    <tr>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>


    </tr>
    <?php
        if($conn->connect_error)
        {
            die("Connection failed: ".$conn->connect_error);
        }

        $sql = "SELECT * FROM package";
        $result = $conn->query($sql);

        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>".$row["packagename"]."</td><td>".$row["hotelname"]."</td><td>".$row["location"]."</td><td>".$row["cost"]."</td><td>".$row["rating"]."</td></tr>";

            }
            echo "</table>";
        }
        else
        {
            echo "No record";

        }
        $conn->close();

    ?>
</table>


            <a href="../controller/logout.php">Logout</a>
            <a href="comparePackage.php">Compare</a>

            <br><br>




        </form>
    </body>
        <?php
    include('footer.php');
?>
    