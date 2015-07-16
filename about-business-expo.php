<html>
    <head>
        <title>Business Expo</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/3-col-portfolio.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Muli"/>
        </head>
        
    <style type="text/css">
        .navbar-nav > li > a{
            font-family:Muli;
        }
        #map-canvas{
                    position:fixed;
                    margin:60 60 10px 10px;
                    bottom:20;
                    width:400px;
                    height:350px;
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

    <body>
        <header>
        <div class="clearfix"></div>
        <nav class="navbar" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="padding-top:1%;padding-left: 4%;">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-top">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="images/logo.png"/>
         </div>
        
        <div class="social pull-right">
                            
                            <ul class="social-share">
                                <li><i class="fa fa-phone-square" style="font-size: 20px;"></i> 0712 34 56 78</li>
                                <li><i class="fa  fa-envelope" style="font-size: 20px;"></i></li>
                                <li><i class="fa  fa-facebook" style="font-size: 20px;"></i></li>
                                <li><i class="fa  fa-twitter" style="font-size: 20px;"></i></li>
                                <li><i class="fa  fa-linkedin" style="font-size: 20px;"></i></li> 
                                <li><i class="fa  fa-dribbble" style="font-size: 20px;"></i></li>
                                <li><i class="fa  fa-skype" style="font-size: 20px;"></i></li>
                            </ul>
                            
         </div>
        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" style="margin-top: 6%;">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="about-business-expo.php">About Business Expo</a></li>
                    <li><a href="why-exhibit.php">Why Exhibit</a></li>
                    <li><a href="images/stories/GENERAL-pro.pdf">Expo Information Download</a></li>
                    
                </ul>

            </li>
            <li ><a href="events.php" >Events</a></li>
            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Exhibitors<b class="caret"></b></a>
                            <ul class="dropdown-menu">
            <li ><a href="why-exhibit.php" >Exhibitor 2015</a></li>
            <li><a href="images/stories/EXPECTED EXHIBITORS.pdf">Expected Exhibitors</a></li>
            </ul>
            </li>
             <li ><a href="gallery.php" >Gallery</a></li>
            <li ><a href="#" >Sponsors</a></li>
            <li ><a href="contacts.php" >Contacts</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
    </header>
        
    <section>
      <div class="container">
        <div class = "row ">
        <div class="col-md-8">

            <h3>About Business Expo</h3>
            <p>Business Expo County Edition is a comprehensive multi sector trade portal created to help business owners in all the Counties in Kenya grow their businesses by providing an avenue to meet potential clients and business agents within and around the Counties. Exhibitions are a quantifiable, proven and highly cost effective business tool that offer a one to one marketing experience that is second to none.</p>
            <p>Its with this backdrop of information that Business Expo County Edition in collaboration with the County Government of Kisumu intends to hold this kind of its own Exhibition dubbed Business Expo, Kisumu County Edition 2015.</p>
            <p>This annual event intends to bring together Corporate, Large, Medium and Small Companies and Institutions doing businesses in Kisumu County and other parts of the Country for an experiential marketing exhibition, through which they will be able to connect people to their brands or ideas, through a face to face experience that engages them and asks them to participate or at least respond.</p>
            
            <p>This will be a great opportunity for companies and institutions to showcase their products and services to people living within and around Kisumu County, with an eventual aim of boosting the County’s economy.
</p>
            <p>The event will help thousands of visitors benefit from the information, advice and support that will be on offer – not just from business support agencies but also the exhibitors themselves.
Exhibition visitors will have the opportunity of sourcing new suppliers, making valuable business contacts and attending informative workshops and clinics.</p>
            <p>Inter Business relations will be enhanced between the self employed, the multinationals, most experienced business managers to those who are exploring their first business ideas. There will be a range of interesting features and lots of networking and business opportunities.
There will be something on offer for everyone – sponsors, exhibitors and visitors.


</p>

        </div>
        <div class="col-md-4">
        <div class="thumbnail">
                <img class="img-rounded" data-src="holder.js/140x140" src="images/event-1.jpg"></div>
      <div id="map-canvas"></div>
        </div>
        
        </div>
        <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">  </div>
        </div>
        </div>
        </section>
        
            <!-- Footer -->
    <div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="widget">
              <h3>Bussiness Expo</h3>
              <ul class="list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li><a href="about-business-expo.php">About</a></li>
                <li><a href="gallery.php">Gallery</a></li>
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
    
   <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    
    </body>
</html>