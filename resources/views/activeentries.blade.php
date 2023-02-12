@include('sidebar') 

                        <h1 class="text-white">Active Entries Dashboard</h1>

                        <br>
                        <br>
                        <a href="{{ url('activeentries/show')}}" class="label label-warning btn btn-success float-end mx-5 px-4 mb-3">Add</a>

                        <div class="row">
                            <div class="col-lg-12">
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
                                    <!-- <a class="btn btn-success" href=""> Create New Product</a> -->
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
                                <th>bet_id</th>
                                <th>user_id</th>
                                <th>active_play_id</th>
                                <th>bet_value</th>
                                <th>bet_type</th>
                                <th>players</th>
                                <th>is_completed</th>
                                <th>verified</th>
                                <th>meta</th>
                                <th width="100px">Action</th>
                            </tr>
                            <tbody id="myTable">
                                @foreach ($data as $list)
                                <tr>

                                    <td>{{$list->id}}</td>
                                    <td>{{$list->bet_id}}</td>
                                    <td>{{$list->user_id}}</td>
                                    <td>{{$list->active_play_id}}</td>
                                    <td>{{$list->bet_value}}</td>
                                    <td>{{$list->bet_type}}</td>
                                    <td>{{$list->players}}</td>
                                    <td>{{$list->is_completed}}</td>
                                    <td>{{$list->verified}}</td>
                                    <td>{{$list->meta}}</td>

                                    <td>
                                        <form action="" method="POST">



                                            <a href="{{ url('activeentries/edit', $list->id)}}" class="label label-warning btn btn-success">Edit</a>


                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tbody id="Content" class="" searchdata></tbody>
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
        
