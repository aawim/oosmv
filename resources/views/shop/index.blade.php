<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }


.fixed-nav{
    position:fixed;
    top:0;
    background-color:white;
    width:100%;
    z-index:1001;

    

}
.body-class{}

    </style>


</head>
<body>












<script type="text/javascript">
  if($('body').hasClass('body-class')){
  var tartgetPos = $('#body-class').offset().top;
  console.log(tartgetPos);
  $(window).scroll(function(){
          var scrollPos = $(this).scrollTop();
          if (scrollPos > tartgetPos  ){
              $('nav').addClass('fixed-nav');
          }else{
          $('nav').removeClass('fixed-nav');
          }
      });
  }
</script>
</body>
</html>
