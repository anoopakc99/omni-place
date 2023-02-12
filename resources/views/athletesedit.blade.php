@extends('layout')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


<!-- sidebar start -->
<div class="">
        <!-- HEADER MOBILE-->

        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo w3-container w3-teal">
            <img src="{{asset('admin_assets/dist/img/ad.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="height:60px;">
            <h1><span>Admin</span></h1>
                </a>
            </div>
            <div class="w3-sidebar w3-bar-block w3-green" style="width:16%">

                        <a href="{{url('dashboard')}}" class="w3-bar-item w3-button">
                            Dashboard
                        </a>
                        <a href="{{url('admin')}}" class="w3-bar-item w3-button">User </a>
                        <a href="{{url('athletes')}}" class="w3-bar-item w3-button">Athletes </a>
                        <a href="{{url('games')}}" class="w3-bar-item w3-button">Games </a>
                        <a href="{{url('sports')}}" class="w3-bar-item w3-button">Sports </a>
                        <a href="{{url('teams')}}" class="w3-bar-item w3-button">Teams </a>
                        <a href="{{url('activebets')}}" class="w3-bar-item w3-button">ActiveBets </a>
                        <a href="{{url('activeplays')}}" class="w3-bar-item w3-button">Active plays </a>
                        <a href="{{url('activeentries')}}" class="w3-bar-item w3-button">Active Entries </a>
                        <a href="{{url('activevalue')}}" class="w3-bar-item w3-button">Active Value </a>
                        <a href="{{url('cashwallet')}}" class="w3-bar-item w3-button">Cash Wallet </a>
                        <a href="{{url('payment')}}" class="w3-bar-item w3-button">Payment </a>
                        <a href="{{url('paymentrequest')}}" class="w3-bar-item w3-button">Payment Request </a>
                        <a href="{{url('preferences')}}" class="w3-bar-item w3-button">Preferences Request </a>
                        <a href="{{url('wallet')}}" class="w3-bar-item w3-button">Wallet </a>
                        <a href="{{url('odds')}}" class="w3-bar-item w3-button">Odds </a>
                        <a href="{{url('coach')}}" class="w3-bar-item w3-button">Coach </a>

                    </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop w3-container w3-teal">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">

                            <div class="position-relative">

</div>
                            </form>
                            <div>

                             <!-- Navbar -->


            @if (isset(Auth::user()->email))

            <br/>
            <ul class="navbar-nav float-right">

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src=""  class="rounded-circle" width="31"><strong>Admin</strong></a>
            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                <div class="dropdown-divider"></div>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-power-off m-r-5 m-l-5 text-bold"></i> Logout</a>
                <div class="dropdown-divider"></div>
                <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded  text-bold">View Profile</a></div>
            </div>
        </li>
            </div>
            @endif


                </div>
            </div>
        </div>

<h1 class="text-white"> Athelets Edit Dashboard</h1>
<br>



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
    </div>
    <section class="content float-end mx-5 px-4 mb-3">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-">
                        <!-- general form elements -->
                        <div class="card card-white">
                            <div class="card-header w3-blue">
                                <h3 class="text-white">Athelets Edit</h3>
                            </div>
    @if(session()->has('message'))
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        {{session('message')}}
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif
    <div class="card-body">
    <form action="{{ url('posts/update', $list->id) }}" method="POST" class="form-horizontal">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <lable for="">ShortName</lable>
               <input type="text" class="form-control" name="shortName" value="{{$list->shortName}}" required>
            </div>
            <div class="col-md-6">
                <lable for="">Name</lable>
                <input type="text" class="form-control" name="name" value="{{$list->name}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">href</lable>
                <input type="text" class="form-control" name="href" value="{{$list->href}}" required>
            </div>
            <div class="col-md-6">
                <lable for="">Uid</lable>
                <input type="text" class="form-control" name="uid" value="{{$list->uid}}" required>
            </div>
            <div class="col-md-6">
                <lable for="">Guid</lable>
                <input type="text" class="form-control" name="guid" value="{{$list->guid}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">id</lable>
                <input type="text" class="form-control" name="id" value="{{$list->id}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Hight</lable>
                <input type="text" class="form-control" name="height" value="{{$list->height}}" required>
            </div>
            <div class="col-md-6">
                <lable for="">Weight</lable>
                <input type="text" class="form-control" name="weight" value="{{$list->weight}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Age</lable>
                <input type="text" class="form-control" name="age" value="{{$list->age}}" required>
            </div>
            <div class="col-md-6">
                <lable for="">Position</lable>
                <input type="text" class="form-control" name="position" value="{{$list->position}}" required>
            </div>
            <div class="col-md-6">
                <lable for="">Jersey</lable>
                <input type="text" class="form-control" name="jersey" value="{{$list->jersey}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Salary</lable>
                <input type="text" class="form-control" name="salary" value="{{$list->salary}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Birth_Date</lable>
                <input type="text" class="form-control" name="birthDate" value="{{$list->birthDate}}" required>
            </div>
            <div class="col-md-6">
                <lable for="">Headshot</lable>
                <input type="text" class="form-control" name="headshot" value="{{$list->headshot}}" required>
            </div>
            <div class="col-md-6">
                <lable for="">LastName</lable>
                <input type="text" class="form-control" name="lastName" value="{{$list->lastName}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">College</lable>
                <input type="text" class="form-control" name="college" value="{{$list->college}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">birthPlace</lable>
                <input type="text" class="form-control" name="birthPlace" value="{{$list->birthPlace}}" required>
            </div>
            <div class="col-md-6">
                <lable for="">Team_id</lable>
                <input type="text" class="form-control" name="team_id" value="{{$list->team_id}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Game_id</lable>
                <input type="text" class="form-control" name="game_id" value="{{$list->game_id}}" required>
            </div>

            <div class="col-md-6" mb-3>
            <br>
              <button type="submit" class="btn btn-success">Update</button>
            </div>


        </div>
        <button type="submit" btn btn-primary name="submit">
        </form>
    </div>
   </div>
</div>
</div>


@endsection
