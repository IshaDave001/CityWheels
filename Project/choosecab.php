<?php
session_start();
include "includes/config.php";

if(isset($_POST['click']))
{
    if(isset($_SESSION['phno']) || isset($_SESSION['phono']))
    {
        echo "<script>
            window.location.href = 'booking.php';
        </script>";
    }
    else
    {
        echo "<script>
            alert('Please signup or login first to book your cab');
        </script>";
    }
}
?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Cab</title>

    <style>
        .options-btn input{
            border-radius: 100px;
            border: 500px #000;
            padding: 20px;
            background-color: black;
            cursor: pointer;
            color:white;
            font-size: 15px;
        }
        table{
            margin-left:25%;
        }
        td{
            padding-left:20px;
        }
        .cabpic img{
            height : 400px;
            width:600px;
            margin-left:30%;
            margin-top: 30px;
        }
    </style>

</head>

    <?php include "header.php"; ?>

<body>
    <form method="post">
    <div style="padding-top:5%;">    
        <div style="font-size:25px;text-transform:uppercase;margin-left:40%;">
            <h3>Choose cab</h3>
        </div>

        <div class="options-btn">
            <table>
            <tr name="label">
                <td><input type="button" value="ERTIGA" onclick="pic1()"></td>
                <td><input type="button" value="INNOVA" onclick="pic2()"></td>
                <td><input type="button" value="CRETA" onclick="pic3()"></td>
                <td><input type="button" value="FORTUNER" onclick="pic4()"></td>
                <td><input type="button" value="SWIFT" onclick="pic5()"></td>
            </tr>
            </table>
        </div>

        <div class="cabpic">
            <script>
                function pic1()
                {
                   document.getElementById("png").src = 'images/ertiga.png' ; 
                   document.getElementById("e1").value= 'NON AC / KM : ₹12';
                   document.getElementById("e2").value= 'AC / KM : ₹13';
                   document.getElementById("e3").value= 'SITTING : 6';
                }
                function pic2()
                {
                   document.getElementById("png").src = 'images/innova.jpg' ;
                   document.getElementById("e1").value= 'NON AC / KM : ₹16';
                   document.getElementById("e2").value= 'AC / KM : ₹17';
                   document.getElementById("e3").value= 'SITTING : 6';
                }
                function pic3()
                {
                   document.getElementById("png").src = 'images/creata.webp' ; 
                   document.getElementById("e1").value= 'NON AC / KM : ₹15';
                   document.getElementById("e2").value= 'AC / KM : ₹16';
                   document.getElementById("e3").value= 'SITTING : 4';
                }
                function pic4()
                {
                   document.getElementById("png").src = 'images/fortuner.webp' ; 
                   document.getElementById("e1").value= 'NON AC / KM : ₹16';
                   document.getElementById("e2").value= 'AC / KM : ₹17';
                   document.getElementById("e3").value= 'SITTING : 6';
                }
                function pic5()
                {
                   document.getElementById("png").src = 'images/swift.png' ; 
                   document.getElementById("e1").value= 'NON AC / KM : ₹12';
                   document.getElementById("e2").value= 'AC / KM : ₹13';
                   document.getElementById("e3").value= 'SITTING : 4';
                }
            </script>
                <img src = "images/ertiga.png" id="png" />
                <div class="options-btn" style="padding-left:7%">
                <table>
                    <tr>
                        <td><input type="submit" name="click" value="NON AC / KM : ₹12" id="e1"></td>
                        <td><input type="submit" name="click" value="AC / KM : ₹13" id="e2"></td>
                        <td><input type="submit" name="click" value="SITTING : 6" id="e3"></td>
                    </tr>
                </table>
                <div>
        </div>
    </div>

    </form>
</body>
    <?php include "footer.php" ?>

</html>