<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
  <script src="{{asset('js/main.js')}}"></script>
 
  <script src="{{asset('js/zoom-image.js')}}"></script>
	<script src="{{asset('js/zoom-main.js')}}"></script>
  <script src="{{asset('js/location.js')}}"></script>
  <script src="{{asset('js/slider.js')}}"></script>
 

	<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCgx9Bd4uEQheMNgrbi-r6Zbg1spXEgof8"></script> -->
<script src="https://maps.googleapis.com/maps/api/js?input=Philippines&types=geocode&key=AIzaSyBJCSjFGcsFkG5Zy7k3Ph6ArHv6EoWSxpk&libraries=places&callback=initAutocomplete"async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  

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
  // prevArrow: null,
  // nextArrow: null,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4
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
<script>

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0 so need to add 1 to make it 1!
var yyyy = today.getFullYear();
if(dd<10){
  dd='0'+dd
} 
if(mm<10){
  mm='0'+mm
} 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("end_date").setAttribute("min", today);
</script>

<script>
  $(document).on("click", ".browse", function() {
  var file = $(this).parents().find(".file");
  file.trigger("click");
});
$('input[type="file"]').change(function(e) {
  var fileName = e.target.files[0].name;
  $("#file").val(fileName);

  var reader = new FileReader();
  reader.onload = function(e) {
    // get loaded data and render thumbnail.
    document.getElementById("preview").src = e.target.result;
  };
  // read the image file as a data URL.
  reader.readAsDataURL(this.files[0]);
})
</script>


