<!DOCTYPE html>

<?php
include("connection.php");
error_reporting(0);

?>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Registration</title>
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
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="preloader">
      <div class="wrapper-triangle">
        <div class="pen">
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="56px" data-xl-stick-up-offset="56px" data-xxl-stick-up-offset="56px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-inner-outer">
              <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/download.jpg" alt="" width="198" height="66"/></a></div>
                </div>
                <div class="rd-navbar-right rd-navbar-nav-wrap">
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
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="#">Registration</a>
                      </li>
					   <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.php">Contacts</a>
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
      </header>
      <!-- Breadcrumbs -->
      <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">No matter where you go, you will always be in my heart.</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
          <div class="box-transform" style="background-image: url(images/family8.jpg);"></div>
        </div>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li class="active">Registration</li>
          </ul>
        </div>
      </section>
	  <!-- Tell-->
      <section class="section section-sm section-first bg-default">
        <div class="container">
          <h3 class="heading-3">ANNOUNCEMENT</h3>
          <form class="rd-form rd-mailform form-style-1"  data-form-type="contact" method="post" action="#">
			<div class="row row-20 gutters-20">
			  <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
					<h6>Your Name*</h6>
					<input class="form-input" id="contact-your-rname-6" type="text" name="yname" placeholder="Full name" data-constraints="@Required">
                </div>
              </div>
			   <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
					<h6>password*</h6>
					<input class="form-input" id="contact-your-rname-6" type="password" name="password" placeholder="Full name" data-constraints="@Required">
                </div>
              </div>
			 
			  <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
					<h6>Deceased Name*</h6>
					<input class="form-input" id="contact-your-dname-6" type="text" name="dname" placeholder="Full name" data-constraints="@Required">
                </div>
              </div>
			  			   <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
					<h6>Age*</h6>
					<input class="form-input" id="contact-your-age-6" type="number" name="age" placeholder="Age" data-constraints="@Required">
                </div>
              </div>
			   <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
					<h6>Death Date*</h6>
					<input class="form-input" id="contact-your-ddate-6" type="date" name="ddate" data-constraints="@Required">
                </div>
              </div>
			  <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
					<h6>Death Place*</h6>
					<input class="form-input" id="contact-your-dplace-6" type="text" name="dplace" placeholder="Place name" data-constraints="@Required">
                </div>
              </div>
			  <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
					<h6>Cause of Death*</h6>
					<input class="form-input" id="contact-your-dcause-6" type="text" name="cause" placeholder="Disease name" data-constraints="@Required">
                </div>
              </div>
			   <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
					<h6>Contact Number*</h6>
					<input class="form-input" id="contact-your-cnum-6" type="tel" name="cno" pattern="[0-9]{10}" placeholder="0000000000" data-constraints="@Required">
                </div>
              </div>
			  <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
					<h6>Email Address*</h6>
					<input class="form-input" id="contact-your-em-6" type="email" name="email" placeholder="abc@mail.com" data-constraints="@Required">
                </div>
              </div>
             <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
					<h6>Funeral Place*</h6>
					<input class="form-input" id="contact-your-funeralplace-6" type="text" name="fplace" placeholder="Funeral Place Name" data-constraints="@Required">
                </div>
              </div>
			  
			  <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
					<h6>Visitation Place</h6>
					<input class="form-input" id="contact-your-funeralplace-6" type="text" name="vplace" placeholder="Visitation Place Name" data-constraints="@Required">
                </div>
              </div>
			  <div class="col-md-6 col-lg-4 oh-desktop">
                <div class="form-wrap wow slideInDown">
					<h6> Visitation Date </h6>
					<input class="form-input" id="contact-your-fdate-6" type="date" name="vdate" placeholder="dd-mm-yyyy" data-constraints="@Required">
                </div>
              </div>
			  <div class="col-md-12 col-lg-12 oh-desktop text-center">
                <div class="form-wrap wow slideInDown">
						<b style="font-size:25px">Select image:</b>
						<input type="file" id="img" name="img">
                </div>
              </div>
			   
						    <div class="col-md-12 col-lg-12 oh-desktop text-center">

			   <input class="button button-xs button-secondary button-winona wow fadeInRight" type="submit" name="reg" value="submit the form">
                        </div>

		   </form>
        </div>
      </section>
      
      <footer class="section footer-modern context-dark footer-modern-2">
        <div class="footer-modern-line">
          <div class="container">
            <div class="row row-50">
              <div class="col-md-6 col-lg-4">
				<a class="brand" href="index.html" style="padding-top: 55px; padding-left: 30px;"><img src="images/download_dark.jpg" alt="" width="230" height="88"/></a>
              </div>
              <div class="col-md-6 col-lg-4 col-xl-3">
                <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">Information</span></h5>
                <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
                  <li><a href="about-us.html">About us</a></li>
                  <li><a href="#">Latest News</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="flowers.html">Shop</a></li>
                  <li><a href="contacts.html">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-4 col-xl-5">
                <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">Newsletter</span></h5>
                <p class="wow fadeInRight">Sign up today for the latest news and updates.</p>
                
                <form class="rd-form rd-mailform rd-form-inline rd-form-inline-sm oh-desktop" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                  <div class="form-wrap wow slideInUp">
                    <input class="form-input" id="subscribe-form-2-email" type="email" name="email" data-constraints="@Email @Required"/>
                    <label class="form-label" for="subscribe-form-2-email">Enter your E-mail</label>
                  </div>
                  <div class="form-button form-button-2 wow slideInRight">
                    <button class="button button-xs button-secondary button-winona wow fadeInRight" type="submit"><span class="d-none d-xl-inline-block">Subscribe</span><span class="icon mdi mdi-telegram d-xl-none"></span></button>
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
               
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span></span><span>.&nbsp;</span><span>All Rights Reserved.</span><span> Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com">TemplateMonster</a></span></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>




