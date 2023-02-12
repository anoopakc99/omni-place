<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActiveBets;

class ActiveBetsController extends Controller
{
    public function index()
    {
        $result['data']=ActiveBets::all();
        return view ('activebets',$result);
    }

    public function show ()
    {
        return view('activebetsadd');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'player_limit' => 'required',
            'unique_game_id' => 'required|',
            'active_play_id' => 'required|',
            'active' => 'required|',
            'is_completed' => 'required|',
            'is_deleted' => 'required|'

        ]);
       $category = new ActiveBets();

       $category->player_limit = $request->input('player_limit');
       $category->unique_game_id = $request->input('unique_game_id');
       $category->active_play_id = $request->input('active_play_id');
       $category->is_completed = $request->input('is_completed');
       $category->is_deleted = $request->input('is_deleted');
       $category->active = $request->input('active');
       $category->save();

       return redirect('activebets')->with('msg',"Activebets Added Sucessfully");

    }


    public function paginate()
    {
        $data = ActiveBets::paginate(10);
        return view('activebets',compact('data'));
    }

    public function edit($id)
    {
        $list = ActiveBets::find($id);
        return view('activebetsedit', ['list' => $list]);
    }

    public function update($id, Request $request){

        $list = $request->all();
        ActiveBets::find($id)->update($list);

        return redirect('activebets')->with('msg','Games data  updated');
    }

}
