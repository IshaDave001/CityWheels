<?php
session_start();
include "includes/config.php";
try
{
    if(isset($_POST['book']))
    {
        $name = $_POST['book_name'];
        $phno=$_POST['book_phno'];
        $date=$_POST['book_date'];
        $from=$_POST['book_pickup'];
        $to=$_POST['book_drop'];
        $time=$_POST['book_time'];
        $cab_type=$_POST['book_choosecab'];
        $cab_preference=$_POST['book_pref'];

        $sql="SELECT * FROM signup_login WHERE phone_no LIKE '%$_POST[book_phno]%'";
        $result=mysqli_query($con,$sql);
    
        if(mysqli_num_rows($result) > 0)
        {
            echo "<script>
            if(confirm('Please confirm the invoice details to book your ride'))
            {
                window.location.href = 'invoice.php ? nm=$name & phno=$phno &  date=$date & from=$from & to=$to &  time=$time & type=$cab_type  & pref=$cab_preference ';
            }
            else
            {
                window.location.href = 'booking.php';
            }
            </script>";
        }
        else
        {
            echo "<script>
                alert('Please check the phone number');
                    window.location.href = 'booking.php';
            </script>";
        }
    }
}
catch(Exception $e)
{
    echo $e;
}

?>



<!DOCTYPE html>

<head>
    <title>Booking</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php include 'header.php'; ?>

<form method="post">
<div>
    <div class="fonttable"> 
    <div class="booking">
    <div class="containsbook">
    
    <table>
        <tr>
            <td colspan=3 style="text-align:center;"><font size=6px>Booking</font></td>
        </tr>
        <tr>
            <td class="booking-label"><font size=5.5px>Name</font></td>
            <td>:</td>
            <td><input type="text" name="book_name" class="form-style" placeholder="Your Name" required=""></td>
        </tr>
        <tr>
            <td><font size=5.5px>Phone no</font></td>
            <td>: </td>
            <td><input type="text" name="book_phno" class="form-style" placeholder="Your Phone no" required=""></td>
        </tr>
        <tr>
            <td><font size=5.5px>Date</font></td>
            <td>: </td>
            <td><input type="date" name="book_date" class="form-style" required=""></td>
        </tr>
        <tr>
            <td><font size=5.5px>Pickup</font> </td>
            <td>: </td>
            <td><input type="text" name="book_pickup" class="form-style" placeholder="Address to start the ride" ></td>
        </tr>
        <tr>
            <td><font size=5.5px>Drop</font> </td>
            <td>: </td>
            <td><!--<input type="text" name="book_drop" class="form-style" placeholder="Address to end the ride" required="">-->
                <select name="book_drop" class="form-style" required="">
                    <option value="">Select Your destination</option>                    
                    <option value="Morbi">Rajkot - Morbi</option>
	                <option value="Bhuj">Rajkot - Bhuj</option>
                    <option value="Jamnagar">Rajkot - Jamnagar</option>
                    <option value="Ahmedabad">Rajkot - Ahmedabad</option>
                    <option value="Surat">Rajkot - Surat</option>
                    <option value="Vadodra">Rajkot - Vadodra</option>
                </select>
        
            </td>
        </tr>
        <tr>
            <td><font size=5.5px>Time</font> </td>
            <td>: </td>
            <td><input type="time" name="book_time" class="form-style" required=""></td>
        </tr>
        <tr>
            <td><font size=5.5px>Choose cab</font> </td>
            <td>: </td>
            <td>
                <select name="book_choosecab" class="form-style" id="choosecab">
                    <option value="Ertiga" selected>Ertiga</option>
	                <option value="Innova">Innova</option>
                    <option value="Creta">Creta</option>
                    <option value="Fortuner">Fortuner</option>
                    <option value="Swift">Swift</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><font size=5.5px>Your Preference</font> </td>
            <td>: </td>
            <td><input type="radio" name="book_pref" value="AC">AC</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="radio" name="book_pref" value="NON AC" >NON AC</td>
        </tr>
        <tr>
            <td><font size=5.5px>Payment</font> </td>
            <td>: </td>
            <td><input type="radio" name="book_payment" selected>Cash Only</td>
        </tr>
        <tr>
            <td colspan=3>
            <input type="submit" class="book-btn" name="book" value="Book" >
            </td>
        </tr>
        </div>
    </table>

</div>
</div> 
</div>

</form>

</body>

<?php include 'footer.php'; ?>


</html>

