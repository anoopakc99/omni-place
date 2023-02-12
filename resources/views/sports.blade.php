@include('sidebar') 
<style>
.box{
    width:100%;
    height:600px;
    overflow: scroll;
   
}
</style>
                            <h1 class="text-white">Sports Dashboard</h1>
                            </div>


                        <br><br>
                        <div class="container">
                 <a href="{{ url('sports/show') }}" class="label label-warning btn btn-success float-end mx-0 px-4 mb-3">Add</a>
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
                        <div style="overflow-x:auto; width:120%">
                         <div class="tab">
                        <table  class="table table-bordered ">
                            <tr class="table-dark">
                                <th>Id</th>
                                <th>Key</th>
                                <th>Group</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Has_outrights</th>
                                <th>Active</th>
                                <th width="100px">Action</th>
                            </tr>
                            <tbody id="myTable">
                                @foreach ($data as $list)
                                <tr>

                                    <td>{{$list->id}}</td>
                                    <td>{{$list->key}}</td>
                                    <td>{{$list->group}}</td>
                                    <td>{{$list->title}}</td>
                                    <td>{{$list->description}}</td>
                                    <td>{{$list->has_outrights}}</td>
                                    <td>
                                        @if($list->active==1)
                                        <a href="{{url('sports/active/1')}}/{{$list->id}}"><button type="button" class="btn btn-primary">Active</button></a>
                                        @elseif($list->active==0)
                                        <a href="{{url('sports/active/0')}}/{{$list->id}}"><button type="button" class="btn btn-warning">Deactive</button></a>
                                        @endif
                                    </td>

                                    <td>
                                        <a href="{{ url('sports/edit', $list->id) }}" class="label label-warning btn btn-info">Edit</a>

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
       
