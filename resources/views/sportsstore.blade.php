@extends('layout')

@section('content')



<div class="container-fluid">
    <div class="col-md-12">
    <h1 class="text-success">Sports Add Games </h1>
    @if(session()->has('message'))
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        {{session('message')}}
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif
    <div class="card-body">
    <form action="{{ url('sports/store') }}" method="POST" class="form-horizontal">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <lable for="">Key</lable>
               <input type="text" class="form-control" name="key" value="" required>
            </div>

            <div class="col-md-6">
                <lable for="">Group</lable>
                <input type="text" class="form-control" name="group" value="" >
            </div>
            <div class="col-md-6">
                <lable for="">Title</lable>
                <input type="text" class="form-control" name="title" value="" required>
            </div>

            <div class="col-md-6">
                <lable for="">Description</lable>
                <input type="text" class="form-control" name="description" value="" required>
            </div>

            <div class="col-md-6">
                <lable for="">Has_outrights</lable>
                <input type="text" class="form-control" name="has_outrights" value="" required>
            </div>

            <div class="col-md-6">
                <lable for="">Active</lable>
                <input type="text" class="form-control" name="active" value="" >
            </div>





            <div class="col-md-6" >
            <br>
              <button type="submit" class="btn btn-success">Submit</button>
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





