<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActivePlays;
class ActivePlaysController extends Controller
{
    public function index()
    {
        $result['data']=ActivePlays::all();
        return view ('activeplays',$result);
    }

    public function show()
    {
        return view('activeplaysadd');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'espn_game_id' => 'required',
            'game_id' => 'required|',
            'name' => 'required|',
            'budget' => 'required|',
            'entries' => 'required|',
            'home_team' => 'required|',
            'opponent_team' => 'required|',
            'bet_window_start' => 'required|',
            'bet_window_end' => 'required|',
            'active' => 'required|',
            'is_popular' => 'required|',
            'put_value' => 'required|',
            'to_win' => 'required|',
            'meta' => 'required|'

        ]);
       $category = new ActivePlays();

       $category->espn_game_id = $request->post('espn_game_id');
       $category->game_id = $request->post('game_id');
       $category->name = $request->post('name');
       $category->budget = $request->post('budget');
       $category->entries = $request->post('entries');
       $category->home_team = $request->post('home_team');
       $category->opponent_team = $request->post('opponent_team');
       $category->bet_window_start = $request->post('bet_window_start');
       $category->bet_window_end = $request->post('bet_window_end');
       $category->active = $request->post('active');
       $category->is_popular = $request->post('is_popular');
       $category->put_value = $request->post('put_value');
       $category->to_win = $request->post('to_win');
       $category->meta = $request->post('meta');
       $category->save();

       return redirect('activeplays')->with('msg',"Activeplays Added Sucessfully");

    }

    public function edit($id)
    {
        $list = ActivePlays::find($id);
        return view('activeplaysedit', ['list' => $list]);
    }

    public function update($id, Request $request){

        $list = $request->all();
        ActivePlays::find($id)->update($list);

        return redirect('activeplays')->with('msg','Plays data  updated');
    }

}
