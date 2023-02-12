@include('sidebar') 

                <h1 class="text-white">User Dashboard</h1>
        </div>


        <div class="row">
            <div class="col-md-12 ">
                <div class="pull-left">

                </div>

                <div class="pull-right btn-lg">
                    <br>
                    
                    <a href="{{ url('admin/add') }}" class="label label-warning btn btn-success float-end mx-5 px-4 mb- ">Add</a>
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

        <table id="myTable" class="table table-bordered ">
            <tr class="table-dark">
              <th>Id</th>
                <th>full_name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Otp</th>
                <th width:100px>Action</th>
            </tr>
            <tbody class="alldata">
                @foreach ($data as $list)
                <tr>

                <td>{{$list->id}}</td>
                    <td>{{$list->full_name}}</td>
                    <td>{{$list->username}}</td>
                    <td>{{$list->email}}</td>
                    <td>{{$list->phone}}</td>
                    <td>{{$list->otp}}</td>
                    <td>

                        <a href="{{ url('admin/edit', $list->id)}}" class="label label-warning btn btn-info">Edit</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
            <!-- <tbody id="Content" class="searchdata" ></tbody> -->
        </table>
        
        <script>
            $(document).ready(function() {
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

