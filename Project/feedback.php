<?php
session_start();
include "includes/config.php";

try
{
    if(isset($_SESSION['phno']) || isset($_SESSION['phono']))
    {
        $sel="SELECT cust_id FROM signup_login WHERE phone_no=$_SESSION[phono] || phone_no=$_SESSION[phono]";
        $reset=mysqli_query($con,$sel);
        $row = mysqli_fetch_assoc($reset);
        $cust_id = $row['cust_id'];

        if(isset($_POST['submit']))
        {
            $sql="INSERT INTO feedback(cust_id,feedback,rating) VALUES('$cust_id','$_POST[feedback]','$_POST[rating]')";
            $result=mysqli_query($con,$sql);
            echo "<script>
                alert('Thank you so much for your precious feedback');
                window.location.href = 'index.php';
            </script>";
        }
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


<!DOCTYPE html>
<html>
<head>
    <title>Feedback & Ratings</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/rating.css">
</head>

<body>
    <?php include 'header.php'?>

<div>
    <form method="post">
    <div class="fonttable">
    <div class="main-login">
    <div class="signlog">
        <table>
            <tr>
                <td colspan=3><font size=6px>Feedback & Ratings</font></td>
            </tr>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <tr>
                <td><font size=5.5px>Feedback</font></td>
                <td>:</td>
                <td><input type="textfield" name="feedback" class="form-style" placeholder="Give your feedback" required=""></td>
            </tr>
            <tr>
                <td><font size=5.5px>Rating</font></td>
                <td>:</td>
                <td>
                    <div class="star-rating">
                        <div class="rating"> 
                            <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> 
                            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> 
                            <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> 
                            <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> 
                            <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan=3><input class="btn" type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </div>
    </div>
    </div>
    </form>
</div>




    <?php include 'footer.php'?>
</body>

</html>