<?php

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["img"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($_POST['reg'])
{
//			echo '<script>alert("Welcome to Geeks for Geeks")</script>'; 

	$ynm=$_POST['yname'];
	$pw=$_POST['password'];
	$dnm=$_POST['dname'];
	$age=$_POST['age'];
	$ddate=$_POST['ddate'];
	$dplace=$_POST['dplace'];
	$cause=$_POST['cause'];
	$cno=$_POST['cno'];
	$mail=$_POST['email'];
	$fplace=$_POST['fplace'];
	$vplace=$_POST['vplace'];
	$vdate=$_POST['vdate'];
$img=$_post['img'];
$file = $_FILES['img']['tmp_name'];
  $image = addslashes($_file_get_content($_FILES['img']['tmp_name']));

  
	if($ynm!="" && $pw!="" && $dnm!="" && $age!="" && $ddate!="" && $dplace!="" && $cause!="" && $cno!="" && $mail!="" && $fplace!="" && $vplace!="" && $vdate!="" )
	{
			$query="insert into registration (`yname`, `password`, `dname`, `age`, `ddate`, `dplace`, `cause`, `cno`, `email`, `fplace`, `vplace`, `vdate`,`img`)values('$ynm','$pw','$dnm','$age','$ddate','$dplace','$cause','$cno','$mail','$fplace','$vplace','$vdate','$image')";
			$count= mysqli_query($conn,$query);
			
			 	if($count){  
            echo "<h1><center>  successful </center></h1>";  
        }  
        else{  
            echo "<h1> unsucessfull.</h1>";  
        } 
	
	}
}
	/*if(!empty($_FILES['img']))
	{
		$path = "images/";
		$path = $path . basename( $_FILES['img']['name']);

		if(move_uploaded_file($_FILES['img']['tmp_name'], $path)) 
		{
		echo "<h1>The file is done</h1> ";
		} else
		{
			echo "<h1>There was an error uploading the file, please try again!</h1>";
        }
  


    }
		*/
		

?>