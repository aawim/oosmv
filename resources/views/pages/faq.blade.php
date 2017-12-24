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
  <title>Frequently Asked Questions | Metronic Shop UI</title>

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
  <link href="{{url('/').'/assets/pages/css/animate.css'}}" rel="stylesheet">
  <link href="{{url('/').'/assets/plugins/fancybox/source/jquery.fancybox.css'}}" rel="stylesheet">
  <link href="{{url('/').'/assets/plugins/owl.carousel/assets/owl.carousel.css'}}" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="{{url('/').'/assets/pages/css/components.css'}}" rel="stylesheet">
  <link href="{{url('/').'/assets/pages/css/slider.css'}}" rel="stylesheet">
  <link href="{{url('/').'/assets/pages/css/style-shop.css'}}" rel="stylesheet" type="text/css">
  <link href="{{url('/').'/assets/corporate/css/style.css'}}" rel="stylesheet">
  <link href="{{url('/').'/assets/corporate/css/style-responsive.css'}}" rel="stylesheet">
  <link href="{{url('/').'/assets/corporate/css/themes/red.css'}}" rel="stylesheet" id="style-color">
  <link href="{{url('/').'/assets/corporate/css/custom.css'}}" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">
    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
               <!-- BEGIN TOP BAR LEFT PART -->
               @include('includes.topleftbar')
               <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                @include('includes.topbarmenu')
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->

    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
      <a class="site-logo" href="{{ url('/') }}"><img src="{{url('/').'/assets/corporate/img/logos/logo-shop-red.png'}}" alt="Metronic Shop UI"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->
        @if (Auth::check())  
                @include('includes.cart')
       @endif
        <!--END CART -->
       <!-- BEGIN NAVIGATION -->
          @include('includes.topmanu')
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->

    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="">Store</a></li>
            <li class="active">Frequently Asked Questions</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          @if (Auth::check())  
          @include('includes.client.sidebar')
  @endif
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-9">
            <h1>Frequently Asked Questions</h1>
            <div class="faq-page">
                            <div class="panel panel-default">
                               <div class="panel-heading">
                                  <h4 class="panel-title">
                                     <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">
                                     1. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
                                     </a>
                                  </h4>
                               </div>
                               <div id="accordion1_1" class="panel-collapse collapse  in">
                                  <div class="panel-body">
                                     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                               </div>
                            </div>
                            <div class="panel panel-default">
                               <div class="panel-heading">
                                  <h4 class="panel-title">
                                     <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">
                                     2. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
                                     </a>
                                  </h4>
                               </div>
                               <div id="accordion1_2" class="panel-collapse collapse">
                                  <div class="panel-body">
                                     Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch   et.
                                     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                               </div>
                            </div>
                            <div class="panel panel-success">
                               <div class="panel-heading">
                                  <h4 class="panel-title">
                                     <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">
                                     3. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor ?
                                     </a>
                                  </h4>
                               </div>
                               <div id="accordion1_3" class="panel-collapse collapse">
                                  <div class="panel-body">
                                     Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch   et.
                                     Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                               </div>
                            </div>
                            <div class="panel panel-warning">
                               <div class="panel-heading">
                                  <h4 class="panel-title">
                                     <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">
                                     4. Wolf moon officia aute, non cupidatat skateboard dolor brunch ?
                                     </a>
                                  </h4>
                               </div>
                               <div id="accordion1_4" class="panel-collapse collapse">
                                  <div class="panel-body">
                                     3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                               </div>
                            </div>
                            <div class="panel panel-danger">
                               <div class="panel-heading">
                                  <h4 class="panel-title">
                                     <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">
                                     5. Leggings occaecat craft beer farm-to-table, raw denim aesthetic ?
                                     </a>
                                  </h4>
                               </div>
                               <div id="accordion1_5" class="panel-collapse collapse">
                                  <div class="panel-body">
                                     3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                  </div>
                               </div>
                            </div>
                            <div class="panel panel-default">
                               <div class="panel-heading">
                                  <h4 class="panel-title">
                                     <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">
                                     6. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth ?
                                     </a>
                                  </h4>
                               </div>
                               <div id="accordion1_6" class="panel-collapse collapse">
                                  <div class="panel-body">
                                     3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                  </div>
                               </div>
                            </div>
                            <div class="panel panel-default">
                               <div class="panel-heading">
                                  <h4 class="panel-title">
                                     <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_7">
                                     7. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft ?
                                     </a>
                                  </h4>
                               </div>
                               <div id="accordion1_7" class="panel-collapse collapse">
                                  <div class="panel-body">
                                     3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et
                                  </div>
                               </div>
                            </div>
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

    <script src="{{url('/').'/assets/corporate/scripts/layout.js'}}" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>