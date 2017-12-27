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
  <title>Shopping cart | Metronic Shop UI</title>

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
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
 
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
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


    <!-- BEGIN TOP BAR -->
    @include('includes.topbar')
<!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->

    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="{{url('/')}}"><img src="{{url('/').'/assets/corporate/img/logos/logo-shop-red.png'}}" alt="Metronic Shop UI"></a>

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

      {!! Toastr::message() !!}
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>Shopping cart</h1>
            <div class="goods-page">
              <div class="goods-data clearfix">
                <div class="table-wrapper-responsive">
                <table summary="Shopping cart">
                  <tr>
                    <th class="goods-page-image">Image</th>
                    <th class="goods-page-description">Description</th>
                  
                    <th class="goods-page-quantity">Quantity</th>
                    <th class="goods-page-price">Unit price</th>
                    <th class="goods-page-total" colspan="2">Total</th>
                  </tr>
       
                  @foreach ($cartitems as $count => $cart_item)
                  <tr>
                     <td class="goods-page-image">
                      <a href="javascript:;"><img src="{{url('/').'/'.$cart_item->product()->first()->image}}" alt="Berry Lace Dress"></a>
                    </td>
                    <td class="goods-page-description">
                      <h3 ><strong><a href="{{route('cart.edit', $cart_item->id)}}">{{ $cart_item->product->name}}</a></strong></h3>
                      <p><strong>Item {{$count+1}}</strong> - <strong>Color:</strong> 
                      
                      @if($cart_item->product()->first()->color === null)
                      {{"N/A"}}
                      @else
                      {{$cart_item->product()->first()->color}}
                      @endif
                      
                      <strong> Size: </strong> {{$cart_item->product()->first()->size}}</p>
                      <em><strong>Store: <a href="{{url('store', $cart_item->store->id)}}" style="color:green;">{{ $cart_item->store->name}}</a></strong></em>
                    </td>
                   
                    <td class="goods-page-quantity">
                    <div class="col-sm-3">
                     {{$cart_item->qty}}
</div>
                    </td>
                    <td class="goods-page-price">
                      <strong><span>$</span>{{$cart_item->product()->first()->price}}</strong>
                    </td>
                    <td class="goods-page-total">
                      <strong><span>$</span>{{ 
                       $subtot  = $cart_item->product()->first()->price * $cart_item->qty
                        
                      
                       }}  </strong>
                    </td>
                    <td class="del-goods-col">
                      <!-- <a class="del-goods" href="javascript:;">&nbsp;</a> -->
                     
                      <a href="#" class="del-goods btn" data-toggle="modal" data-target="#deleteModal{{$count}}"
                                data-delete-id="{{$cart_item->id}}" onclick="$('#delete-id').val($(this).data('delete-id'));">&nbsp;
                      </a>
     
                    </td>
                  </tr>
               
<!-- Modal -->
<div id="deleteModal{{$count}}" class="modal fade" role="dialog">
<div class="modal-dialog">
  <!-- Modal content-->
  <div class="modal-content">
    <form class="form-horizontal" action="{{route('cart.destroy',$cart_item->id)}} " method="POST">
    {{method_field('DELETE')}}  {!! csrf_field() !!} 
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to permanently delete this item ?</p>
        <input type="text" id="delete-id" name="id" value="0" hidden />
      </div>
      <div class="modal-footer">
        <span id="delete-dialog-link">
          <button type="submit"  class="btn btn-danger">Confirm</button>
        </span>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </form>
  </div>
</div>
</div>
                   @endforeach     
                  </table>
                </div>
              
                <!-- <div class="shopping-total">
                  <ul>
                    <li>
                      <em>Sub total</em>
                      <strong class="price"><span>$</span> </strong>
                    </li>
                    <li>
                      <em>Shipping cost</em>
                      <strong class="price"><span>$</span>3.00</strong>
                    </li>

                    <li>
                      <em>GST </em>
                      <strong class="price"><span>$</span>3.00</strong>
                    </li>
                    <li class="shopping-total-price">
                      <em>Total</em>
                      <strong class="price"><span>$</span>
                               jlkjl
                      </strong>
                    </li>
                  </ul>
                </div> -->
                
              </div>
              <!-- <button class="btn btn-default" type="submit">Continue shopping <i class="fa fa-shopping-cart"></i></button> -->
              <a href="{{url('/find')}}" class="btn btn-default" >Continue shopping </a>
              <!-- <form class="form-horizontal" action="{{route('order.store')}}" method="POST" >
                      {{ csrf_field() }}
                      <input type="hidden" class="form-control " name="user_id" id="user_id"   required value="{{ Auth::user()->id }}">
               <button class="btn btn-primary" type="submit">Check for availability <i class="fa fa-check"></i></button>
            
            </form> -->

            <!-- <a href="#" class="del-goods btn" data-toggle="modal" data-target="#conformationModal">Check for availability </a> -->
           
            @if(Auth::user()->cart_items()->where('is_active', 1)->get()->count() > 0)
            <button class="btn btn-primary" data-toggle="modal" data-target="#conformationModal" type="submit">Check for availability <i class="fa fa-check"></i></button>
           @else
           <button class="btn btn-primary" data-toggle="modal" disabled data-target="#conformationModal" type="submit">Check for availability <i class="fa fa-check"></i></button>
            @endif




            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->


