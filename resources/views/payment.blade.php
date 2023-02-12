@include('sidebar') 
<style>
.tab{
    width:100%;
    height:700px;
    overflow: scroll;
}
    </style>
        <h1 class="text-white">Payment Dashboard </h1>

 
    </div>
<br><br><br>

<!-- Side bar end -->



<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">   
    </div>

    @if (Session::has('msg'))
        <div class="alert alert-success">
            <p>{{Session ('msg') }}</p>
        </div>
    @endif
    <div style="overflow-x:auto; width:125%">
    <div class="tab">
    <table  class="table table-bordered "style="overflow-x:auto;">
        <tr class="table-dark">
            <th>Id</th>
             <th>user_id</th>
            <th>charge_amount</th>
            <th>charge_method</th>
            <th>transaction_id</th>
            <th>charge_valid</th>
            <th>charge_response</th>
            <th>charge_state</th>
            <th>quantity</th>

            <th width="100px">Action</th>
        </tr>
        <tbody id="myTable">
        @foreach ($data as $list)
        <tr>

          <td>{{$list->id}}</td>
            <td>{{$list->user_id}}</td>
            <td>{{$list->charge_amount}}</td>
            <td>{{$list->charge_method}}</td>
            <td>{{$list->transaction_id}}</td>
            <td>{{$list->charge_valid}}</td>
            <td>{{$list->charge_response}}</td>
            <td>{{$list->charge_state}}</td>
            <td>{{$list->quantity}}</td>




            <td>
                <form action="" method="POST">



                <a href="{{ url('payment/edit', $list->id) }}" class="label label-warning btn btn-success">Edit</a>


                </form>
            </td>
        </tr>

        @endforeach
        </tbody>
    <tbody id="Content" class=""searchdata></tbody>
    </table>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    {!! $data->links() !!}


</div>
</div>
</body>

