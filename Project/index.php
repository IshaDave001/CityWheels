<?php
if(isset($_POST['choose_cab']))
{
    echo "<script>;
        window.location.href='choosecab.php';
    </script";
}


?>


<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<?php include 'header.php'; ?>
<body>

<form method="post">

    <div>
        <div class="index">
            
            <div class="tagline">
                <p>Unlock Your City with CityWheels</p>
            </div>
            <!-- <img src="images\homepage.jpg" alt="Responsive image" >   -->
            <img src="images\home.webp" alt="Responsive image" >          
                

                <div class="choose-btn">
                    <input type="submit" name="choose_cab" value="Choose cab">
                </div> 

        </div>
    </div>
</form>

    <?php include 'footer.php'; ?>
</body>

</html>