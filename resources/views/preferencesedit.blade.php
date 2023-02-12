@include('sidebar') 
        <h1 class="text-white">Preferences Edit</h1>
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
                                <h3 class="text-white">Preferences Edit</h3>
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
    <form action="{{ url('preferences/update', $list->id) }}" method="POST" class="form-horizontal">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <lable for="">User_id</lable>
               <input type="text" class="form-control" name="user_id" value="{{$list->user_id}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Game_identifier</lable>
                <input type="text" class="form-control" name="game_identifier" value="{{$list->game_identifier}}" >
            </div>
            <div class="col-md-6">
                <lable for="">Favourite_teams</lable>
                <input type="text" class="form-control" name="favourite_teams" value="{{$list->favourite_teams}}" required>
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


