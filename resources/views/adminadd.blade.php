@include('sidebar') 
        <h1 class="text-white">Add User</h1>


<br>
<br>
<br>
<section class="content float-end mx-5 px-4 mb-3">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card w3-white">
                    <div class="card-header w3-blue">
                        <h3 class="text-white">Add User</h3>
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

                    <form action="{{ url('admin/data') }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <lable for="">full_name</lable>
                                <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="" placeholder="Full_Name">
                                @error('full_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <lable for="">Username</lable>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="" placeholder="UserName">
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <lable for="">Email</lable>
                                <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="email" value="" placeholder="Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="col-md-4">
                                <lable for="">Phone</lable>
                                <input type="text" class="form-control @error('full_name') is-invalid @enderror" name="phone" value="" placeholder="Phone">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <lable for="">Otp</lable>
                                <input type="text" class="form-control @error('otp') is-invalid @enderror" name="otp" value="" placeholder="Otp">
                                @error('otp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
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


