<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Odds;


class OddsController extends Controller
{
    public function index()
    {
        $result['data']=Odds::all();
        return view ('odds',$result);
    }

    public function paginate()
    {
        $data = Odds::paginate(10);
        return view('odds',compact('data'));
    }

    public function edit($id)
    {
        $list = Odds::find($id);
        return view('oddsedit', ['list' => $list]);
    }

    public function update($id, Request $request){

        $list = $request->all();
        Odds::find($id)->update($list);

        return redirect('odds')->with('msg','Odds data  updated');
    }

}
