<?php
session_start();
include('includes/config.php');

$date=$_GET['date'];
$time=$_GET['time'];

$bookingDate = new DateTime($date . ' ' . $time);
$canCancel = checkCancellationDate($bookingDate);
/**
 * Summary of checkCancellationDate
 * @param mixed $bookingDate
 * @return bool
 */
function checkCancellationDate($bookingDate) 
{
    $currentDate = new DateTime();
  
    if ($bookingDate < $currentDate) 
    {
      return false;
    } 
    else 
    {
      return true;
    }
}

if ($canCancel) 
{
    echo "<script> 
        if(confirm('Are you sure you want to cancel the ride'))
        {
            window.location.href = 'delete.php';
        }
        else
        {
            window.location.href = 'history.php';
        }    
    </script>";
    
} 
else 
{
    echo "<script>
        alert('You can not cancel the ride');
        window.location.href = 'history.php';
    </script>";
}     
?>