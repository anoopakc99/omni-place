@include('sidebar') 
        <h1 class="text-white">Cash wallet Edit</h1>
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
                                <h3 class="text-white">Wallet Edit</h3>
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
    <form action="{{ url('cashwallet/update', $list->id) }}" method="POST" class="form-horizontal">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <lable for="">User_id</lable>
               <input type="text" class="form-control" name="user_id" value="{{$list->user_id}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Balance</lable>
                <input type="text" class="form-control" name="balance" value="{{$list->balance}}" >
            </div>
            <div class="col-md-6">
                <lable for="">Verified</lable>
                <input type="text" class="form-control" name="verified" value="{{$list->verified}}" required>
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


