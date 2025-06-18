<?php
session_start();
include "includes/config.php";

if(isset($_POST['login']))
{
    $password=$_POST['logpass'];
    $phone_no=$_POST['logphone'];

    $check = "SELECT `password`, `phone_no` FROM `signup_login` WHERE phone_no='$phone_no' AND password='$password'";
    $query = mysqli_query($con,$check);
    
    if(!is_numeric($phone_no) || !preg_match('/^[0-9]{10}+$/',$phone_no) )
    {
        echo "<script>
                alert('Invalid Phone number');
                window.location.href = 'login.php';
            </script>";
    }
    else
    {
        if($query->num_rows>0)
        {
            $_SESSION['phono']=$_POST['logphone'];
            echo "<script>
                alert('You have login succesfully');
                window.location.href = 'choosecab.php';
            </script>";
        }
        else
        {
            echo "<script>
                alert('You are not signup yet. Please signup first');
                window.location.href = 'signup.php';
            </script>";
        }
    }

}


?>


<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php include 'header.php' ?>
    <div class="fonttable"> 
<div class="main-login">
<div class="signlog">
    <form method="post">
<table>
        <tr>
            <td colspan=3><font size=6px>Log In</font></td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td><font size=5.5px>Phone no</font> </td>
            <td>: </td>
            <td><input type="text" name="logphone" class="form-style" placeholder="Your Phone No" required=""></td>
        </tr>
        <tr>
            <td><font size=5.5px>Password </font></td>
            <td>: </td>
            <td><input type="password" name="logpass" class="form-style" placeholder="Your Password" required=""></td>
        </tr>
        <tr>
            <td colspan=3><input class="btn" type="submit" name="login" value="Log In"></td>
        </tr>
</table>
</form>
</div>
</div>
</div>
    <?php include 'footer.php' ?> 

</body>
</html>