<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;

class TeamsController extends Controller
{
    public function index()
    {
        $result['data']=Teams::all();
        return view ('teams',$result);
    }

    public function show()
    {
        return view('teamsadd');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'team_game_identifier' => 'required',
            'team_name' => 'required|',
            'color_code_1' => 'required|',
            'color_code_2' => 'required|',
            'short_code' => 'required|',
            'team_group_name' => 'required|',
            'team_logo' => 'required|',
            'team_short_name' => 'required|',
            'team_url' => 'required|',
            'is_synced' => 'required|',
            'standing_summary' => 'required|',
            'team_record' => 'required|'


        ]);
       $category = new Teams();

       $category->team_game_identifier = $request->post('team_game_identifier');
       $category->team_name = $request->post('team_name');
       $category->color_code_1 = $request->post('color_code_1');
       $category->color_code_2 = $request->post('color_code_2');
       $category->short_code = $request->post('short_code');
       $category->team_group_name = $request->post('team_group_name');
       $category->team_logo = $request->post('team_logo');
       $category->team_short_name = $request->post('team_short_name');
       $category->team_url = $request->post('team_url');
       $category->is_synced = $request->post('is_synced');
       $category->standing_summary = $request->post('standing_summary');
       $category->team_record = $request->post('team_record');
       $category->save();

       return redirect('teams')->with('msg',"Teams Added Sucessfully");

    }

    public function edit($id)
    {
        $list = Teams::find($id);
        return view('teamsedit', ['list' => $list]);
    }
    public function paginate()
    {
        $data = Teams::paginate(10);
        return view('teams',compact('data'));
    }


    public function update($id, Request $request)

    {
        $sport = Teams::find($id);
        $sport->team_game_identifier = $request->post('team_game_identifier');
        $sport->team_name = $request->post('team_name');
        $sport->color_code_1 = $request->post('color_code_1');
        $sport->color_code_2 = $request->post('color_code_2');
        $sport->short_code = $request->post('short_code');
        $sport->team_group_name = $request->post('team_group_name');
        $sport->team_logo = $request->post('team_logo');
        $sport->team_short_name = $request->post('team_short_name');
        $sport->team_url = $request->post('team_url');
        $sport->is_synced = $request->post('is_synced');
        $sport->standing_summary = $request->post('standing_summary');
        $sport->team_record = $request->post('team_record');
        $sport->save();
        return redirect('teams')->with('msg','Teams data  updated');

    }



}
