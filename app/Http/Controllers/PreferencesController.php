<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preferences;


class PreferencesController extends Controller
{
    public function index()
    {
        $result['data']=Preferences::all();
        return view ('preferences',$result);
    }

    public function show()
    {
        return view('preferencesadd');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'game_identifier' => 'required|',
            'favourite_teams' => 'required|'


        ]);
       $category = new Preferences();

       $category->user_id = $request->input('user_id');
       $category->game_identifier = $request->input('game_identifier');
       $category->favourite_teams = $request->input('favourite_teams');
       $category->save();

       return redirect('preferences')->with('msg',"Preferences Added Sucessfully");

    }

    public function paginate()
    {
        $data = Preferences::paginate(10);
        return view('preferences',compact('data'));
    }

    public function edit($id)
    {
        $list = Preferences::find($id);
        return view('preferencesedit', ['list' => $list]);
    }
    public function update($id, Request $request){

        $list = $request->all();
        Preferences::find($id)->update($list);

        return redirect('preferences')->with('msg','Preferences data  updated');
    }
}
