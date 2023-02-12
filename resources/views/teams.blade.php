@include('sidebar') 
<style>
.tab{
    width:100%;
    height:700px;
    overflow: scroll;
}
    </style>
             <h1 class="text-white">Teams Dashboard</h1>
</div>
    
              <br><br>
                <a href="{{ url('teams/show')}}" class="label label-warning btn btn-success float-end mx-5 px-4 mb-3">Add</a>
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
                <br>
                <div style="overflow-x:auto; width:120%">
                <div class="tab">
                    <table class="table table-bordered  " >
                        <tr class="table-dark">
                            <th>Id</th>
                            <th>Team_game_identifier</th>
                            <th>Team_name</th>
                            <th>Color_code_1</th>
                            <th>Color_code_2</th>
                            <th>Short_code</th>
                            <th>Team_group_name</th>
                            <th>Team_logo</th>
                            <th>Team_short_name</th>
                            <th>Team_url</th>
                            <th>Is_synced</th>
                            <th>Standing_summary</th>
                            <th>Team_record</th>
                            <th width="100px">Action</th>
                        </tr>
                        <tbody id="myTable">
                            @foreach ($data as $list)
                            <tr>

                                <td>{{$list->id}}</td>
                                <td>{{$list->team_game_identifier}}</td>
                                <td>{{$list->team_name}}</td>
                                <td>{{$list->color_code_1}}</td>
                                <td>{{$list->color_code_2}}</td>
                                <td>{{$list->short_code}}</td>
                                <td>{{$list->team_group_name}}</td>
                                <td>{{$list->team_logo}}</td>
                                <td>{{$list->team_short_name}}</td>
                                <td>{{$list->team_url}}</td>
                                <td>{{$list->is_synced}}</td>
                                <td>{{$list->standing_summary}}</td>
                                <td>{{$list->team_record}}</td>
                                <td>
                                    <form action="" method="POST">



                                        <a href="{{ url('teams/edit', $list->id)}}" class="label label-warning btn btn-success">Edit</a>


                                    </form>

                                </td>
                            </tr>

                            @endforeach
                        </tbody>

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
                {!! $data->links() !!}


            </div>
        </div>
        </body>

