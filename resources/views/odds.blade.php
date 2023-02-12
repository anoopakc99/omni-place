@include('sidebar') 
<style>
.tab{
    width:100%;
    height:700px;
    overflow: scroll;
}
    </style>
<!-- Side bar end -->

<h1 class="text-white">Odds Dashboard </h1>

 
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
    <table id="myTable" class="table table-bordered ">
        <tr class="table-dark">
            <th>Id</th>
             <th>api</th>
            <th>data_set</th>
            <th>last_sync_time</th>
            <th>api_url</th>

            <th width="100px">Action</th>
        </tr>
        <tbody class="alldata">
        @foreach ($data as $list)
        <tr>

          <td>{{$list->id}}</td>
            <td>{{$list->api}}</td>
            <td>{{$list->data_set}}</td>
            <td>{{$list->last_sync_time}}</td>
            <td>{{$list->api_url}}</td>




            <td>
                <form action="" method="POST">



                <a href="{{ url('odds/edit', $list->id) }}" class="label label-warning btn btn-success">Edit</a>


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

