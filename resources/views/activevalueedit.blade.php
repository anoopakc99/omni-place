@include('sidebar') 
        <h1 class="text-white">Active Value Edit</h1>
        <br>
        <br>
        <br>
        <section class="content float-end mx-5 px-4 mb-3">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card card-blue">
                            <div class="card-header w3-blue">
                                <h3 class="text-white">Edit Value</h3>
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
    <form action="{{ url('activevalue/update', $list->id) }}" method="POST" class="form-horizontal">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <lable for="">Active_play_id</lable>
               <input type="text" class="form-control" name="active_play_id" value="{{$list->active_play_id}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Team_id</lable>
                <input type="text" class="form-control" name="team_id" value="{{$list->team_id}}" >
            </div>
            <div class="col-md-6">
                <lable for="">Player_id</lable>
                <input type="text" class="form-control" name="player_id" value="{{$list->player_id}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Player_value</lable>
                <input type="text" class="form-control" name="player_value" value="{{$list->player_value}}" required>
            </div>
            <div class="col-md-6">
                <lable for="">Player_name</lable>
                <input type="text" class="form-control" name="player_name" value="{{$list->player_name}}" required>
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

