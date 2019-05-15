<?php session_start();?>
<?php include "db_connection/database_connection.php" ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="google-site-verification" content="aiFQM3ApjYtr5IwJoc2N3zdJ0tI6d9t3XgZplQgcAGc" />
<link rel="shortcut icon" href="images_lat/fav_icon.png">
<title>Bidding House</title>

<!-- Bootstrap Css -->
<link href="css_lat/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css_lat/bootstrap-theme.css" rel="stylesheet" type="text/css" />
<link href="css_lat/style.css" rel="stylesheet" type="text/css" />


<!--link of sweet aleart ko-->
  <script src="sweetalert2/dist/sweetalert2.min.js"></script> 
     <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/tooltip.js"></script>

</head>
<body>

<!--<div class="menuOverlay"></div>-->
<div class="sideBarMenu wow fadeInDown"  data-wow-delay="0.5s">
  <div class="close-bt"><i class="fa fa-times"></i></div>
  <ul class="sidemenu">
    <li><a href="#">About</a></li>
    <li><a href="#">Commercial</a></li>
    <li><a href="#">Residential</a></li>
    <li><a href="#">Private sellers</a></li>
    <li><a href="#">Agents and brokers</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
  <ul class="menuSocial">
    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
  </ul>
</div>
<!--<div class="sideBarMenu_wrapper">-->
<header id="top_header" class="">
<div class="container main-header">
  <div class="header-top">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <div class="brand-logo"><a href="./index.php"><h1 style="color:#FFF"> House Bid </h1></div>
      </div>
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
        <div class="sidebarMenu" id="menu">
          <button id="toggleMenu"><i class="fa fa-bars"></i></button>
          <div style="clear:both;"></div>
          <ul id="toggleNav">
            <li><a href="aboutus.php">About US</a></li>
            <li><a href="./auction_page.php">Live Bid</a></li>
            <li><a href="why_us.php">Why Us</a></li>
            <li><a href="how-it-works.php">How It Works</a></li>
            <li><a href="Contact.php">Contact Us</a></li>

            <li><a href="./login.php"><i class="fa fa-lock"></i>&nbsp; Sign in</a></li>
            <?php
        
         if(isset($_SESSION['name'])){
            $email=$_SESSION['name'];
            $query="SELECT * FROM `admin_login` WHERE email='{$email}'";
            $result = mysqli_query($link, $query);
                if (mysqli_num_rows($result) > 0) {
         echo "<li><a href='Admin_login_template/index.php'><i class='fa fa-lock'></i>&nbsp; Admin Page</a></li>";
 }}
if(isset($_SESSION['name'])){
      $email=$_SESSION['name'];
         $query="SELECT * FROM `owner_login` WHERE email='{$email}'";
            $result = mysqli_query($link, $query);
                if (mysqli_num_rows($result) > 0) {
          
         echo "<li><a href='owner_login_templete/index.php'><i class='fa fa-lock'></i>&nbsp; Owner Page</a></li>";
 }
 }
 if(isset($_SESSION['name'])){
      $email=$_SESSION['name'];
 $query="SELECT * FROM `bider_login` WHERE email='{$email}'";
            $result = mysqli_query($link, $query);
                if (mysqli_num_rows($result) > 0) {
         echo "<li><a href='bider_login_templete/index.php'><i class='fa fa-lock'></i>&nbsp; Bider Page</a></li>";
 }
 }

?>
            <br>
            <?php
       if(isset($_SESSION['name'])){

        echo "Login in as ".$_SESSION['name']."&nbsp&nbsp";
        echo "<a href='./logout.php'  class='btn btn-danger' role='button'>  Logout </a>";
    }
    ?>
            <br>
            <li class="more-nav"><a href="#"><i class="nav-icon"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</header>