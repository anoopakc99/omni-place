@include('sidebar') 
        <h1 class="text-white">Payment Request Edit</h1>
        <br>
        <br>
        <br>
        <section class="content ">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card card-dark">
                            <div class="card-header">
                                <h3 class="text-success">payment request Edit</h3>
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
    <form action="{{ url('paymentrequest/update', $list->id) }}" method="POST" class="form-horizontal">
            @csrf
        <div class="row">
            <div class="col-md-6">
                <lable for="">User_id</lable>
               <input type="text" class="form-control" name="user_id" value="{{$list->user_id}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Charge_intent</lable>
                <input type="text" class="form-control" name="charge_intent" value="{{$list->charge_intent}}" >
            </div>
            <div class="col-md-6">
                <lable for="">Charge_amount</lable>
                <input type="text" class="form-control" name="charge_amount" value="{{$list->charge_amount}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Charge_method</lable>
                <input type="text" class="form-control" name="charge_method" value="{{$list->charge_method}}" required>
            </div>

            <div class="col-md-6">
                <lable for="">Transaction_id</lable>
                <input type="text" class="form-control" name="transaction_id" value="{{$list->transaction_id}}" required>
            </div>


            <div class="col-md-6">
                <lable for="">Charge_response</lable>
                <input type="text" class="form-control" name="charge_response" value="{{$list->charge_response}}" >
            </div>

            <div class="col-md-6">
                <lable for="">Charge_request</lable>
                <input type="text" class="form-control" name="charge_request" value="{{$list->charge_request}}" >
            </div>
            <div class="col-md-6">
                <lable for="">Charge_state</lable>
                <input type="text" class="form-control" name="charge_state" value="{{$list->charge_state}}" required>
            </div>
            <div class="col-md-6">
                <lable for="">Quantity</lable>
                <input type="text" class="form-control" name="quantity" value="{{$list->quantity}}" required>
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


