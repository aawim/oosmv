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
  <title>Metronic Shop UI</title>

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
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->  
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


    <!-- BEGIN STYLE CUSTOMIZER -->
    <!-- <div class="color-panel hidden-sm">
      <div class="color-mode-icons icon-color"></div>
      <div class="color-mode-icons icon-color-close"></div>
      <div class="color-mode">
        <p>THEME COLOR</p>
        <ul class="inline">
          <li class="color-red current color-default" data-style="red"></li>
          <li class="color-blue" data-style="blue"></li>
          <li class="color-green" data-style="green"></li>
          <li class="color-orange" data-style="orange"></li>
          <li class="color-gray" data-style="gray"></li>
          <li class="color-turquoise" data-style="turquoise"></li>
        </ul>
      </div>
    </div> -->
    <!-- END BEGIN STYLE CUSTOMIZER --> 

    <!-- BEGIN TOP BAR -->
    @include('includes.topbar')
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




<div class="container">




<!-- search box container starts  -->
<div class="search">
        <p>&nbsp;</p>
        <div class="row">
            <div class="col-lg-12 ">
                <div class="input-group">
                    <span class="input-group-addon"   style="color: white; background-color: rgb(124,77,255);">PRODUCT SEARCH</span>
                    <input type="text" autocomplete="off" id="search" class="form-control input-lg" placeholder="Enter Blog Product Name Here">
               </div>
               <div class="container">
                <div id="txtHint" class="title-color" style="padding-top:9px;    text-align:center; width:97%; z-index: 2; padding-left:-205;  background-color:none; " ></div>
            </div>
            
            </div>
        </div>   
    </div>  
</div> 
<!-- search box container ends  -->

    </div>
    <!-- Header END -->




 
    

    <div class="main">
      <div class="container-fluid">
      <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="">Store</a></li>
            <li class="active">My Account Page</li>
        </ul>


        
        <div class="row">

            <div class=" sidebar col-md-2">
              




   <!-- BEGIN SIDEBAR & CONTENT -->
   <div class="row margin-bottom-40 ">
          <!-- BEGIN SIDEBAR -->
          
            <ul class="list-group margin-bottom-25 sidebar-menu">
            <li class="list-group-item clearfix"><a href="{{url('find')}}">
              <i class="fa fa-angle-right"></i>All</a></li>


            @foreach ($categories as $count => $catrgory)
              <li class="list-group-item clearfix"><a href="{{url('find/'. $catrgory->id)}}">
              <i class="fa fa-angle-right"></i>{{$catrgory->name}}</a></li>
            @endforeach


 
            </ul>
         
          <!-- END SIDEBAR -->
        
        </div>
        <!-- END SIDEBAR & CONTENT -->


            </div>
            <div class="col-md-10">
              
 <!-- BEGIN PRODUCT LIST -->
 <div class="row product-list">


 @if(count($products) > 0)
           

    

            @foreach ($products as $count => $product)
<!-- PRODUCT ITEM START -->
<form class="form-horizontal" action="{{route('cart.store')}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
              <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="{{url('/').'/'.$product->image}}" style="height:150px;" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                    <a href="{{url('/').'/'.$product->image}}" class="btn btn-default fancybox-button">Zoom</a>
                    <a href="#product-pop-up{{$count}}" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
                  <div class="pi-price">$29.00</div>

                  <input type="hidden" class="form-control" name="store_id" id="store_id"   value="{{$product->store_id}}">
                  <input type="hidden" class="form-control" name="product_id" id="product_id"   value="{{$product->id}}">
                  @if ($product->availability === 0)
                     <button class="btn btn-primary pull-right" disabled  type="submit">Add to cart</button>
                     <div class="sticker sticker-out"></div>
                  @else

                <button class="btn btn-primary pull-right"   type="submit">Add to cart</button>
                <div class="sticker sticker-new"></div>
              @endif




                </div>
              </div>
              </form>
              <!-- PRODUCT ITEM END -->




              @endforeach


              @else
          
              <div class="container-fluid">
          
          <div class="alert alert-info" >
  <strong>Info! </strong> No item found 
