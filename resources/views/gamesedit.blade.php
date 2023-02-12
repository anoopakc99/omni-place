@include('sidebar') 
        <h1 class="text-white">Games Edit</h1>
        <br>
        <br>
        <br>
        <section class="content float-end mx-5 px-4 mb-3">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card w3-white">
                            <div class="card-header w3-blue">
                                <h3 class="text-white">Edit Games</h3>
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
                                <form action="{{ url('games/update', $list->id) }}" method="POST" class="form-horizontal">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <lable for="">Game_identifier</lable>
                                            <input type="text" class="form-control" name="game_identifier" value="{{$list->game_identifier}}" required>
                                        </div>

                                        <div class="col-md-6">
                                            <lable for="">Game_icon</lable>
                                            <input type="file" class="form-control" name="game_icon" value="{{$list->game_icon}}">
                                        </div>
                                        <div class="col-md-6">
                                            <lable for="">Game_name</lable>
                                            <input type="text" class="form-control" name="game_name" value="{{$list->game_name}}" required>
                                        </div>

                                        <div class="col-md-6">
                                            <lable for="">Available</lable>
                                            <input type="text" class="form-control" name="available" value="{{$list->available}}" required>
                                        </div>


                                        <div class="col-md-6">
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
</div>
</div>
