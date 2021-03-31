<section>
    <nav class="navbar navbar-expand-md navbar-dark">
		<div class="container" style="margin-top: 15px;padding-bottom: 5px;">
			<a href="{{url('/')}}" class="navbar-brand logo-nav"><img src="{{asset('image/swappee_logo.png')}}" style="width:150px;height: 50px;margin-bottom: 5px;" alt=""></a>
			
			<button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
				<span class="menu-icon-bar"></span>
			</button>
			
			<div id="main-nav" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li><a href="{{route('home')}}"  class="nav-item nav-link active navfonts" style="font-size: 1rem;">Home</a></li>
					<li><a href="" class="nav-item nav-link  navfonts" style="font-size: 1rem;">About Us</a></li>
					<li class="dropdown">
						<!-- <a href="auction.php" class="nav-item nav-link  navfonts"  data-toggle="dropdown"style="font-size: 18px;">Auction</a> -->
						<!-- <div class="dropdown-menu">
							<a href="#" class="dropdown-item">Dropdown Item 1</a>
							<a href="#" class="dropdown-item">Dropdown Item 2</a>
							<a href="#" class="dropdown-item">Dropdown Item 3</a>
						</div> -->
					</li>
					<li><a href="{{route('contact')}}" class="nav-item nav-link  navfonts" style="font-size: 1rem;">Contact Us</a></li>
                    <li class="dropdown">
						<a href="" class="nav-item nav-link  navfonts" data-toggle="dropdown" style="font-size: 1rem;" > {{ Auth::user()->name }}</a>
						<div class="dropdown-menu">
							<a href="{{route('user.profile')}}" style="font-size: .80rem;" class="dropdown-item"><i class="fas fa-user"></i> Acount</a>
              <a href="{{route('user.profile_public_view')}}" style="font-size: .80rem;" class="dropdown-item"><i class="fas fa-globe-asia"></i> Public Profile</a>
							<a class="dropdown-item navfonts" href="{{ route('index') }}" style="font-size: .80rem;"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                 <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                            </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                         </form>
						
						</div>
					</li>


                   
</div>
</li>
					<!-- <li><a href="views/register.php" class="nav-item nav-link  navfonts"style="font-size: 18px;">Register</a></li> -->
				</ul>
			</div>
		</div>
	</nav>

	</section>
