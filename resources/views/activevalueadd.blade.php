@include('sidebar') 
        <h1 class="text-white">Add Active value</h1>
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
                                <h3 class="text-white"> Add Active value</h3>
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

        <form action="{{ url('activevalue/store') }}" method="POST" class="form-horizontal">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <lable for="">Active_play_id</lable>
                    <input type="text" class="form-control @error('active_play_id') is-invalid @enderror" name="active_play_id" value="">
                    @error('active_play_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <lable for="">Team_id</lable>
                    <input type="text" class="form-control @error('team_id') is-invalid @enderror" name="team_id" value="">
                    @error('team_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <lable for="">Player_id</lable>
                    <input type="text" class="form-control @error('player_id') is-invalid @enderror" name="player_id" value="">
                    @error('player_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="col-md-6">
                    <lable for="">Player_value</lable>
                    <input type="text" class="form-control @error('player_value') is-invalid @enderror" name="player_value" value="">
                    @error('player_value')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <lable for="">Player_name</lable>
                    <input type="text" class="form-control @error('player_name') is-invalid @enderror" name="player_name" value="">
                    @error('player_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>



            </div>


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

 
