<?php 
    include 'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>
    <link rel="stylesheet" href="css/static.css">
</head>
<body>
    <!-- About Start -->
    <div class="main">
    <h1 style="text-align:center">Who are we?</h1>
    <hr style="height: 5px;width:50%;background-color:black">
    <table style="margin-left:150px">
        <tr>
            <td>
                <img src="images/about.png" style="height:450px;width:500px">
            </td>

            <td>
            <section id="who-we-are">
            <p>We are a professional Rajkot-based taxi company. We are operating in all major cities across Gujarat.</p>
            </section>

            <section id="customer-satisfaction">
            <h2>Customer Satisfaction</h2>
            <progress value="100" max="100" class="yellow-stroke"> 100% </progress>100%
            <p>all of our customers are happy.</p>
            </section>

            <section id="reaction-time">
            <h2>Reaction Time</h2>
            <progress value="80" max="100" class="yellow-stroke"> 100% </progress>80%
            <p>We have best and clean cars.</p>
            </section>

            <section id="city-coverage">
            <h2>City Coverage</h2>
            <progress value="85" max="100" class="yellow-stroke"> 100% </progress>85%
            <p>We're expanding everyday, but we still need time.</p>
            </section>
            </td>
        </tr>
	</table>
    <!-- About End -->

</body>

</html>
<?php
	include("footer.php");
	

?>