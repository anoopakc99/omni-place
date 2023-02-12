@extends('layout')

@section('content')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
            <div class="container-fluid">
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
        <h1 class="text-white">Payment Edit</h1>
        <br>
        <br>
        <br>
        <section class="content ">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card card-dark">
                            <div class="card-header">
                                <h3 class="text-success">payment Edit</h3>
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
    <form action="{{ url('payment/update', $list->id) }}" method="POST" class="form-horizontal">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <lable for="">User_id</lable>
               <input type="text" class="form-control" name="user_id" value="{{$list->user_id}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Charge_amount</lable>
                <input type="text" class="form-control" name="charge_amount" value="{{$list->charge_amount}}" >
            </div>
            <div class="col-md-6">
                <lable for="">Charge_method</lable>
                <input type="text" class="form-control" name="charge_method" value="{{$list->charge_method}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Transaction_id</lable>
                <input type="text" class="form-control" name="transaction_id" value="{{$list->transaction_id}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Charge_valid</lable>
                <input type="text" class="form-control" name="charge_valid" value="{{$list->charge_valid}}" required>
            </div>


            <div class="col-md-6">
                <lable for="">Charge_response</lable>
                <input type="text" class="form-control" name="charge_response" value="{{$list->charge_response}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Charge_state</lable>
                <input type="text" class="form-control" name="charge_state" value="{{$list->charge_state}}" required>
            </div>
            <div class="col-md-6">
                <lable for="">Quantity</lable>
                <input type="text" class="form-control" name="quantity" value="{{$list->quantity}}" required>
            </div>



            <div class="col-md-6" >
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
</div>

@endsection
