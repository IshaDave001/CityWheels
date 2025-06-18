
<head>

<title>Header</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> 
    
<!--<link rel="stylesheet" href="css/header.css">-->

<style>
  /*navigationbar style*/
body {
  width : 100%;
  margin : 0;
}
.topnav img {
    float: left;
    margin-left : 50px;
}

.topnav {
  overflow: hidden;
  background-color: black;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25px;
  margin-top : 15px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}
/*navigation css ends here*/

/*dropdown css starts here*/
.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 25px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin-top: 15px;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 10px 10px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
/*dropdown css ends here*/
</style>
</head>


<section class="nav-margin">
<div class="topnav">
    <img src="images/logo2.png" width="250" alt="Bootstrappin">
    
    <div class="dropdown">  
        <button class="dropbtn">Sign Up
            <i class="fa fa-caret-down " style="font-size:24px;  margin-right: 30px;"></i>
        </button>
        <div class="dropdown-content">
          <a href="signup.php">Sign Up</a>
          <a href="login.php">Log in</a>
          <a href="logout.php">Log out</a>
        </div>
    </div>
  
    <a href="feedback.php">Feedback</a>
    <a href="history.php">History</a>

    <div class="dropdown">  
            <button class="dropbtn">About
            <i class="fa fa-caret-down " style="font-size:24px"></i>
            </button>
        <div class="dropdown-content">
        <a href="about.php">About us</a>
        <!-- <a href="whyus_user.php">Why us</a> -->
        <a href="contactus.php">Contact us</a>
        <a href="FAQs.php">FAQs</a>
        </div>
    </div>
    
    <a href="index.php">Home</a>
</div>
</section>