</div>
</div>

          @endif


            </div>
            <!-- END PRODUCT LIST -->
            </div>
        </div>







         @foreach ($products as $count => $product)
      
        
  <!-- BEGIN fast view of a product -->
  <div id="product-pop-up{{$count}}" style="display: none; width: 700px;">


  <form class="form-horizontal" action="{{route('cart.store')}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
            <div class="product-page product-pop-up">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-3">
                  <div class="product-main-image">
                    <img src="{{url('/').'/'.$product->image}}" alt="Cool green dress with red bell" class="img-responsive">
                  </div>
                  <div class="product-other-images">
                    <a href="javascript:;" class="active"><img alt="Berry Lace Dress" src="assets/pages/img/products/model3.jpg"></a>
                    <a href="javascript:;"><img alt="Berry Lace Dress" src="assets/pages/img/products/model4.jpg"></a>
                    <a href="javascript:;"><img alt="Berry Lace Dress" src="assets/pages/img/products/model5.jpg"></a>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-9">
                  <h2>Cool green dress with red bell </h2>
                  <div class="price-availability-block clearfix">
                    <div class="price">
                      <strong><span>$</span>{{$product->price}}</strong>
                      <em>$<span>62.00</span></em>
                    </div>
                    <div class="availability">
                    Availability: <strong> @if ($product->availability === 0)
                                              Out of stock 
                                          @else
                                          In Stock
                                          @endif
                                       
                                          
                                          </strong>
                </div>
                  </div>
                  <div class="description">
                    <p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna aliquarm erat volutpat Nostrud duis molestie at dolore.</p>
                  </div>
                  <div class="product-page-options">
                    <div class="pull-left">
                      <label class="control-label">Size:</label>
                      <select class="form-control input-sm">
                        <option>L</option>
                        <option>M</option>
                        <option>XL</option>
                      </select>
                    </div>
                    <div class="pull-left">
                      <label class="control-label">Color:</label>
                      <select class="form-control input-sm">
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Black</option>
                      </select>
                    </div>
                  </div>
                  <div class="product-page-cart">
                  <div class="product-quantity">
                  <input id="qty" name="qty" type="text" value="1" readonly class="form-control input-sm">
              </div>
                    <!-- <button class="btn btn-primary" type="submit" onClick="{{route('store.create')}}">Add to cart</button> -->
                  
                  
                       <input type="hidden" class="form-control" name="store_id" id="store_id"   value="{{$product->store_id}}">
                  <input type="hidden" class="form-control" name="product_id" id="product_id"   value="{{$product->id}}">
                  @if ($product->availability === 0)
                     <button class="btn btn-primary pull-right" disabled  type="submit">Add to cart</button>
                     <div class="sticker sticker-out"></div>
                  @else

                <button class="btn btn-primary pull-right"   type="submit">Add to cart</button>
                <div class="sticker sticker-new"></div>
              @endif
                                        
                          <a href="{{route('item.show', $product->id)}}" class="btn btn-default">More details</a>
                  </div>
                </div>

                <div class="sticker sticker-sale"></div>
              </div>
            </div>
    </div>

    </form>
     
    <!-- END fast view of a product -->

  
    @endforeach  


      </div>
    </div>





    <!-- BEGIN BRANDS -->
    <!-- <div class="brands">
      <div class="container">
            <div class="owl-carousel owl-carousel6-brands">
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/canon.jpg" alt="canon" title="canon"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/esprit.jpg" alt="esprit" title="esprit"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/gap.jpg" alt="gap" title="gap"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/next.jpg" alt="next" title="next"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/puma.jpg" alt="puma" title="puma"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/zara.jpg" alt="zara" title="zara"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/canon.jpg" alt="canon" title="canon"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/esprit.jpg" alt="esprit" title="esprit"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/gap.jpg" alt="gap" title="gap"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/next.jpg" alt="next" title="next"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/puma.jpg" alt="puma" title="puma"></a>
              <a href="shop-product-list.html"><img src="assets/pages/img/brands/zara.jpg" alt="zara" title="zara"></a>
            </div>
        </div>
    </div> -->
    <!-- END BRANDS -->

   
    <!-- BEGIN FOOTER -->
    @include('includes.clientfooter')
    <!-- END FOOTER -->




    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="{{url('/').'/assets/plugins/respond.min.js'}}"></script>  
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

    <script src="{{url('/').'/assets/corporate/scripts/layout.js'}}" type="text/javascript"></script>
    <script src="{{url('/').'/assets/pages/scripts/bs-carousel.js'}}" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();
        });
    </script>




<script>
$(document).ready(function(){
   $("#search").keyup(function(){
       var str=  $("#search").val();
       if(str == "") {
               $( "#txtHint" ).html("<b></b>"); 
       }else {
               $.get( "{{ url('wellhome?id=') }}"+str, function( data ) {
                   $( "#txtHint" ).html( data );  
            });
       }
   });  
}); 
</script>









    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>