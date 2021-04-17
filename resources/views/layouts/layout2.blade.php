<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swappee</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
   <!-- Add the slick-theme.css if you want default styling -->
   <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
   <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
   <link rel="stylesheet" type="text/css" href="{{asset('plugins/slick/slick.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('plugins/slick/slick-theme.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <script src="{{asset('js/jquery.js')}}"></script>
    
  
</head>
<body>


		
@include('layouts.header-nav')

@yield('content')

@include('layouts.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
<!-- <script src="{{asset('js/index.js')}}"></script> -->
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('js/zoom-image.js')}}"></script>
	<script src="{{asset('js/zoom-main.js')}}"></script>
  <script src="{{asset('js/location.js')}}"></script>
  <script src="{{asset('js/slider.js')}}"></script>

	<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCgx9Bd4uEQheMNgrbi-r6Zbg1spXEgof8"></script> -->
<script src="https://maps.googleapis.com/maps/api/js?input=Philippines&types=geocode&key=AIzaSyBJCSjFGcsFkG5Zy7k3Ph6ArHv6EoWSxpk&libraries=places&callback=initAutocomplete"async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- <script src="{{asset('js/index.js')}}"></script> -->

 <!-- textarea api -->
 <script src="https://cdn.tiny.cloud/1/d5z57kxjuvf3qb1pxqwp575nkn5dp86srz52ip6w742ozfjo/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
      tinymce.init({
        selector:'#description',
         plugins: 'lists',
         toolbar: 'bullist',
         plugins: 'paste',
         height: 400,
         branding: false,
         width: "100%"
        
      })
      tinymce.init({
        selector:'#message',
         plugins: 'lists',
         toolbar: 'bullist',
         plugins: 'paste',
         branding: false,
         height: 200,
         width: "100%"
        
      })
      
</script>
<script>
    $('.slickSlider').slick({
  autoplay: true,
  autoplaySpeed: 2000,
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 7,
  slidesToScroll: 5,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    }
   
  ]
});

</script>
      <script>
        var slider = new Slider("#ex6");
        $('.slider-selection').css('background', '#FFB52E'); 
        $('.slider-handle').css('background', '#FFB52E');   
        slider.on("slide", function(sliderValue) {
          document.getElementById("ex6SliderVal").textContent = sliderValue;
        });
      </script>
</body>
</html>