<!-- Modal -->
<div id="conformationModal" class="modal fade" role="dialog">
<div class="modal-dialog">
  <!-- Modal content-->
  <div class="modal-content">
  <form class="form-horizontal" action="{{route('order.store')}}" method="POST" >
  {{ csrf_field() }}
  <input type="hidden" class="form-control " name="user_id" id="user_id"   required value="{{ Auth::user()->id }}">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Order Conformation</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to place this order ?</p>
        <input type="text" id="delete-id" name="id" value="0" hidden />
      </div>
      <div class="modal-footer">
        <span id="delete-dialog-link">
          <button type="submit"  class="btn btn-danger">Confirm</button>
        </span>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </form>
  </div>
</div>
</div>



          <!-- BEGIN SIMILAR PRODUCTS -->
          @include('includes.popular')
          <!-- END SIMILAR PRODUCTS -->
      </div>
    </div>






    
 

    <!-- BEGIN PRE-FOOTER -->
    @include('includes.clientfooter')
    <!-- END FOOTER -->

    <!-- BEGIN fast view of a product -->
    <div id="product-pop-up" style="display: none; width: 700px;">
            <div class="product-page product-pop-up">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-3">
                  <div class="product-main-image">
                    <img src="{{url('/').'/assets/pages/img/products/model7.jpg'}}" alt="Cool green dress with red bell" class="img-responsive">
                  </div>
                  <div class="product-other-images">
                    <a href="javascript:;" class="active"><img alt="Berry Lace Dress" src="{{url('/').'/assets/pages/img/products/model3.jpg '}}"></a>
                    <a href="javascript:;"><img alt="Berry Lace Dress" src="{{url('/').'/assets/pages/img/products/model4.jpg '}}"></a>
                    <a href="javascript:;"><img alt="Berry Lace Dress" src="{{url('/').'/assets/pages/img/products/model5.jpg '}}"></a>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-9">
                  <h1>Cool green dress with red bell</h1>
                  <div class="price-availability-block clearfix">
                    <div class="price">
                      <strong><span>$</span>47.00</strong>
                      <em>$<span>62.00</span></em>
                    </div>
                    <div class="availability">
                      Availability: <strong>In Stock</strong>
                    </div>
                  </div>
                  <div class="description">
                    <p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna aliquarm erat volutpat 
Nostrud duis molestie at dolore.</p>
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
                        <input id="product-quantity3" type="text" value="1" readonly class="form-control input-sm">
                    </div>
                    <button class="btn btn-primary" type="submit">Add to cart</button>
                    <a href="shop-item.html" class="btn btn-default">More details</a>
                  </div>
                </div>

                <div class="sticker sticker-sale"></div>
              </div>
            </div>
    </div>
    <!-- END fast view of a product -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="{{url('/').'assets/plugins/respond.min.js'}}"></script>  
    <![endif]-->  
    <script src="{{url('/').'/assets/plugins/jquery.min.js'}} " type="text/javascript"></script>
    <script src="{{url('/').'/assets/plugins/jquery-migrate.min.js'}} " type="text/javascript"></script>
    <script src="{{url('/').'/assets/plugins/bootstrap/js/bootstrap.min.js'}} " type="text/javascript"></script>      
    <script src="{{url('/').'/assets/corporate/scripts/back-to-top.js'}} " type="text/javascript"></script>
    <script src="{{url('/').'/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js'}} " type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{url('/').'/assets/plugins/fancybox/source/jquery.fancybox.pack.js'}}" type="text/javascript"></script><!-- pop up -->
    <script src="{{url('/').'/assets/plugins/owl.carousel/owl.carousel.min.js'}}" type="text/javascript"></script><!-- slider for products -->
    <script src="{{url('/').'/assets/plugins/zoom/jquery.zoom.min.js'}}" type="text/javascript"></script><!-- product zoom -->
    <script src="{{url('/').'/assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js'}}" type="text/javascript"></script><!-- Quantity -->
    <script src="{{url('/').'/assets/plugins/uniform/jquery.uniform.min.js'}}" type="text/javascript"></script>
    <script src="{{url('/').'/assets/plugins/rateit/src/jquery.rateit.js'}}" type="text/javascript"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script><!-- for slider-range -->

    <script src="{{url('/').'/assets/corporate/scripts/layout.js '}}" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initUniform();
            Layout.initSliderRange();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>