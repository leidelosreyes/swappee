<!DOCTYPE html>
<html>
<head>
                        
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ env('APP_NAME') }} | Admin</title>
  <link rel="shortcut icon" href="{{ asset('image/swap_trans.png') }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">



  <!-- Navbar -->
  
  <nav class="main-header navbar navbar-expand navbar-white navbar-light sticky">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/admin')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/contact')}}" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      
      <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('index') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link">
      
           style="opacity: .8">
      <span class="brand-text font-weight-light">Super Admin</span>
    </a> -->
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link">
      
   
    <center> <img src="/image/1.png" alt="AdminLTE Logo"></center>
      <span class="brand-text font-weight-light"></span>
      
    </a> -->
    <center>
    <!-- <img src="/image/s.png" alt="AdminLTE Logo"> -->
    </center>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
       
                  @if(empty($post->user->avatar))
                  <img src="{{asset('image/user_icon.png')}}" class="card-avatar"/>
                  @else
                    <img src="{{$post->user->avatar}}" class="card-avatar"/>
                  @endif
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
      
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
        
                  <a href="#homeSubmenu1" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="fa fa-box-open"></i> Administrators<i class="fas fa-chevron-right" style="float:right"></i></a> 
                      <ul class="collapse list-unstyled" id="homeSubmenu1">
                            <div class="pl-2">
                                  <li>
                                    <a href="{{route('create.admin')}}"class="a-color"> Create Administrator </a>
                                    </li>
                                   <li>
                                    <a href="{{route('show.admin',1)}}"class="a-color"> Admins </a>
                                    </li>
                                    <li>
                                    <a href="{{route('show.admin',2)}}"class="a-color"> Posts-Moderator-Admin</a>                     
                                    </li>
                                    <li>
                                    <a href="{{route('show.admin',3)}}"class="a-color"> Contents-Manager-Admin </a>
                                    </li>
                                    <li>
                                    <a href="{{route('show.admin',4)}}"class="a-color"> Users-Manager-Admin</a>                     
                                    </li>
                            </div>                                          
                      </ul>  
           <li class="nav-item">
           <a href="#homeSubmenu2" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="fa fa-box-open"></i> Posts<i class="fas fa-chevron-right" style="float:right"></i></a> 
                      <ul class="collapse list-unstyled" id="homeSubmenu2">
                            <div class="pl-2">
                                  <li>
                                    <a href="{{route('show_swap.admin')}}"class="a-color"> Swap </a>
                        
                                    </li>
                                   <li>
                                    <a href="{{route('show_auction.admin')}}"class="a-color"> Auction </a>
                                    </li>
                            </div>                                          
                      </ul>  
           </li>  
           <li class="nav-item">
           <a href="#homeSubmenu3" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="fa fa-box-open"></i> Categories<i class="fas fa-chevron-right" style="float:right"></i></a> 
                      <ul class="collapse list-unstyled" id="homeSubmenu3">
                            <div class="pl-2">
                                  <li>
                                    <a href="{{route('create_categories.admin')}}" class="a-color"> Create Categories </a>
                          
                                    </li>
                                   <li>
                                    <a href="{{route('create_sub_categories.admin')}}"class="a-color"> Create Sub Categories </a>
                                    </li>
                            </div>                                          
                      </ul>  
           </li>  
          
           <li class="nav-item">
           <a href="#homeSubmenu4" data-toggle="collapse"aria-expanded="false" class="a-color"><i class="fa fa-box-open"></i> Users<i class="fas fa-chevron-right" style="float:right"></i></a> 
                      <ul class="collapse list-unstyled" id="homeSubmenu4">
                            <div class="pl-2">
                                  <li>
                                    <a href="{{route('create_categories.admin')}}" class="a-color"> Create Users </a>
                          
                                    </li>
                                   <li>
                                    <a href="{{route('show_user.admin','verified')}}"class="a-color"> Verified User </a>
                                    </li>
                                    <li>
                                    <a href="{{route('show_user.admin','not-verified')}}"class="a-color"> Not Verified User </a>
                                    </li>
                            </div>                                          
                      </ul>  
           </li>  
          <!-- <li class="nav-item">
          </a>

                        <div class="nav-link">
                            <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="nav-icon far fa-circle text-danger"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
            
          </li> -->
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
<div>
  <div class="content-wrapper">
      @yield('content')
  </div>
</div>
  <!-- /.content-wrapper -->
  <!-- <a href="http://adminlte.io">AdminLTE.io</a> -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 .</strong>
    Swappee@domain.com
    <div class="float-right d-none d-sm-inline-block">
      <!-- <b>Version</b> 3.0.5 -->
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->

<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<!-- <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script> -->
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
</body>
</html>
