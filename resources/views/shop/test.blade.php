<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="{{url('/').'/css/style.css'}}" rel="stylesheet">

<link href="{{url('/').'/product_hover/css/demo-page.css'}}" rel="stylesheet" media="all">
    <link href="{{url('/').'/product_hover/css/imagehover.css'}}" rel="stylesheet" media="all">

   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link href="{{url('/').'/MDB/css/bootstrap.min.css'}}" rel="stylesheet">
<link href="{{url('/').'/MDB/css/mdb.css'}}" rel="stylesheet"> -->

<style>

  * {
    box-sizing: border-box;
}

 

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
    }
}

</style>



 
 


</head>
<body>





<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>




          
          <ul class="nav navbar-nav navbar-right">
           
          @if (Route::has('login'))
             @auth
                  @if(Auth::user()->is_active == 1)
                  <li><a href="{{ route('myaccount.index') }}">My Account</a></li>
                  @endif
                
                  @if(Auth::user()->user_type == 0 AND Auth::user()->is_active == 1 ) 
                        <li><a href="{{ url('manage/home') }}">Dashboard</a></li>
                  @endif
                        
                  
                  <li>
                                <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                        </li>
                  
                  
                                        @if(Auth::user()->is_active != 1)
            <li style="color:red"><strong>  This is account is not activated. Please contact the site administrator  </strong></li>
        @else

                        <li><a href="#">My Wishlist</a></li>
                       <li> <a href="#">Your loggeg in as :<strong> 
                        @if(Auth::user()->user_type == 0 )                
                            {{ Auth::user()->name }} (Administrator)
                        @elseif(Auth::user()->user_type == 1 ) 
                            {{ Auth::user()->name }} (Business)
                        @elseif(Auth::user()->user_type == 2 )
                            {{ Auth::user()->name }} (User)
                        @endif
                      </strong></a></li>        
                    </li>
        @endif
                  
                    
        @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <li><a href="#">Welcome: <strong> Guest </strong></a></li> 










            @endauth
          @endif
 
          </ul>





          
        </div><!--/.nav-collapse -->
      </div>
    </nav>


 



  <section class="slide-wrapper">
        <div class="container">
            <div id="myCarousel" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                 </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item item1 active">
                        <div class="fill" style=" background-color:#48c3af;">
                            <div class="inner-content">
                                <div class="carousel-img">
                                    <img src="http://vocefalandoingles.com/wp-content/uploads/2016/09/sofa.png" alt="sofa" class="img img-responsive" />
                                </div>
                                <div class="carousel-desc">

                                    <h2>Modern Designer Sofa</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit ipsum, scelerisque non semper eu, aliquet vel odio. Sed auctor id purus nec tristique. Donec euismod, urna vel dapibus tristique, dolor arcu ultrices lectus, nec pulvinar est turpis sit amet felis. Duis interdum purus quam, vitae cursus erat ornare at. Donec congue mi a ipsum tincidunt, imperdiet vehicula odio rutrum. Nam porta vulputate magna, id pretium lectus iaculis eu. Ut ut viverra libero.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item item2">
                        <div class="fill" style="background-color:#b33f4a;">
                            <div class="inner-content">
                                <div class="carousel-img">
                                    <img src="http://cdn.homedit.com/wp-content/uploads/2011/08/137CLUB2ST.png" alt="white-sofa" class="img img-responsive" />
                                </div>
                                <div class="carousel-desc">

                                    <h2>Vintage Style Sofa</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit ipsum, scelerisque non semper eu, aliquet vel odio. Sed auctor id purus nec tristique. Donec euismod, urna vel dapibus tristique, dolor arcu ultrices lectus, nec pulvinar est turpis sit amet felis. Duis interdum purus quam, vitae cursus erat ornare at. Donec congue mi a ipsum tincidunt, imperdiet vehicula odio rutrum. Nam porta vulputate magna, id pretium lectus iaculis eu. Ut ut viverra libero.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item item3">
                        <div class="fill" style="background-color:#7fc2f4;">
                            <div class="inner-content">
                                <div class="col-md-6">

                                    <div class="carousel-img">
                                        <img src="http://vocefalandoingles.com/wp-content/uploads/2016/09/sofa.png" alt="sofa" class="img img-responsive" />
                                    </div>
                                </div>

                                <div class="col-md-6 text-left">
                                    <div class="carousel-desc">

                                        <h2>Stylish Sofa</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit ipsum, scelerisque non semper eu, aliquet vel odio. Sed auctor id purus nec tristique. Donec euismod, urna vel dapibus tristique, dolor arcu ultrices lectus, nec pulvinar est turpis sit amet felis. Duis interdum purus quam, vitae cursus erat ornare at. Donec congue mi a ipsum tincidunt, imperdiet vehicula odio rutrum. Nam porta vulputate magna, id pretium lectus iaculis eu. Ut ut viverra libero.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>






