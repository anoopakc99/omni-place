<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Athletes;
use App\Models\Games;

class GamesController extends Controller
{
    public function index()
    {
        $result['data']=Games::all();
        return view ('games',$result);
    }
    public function show()
    {
        return view ('gamesadd');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'game_identifier' => 'required',
        'game_icon' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'game_name' => 'required|',
        'available' => 'required|',
        'teams' => 'required|'
    ]);

    $user = new Games();

    if($request->hasFile('game_icon'))
    {
     $file = $request->file('game_icon');
     $ext = $file->getClientOriginalExtension();
     $filename = time().'.'.$ext;
     $file->store('public'.$filename);
     $user->game_icon = $filename;
    }

   $user->game_identifier = $request->post('game_identifier');
   $user->game_icon = $request->post('game_icon');
   $user->game_name = $request->post('game_name');
   $user->available = $request->post('available');
   $user->teams = $request->post('teams');
   $user->save();
   return redirect('games')->with('msg',"Games Added Sucessfully");

}

    public function edit($id)
    {
        $list = Games::find($id);
        return view('gamesedit', ['list' => $list]);
    }

    public function paginate()
    {
        $data = Games::paginate(10);
        return view('games',compact('data'));
    }

    public function update($id, Request $request){

        $list = $request->all();
        Games::find($id)->update($list);

        return redirect('games')->with('msg','Games data  updated');
    }

    public function searching(Request $request)
    {
        $output = "";
        $games = Games::where('game_identifier','like','%'.$request->search.'%')->orWhere('id','like','%'.$request->search.'%')->get();
        foreach($games as $games)
        {
            $output.=
            '<tr>
            <td> '.$games->Game_identifier.' </td>
            <td> '.$games->Game_icon.' </td>
            <td> '.$games->Game_name.' </td>
            <td> '.$games->Available.' </td>


            </tr>';
        }
        return response($output);


    }



}











    // public function status(Request $request,$available,$id){
    //     $model=Games::find($id);
    //     $model->available=$available;
    //     $model->save();
    //     $request->session()->flash('message',' status updated');
    //     return redirect('games');
    // }
