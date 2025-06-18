<?php
session_start();
include "includes/config.php";

/*$sql="SELECT cust_name,pickup,destination,date FROM bookings WHERE ride_id = LAST_INSERT_ID()";
$result=mysqli_query($con,$sql);*/

$name=$_GET['nm'];
$from=$_GET['from'];
$to=$_GET['to'];
$date=$_GET['date'];
$model=$_GET['type'];
$phno=$_GET['phno'];
$time=$_GET['time'];
$choice=$_GET['pref'];

$dri="SELECT driver_id,driver_name,cab_number FROM driver_details WHERE cab_type='$model'";
$answer=mysqli_query($con,$dri);

if(mysqli_num_rows($answer) > 0) 
{
    $rows = mysqli_fetch_array($answer);
    $did = $rows['driver_id'];
    $drinm = $rows['driver_name'];
    $cab_number = $rows['cab_number'];
}

$cost="SELECT AC,NONAC FROM cab_prices WHERE `destination`='$to' AND `type`='$model'";
$fare=mysqli_query($con,$cost);

if(mysqli_num_rows($fare) > 0) 
{
    $rows = mysqli_fetch_array($fare);
    $ac = $rows['AC'];
    $nonac = $rows['NONAC'];
}
if($choice=='AC')
{
    $price=$ac;
}
if($choice=='NON AC')
{
    $price=$nonac;
}

try
{
    if(isset($_POST['confirm']))
    {
        $sel="SELECT cust_id FROM signup_login WHERE phone_no=$phno";
        $reset=mysqli_query($con,$sel);
        $row = mysqli_fetch_assoc($reset);
        $cust_id = $row['cust_id'];
    
        $sql="INSERT INTO bookings(cust_name ,phoneno,date, pickup, destination, time, cab_type, preference,cust_id,driver_id,driver_name,cab_number,cost) VALUES('$name','$phno', '$date','$from', '$to', '$time', '$model', '$choice','$cust_id','$did','$drinm','$cab_number','$price')";
        $result=mysqli_query($con,$sql);
            if($result>0)
            {
                echo "<script>
                        alert('You have booked your ride succesfully ')
                        window.location.href = 'index.php';
                    </script>";
            }
    }
    else if(isset($_POST['cancel']))
    {
        echo "<script>
            window.location.href = 'choosecab.php';
        </script>";
    }
}
catch(Exception $e)
{
    echo $e;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Invoice</title>

</head>

<body>

<div  class="bordered-form" style="margin-top:50px;">
<form method="post">
<table align="center">
    <tr><td width="800px">
        <div class="fonttable" style="background-color:black; font-size:20px;">
            <div class="main-login">
                <div class="signlog">
                    <section class="my-5">

                        <div class="py-2">
                            <h2 class="text-center">Booking Details</h2>
                        </div>

                        <hr style="height:7px;background-color:white">

                        <div class="w-50 m-auto">  
                            <div>
                                <div class="form-group ">
                                    <label class="text-white">Name</label>
                                    <label class="text-white">&emsp;&emsp;&emsp;&ensp;&ensp;:</label>
                                    <label class="text-white">&emsp;&emsp;<?php echo "$name";?></label>
                                </div>

                                <div class="form-group ">
                                    <label class="text-white">From</label>
                                    <label class="text-white">&emsp;&emsp;&emsp;&nbsp;&ensp;&ensp;:</label>
                                    <label class="text-white">&emsp;&emsp;<?php echo "$from";?></label>
                                </div>

                                <div> 
                                    <label class="text-white">To</label>
                                    <label class="text-white">&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;:</label>
                                    <label class="text-white">&emsp;&emsp;<?php echo "$to";?></label>
                                </div>

                                <div class="form-group ">
                                    <label class="text-white">Date</label>
                                    <label class="text-white">&emsp;&emsp;&emsp;&emsp;&ensp;:</label>
                                    <label class="text-white">&emsp;&emsp;<?php echo "$date";?></label>
                                </div>

                                <div class="form-group ">
                                    <label class="text-white">Car Model</label>
                                    <label class="text-white">&emsp;&emsp;:</label>
                                    <label class="text-white">&emsp;&emsp;<?php echo "$model";?></label>
                                </div>

                                <div class="form-group ">
                                    <label class="text-white">Driver Name</label>
                                    <label class="text-white">&emsp;:</label>
                                    <label class="text-white">&emsp;&emsp;<?php echo "$drinm";?></label>
                                </div>

                                <div class="form-group ">
                                    <label class="text-white">Cab Number</label>
                                    <label class="text-white">&emsp;:</label>
                                    <label class="text-white">&emsp;&emsp;<?php echo "$cab_number";?></label>
                                </div>

                                <div class="form-group ">
                                    <label class="text-white">Cost</label>
                                    <label class="text-white">&emsp;&emsp;&emsp;&emsp;&ensp;:</label>
                                    <label class="text-white">&emsp;&emsp;<?php echo "$price";?></label>
                                </div>
                            </div>

                            <div class="form-group">
                                <input class="btn text-center bg-light" type="submit" name="confirm" value="Confirm"
                                    class="from-control" style="width:100%">
                            </div>

                            <div class="form-group my-1" >
                                <input class="btn text-center bg-light" type="submit" name="cancel" value="Cancel"
                                    class="from-control" style="width:100%">
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </td></tr>
</table>
</form>
</div>

</body>

</html>