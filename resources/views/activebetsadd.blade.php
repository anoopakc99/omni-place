@include('sidebar')
        <h1 class="text-white"> Add Active Bets</h1>
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
                                <h3 class="text-white">Add Active Bets</h3>
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

    <form action="{{ url('activebets/store') }}" method="POST" class="form-horizontal">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <lable for="">Player_limit</lable>
               <input type="text" class="form-control @error('player_limit') is-invalid @enderror" name="player_limit" value="" >
               @error('player_limit')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6">
                <lable for="">Unique_game_id</lable>
                <input type="text" class="form-control @error('unique_game_id') is-invalid @enderror" name="unique_game_id" value="" >
                @error('unique_game_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Active_play_id</lable>
                <input type="text" class="form-control @error('active_play_id') is-invalid @enderror" name="active_play_id" value="" >
                @error('active_play_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="col-md-6">
                <lable for="">Active</lable>
                <input type="text" class="form-control @error('active') is-invalid @enderror" name="active" value="" >
                @error('active')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Is_completed</lable>
                <input type="text" class="form-control @error('is_completed') is-invalid @enderror" name="is_completed" value="" >
                @error('is_completed')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6">
                <lable for="">Is_deleted</lable>
                <input type="text" class="form-control @error('is_deleted') is-invalid @enderror" name="is_deleted" value="" >
                @error('is_deleted')
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


