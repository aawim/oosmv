<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Contact | Metronic Shop UI</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

    <!-- Fonts START -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"> 
    <!-- Fonts END -->
  
    <!-- Global styles START -->          
    <link href="{{url('/').'/assets/plugins/font-awesome/css/font-awesome.min.css'}}" rel="stylesheet">
    <link href="{{url('/').'/assets/plugins/bootstrap/css/bootstrap.min.css'}}" rel="stylesheet">
    <!-- Global styles END --> 
     
    <!-- Page level plugin styles START -->
    <link href="{{url('/').'/assets/plugins/fancybox/source/jquery.fancybox.css'}}" rel="stylesheet">
    <link href="{{url('/').'/assets/plugins/owl.carousel/assets/owl.carousel.css'}}" rel="stylesheet">
    <link href="{{url('/').'/assets/plugins/uniform/css/uniform.default.css'}}" rel="stylesheet" type="text/css">
    <link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"><!-- for slider-range -->
    <link href="{{url('/').'/assets/plugins/rateit/src/rateit.css'}}" rel="stylesheet" type="text/css">
    <!-- Page level plugin styles END -->
  
    <!-- Theme styles START -->
    <link href="{{url('/').'/assets/pages/css/components.css'}}" rel="stylesheet">
    <link href="{{url('/').'/assets/corporate/css/style.css'}}" rel="stylesheet">
    <link href="{{url('/').'/assets/pages/css/style-shop.css'}}" rel="stylesheet" type="text/css">
    <link href="{{url('/').'/assets/corporate/css/style-responsive.css'}}" rel="stylesheet">
    <link href="{{url('/').'/assets/corporate/css/themes/red.css'}}" rel="stylesheet" id="style-color">
    <link href="{{url('/').'/assets/corporate/css/custom.css'}}" rel="stylesheet">
    <!-- Theme styles END -->

  
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">
{!! Toastr::message() !!}
  <!-- BEGIN TOP BAR -->
  @include('includes.topbar')
  <!-- END TOP BAR -->



    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
      <a class="site-logo" href="{{url('/')}}"><img src="{{url('/').'/assets/corporate/img/logos/logo-shop-red.png'}}" alt="Metronic Shop UI"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

           <!-- BEGIN CART -->
           @include('includes.cart')
             <!--END CART -->

            
            <!-- BEGIN TOP BAR MENU -->
            @include('includes.topmanu')
            <!-- END TOP BAR MENU -->



      </div>
    </div>
    <!-- Header END -->

    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="">Pages</a></li>
            <li class="active">Contact</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-3">
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Login/Register</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Restore Password</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> My account</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Address book</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Wish list</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Returns</a></li>
              <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Newsletter</a></li>
            </ul>

            <h2>Our Contacts</h2>
            <address>
              35, Lorem Lis Street, Park Ave<br>
              California, US<br>
              <abbr title="Phone">P:</abbr> 300 323 3456<br>
            </address>
            <address>
              <strong>Email</strong><br>
              <a href="mailto:info@metronic.com">info@metronic.com</a><br>
              <a href="mailto:support@metronic.com">support@metronic.com</a>
            </address>
            <ul class="social-icons margin-bottom-10">
              <li><a href="javascript:;" data-original-title="facebook" class="facebook"></a></li>
              <li><a href="javascript:;" data-original-title="github" class="github"></a></li>
              <li><a href="javascript:;" data-original-title="Goole Plus" class="googleplus"></a></li>
              <li><a href="javascript:;" data-original-title="linkedin" class="linkedin"></a></li>
              <li><a href="javascript:;" data-original-title="rss" class="rss"></a></li>
            </ul>
          </div>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-9">
            <h1>Contact</h1>
            <div class="content-page">
              <!-- <div id="map" class="gmaps margin-bottom-40" style="height:400px;"></div> -->

              <h2>Note</h2>
              <p> 
              Feel free to contact us for anything regarding this website. We will appreciate any innovative and creative idea to improve this website. We promise to never spam you and keep your information secret.
              </p>
              <p>Your message will be replied within 24hrs. Thank you for contacting us.</p>
              
              <!-- BEGIN FORM-->
             
              <form class="form-horizontal" action="{{route('contact.store')}}" method="POST" >
                      {{ csrf_field() }}

              {{ csrf_field() }}

              @if (Auth::check())  
       
       
                <div class="form-group">
                  <!-- <label for="name">Name</label> -->
                  <input type="hidden" class="form-control" id="name" name="name"  disabled value="{{Auth::user()->name}}">
                </div>

                <div class="form-group">
                  <!-- <label for="email">Email <span class="require"></span></label> -->
                  <input type="hidden" class="form-control" id="email" name="email"  disabled value="{{Auth::user()->email}}">
                </div>
                <div class="form-group">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" id="subject"  name="subject" required  value="">
                </div>

              @else
            

                
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name"  name="name" required  value="">
                </div>

                <div class="form-group">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" id="subject"  name="subject" required  value="">
                </div>

                <div class="form-group">
                  <label for="email">Email <span class="require"></span></label>
                  <input type="text" class="form-control" id="email" name="email" required value="">
                </div>



                @endif









                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" rows="8" id="message" name="message" required></textarea>
                </div>
                <div class="padding-top-20">                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <!-- END FORM-->          
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>





     <!-- BEGIN FOOTER -->
     @include('includes.clientfooter')
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS(REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->  
    
    
   

    <script src="{{url('/').'/assets/plugins/jquery.min.js'}}" type="text/javascript"></script>
    <script src="{{url('/').'/assets/plugins/jquery-migrate.min.js'}}" type="text/javascript"></script>
    <script src="{{url('/').'/assets/plugins/bootstrap/js/bootstrap.min.js'}}" type="text/javascript"></script>      
    <script src="{{url('/').'/assets/corporate/scripts/back-to-top.js'}}" type="text/javascript"></script>
    <script src="{{url('/').'/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js'}}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{url('/').'/assets/plugins/fancybox/source/jquery.fancybox.pack.js'}}" type="text/javascript"></script><!-- pop up -->
    <script src="{{url('/').'/assets/plugins/owl.carousel/owl.carousel.min.js'}}" type="text/javascript"></script><!-- slider for products -->
    <script src="{{url('/').'/assets/plugins/zoom/jquery.zoom.min.js'}}" type="text/javascript"></script><!-- product zoom -->
    <script src="{{url('/').'/assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js'}}" type="text/javascript"></script><!-- Quantity -->
    <script src="{{url('/').'/assets/plugins/uniform/jquery.uniform.min.js'}}" type="text/javascript"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
    <script src="{{url('/').'/assets/plugins/gmaps/gmaps.js'}}" type="text/javascript"></script>
    <script src="{{url('/').'/assets/pages/scripts/contact-us.js'}}" type="text/javascript"></script>

    <script src="{{url('/').'/assets/corporate/scripts/layout.js'}}" type="text/javascript"></script>




    
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initUniform();
            ContactUs.init();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>