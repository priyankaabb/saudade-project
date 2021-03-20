

<html class="wide wow-animation" lang="en">
  <head>
    <title>detail</title>
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
                      <li class="rd-nav-item "><a class="rd-nav-link" href="Registration.php">Registration</a>
                      </li>
					   <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.php">Contacts</a>
                      </li>
					    <li class="rd-nav-item active"><a class="rd-nav-link" href="viewdata.php">View</a>
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
	  
	   <section class="section section-sm section-first bg-default">
        <div class="container">
        
     
   <?php


include("connection.php");
error_reporting(0);

$c=1;

 $sql = "SELECT * FROM registration";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
	        echo "<center>";

        echo "<table class='bg-light text-dark'>";
		while($row = mysqli_fetch_array($result)){
		echo "<tr class='border border-secondary'>";

                echo "<td>-----------------------------------------------------</td>";
                echo "<td>---------------------------------</td>";

				echo "</tr>";
 echo "<tr class='border border-secondary'>";
                echo "<td class='p-2'><h2>$c</h2></td>";

                                echo "<td class='p-2'></td>";

                
				echo "</tr>";
           echo "<tr class='border border-secondary'>";

                echo "<td>-----------------------------------------------------</td>";
                echo "<td>---------------------------------</td>";

				echo "</tr>";
            echo "<tr class='border border-secondary'>";

                echo "<td class='p-2'>Your Name</td>";
				                echo "<td>" . $row['yname'] . "</td>";

				echo "</tr>";
                echo "<tr class='border border-secondary'>";
				echo "<td class='p-2'>Deceased Name</td>";
				                echo "<td>" . $row['dname'] . "</td>";

				echo "</tr>";
                echo "<tr class='border border-secondary'>";
				echo "<td class='p-2'>Age</td>";
				                echo "<td>" . $row['age'] . "</td>";

				echo "</tr>";
                echo "<tr class='border border-secondary'>";

				echo "<td class='p-3'>Death Date</td>";
				                echo "<td>" . $row['ddate'] . "</td>";

					echo "</tr>";
                echo "<tr class='border border-secondary'>";
				echo "<td class='p-2'>Death Place</td>";
								 echo "<td>" . $row['dplace'] . "</td>";

					echo "</tr>";
                echo "<tr class='border border-secondary'>";
				echo "<td class='p-2'>Cause of Death</td>"; 
				                echo "<td>" . $row['cause'] . "</td>";

				
					echo "</tr>";
                echo "<tr class='border border-secondary'>";
				echo "<td class='p-2'>Contact N0</td>";
				                echo "<td>" . $row['cno'] . "</td>";

					echo "</tr>";
                echo "<tr class='border border-secondary'>";
				echo "<td class='p-2'>email</td>";
				             echo "<td>" . $row['email'] . "</td>";

					echo "</tr>";
                echo "<tr class='border border-secondary'>";
				echo "<td class='p-2'>Funeral Place</td>";
								 echo "<td>" . $row['fplace'] . "</td>";

					echo "</tr>";
                echo "<tr class='border border-secondary'>";
				echo "<td class='p-2'>Visitation Place</td>";
				                echo "<td>" . $row['vplace'] . "</td>";

					echo "</tr>";
                echo "<tr class='border border-secondary'>";
				echo "<td class='p-2'>Visitation Date</td>";
                echo "<td>" . $row['vdate'] . "</td>";

            echo "</tr>";

$c++;
        }
  

 echo "</table>";
	        echo "<center>";

        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>

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
                    <button class="button button-sm button-icon-3 button-primary button-winona" type="submit"><span class="d-none d-xl-inline-block">Subscribe</span><span class="icon mdi mdi-telegram d-xl-none"></span></button>
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