<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="{{url('/').'/imagesx/1.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/2.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/3.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/4.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/5.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/6.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/7.jpg'}}" style="width:100%">
 
  </div>
  <div class="column">
  <img src="{{url('/').'/imagesx/8.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/9.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/10.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/11.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/12.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/13.jpg'}}" style="width:100%">
  </div>  
  <div class="column">
  <img src="{{url('/').'/imagesx/11.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/11.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/10.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/11.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/5.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/6.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/7.jpg'}}" style="width:100%">
  </div>
  <div class="column">
  <img src="{{url('/').'/imagesx/11.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/11.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/11.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/5.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/6.jpg'}}" style="width:100%">
    <img src="{{url('/').'/imagesx/7.jpg'}}" style="width:100%">
  </div>
</div>
  


 

<script>


function getRandomSize(min, max) {
  return Math.round(Math.random() * (max - min) + min);
}

var allImages = "";

for (var i = 0; i < 25; i++) {
  var width = getRandomSize(200, 400);
  var height =  getRandomSize(200, 400);
  allImages += '<img src="https://placekitten.com/'+width+'/'+height+'" alt="pretty kitty">';
}

$('#photos').append(allImages);






 


 $(document).ready(function(){
// invoke the carousel
    $('#myCarousel').carousel({
      interval:6000
    });

// scroll slides on mouse scroll 
$('#myCarousel').bind('mousewheel DOMMouseScroll', function(e){

        if(e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
            $(this).carousel('prev');
			
			
        }
        else{
            $(this).carousel('next');
			
        }
    });

//scroll slides on swipe for touch enabled devices 

 	$("#myCarousel").on("touchstart", function(event){
 
        var yClick = event.originalEvent.touches[0].pageY;
    	$(this).one("touchmove", function(event){

        var yMove = event.originalEvent.touches[0].pageY;
        if( Math.floor(yClick - yMove) > 1 ){
            $(".carousel").carousel('next');
        }
        else if( Math.floor(yClick - yMove) < -1 ){
            $(".carousel").carousel('prev');
        }
    });
    $(".carousel").on("touchend", function(){
            $(this).off("touchmove");
    });
});
    
});
//animated  carousel start
$(document).ready(function(){

//to add  start animation on load for first slide 
$(function(){
		$.fn.extend({
			animateCss: function (animationName) {
				var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
				this.addClass('animated ' + animationName).one(animationEnd, function() {
					$(this).removeClass(animationName);
				});
			}
		});
			 $('.item1.active img').animateCss('slideInDown');
			 $('.item1.active h2').animateCss('zoomIn');
			 $('.item1.active p').animateCss('fadeIn');
			 
});
	
//to start animation on  mousescroll , click and swipe


 
     $("#myCarousel").on('slide.bs.carousel', function () {
		$.fn.extend({
			animateCss: function (animationName) {
				var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
				this.addClass('animated ' + animationName).one(animationEnd, function() {
					$(this).removeClass(animationName);
				});
			}
		});
	
// add animation type  from animate.css on the element which you want to animate

		$('.item1 img').animateCss('slideInDown');
		$('.item1 h2').animateCss('zoomIn');
		$('.item1 p').animateCss('fadeIn');
		
		$('.item2 img').animateCss('zoomIn');
		$('.item2 h2').animateCss('swing');
		$('.item2 p').animateCss('fadeIn');
		
		$('.item3 img').animateCss('fadeInLeft');
		$('.item3 h2').animateCss('fadeInDown');
		$('.item3 p').animateCss('fadeIn');
    });
});

</script>

 

</body>
</html>