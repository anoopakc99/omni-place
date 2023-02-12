@include('sidebar') 
        <h1 class="text-white">Game add</h1>
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
                                <h3 class="text-white">Game Add</h3>
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

    <form action="{{url('games/store')}}" method="POST" class="form-horizontal">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <lable for="">Game_identifier</lable>
               <input type="text" class="form-control @error('game_identifier') is-invalid @enderror" name="game_identifier" value="" >
               @error('game_identifier')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6">
                <lable for="">game_icon</lable>
                <input type="file" class="form-control @error('game_icon') is-invalid @enderror" name="game_icon" value="" >
                @error('game_icon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Game_name</lable>
                <input type="text" class="form-control @error('game_name') is-invalid @enderror" name="game_name" value="" >
                @error('game_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="col-md-6">
                <lable for="">Available</lable>
                <input type="text" class="form-control @error('available') is-invalid @enderror" name="available" value="" >
                @error('available')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Teams</lable>
                <input type="text" class="form-control @error('teams') is-invalid @enderror" name="teams" value="" >
                @error('teams')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            </div>
            <br>
            <button type="submit" class="btn btn-success">Add</button>

        </div>
        <button type="submit" btn btn-primary name="submit">
        </form>
    </div>
   </div>
</div>
</div>
</div>


