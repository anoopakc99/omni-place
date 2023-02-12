@include('sidebar') 
        <h1 class="text-white">Athletes Add</h1>
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
                                <h3 class="text-white">Odds Edit</h3>
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
    <form action="{{ url('athletes/store') }}" method="POST" class="form-horizontal">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <lable for="">ShortName</lable>
               <input type="text" class="form-control @error('shortName') is-invalid @enderror" name="shortName" value="" >
               @error('shortName')
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
                <lable for="">href</lable>
                <input type="text" class="form-control @error('href') is-invalid @enderror" name="href" value="" >
                @error('href')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Uid</lable>
                <input type="text" class="form-control @error('uid') is-invalid @enderror" name="uid" value="" >
                @error('uid')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Guid</lable>
                <input type="text" class="form-control @error('guid') is-invalid @enderror" name="guid" value="" >
                @error('guid')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6">
                <lable for="">id</lable>
                <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="" >
                @error('id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6">
                <lable for="">Hight</lable>
                <input type="text" class="form-control @error('height') is-invalid @enderror" name="height" value="" >
                @error('height')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Weight</lable>
                <input type="text" class="form-control @error('weight') is-invalid @enderror" name="weight" value="" >
                @error('weight')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6">
                <lable for="">Age</lable>
                <input type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="" >
                @error('age')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Position</lable>
                <input type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="" >
                @error('position')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Jersey</lable>
                <input type="text" class="form-control @error('jersey') is-invalid @enderror" name="jersey" value="" >
                @error('jersey')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6">
                <lable for="">Salary</lable>
                <input type="text" class="form-control @error('salary') is-invalid @enderror" name="salary" value="" >
                @error('salary')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6">
                <lable for="">Birth_Date</lable>
                <input type="date" class="form-control @error('birthDate') is-invalid @enderror" name="birthDate" value="" >
                @error('birthDate')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Headshot</lable>
                <input type="text" class="form-control @error('headshot') is-invalid @enderror" name="headshot" value="" >
                @error('headshot')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">LastName</lable>
                <input type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="" >
                @error('lastName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6">
                <lable for="">College</lable>
                <input type="text" class="form-control @error('college') is-invalid @enderror" name="college" value="" >
                @error('college')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6">
                <lable for="">birthPlace</lable>
                <input type="text" class="form-control @error('birthPlace') is-invalid @enderror" name="birthPlace" value="" >
                @error('birthPlace')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <lable for="">Team_id</lable>
                <input type="text" class="form-control @error('team_id') is-invalid @enderror" name="team_id" value="" >
                @error('team_id')
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

            <div class="col-md-6" mb-3>
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



