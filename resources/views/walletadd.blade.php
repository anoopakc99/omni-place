@include('sidebar')
        <h1 class="text-white">Wallet</h1>
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
                                <h3 class="text-white"> Wallet</h3>
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

    <form action="{{ url('wallet/store') }}" method="POST" class="form-horizontal">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <lable for="">User_id</lable>
               <input type="text" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="" >
               @error('user_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6">
                <lable for="">Balance</lable>
                <input type="text" class="form-control @error('balance') is-invalid @enderror" name="balance" value="" >
                @error('balance')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Verified</lable>
                <input type="text" class="form-control @error('verified') is-invalid @enderror" name="verified" value="" >
                @error('verified')
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


