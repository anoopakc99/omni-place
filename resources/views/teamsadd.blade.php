@extends('layout')

@section('content')


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container-fluid">
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
        <a class="dropdown-item pl-3" {{Auth::user()->name}} href="{{route('logout')}}">Logout <i class="fa fa-power-off m-r-5 m-l-5"></i></a>
                <div class="dropdown-divider"></div>
    </div>
</aside>
<div class="page-container">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop  w3-container w3-teal">
        <div class="section__content section__content--p30">
            <div class="container-fluid ">
                <div class="header-wrap">
                    <form class="form-header" action="" method="POST">
                        <h1></h1>
                    </form>
                    <br>
                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" name="search" id="searche" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">

                                </button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <!-- Navbar -->

                        @if (isset(Auth::user()->email))

                     
                        <ul class="navbar-nav float-right">

                            <li class="nav-item dropdown">
                            <img src="{{asset('admin_assets/dist/img/AdminLTELogo.png')}} " alt="" class="brand-image img-circle elevation-3 " style="height:40px; ">
                                    <span class="brand-text font-weight-light "> {{auth()->user()->full_name}}</span>
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
        <h1 class="text-white"> Add Teams</h1>
        <br>
        <br>
        <br>
        <section class="content ">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card w3-white">
                            <div class="card-header w3-blue">
                                <h3 class="text-white">Add Teams</h3>
                            </div>
    @if (Session::has('msg'))
        <div class="alert alert-success">
            <p>{{Session ('msg') }}</p>
        </div>

        <button type="submit" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif

    <div class="card-body">

    <form action="{{ url('teams/store') }}" method="POST" class="form-horizontal">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <lable for="">Team_game_identifier</lable>
               <input type="text" class="form-control @error('team_game_identifier') is-invalid @enderror" name="team_game_identifier" value="" >
               @error('team_game_identifier')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6">
                <lable for="">Team_name</lable>
                <input type="text" class="form-control @error('team_name') is-invalid @enderror" name="team_name" value="" >
                @error('team_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-3">
                <lable for="">Color_code_1</lable>
                <input type="color" class="form-control @error('color_code_1') is-invalid @enderror" name="color_code_1" value="" >
                @error('color_code_1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="col-md-3">
                <lable for="">Color_code_2</lable>
                <input type="color" class="form-control @error('color_code_2') is-invalid @enderror" name="color_code_2" value="" >
                @error('color_code_2')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Short_code</lable>
                <input type="text" class="form-control @error('short_code') is-invalid @enderror" name="short_code" value="" >
                @error('short_code')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6">
                <lable for="">Team_group_name</lable>
                <input type="text" class="form-control @error('team_group_name') is-invalid @enderror" name="team_group_name" value="" >
                @error('team_group_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Team_logo</lable>
                <input type="text" class="form-control @error('team_logo') is-invalid @enderror" name="team_logo" value="" >
                @error('team_logo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Team_short_name</lable>
                <input type="text" class="form-control @error('team_short_name') is-invalid @enderror" name="team_short_name" value="" >
                @error('team_short_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Team_url</lable>
                <input type="text" class="form-control @error('team_url') is-invalid @enderror" name="team_url" value="" >
                @error('team_url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Is_synced</lable>
                <input type="text" class="form-control @error('is_synced') is-invalid @enderror" name="is_synced" value="" >
                @error('is_synced')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Standing_summary</lable>
                <input type="text" class="form-control @error('standing_summary') is-invalid @enderror" name="standing_summary" value="" >
                @error('standing_summary')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Team_record</lable>
                <input type="text" class="form-control @error('team_record') is-invalid @enderror" name="team_record" value="" >
                @error('team_record')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6" >
            <br>
              <button type="submit" class="btn btn-success">Add</button>
            </div>


        </div>
        <button type="submit" btn btn-primary name="submit">
        </form>
    </div>
   </div>
</div>
</div>
</div>

@endsection
