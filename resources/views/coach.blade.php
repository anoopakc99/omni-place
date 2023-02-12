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
                        <a class="dropdown-item pl-3" {{Auth::user()->name}} href="{{route('logout')}}">Logout <i class="fa fa-power-off m-r-5 m-l-5"></i></a>
                <div class="dropdown-divider"></div>
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
                            <div class="form-inline">
                                <div class="input-group" data-widget="sidebar-search">
                                    <input class="form-control form-control-sidebar" type="search" id="myInput"  placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-sidebar">

                                        </button>
                                    </div>
                                </div>
                            </div>
                            </div>
                             <!-- Navbar -->


            @if (isset(Auth::user()->email))

            <br/>
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
            <h1 class="text-white"> Coach Dashboard</h1>
        </div>


<br>
<br>
<a href="{{ url('coach/show') }}" class="label label-warning btn btn-success float-end mx-5 px-4 mb-3">Add</a>


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

    @if (Session::has('msg'))
        <div class="alert alert-success">
            <p>{{Session ('msg') }}</p>
        </div>
    @endif
    <table id="myTable" class="table table-bordered ">
        <tr class="table-dark">
            <th>Id</th>
             <th>Coach_name</th>
            <th>Team_id</th>
            <th>Game_id</th>


            <th width="100px">Action</th>
        </tr>
        <tbody class="alldata">
        @foreach ($data as $list)
        <tr>

          <td>{{$list->id}}</td>
            <td>{{$list->coach_name}}</td>
            <td>{{$list->team_id}}</td>
            <td>{{$list->game_id}}</td>


            <td>
                <form action="" method="POST">



                <a href="{{ url('coach/edit', $list->id) }}" class="label label-warning btn btn-success">Edit</a>


                </form>
            </td>
        </tr>

        @endforeach
        </tbody>
    <tbody id="Content" class=""searchdata></tbody>
    </table>
    <script>
    $(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    });
    </script>
    {!! $data->links() !!}


</div>
</div>
</body>
@endsection
