
@include('sidebar') 
<style>
.box{
    width:100%;
    height:600px;
    overflow: scroll;
   
}
</style>
<!-- Side bar end -->
<h1 class="text-white">Athletes Dashboard</h1>
<br>


            <td> <a href="{{ url('athletes/show') }}" class="label label-warning btn btn-success float-end mx-5 px-4 mb-3">Add</a>
            <br><br>
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
    <div style="overflow-x:auto; width:115%">
    <div class="tab">
<table id="customers" class="table table-bordered box overflow-auto "style="overflow-x:auto;">
    <tr class="table-dark">

        <th>ShortName</th>
        <th>Name</th>
        <th>href</th>
        <th>Uid</th>
        <th>Guid</th>
        <th>id</th>
        <th>Hight</th>
        <th>Weight</th>
        <th>Age</th>
        <th>Position</th>
        <th>Jersey</th>
        <th>Salary</th>
        <th>Birth_Date</th>
        <th>Headshot</th>
        <th>LastName</th>
        <th>College</th>
        <th>birthPlace</th>
        <th>Team_id</th>
        <th>Game_id</th>
        <th>Action</th>
        <tbody class="alldata">
            @foreach ($data as $list)
            <tr>


                <td>{{$list->shortName}}</td>
                <td>{{$list->name}}</td>
                <td>{{$list->href}}</td>
                <td>{{$list->uid}}</td>
                <td>{{$list->guid}}</td>
                <td>{{$list->id}}</td>
                <td>{{$list->height}}</td>
                <td>{{$list->weight}}</td>
                <td>{{$list->age}}</td>
                <td>{{$list->position}}</td>
                <td>{{$list->jersey}}</td>
                <td>{{$list->salary}}</td>
                <td>{{$list->birthDate}}</td>
                <td>{{$list->headshot}}</td>
                <td>{{$list->lastName}}</td>
                <td>{{$list->college}}</td>
                <td>{{$list->birthPlace}}</td>
                <td>{{$list->team_id}}</td>
                <td>{{$list->game_id}}</td>

                <td>
                    <form action="" method="POST">
                        <a href="{{ url('posts/edit', $list->id) }}" class="label label-warning btn btn-info">Edit</a>



            </tr>

            @endforeach


            </tbody>
    <tbody id="Content" class="searchdata"></tbody>
    </table>
</div>
</div>

  <script type="text/javascript">
$('#searche').on('keyup',function()
{
$value=$(this).val();
if($value)
{
  $('.alldata').hide();
  $('.searchdata').show();
}
else{
  $('.alldata').show();
  $('.searchdata').hide();

}
$.ajax({

  type:'get',
  url:'{{URL::to('search')}}',
  data:{'search':$value},

  success:function(data)
  {
    console.log(data);
    $('#Content').html(data);
  }

});
})

                        </script>


</body>

