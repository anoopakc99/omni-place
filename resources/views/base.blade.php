@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

</div>

<!-- sidebar start -->
<div class="page-wrapper">
        <!-- HEADER MOBILE-->
        
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{url('admin/dashboard')}}">
                    <img src="{{asset('admin_assets/images/icon/admin.jpg')}}"/>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="@yield('dashboard_select')">
                            <!-- <a href="{{url('admin/dashboard')}}"> -->
                            <a href="http://127.0.0.1:8000/products"><h1>Dashboard</h1></a>

                               
                            <li class="@yield('category_select')">
                            <a href="{{url('admin')}}">
                                <i class="fas fa-list"></i><strong><b>Admin</strong></a>
                        </li>

                        <li class="@yield('category_select')">
                            <a href="{{url('athletes')}}">
                                <i class="fas fa-list"></i><strong><b>Athletes<strong></a>
                        </li>

                        <li class="@yield('category_select')">
                            <a href="{{url('games')}}">
                                <i class="fas fa-list"></i><strong><b>Games<strong></a>
                        </li>
                        <li class="@yield('category_select')">
                            <a href="{{url('sports')}}">
                                <i class="fas fa-list"></i><strong><b>Sports</strong></a>
                        </li>

                        <li class="@yield('category_select')">
                            <a href="{{url('teams')}}">
                                <i class="fas fa-list"></i><strong><b>Teams</strong></a>
                        </li>
                        </li>
  
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                      
                            <div class="position-relative">
   
</div>
                            </form>
                            <div>
                              
                             <!-- Navbar -->
 

        
      
        </li>
            </div>
            @endif


                </div>
            </div>
        </div>
    </div>
</div>
<!-- Side bar end -->
<div class="container">
    <hr>

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
 
            </div>
            <div class="pull-right">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
    
     
    </ul>
   
  </div>
</nav>

    
</div>
</div>
</body>
@endsection