<?php
session_start();
include "includes/config.php";

try
{
    if(isset($_SESSION['phno']) || isset($_SESSION['phono']))
    {
        $sql="SELECT * FROM bookings WHERE phoneno=$_SESSION[phono] OR phoneno=$_SESSION[phono]";
        $result=mysqli_query($con,$sql);
    }
    else
    {
        echo "<script>
            alert('Please signup or login first');
            window.location.href = 'index.php';
        </script>";
    }
}
catch(Exception $e)
{
    echo $e;
}

?>

<DOCTYPE html>

<head>
    <title>Passenger Ride history</title>
    <link rel="stylesheet" href="css/history.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
<style>
    text{
        font-weight: bolder;
    }
    </style>
</head>

<body>
    <?php include "header.php"; ?>

    <div>
    <form method="post">
    <div class="history">
        <table class="main-table">
            <tr><td>
                <table class="sub-table">
                <tr style="background-color:black">
                    <td colspan=9><span class="caption">Your Ride History</span></td>
                </tr>
                <tr class="colour">
                    <th>Sr No.</th>
                    <th>Car Model</th>
                    <th>Choice</th>
                    <th>Date</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Time</th>
                    <th>Driver</th>
                    <th></th>
                </tr>

                <?php
                $count=1;
                    while($rows=mysqli_fetch_assoc($result))
                    {
                        echo "
                        <tr>
                            <td>".$count++."</td>
                            <td>".$rows['cab_type']."</td>
                            <td>".$rows['preference']."</td>
                            <td>".$rows['date']."</td>
                            <td>".$rows['pickup']."</td>
                            <td>".$rows['destination']."</td>
                            <td>".$rows['time']."</td>
                            <td>".$rows['driver_name']."</td>
                            <td><a href='delhist.php ? rid=$rows[ride_id] & date=$rows[date] & time=$rows[time]'><input type='button' name='cancel' value='Cancel' style='font-weight:bolder;height:30px;width:80px' ></a></td>
                        </tr>
                        ";
                    }
                    ?>
                </table>
            </td></tr>
        </table>

    </form>
    </div>
</body>

</html>