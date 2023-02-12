<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sports;
use Illuminate\Support\Facades\DB;

class SportsController extends Controller
{
    public function index()
    {
        $result['data'] = Sports::all();
        return view('sports', $result);
    }

    public function show()
    {
        return view('sportadd');
    }

    public function data(Request $request)
    {
        $validated = $request->validate([
            'key' => 'required',
            'group' => 'required|',
            'title' => 'required|',
            'description' => 'required|',
            'has_outrights' => 'required|',
            'active' => 'required|'

        ]);
        $category = new Sports();

        $category->key = $request->input('key');
        $category->group = $request->input('group');
        $category->title = $request->input('title');
        $category->description = $request->input('description');
        $category->has_outrights = $request->input('has_outrights');
        $category->active = $request->input('active');
        $category->save();

        return redirect('sports')->with('msg', "Sports Added Sucessfully");
    }
    public function paginate()
    {
        $data = Sports::paginate(5);
        return view('sports', compact('data'));
    }

    public function edit($id)
    {
        $list = Sports::find($id);
        return view('sportsedit', ['list' => $list]);
    }
    public function store()
    {
        return view('sportsstore');
    }
    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'key' => 'required',
    //         'group' => 'required',
    //         'title' => 'required',
    //         'description' => 'required',
    //     ]);

    //     $input = $request->all();
    //     Sports::create($input);
    //     return redirect('sports');

    // }
    // public function update($id, Request $request){

    //     $list = $request->all();
    //     Sports::find($id)->update($list);
    //     $request->session()->flash('message','Post status updated');
    //     return redirect('sports');
    // }

    public function update($id, Request $request)

    {
        $sport = Sports::find($id);
        $sport->key = $request->post('key');
        $sport->group = $request->post('group');
        $sport->title = $request->post('title');
        $sport->description = $request->post('description');
        $sport->active = $request->post('active');
        $sport->has_outrights = $request->post('has_outrights');
        $sport->save();
        return redirect('sports')->with('msg', 'Sport data  updated');
    }

    public function search(Request $request)
    {
        $output = "";
        $athletes = Sports::where('title', 'like', '%' . $request->search . '%')->orWhere('id', 'like', '%' . $request->search . '%')->get();
        foreach ($athletes as $athletes) {
            $output .=
                '<tr>
            <td> ' . $athletes->key . ' </td>
            <td> ' . $athletes->group . ' </td>
            <td> ' . $athletes->title . ' </td>
            <td> ' . $athletes->description . ' </td>
            <td> ' . $athletes->has_outrights . ' </td>

            </tr>';
        }
        return response($output);
    }
}
