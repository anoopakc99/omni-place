@include('sidebar')

<h1 class="text-white">ActiveBets Dashboard</h1>
<br>
<a href="{{ url('activebets/show')}}" class="label label-warning btn btn-success float-end mx-5 px-4 mb-3">Add</a>
<div class="row">
                            <div class="col-lg-12 ">
                                <div class="pull-left">

                                </div>
                                <div class="pull-right">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-light">

                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>

                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav mr-auto">
                                                <li class="nav-item active">


                                            </ul>

                                        </div>
                                    </nav>

                                </div>
                            </div>
                        </div>
    @if (Session::has('msg'))
        <div class="alert alert-success">
            <p>{{Session ('msg') }}</p>
        </div>
    @endif

    <table  class="table table-bordered ">
        <tr class="table-dark">
            <th>Id</th>
             <th>Player_limit</th>
            <th>Unique_game_id</th>
            <th>Active_play_id</th>
            <th>Active</th>
            <th>Is_completed</th>
            <th>Is_deleted</th>
            <th width="100px">Action</th>
        </tr>
        <tbody id="myTable">
        @foreach ($data as $list)
        <tr>

          <td>{{$list->id}}</td>
            <td>{{$list->player_limit}}</td>
            <td>{{$list->unique_game_id}}</td>
            <td>  @if($list->active_play_id==1)
                    <p class="text-primary">Play Id Active</p>
                  @elseif($list->active_play_id==0)
                    <p class="text-danger">Play Id Deactive</p>
                  @endif
            </td>
             <td> @if($list->active==1)
                    <p class="text-primary">Active</p>
                 @elseif($list->active==0)
                    <p class="text-warning ">Deactive</p>
                @endif
            </td>
            <td>  @if($list->is_completed==1)
                    <p class="text-success">Complete</p>
                  @elseif($list->is_completed==0)
                    <p class="text-info">Incomplete</p>
                  @endif
            </td>
            <td>{{$list->is_deleted}}</td>
            <td>
                <form action="" method="POST">

                <a href="{{ url('activebets/edit', $list->id)}}" class="label label-warning btn btn-success">Edit</a>

                </form>
            </td>
        </tr>
        @endforeach
     </tbody>
    <tbody id="Content" class=""searchdata></tbody>
    </table>
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
{{$data->links()}}


</div>
</div>
</body>

