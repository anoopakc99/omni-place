<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;

class CoachController extends Controller
{
    public function index()
    {
        $result['data']=Coach::all();
        return view ('coach',$result);
    }
public function show()
{
    return view('coachadd');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'coach_name' => 'required',
        'team_id' => 'required|',
        'game_id' => 'required|'

    ]);
   $category = new Coach();

   $category->coach_name = $request->post('coach_name');
   $category->team_id = $request->post('team_id');
   $category->game_id = $request->post('game_id');
   $category->save();

   return redirect('coach')->with('msg',"Coach Added Sucessfully");

}

    public function paginate()
    {
        $data = Coach::paginate(10);
        return view('coach',compact('data'));
    }

    public function edit($id)
    {
        $list = Coach::find($id);
        return view('coachedit', ['list' => $list]);
    }

    public function update($id, Request $request){

        $list = $request->all();
        Coach::find($id)->update($list);

        return redirect('coach')->with('msg','Coach data  updated');
    }

}
