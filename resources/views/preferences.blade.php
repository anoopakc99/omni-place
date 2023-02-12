@include('sidebar') 
<h1 class="text-white">Preferences Request Dashboard</h1>
<br>
<br>
<a href="{{ url('preferences/show') }}" class="label label-warning btn btn-success float-end mx-5 px-4 mb-3">Add</a>
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
    <table id="myTable" class="table table-bordered ">
        <tr class="table-dark">
            <th>Id</th>
             <th>User_id</th>
            <th>Game_identifier</th>
            <th>Favourite_teams</th>

            <th width="100px">Action</th>
        </tr>
        <tbody class="alldata">
        @foreach ($data as $list)
        <tr>

          <td>{{$list->id}}</td>
            <td>{{$list->user_id}}</td>
            <td>{{$list->game_identifier}}</td>
            <td>{{$list->favourite_teams}}</td>

            <td>
                <form action="" method="POST">



                <a href="{{ url('preferences/edit', $list->id) }}" class="label label-warning btn btn-success">Edit</a>


                </form>
            </td>
        </tr>

        @endforeach
        </tbody>

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