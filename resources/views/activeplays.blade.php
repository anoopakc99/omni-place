@include('sidebar') 

<h1 class="text-white">ActivePlays Dashboard</h1>

<br>
<br>
<a href="{{ url('activeplays/show')}}" class="label label-warning btn btn-success float-end mx-5 px-4 mb-3">Add</a>
<div class="container">
<div class="row">
        <div class="col-lg-12 margin-tb">
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
    <div style="overflow-x:auto; width:100%">
    <table class="table table-bordered " style="overflow-x:auto;">
        <tr class="table-dark">
            <th>Id</th>
             <th>Espn_game_id</th>
            <th>Game_id</th>
            <th>Name</th>
            <th>Budget</th>
            <th>Entries</th>
            <th>Home_team</th>
            <th>Opponent_team</th>
            <th>Bet_window_start</th>
            <th>Bet_window_end</th>
            <th>Active</th>
            <th>Is_popular</th>
            <th>Put_value</th>
            <th>To_win</th>
            <th width="100px">Action</th>
        </tr>
        <tbody id="myTable">
        @foreach ($data as $list)
        <tr>

       <td>{{$list->id}}</td>
       <td>{{$list->espn_game_id}}</td>
       <td>{{$list->game_id}}</td>
       <td>{{$list->name}}</td>
       <td>{{$list->budget}}</td>
       <td>{{$list->entries}}</td>
       <td>{{$list->home_team}}</td>
       <td>{{$list->opponent_team}}</td>
       <td>{{$list->bet_window_start}}</td>
       <td>{{$list->bet_window_end}}</td>
       <td>@if($list->active==1)
                    <p class="text-primary">Active</p>
                 @elseif($list->active==0)
                    <p class="text-warning ">Deactive</p>
                @endif</td>
       <td>{{$list->is_popular}}</td>
       <td>{{$list->put_value}}</td>
       <td>{{$list->to_win}}</td>
          <td>      <form action="" method="POST">

                <a href="{{ url('activeplays/edit', $list->id)}}" class="label label-warning btn btn-info">Edit</a>

                </form>
            </td>
        </tr>
        @endforeach
     </tbody>

    </table>
</div>
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

</div>
</div>
</body>

