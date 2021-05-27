<!-- web footer -->
<div class="d-none d-lg-block">
<footer class="footer-distributed">

<div class="footer-left container">

  <h3>Swappee<span style="color: #FFB52E;">.online</span></h3>

  <p class="footer-links">
    <a href="{{route('home')}}" class="link-1">Home</a>
  
    <a href="{{ route('policy') }}">Privacy & Policy</a>
  
    <a href="{{url ('about')}}">About</a>
    
    <a href="{{ route('terms_condition') }}">Terms & Conditions</a>
    
    <a href="{{ route('contact') }}">Contact</a>
  </p>

  <p class="footer-company-name" style="color: #FFB52E;">Swappee © <?php echo date("Y"); ?> Copyright.</p>
</div>


<div class="footer-center">

  <div>
    <i class="fa fa-map-marker" ></i>
    <p><span>University of Caloocan City</span> Congress Campus, Philippines</p>
  </div>

  <div>
    <i class="fa fa-phone"></i>
    <p>+63-9756-7438-49</p>
  </div>

  <div>
    <i class="fa fa-envelope" ></i>
    <p><a href="mailto:support@company.com" style="color: #FFB52E;">Swappee6@gmail.com</a></p>
  </div>

</div>

<div class="footer-right">

  <p class="footer-company-about">
    <span>About the company</span>
    Acknowledging the online barter gives us a better insight in use of digital transactions, in times the integrity of the process.
  </p>

  <div class="footer-icons">

    <a href="#"><i class="fab fa-facebook-f" style="color: #3B5998; background-color:none;"></i></a>
    <a href="#"><i class="fab fa-twitter" style="color: #55ACEE; background-color:none;"></i></a>
    <a href="#"><i class="fab fa-instagram" style="color:#dd4b39; background-color:none;"></i></a>
    

  </div>

</div>

</footer>
</div>
<!-- end web footer -->
<!-- moblie footer -->

<div class="d-sm-block d-md-none mb-4">
<div class="footer"style="position: fixed;left: 0;bottom: 0;width: 100%;background-color: whitesmoke;color: white;text-align: center;" >
  <div class="row">
    <div class="col"><a class="nav-link " style="color: #57585a; font-size:25px;" href="{{route('home')}}"><i class="fas fa-home"></i></a></div>
    <div class="col"><a href="" style="color: #57585a; font-size:25px;" data-toggle="modal" data-target="#exampleModal-notifcation"><i class="far fa-bell" style="padding-top:.9rem;">	</i></a></div>
    <div class="col"><a class="nav-link " style="color: #57585a; font-size:25px;" href="{{route('posts.create')}}"><i class="fas fa-plus padding-right"></i></a></div>
    <div class="col"><a class="nav-link" style="color: #57585a; font-size:25px;" href="{{route('auctions.index')}}"><i class="fas fa-gavel"></i></a></div>
    <div class="col"><a href="{{route('user.profile')}}" class="nav-item nav-link  navfonts"  style="color: #57585a; font-size:25px;" ><i class="far fa-user-circle"></i></a></div>
  </div>
</div>         
</div>   
<!-- end mobile -->