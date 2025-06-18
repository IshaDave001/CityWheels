<?php
session_start();
include "includes/config.php";

if(isset($_POST['signin']))
{
    $name=$_POST['sign_name'];
    $email=$_POST['sign_email'];
    $password=$_POST['sign_pass'];
    $phone_no=$_POST['sign_phone'];

    if(!is_numeric($phone_no) || !preg_match('/^[0-9]{10}+$/',$phone_no) )
    {
        echo "<script>
                alert('Invalid Phone number');
                window.location.href = 'signup.php';
            </script>";
    }
    else
    {
        $sql="INSERT INTO signup_login(cust_name ,email, password, phone_no) VALUES ('$name', '$email', '$password', '$phone_no')";
        $result=mysqli_query($con,$sql);

        if($result==1)
        {
            $_SESSION['phno']=$_POST['sign_phone'];
            echo "<script>
                alert('You have signup succesfully');
                window.location.href = 'index.php';
            </script>";
        }
    }
}



?>



<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include "header.php"; ?>

<form method="post">
<div class="fonttable"> 
<div class="main-signup">
<div class="signlog">
    
    <table>
        <tr>
            <td colspan=3><font size=6px>Sign Up</font></td>
        </tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
        <tr>
            <td><font size=5.5px>Name</font></td>
            <td>:</td>
            <td><input type="text" name="sign_name" class="form-style" placeholder="Your Name"  required=""></td>
        </tr>
        <tr>
            <td><font size=5.5px>Email</font></td>
            <td>: </td>
            <td><input type="email" name="sign_email" class="form-style" placeholder="Your Email" required=""></td>
        </tr>
        <tr>
            <td><font size=5.5px>Password </font></td>
            <td>: </td>
            <td><input type="password" name="sign_pass" class="form-style" placeholder="Your Password"  required=""></td>
        </tr>
        <tr>
            <td><font size=5.5px>Phone no</font> </td>
            <td>: </td>
            <td><input type="text" name="sign_phone" class="form-style" placeholder="Your Phone No"  required=""></td>
        </tr>
        <tr>
            <td colspan=3><input class="btn" type="submit" name="signin" value="Sign In"></td>
        </tr>
        <tr>
            <td colspan=3><font size=4px>Already have an account ? <spam class="link"><a href="login.php" >Log In</a></spam></font></td>

        </tr>
    </table>

</div>
</div>
</div>
</form>
    <?php include "footer.php"; ?>
</body>
</html>