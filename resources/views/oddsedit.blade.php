@include('sidebar') 
        <h1 class="text-white">Odds Edit</h1>
        <br>
        <br>
        <br>
        <section class="content ">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card card-white">
                            <div class="card-header w3-blue">
                                <h3 class="text-white">Odds Edit</h3>
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
    <form action="{{ url('odds/update', $list->id) }}" method="POST" class="form-horizontal">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <lable for="">api</lable>
               <input type="text" class="form-control" name="api" value="{{$list->api}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">data_set</lable>
                <input type="text" class="form-control" name="data_set" value="{{$list->data_set}}" >
            </div>
            <div class="col-md-6">
                <lable for="">last_sync_time</lable>
                <input type="text" class="form-control" name="last_sync_time" value="{{$list->last_sync_time}}" required>
            </div>
            <div class="col-md-6">
                <lable for="">api_url</lable>
                <input type="text" class="form-control" name="api_url" value="{{$list->api_url}}" required>
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


