@include('sidebar') 
        <h1 class="text-white">Active plays Edit</h1>
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
                                <h3 class="text-white">Plays Edit</h3>
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
    <form action="{{ url('activeplays/update', $list->id) }}" method="POST" class="form-horizontal">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <lable for="">Espn_game_id</lable>
               <input type="text" class="form-control" name="espn_game_id" value="{{$list->espn_game_id}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Game_id</lable>
                <input type="text" class="form-control" name="game_id" value="{{$list->game_id}}" >
            </div>
            <div class="col-md-6">
                <lable for="">Name</lable>
                <input type="text" class="form-control" name="name" value="{{$list->name}}" required>
            </div>


            <div class="col-md-6">
                <lable for="">Budget</lable>
                <input type="text" class="form-control" name="budget" value="{{$list->budget}}" required>
            </div>
            <div class="col-md-6">
                <lable for="">Entries</lable>
                <input type="text" class="form-control" name="entries" value="{{$list->entries}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Home_team</lable>
                <input type="text" class="form-control" name="home_team" value="{{$list->home_team}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Opponent_team</lable>
                <input type="text" class="form-control" name="opponent_team" value="{{$list->opponent_team}}" required>
            </div>



            <div class="col-md-6">
                <lable for="">Bet_window_start</lable>
                <input type="text" class="form-control" name="bet_window_start" value="{{$list->bet_window_start}}" required>
            </div>
            <div class="col-md-6">
                <lable for="">Bet_window_end</lable>
                <input type="text" class="form-control" name="bet_window_end" value="{{$list->bet_window_end}}" required>
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
                <input type="text" class="form-control" name="is_popular" value="{{$list->is_popular}}" required>
            </div>
            <div class="col-md-6">
                <lable for="">Put_value</lable>
                <input type="text" class="form-control" name="put_value" value="{{$list->put_value}}" required>
            </div>
            <div class="col-md-6">
                <lable for="">To_win</lable>
                <input type="text" class="form-control" name="to_win" value="{{$list->to_win}}" required>
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

