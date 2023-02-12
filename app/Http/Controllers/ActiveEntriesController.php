<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActiveEntries;

class ActiveEntriesController extends Controller
{
    public function index()
    {
        $result['data']=ActiveEntries::all();
        return view ('activeentries',$result);
    }
    public function show()
    {
        return view ('activeentriesadd');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'bet_id' => 'required',
            'user_id' => 'required|',
            'active_play_id' => 'required|',
            'bet_value' => 'required|',
            'bet_type' => 'required|',
            'players' => 'required|',
            'is_completed' => 'required|',
            'verified' => 'required|',
            'meta' => 'required|'


        ]);
       $category = new ActiveEntries();

       $category->bet_id = $request->post('bet_id');
       $category->user_id = $request->post('user_id');
       $category->active_play_id = $request->post('active_play_id');
       $category->bet_value = $request->post('bet_value');
       $category->bet_type = $request->post('bet_type');
       $category->players = $request->post('players');
       $category->is_completed = $request->post('is_completed');
       $category->verified = $request->post('verified');
       $category->meta = $request->post('meta');

       $category->save();

       return redirect('activeentries')->with('msg',"ActiveEntries Added Sucessfully");

    }

    public function paginate()
    {
        $data = ActiveEntries::paginate(10);
        return view('Activeentries',compact('data'));
    }

    public function edit($id)
    {
        $list = ActiveEntries::find($id);
        return view('activeentriesedit', ['list' => $list]);
    }
    public function update($id, Request $request){

        $list = $request->all();
        ActiveEntries::find($id)->update($list);

        return redirect('activeentries')->with('msg','Entries data  updated');
    }
}
