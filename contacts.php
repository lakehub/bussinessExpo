<html>
	<head>
		<title>Business Expo</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="css/font-awesome.min.css" rel="stylesheet">
    	<link href="css/animate.min.css" rel="stylesheet">
    	<link href="css/prettyPhoto.css" rel="stylesheet">
    	<link href="css/responsive.css" rel="stylesheet">
    	<link href="css/main.css" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Muli"/>
        <link href="css/hover.css" rel="stylesheet" media="all">
    </head>
		
	<style type="text/css">
		.navbar-inverse .navbar-nav > li > a,{
			font-family:Muli;
                        
		}

        #map-canvas{
                    position:fixed;
                    float:right;
                    margin:60 60 10px 10px;
                    bottom:20;
                    width:400px;
                    height:350px;
                   }

        
        .separate{
                 padding-top: 50px;
        }       
      


	</style>

         <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(0.1000, 34.7500),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

	<body style="overflow-x:hidden;">
         
		<!--<header> -->
     <!--
			<div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        
                    </div>
                    <div class="col-sm-5" style="padding-left: 6%;">
                       <div class="social">
                       		
                            <ul class="social-share">
                            	<li><i class="fa fa-phone-square" style="font-size: 20px;"></i> 0712 34 56 78</li>
                            	
                                
                            	<a href="#"><i class="fa  fa-envelope" style="font-size: 20px;"></i></a>
                                <a href="#"><i class="fa  fa-facebook" style="font-size: 20px;"></i></a>
                                <a href="#"><i class="fa  fa-twitter" style="font-size: 20px;"></i></a>
                                <a href="#"><i class="fa  fa-linkedin" style="font-size: 20px;"></i></a>
                                <a href="#"><i class="fa  fa-dribbble" style="font-size: 20px;"></i></a>
                                <a href="#"><i class="fa  fa-skype" style="font-size: 20px;"></i></a>
                               
                            </ul>
                            
                       </div>
                    </div>
                    
                </div>
            </div><!--/.container--
        </div>
      -->
        <!--div class="clearfix"></div-->
     <!--   
		<nav class="navbar navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display --
        <div class="navbar-header" style="margin-top:2%;">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-top">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="images/logo.png"/>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling --
        <div class="collapse navbar-collapse" style="margin-top: 6%;">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Home</a></li>
            <li ><a href="#" >About Us</a></li>
            <li ><a href="#" >Events</a></li>
            <li ><a href="#" >Exhibitors</a></li>
            <li ><a href="#" >Sponsors</a></li>
            <li ><a href="#" >Contacts</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
  -->
 <!--</header> -->

<nav class="navbar navbar-fixed-top navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
        
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="about-business-expo.php">About Business Expo</a></li>
                                <li><a href="why-exhibit.php">Why Exhibit</a></li>
                                <li><a href="images/stories/GENERAL-pro.pdf">Expo Info Download</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Events</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Exhibitors <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="about-business-expo.php">Exhibitor 2015</a></li>
                                <li><a href="images/stories/GENERAL-pro.pdf">Expected Exhibitors</a></li>
                            </ul>
                        </li>
                        <li><a href="gallery.php">Gallery</a></li> 
                        <li><a href="#">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav>

<div class="row" style="padding-top:70px; padding-bottom:20px;">
 <div class="separate">
    <div class="container" style="background-color:#D6E3E3; padding-bottom:0px; border:5px; border-color:#66FF33;">
      <div id="map-canvas"></div>
    <address>
    
      <p><h3><br><strong>Contact Us</strong></h3>
        </p>

        <p>We are here to answer any questions about your businessExpo experience. Reach out to us<br>
        and we'll respond as soon as we can.

        <br><br>
        Even if there's something you've always wanted to experience and can't find it on businessExpo,<br>
        let us know and we promise we will try our best to find it for you and gladly make you our delegate.</p>
        <p><u>For more information, contact us on:</u><br><br>
        Telephone: +254 20 2463040<br><br> 
        Mobile: +254719742150 or +254731332544<br><br>

        Email 1: <a href="info@businessexpo.co.ke">info@businessexpo.co.ke</a><br>
        Email 2: <a href="businessexpocountyedition@gmail.com">businessexpocountyedition@gmail.com</a><br>
        Facebook page: <a href="https://web.facebook.com/kisumuexpo">kisumuexpo</a>
        Twitter: <a href="https://twitter.com/CountyBizExpo">CountyBizExpo</a>
      </p>
     
      <!--div class="mail" >
	      <form action="form-handler.php" method="post">
		      <legend><h5>Post your e-mail</h5></legend>
		       <input type="text" name="yourMail" value="Your e-mail">
		       <input type="submit" value="Submit" style="background-color:#D0D0CD; height:2%;" >
	      </form>
      </div -->

    </address> 
</div>  
</div>
</div>

    <div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="widget">
              <h3>Bussiness Expo</h3>
              <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Exhibitors</a></li>
                <li><a href="#">Sponsors</a></li>
              </ul>
            </div>
          </div>
          <!-- break -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="widget">
              <h3>Sponsors</h3>
              <ul class="list-unstyled">
                <li><a href="#">County Government of Kisumu</a></li>
                <li><a href="#">Standard Media Group</a></li>
                <li><a href="#">Stima Sacco</a></li>
              </ul>
            </div>
          </div>
          <!-- break -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="widget">
              <h3>Exhibitors</h3>
              <ul class="list-unstyled">
                <li><a href="#">CFC Stanbic Bank</a></li>
                <li><a href="#">Orange Telkom</a></li>
                <li><a href="#">LakeHub</a></li>
                <li><a href="#">Family Bank</a></li>
                <li><a href="#">Vunduba Terrace Kisumu</a></li>
              </ul>
            </div>
          </div>
          <!-- break -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="widget">
              <h2>Contacts</h2>
              <address>
                <strong>Bussiness Expo County Edition.</strong><br>
                Kisumu<br>
                <br>
                <i class="fa fa-phone"></i> +254 20 2463040<br>
                <i class="fa fa-2x fa-mobile-phone"></i> +254719742150/+254731332544<br>
                <i class="fa fa-envelope"></i> info@businessexpo.co.ke / businessexpocountyedition@gmail.com
              </address>
            </div>
          </div>
          <!-- break -->
        </div>
        <!-- break -->

        <!-- begin:copyright -->
        <div class="row">
          <div class="col-md-12 copyright">
            <p>Bussiness Expo County Edition &copy; 2015, Inc. All Right Reserved.</p>
            <a href="#top" class="btn btn-success scroltop"><i class="fa fa-angle-up"></i></a>
            <ul class="list-inline social-links">
              <li><a href="#" class="icon-twitter" rel="tooltip" title="" data-placement="bottom" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="icon-facebook" rel="tooltip" title="" data-placement="bottom" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="icon-gplus" rel="tooltip" title="" data-placement="bottom" data-original-title="Gplus"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
        <!-- end:copyright -->

      </div>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>
