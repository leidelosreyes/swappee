<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">    
            <img class="carousel-image" style="height:500px; width:100%; " src="{{asset('image/delivery-c-new.jpg')}}" alt="First slide">
            <div class="carousel-caption d-md-block">
            <h1 style="font-family:Copperplate; font-size: 40px;">
                <span>Swappee</span>
            </h1>
          
            <h3 style="color: #FE980F;font-family: 'Roboto', sans-serif;font-size: 28px;font-weight: 700">Cash Less Transactions for Swap!</h3>
          
             <form class="d-flex"  action="{{route('search')}}" method="GET">
						<input class="form-control mr-sm-2 search_box" type="search" name="search" placeholder="Search" aria-label="Search">

   					    </form>
             <p style="color: #ffffff;font-size: 16px;font-weight: 300;font-family: 'Roboto', sans-serif;margin-top: 15px;">Swapping will make you fell better. </p>
      </div>
    </div>
    <div class="carousel-item ">
      <img class="carousel-image" style="height:500px; width:100%; " src="{{asset('image/new-swap-c.jpg')}}" alt="Second slide">
      <div class="carousel-caption d-md-block">
            <h1 style="font-family:Copperplate; font-size: 40px;">
                <span>Deliver</span>
            </h1>
            <h3 style="color: #FE980F;font-family: 'Roboto', sans-serif;font-size: 28px;font-weight: 700;margin-top: 15px;">Cash Less Transactions for Swap!</h3>
            <form class="d-flex"  action="{{route('search')}}" method="GET">
						<input class="form-control mr-sm-2 search_box" type="search" name="search" placeholder="Search" aria-label="Search">

   					    </form>
           
             <p style="color: #ffffff;font-size: 16px;font-weight: 300;font-family: 'Roboto', sans-serif;margin-top: 15px;">We deliver your package with love. </p>

      </div>
    
    </div>
    <div class="carousel-item ">
      <img class="carousel-image" style="height:500px; width:100%; " src="{{asset('image/bidding new.jpg')}}" alt="Third slide">
      <div class="carousel-caption d-md-block">
            <h1 style="font-family:Copperplate; font-size: 40px;">
                <span>Auction</span>
            </h1>
             <h3  style="color: #FE980F;font-family: 'Roboto', sans-serif;font-size: 28px;font-weight: 700">Cash Less Transactions for Swap!</h3>
             
             <form class="d-flex"  action="{{route('search')}}" method="GET">
						<input class="form-control mr-sm-2 search_box" type="search" name="search" placeholder="Search" aria-label="Search">

   					    </form>

             <p style="color: #ffffff;font-size: 16px;font-weight: 300;font-family: 'Roboto', sans-serif;margin-top: 15px;">Our auction is fair and competitive, enter at your own risk. </p>

      </div>
     
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


