@include('sidebar')
        <h1 class="text-white">Active bets Edit</h1>
        <br>
        <br>
        <br>
        <section class="content ">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card card-blue">
                            <div class="card-header w3-blue">
                                <h3 class="text-white"> Edit Active bets</h3>
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
    <form action="{{ url('activebets/update', $list->id) }}" method="POST" class="form-horizontal">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <lable for="">Player_limit</lable>
               <input type="text" class="form-control" name="player_limit" value="{{$list->player_limit}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Unique_game_id</lable>
                <input type="text" class="form-control" name="unique_game_id" value="{{$list->unique_game_id}}" >
            </div>
            <div class="col-md-6">
                <lable for="">Active_play_id</lable>
                <input type="text" class="form-control" name="active_play_id" value="{{$list->active_play_id}}" required>
            </div>
            <div class="col-md-6">
                                <label class="col-md-4 control-label" >Active</label>

                                    <select class="form-control" name="active">
                                        <option name="active" value="1">Active</option>
                                        <option name="active" value="0">InActive</option>
                                    </select>
                                </div>

            <!-- <div class="col-md-6">
                <lable for="">Active</lable>
                <input type="text" class="form-control" name="active" value="{{$list->active}}" required>
            </div> -->

            <div class="col-md-6">
                <lable for="">Is_completed</lable>
                <input type="text" class="form-control" name="is_completed" value="{{$list->is_completed}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Is_deleted</lable>
                <input type="text" class="form-control" name="is_deleted" value="{{$list->is_deleted}}" required>
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


