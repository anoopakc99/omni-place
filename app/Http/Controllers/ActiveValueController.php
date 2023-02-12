<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActiveValue;

class ActiveValueController extends Controller
{
    public function index()
    {
        $result['data']=ActiveValue::all();
        return view ('activevalue',$result);
    }

    public function paginate()
    {
        $data = ActiveValue::paginate(10);
        return view('activevalue',compact('data'));
    }

    public function show()
    {
        return view('activevalueadd');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'active_play_id' => 'required',
            'team_id' => 'required|',
            'player_id' => 'required|',
            'player_value' => 'required|',
            'player_name' => 'required|'

        ]);
       $category = new ActiveValue();

       $category->active_play_id = $request->post('active_play_id');
       $category->team_id = $request->post('team_id');
       $category->player_id = $request->post('player_id');
       $category->player_value = $request->post('player_value');
       $category->player_name = $request->post('player_name');
       $category->save();

       return redirect('activevalue')->with('msg',"Activevalue Added Sucessfully");

    }
    public function edit($id)
    {
        $list = ActiveValue::find($id);
        return view('activevalueedit', ['list' => $list]);
    }
    public function update($id, Request $request){

        $list = $request->all();
        ActiveValue::find($id)->update($list);

        return redirect('activevalue')->with('msg','Entries data  updated');
    }
}
