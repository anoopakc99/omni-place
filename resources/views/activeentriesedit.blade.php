@include('sidebar') 
        <h1 class="text-white">Active Entries Edit</h1>
        <br>
        <br>
        <br>
        <section class="content float-end mx-5 px-4 mb-3">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card card-dark">
                            <div class="card-header">
                                <h3 class="text-success">Edit Entries</h3>
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
    <form action="{{ url('activeentries/update', $list->id) }}" method="POST" class="form-horizontal">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <lable for="">bet_id</lable>
               <input type="text" class="form-control" name="bet_id" value="{{$list->bet_id}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">user_id</lable>
                <input type="text" class="form-control" name="user_id" value="{{$list->user_id}}" >
            </div>
            <div class="col-md-6">
                <lable for="">active_play_id</lable>
                <input type="text" class="form-control" name="active_play_id" value="{{$list->active_play_id}}" required>
            </div>


            <div class="col-md-6">
                <lable for="">bet_value</lable>
                <input type="text" class="form-control" name="bet_value" value="{{$list->bet_value}}" required>
            </div>
            <div class="col-md-6">
                <lable for="">bet_type</lable>
                <input type="text" class="form-control" name="bet_type" value="{{$list->bet_type}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">players</lable>
                <input type="text" class="form-control" name="players" value="{{$list->players}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">is_completed</lable>
                <input type="text" class="form-control" name="is_completed" value="{{$list->is_completed}}" required>
            </div>



            <div class="col-md-6">
                <lable for="">verified</lable>
                <input type="text" class="form-control" name="verified" value="{{$list->verified}}" required>
            </div>
            <div class="col-md-6">
                <lable for="">meta</lable>
                <input type="text" class="form-control" name="meta" value="{{$list->meta}}" required>
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


