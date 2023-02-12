@include('sidebar') 
        <h1 class="text-white">Add Active plays</h1>
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
                                <h3 class="text-white">Add Active plays</h3>
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

    <form action="{{ url('activeplays/store') }}" method="POST" class="form-horizontal">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <lable for="">Espn_game_id</lable>
               <input type="text" class="form-control @error('espn_game_id') is-invalid @enderror" name="espn_game_id" value="" >
               @error('espn_game_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6">
                <lable for="">Game_id</lable>
                <input type="text" class="form-control @error('game_id') is-invalid @enderror" name="game_id" value="" >
                @error('game_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Name</lable>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" >
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="col-md-6">
                <lable for="">Budget</lable>
                <input type="text" class="form-control @error('budget') is-invalid @enderror" name="budget" value="" >
                @error('budget')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Entries</lable>
                <input type="text" class="form-control @error('entries') is-invalid @enderror" name="entries" value="" >
                @error('entries')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6">
                <lable for="">Home_team</lable>
                <input type="text" class="form-control @error('home_team') is-invalid @enderror" name="home_team" value="" >
                @error('home_team')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6">
                <lable for="">Opponent_team</lable>
                <input type="text" class="form-control @error('opponent_team') is-invalid @enderror" name="opponent_team" value="" >
                @error('opponent_team')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6">
                <lable for="">Bet_window_start</lable>
                <input type="date" class="form-control @error('bet_window_start') is-invalid @enderror" name="bet_window_start" value="" >
                @error('bet_window_start')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Bet_window_end</lable>
                <input type="date" class="form-control @error('bet_window_end') is-invalid @enderror" name="bet_window_end" value="" >
                @error('bet_window_end')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Meta</lable>
                <input type="text" class="form-control @error('meta') is-invalid @enderror" name="meta" value="" >
                @error('meta')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                                <label class="col-md-4 control-label" >Active</label>

                                    <select class="form-control" name="active">
                                        <option name="active" value="1">Active</option>
                                        <option name="active" value="0">InActive</option>
                                 </select>


            </div>


            <div class="col-md-6">
                <lable for="">Is_popular</lable>
                <input type="text" class="form-control @error('is_popular') is-invalid @enderror" name="is_popular" value="" >
                @error('is_popular')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Put_value</lable>
                <input type="text" class="form-control @error('put_value') is-invalid @enderror" name="put_value" value="" >
                @error('put_value')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">To_win</lable>
                <input type="text" class="form-control @error('to_win') is-invalid @enderror" name="to_win" value="" >
                @error('to_win')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            </div>


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


