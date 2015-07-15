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
		.navbar-nav > li > a,{
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

        #footer{
                background-color:#D0D0CD; 
                position:absolute; 
                bottom:0; 
                padding-right:180px;
                color:#000;
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
         
		<header>
			<div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        
                    </div>
                    <div class="col-sm-5" style="padding-left: 6%;">
                       <div class="social">
                       		
                            <ul class="social-share">
                            	<li><i class="fa fa-phone-square" style="font-size: 20px;"></i> 0712 34 56 78</li>
                            	
                                
                            	<li><a href="#"><i class="fa  fa-envelope" style="font-size: 20px;"></i></a></li>
                                <li><a href="#"><i class="fa  fa-facebook" style="font-size: 20px;"></i></a></li>
                                <li><a href="#"><i class="fa  fa-twitter" style="font-size: 20px;"></i></a></li>
                                <li><a href="#"><i class="fa  fa-linkedin" style="font-size: 20px;"></i></a></li> 
                                <li><a href="#"><i class="fa  fa-dribbble" style="font-size: 20px;"></i></a></li>
                                <li><a href="#"><i class="fa  fa-skype" style="font-size: 20px;"></i></a></li>
                               
                            </ul>
                            
                       </div>
                    </div>
                    
                </div>
            </div><!--/.container-->
        </div>
        <div class="clearfix"></div>
		<nav class="navbar navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="margin-top:2%;">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-top">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="images/logo.png"/>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
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
</header>


<div class="row" style="padding-top:50px;">
 <div class="horizontal-line"><hr></div>
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
        Facebook page: <a href="www.facebook.com">Business Expo, Kisumu County Edition 2015</a>
      </p>
    </address> 
</div>  
</div>

<div id="footer">
<br>
<div class="row" style="padding-bottom:10px;">
<div class="container">
<div class="col-md-4" style="padding-left:80px;">
 <p>&copy; 2015 Business Expo &middot; <a href="#">Terms</a></p>
</div>
<div class="col-md-4">
<!--i class="fa fa-phone-square" style="font-size: 20px; padding-left:180px;"></i> 0712 34 56 78 
</div -->
<!--div class="col-md-4" style="padding-left:200px;">
        

                              
                            	
                                <a href="https://www.mail.google.com/" style="padding-right:3px; padding-:3px;"><i class="fa  fa-envelope" style="font-size: 20px; "></i></a>
                                <a href="https://www.facebook.com/"><i class="fa  fa-facebook hvr-shutter-out-horizontal:before" style="font-size: 20px;"></i></a>
                                <a href="https://www.twitter.com/"><i class="fa  fa-twitter" style="font-size: 20px;"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fa  fa-linkedin" style="font-size: 20px;"></i></a>
                                <a href="https://www.dribbble.com/"><i class="fa  fa-dribbble" style="font-size: 20px;"></i></a>
                                <a href="https://www.skype.com/"><i class="fa  fa-skype" style="font-size: 20px;"></i></a>
                            	    
</div-->
</div>
</div>
</div>
</body>
</html>
