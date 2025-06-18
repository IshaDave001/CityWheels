<?php
session_start();
include('includes/config.php');

$del="DELETE FROM `bookings` WHERE ride_id LIKE '%$_GET[rid]%'";
$result=mysqli_query($con,$del);

echo "<script>
    alert('Record deleted succesfully');
    window.location.href = 'history.php';
</script>";

?>