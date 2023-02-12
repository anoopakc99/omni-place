@include('sidebar') 

                        <h1 class="text-white">Games Dashboard</h1>
                        <br>
                        <br>
                        <div class="container">
                        <a href="{{ url('games/show') }}" class="label label-warning btn btn-success float-end mx-5 px-4 mb-3">Add</a>
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
                                <th>Game_identifier</th>
                                <th>Game_icon</th>
                                <th>Game_name</th>
                                <th>Teams</th>
                                <th>Available</th>

                                <th width="100px">Action</th>
                            </tr>
                            <tbody id="myTable">
                                @foreach ($data as $list)
                                <tr>

                                    <td>{{$list->id}}</td>
                                    <td>{{$list->game_identifier}}</td>
                                    <td>{{$list->game_icon}}</td>
                                    <td>{{$list->game_name}}</td>
                                    <td>{{$list->teams}}</td>
                                    <td>
                                        @if($list->available==1)
                                        <a href="{{url('games/available/1')}}/{{$list->available}}"><button type="button" class="btn btn-primary">Active</button></a>
                                        @elseif($list->available==0)
                                        <a href="{{url('games/available/0')}}/{{$list->available}}"><button type="button" class="btn btn-warning">Deactive</button></a>
                                        @endif
                                    </td>

                                    <td>
                                        <form action="" method="POST">



                                            <a href="{{ url('games/edit', $list->id) }}" class="label label-warning btn btn-info">Edit</a>
                              

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
         
