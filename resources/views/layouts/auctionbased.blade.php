<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | user</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('css/zoom.css')}}" rel="stylesheet"> -->
    <!-- <link href="{{asset('css/index.css')}}" rel="stylesheet"> -->
	<link href="{{asset('css/responsive.css')}}" rel="stylesheet">     
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCgx9Bd4uEQheMNgrbi-r6Zbg1spXEgof8"></script>
 
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
								<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{route('/')}}"><img src="/image/s.png" alt="swappee" /></a>
						</div>
                        
                        <div class="btn-group pull-right">
							<div class="btn-group">
								<!-- <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul> -->
							</div>
							
							<div class="btn-group">
								<!-- <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul> -->
							</div>
						</div>
                    </div>
                    
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							<div class="col text-right" >
                            <li><a href="{{url('user/profile')}}"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a></li>
                            <li class="nav-item dropdown">
							
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   
								</a>
								
							

                                <div class="nav" aria-labelledby="navbarDropdown">
								<i class="fas fa-sign-out-alt"> <a class="dropdown-item" href="{{ route('index') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></i>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
      
    </ul>
            
            </div>
								
								<!-- <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{route('home')}}" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Category<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Contact</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Contactt Us<i class="fa fa-angle-down"></i></a>
                                    <!-- <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul> -->
                                </li> 
								<li><a href="404.html">About Us</a></li>
								<li><a href="{{route('auctions.index')}}">Auction</a></li>
								<!-- <li><a href="contact-us.html">Contact</a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
                        <form class="form-inline my-2 my-lg-0"  action="{{route('search')}}" method="GET">
						<input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
						
   					    </form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
    <section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
                            <div class="col-sm-6">
									<h1><span>Swappee</span></h1>
									<h2>Cash Less Transactions for Swap!</h2>
									<p>Swapping will make you feel better. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<!-- <img src="/image/deals.png" class="girl img-responsive" alt="" /> -->
									<img src="/image/swap.png"  class="pricing" alt="" style="margin-right: 200px; height: 300px;"/>
								</div>
							</div>
                        
                            <div class="item">
								<div class="col-sm-6">
									<h1><span>Auction</span></h1>
									<h2>Cash Less Transactions for Swap!</h2>
									<p>Our auction is fair and competitive, enter at your own risk. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<!-- <img src="/image/deals.png" class="girl img-responsive" alt="" /> -->
									<img src="/image/auction.png"  class="pricing" alt="" style="width: 100%; margin-right: 180px;" />
								</div>
							</div>
							
							<div class="item">
                            <div class="col-sm-6">
									<h1><span>Delivery</span></h1>
									<h2>Cash Less Transactions for Swap!</h2>
									<p>We deliver your package with love. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<!-- <img src="/image/deals.png" class="girl img-responsive" alt="" /> -->
									<img src="/image/deliver.png"  class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
    



	@yield('content')
	
	<footer id="footer"><!--Footer-->
		<!-- <div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Follow Us</h2>
							<ul class="nav nav-pills nav-stacked">
							<a href=""><i class="fab fa-twitter" style="margin-right: 10px; color:#55ACEE; font-size: 20px;"></i></a>
							<a href=""><i class="fab fa-facebook-f" style="margin-right: 10px; color:#3B5998; font-size: 20px;"></i></a>
							<a href=""><i class="fab fa-instagram" style="margin-right: 10px; color:#dd4b39; font-size: 20px;"></i></a>				
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quick links</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#" style="font-size: 13px;">Home</a></li>
								<li><a href="#" style="font-size: 13px;">Category</a></li>
								<li><a href="#" style="font-size: 13px;">About Us</a></li>
								<li><a href="#" style="font-size: 13px;">Contact Us</a></li>								
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
						<h2>Usefull Links</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#" style="font-size: 13px;">Terms & Condition</a></li>
								<li><a href="#" style="font-size: 13px;">Privacy & Policy</a></li>					
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Contact</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><i class="fas fa-home"><a href="#" style="font-size: 13px;"> Philippines, Caloocan City</a></i></li>
								<li><i class="fas fa-at"><a href="#" style="font-size: 13px;"> Swappee@domain.com</a></i></li>
								<li><i class="fas fa-phone"><a href="#" style="font-size: 13px;"> +63 1234 4223</a></i></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fas fa-arrow-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2020  SWAPPEE. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="#">@Swappee.com</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('js/price-range.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/zoom-image.js')}}"></script>
	<script src="{{asset('js/zoom-main.js')}}"></script>
	<script src="{{asset('js/location.js')}}"></script>
	
	
   
</body>
</html>