<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Athletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Str;

class AthletesController extends Controller

{
    public function index()
    {
        $result['data']=Athletes::all();
        $count = Athletes::count();
        dd($count);
        return view ('athletes',$result);
    }
    public function show()
{
    return view('athletesadd');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'shortName' => 'required',
        'name' => 'required|',
        'href' => 'required|',
        'uid' => 'required|',
        'guid' => 'required|',
        'id' => 'required|',
        'height' => 'required|',
        'weight' => 'required|',
        'age' => 'required|',
        'position' => 'required|',
        'jersey' => 'required|',
        'salary' => 'required|',
        'birthDate' => 'required|',
        'headshot' => 'required|',
        'lastName' => 'required|',
        'college' => 'required|',
        'birthPlace' => 'required|',
        'team_id' => 'required|',
        'game_id' => 'required|'

    ]);
   $user = new Athletes();

   $user->shortName = $request->input('shortName');
   $user->name = $request->input('name');
   $user->href = $request->input('href');
   $user->uid = $request->input('uid');
   $user->guid = $request->input('guid');
   $user->id = $request->input('id');
   $user->height = $request->input('height');
   $user->weight = $request->input('weight');
   $user->age = $request->input('age');
   $user->position = $request->input('position');
   $user->jersey = $request->input('jersey');
   $user->salary = $request->input('salary');
   $user->birthDate = $request->input('birthDate');
   $user->headshot = $request->input('headshot');
   $user->lastName = $request->input('lastName');
   $user->college = $request->input('college');
   $user->birthPlace = $request->input('birthPlace');
   $user->team_id = $request->input('team_id');
   $user->game_id = $request->input('game_id');
   $user->save();
   return redirect('athletes')->with('msg',"athletes Added Sucessfully");

}

    public function paginate()
    {
        $data = Athletes::paginate(10);
        return view('athletes',compact('data'));
    }

 

 //Athletes Edit data
        public function edit($id)
        {
            $list = Athletes::find($id);
            return view('athletesedit', ['list' => $list]);
        }

//Athletes Update data
        public function update($id, Request $request){
            //validate post data
            // $this->validate($request, [
            //     'title' => 'required',
            //     'content' => 'required'
            // ]);

            //get post data
            $list = $request->all();
            Athletes::find($id)->update($list);
            $request->session()->flash('message','Post status updated');
            return redirect('athletes')->with('msg','Athletes data  updated');
        }
// Serachind table
       public function search(Request $request)
    {
        $output = "";
        $athletes = Athletes::where('name','like','%'.$request->search.'%')->orWhere('id','like','%'.$request->search.'%')->get();
        foreach($athletes as $athletes)
        {
            $output.=
            '<tr>
            <td> '.$athletes->shortName.' </td>
            <td> '.$athletes->name.' </td>
            <td> '.$athletes->href.' </td>
            <td> '.$athletes->uid.' </td>
            <td> '.$athletes->guid.' </td>
            <td> '.$athletes->id.' </td>
            <td> '.$athletes->height.' </td>
            <td> '.$athletes->weight.' </td>
            <td> '.$athletes->age.' </td>
            <td> '.$athletes->position.' </td>
            <td> '.$athletes->jersey.' </td>
            <td> '.$athletes->salary.' </td>
            <td> '.$athletes->birthDate.' </td>
            <td> '.$athletes->headshot.' </td>
            <td> '.$athletes->lastName.' </td>

            <td> '.$athletes->college.' </td>
            <td> '.$athletes->birthPlace.' </td>

            <td> '.$athletes->team_id.' </td>
            <td> '.$athletes->game_id.' </td>





            </tr>';
        }
        return response($output);

    }
}
