@include('sidebar') 
        <h1 class="text-white">User Edit</h1>

<br>
<br>
<br>
<section class="content float-end mx-5 px-1 mb-3">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="card card-white">
                    <div class="card-header w3-blue">
                        <h3 class="text-white">Edit User</h3>
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
                        <form action="{{ url('admin/update', $list->id) }}" method="POST" class="form-horizontal">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <lable for="">full_name</lable>
                                    <input type="text" class="form-control" name="full_name" value="{{$list->full_name}}" required>
                                </div>

                                <div class="col-md-6">
                                    <lable for="">Username</lable>
                                    <input type="text" class="form-control" name="username" value="{{$list->username}}">
                                </div>
                                <div class="col-md-6">
                                    <lable for="">Email</lable>
                                    <input type="text" class="form-control" name="email" value="{{$list->email}}" required>
                                </div>


                                <div class="col-md-6">
                                    <lable for="">Phone</lable>
                                    <input type="text" class="form-control" name="phone" value="{{$list->phone}}" required>
                                </div>
                                <div class="col-md-6">
                                    <lable for="">Otp</lable>
                                    <input type="text" class="form-control" name="otp" value="{{$list->otp}}" required>
                                </div>

                                <div class="col-md-6">
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


