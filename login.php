<?php
include("connection.php");
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login V15</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/tablogo.jpg" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="rd-navbar-wrap" style="height: 80px;">
          <nav class="rd-navbar rd-navbar-modern rd-navbar-original rd-navbar-static rd-navbar--is-stuck" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="56px" data-xl-stick-up-offset="56px" data-xxl-stick-up-offset="56px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-inner-outer">
              <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/download.jpg" alt="" width="198" height="66"></a></div>
                </div>
                <div class="rd-navbar-right rd-navbar-nav-wrap toggle-original-elements">
                  <div class="rd-navbar-aside">
                    <ul class="rd-navbar-contacts-2">
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                          <div class="unit-body"><a class="phone" href="tel:#">+1 718-999-3939</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                          <div class="unit-body"><a class="address" href="#"> saudade@gmail.com </a></div>
                        </div>
                      </li>
                    </ul>
                    <ul class="list-share-2">
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                    </ul>
                  </div>
                  <div class="rd-navbar-main">
                    <!-- RD Navbar Nav-->
                     <ul class="rd-navbar-nav">
                      <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Home</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.php">About us</a>
                      </li>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="typography.php">login</a>
                      </li>
					   <li class="rd-nav-item"><a class="rd-nav-link" href="#">Contacts</a>
                      </li>
					    <li class="rd-nav-item"><a class="rd-nav-link" href="list.php">View</a>
                      </li>
                    
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
<span class="login100-form-title-1">
Sign In
</span>
</div>
<form class="login100-form validate-form" method="post">
<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
<span class="label-input100">Username</span>
<input class="input100" type="text" name="unm" placeholder="Enter username">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
<span class="label-input100">Password</span>
<input class="input100" type="password" name="pass" placeholder="Enter password">
<span class="focus-input100"></span>
</div>
<div class="flex-sb-m w-full p-b-30">
<div class="contact100-form-checkbox">
<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
<label class="label-checkbox100" for="ckb1">
Remember me
</label>
</div>
<div>
<a href="#" class="txt1">
Forgot Password?
</a>
</div>
</div>
<div class="container-login100-form-btn">
<input type="submit" class="login100-form-btn" value="login" name="login">


</div>
</form>
</div>
</div>
</div>
<footer class="section footer-modern context-dark footer-modern-2">
        <div class="footer-modern-line">
          <div class="container">
            <div class="row row-50">
              <div class="col-md-6 col-lg-4">
				<a class="brand" href="index.html" style="padding-top: 55px; padding-left: 30px;"><img src="images/download_dark.jpg" alt="" width="230" height="88"></a>
              </div>
              <div class="col-md-6 col-lg-4 col-xl-3">
                <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">Information</span></h5>
                <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                  <li><a href="about-us.html">About us</a></li>
                  <li><a href="#">Latest News</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="flowers.html">Shop</a></li>
                  <li><a href="contacts.html">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-4 col-xl-5">
                <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;">Newsletter</span></h5>
                <p class="wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">Sign up today for the latest news and updates.</p>
                <!-- RD Mailform-->
                <form class="rd-form rd-mailform rd-form-inline rd-form-inline-sm oh-desktop" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" novalidate="novalidate">
                  <div class="form-wrap wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
                    <input class="form-input form-control-has-validation" id="subscribe-form-2-email" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
                    <label class="form-label rd-input-label" for="subscribe-form-2-email">Enter your E-mail</label>
                  </div>
                  <div class="form-button form-button-2 wow slideInRight" style="visibility: visible; animation-name: slideInRight;">
                    <button class="button button-sm button-icon-3 button-primary button-winona" type="submit"><div class="content-original"><span class="d-none d-xl-inline-block">Subscribe</span><span class="icon mdi mdi-telegram d-xl-none"></span></div><div class="content-dubbed"><span class="d-none d-xl-inline-block">Subscribe</span><span class="icon mdi mdi-telegram d-xl-none"></span></div></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-modern-line-3">
          <div class="container">
            <div class="row row-10 justify-content-between">
              <div class="col-md-6"><span>514 S. Magnolia St. Orlando, FL 32806</span></div>
              <div class="col-md-auto">
                <!-- Rights-->
                <p class="rights"><span>©&nbsp;</span><span class="copyright-year">2021</span><span></span><span>.&nbsp;</span><span>All Rights Reserved.</span><span> Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com">TemplateMonster</a></span></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>

<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>

<script src="vendor/countdowntime/countdowntime.js"></script>

<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>

<?php

  
       
if($_POST['login'])
{
    $username = $_POST['unm'];  
    $password = $_POST['pass'];  
      
        
        $sql = "select * from registration where yname = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
		echo '<script>alert($result)</script>'; 
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h3><center> Login successful </center></h3>";  
        }  
        else{  
            echo "<h3> Login failed. Invalid username or password.</h3>";  
        }     
}
?>