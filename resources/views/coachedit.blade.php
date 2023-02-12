@extends('layout')

@section('content')

<div class="container-fluid">
    <div class="col-md-12">
    <h1 class="text-success">Edit ActiveBets </h1>
    @if(session()->has('message'))
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        {{session('message')}}
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif
    <div class="card-body">
    <form action="{{ url('coach/update', $list->id) }}" method="POST" class="form-horizontal">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <lable for="">Coach_name</lable>
               <input type="text" class="form-control" name="coach_name" value="{{$list->coach_name}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Team_id</lable>
                <input type="text" class="form-control" name="team_id" value="{{$list->team_id}}" >
            </div>
            <div class="col-md-6">
                <lable for="">Game_id</lable>
                <input type="text" class="form-control" name="game_id" value="{{$list->game_id}}" required>
            </div>

            <





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
