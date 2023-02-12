<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $result['data']=Admin::all();
        // $count = Admin::count();

        return view ('sidebar.admin',$result,compact('count'));
    }

    public function show()
    {
        // $dd = DB::table('Admin')->count();

        return view ('adminadd');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required',
            'username' => 'required|',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'otp' => 'required|'

        ]);
       $category = new Admin();

       $category->full_name = $request->input('full_name');
       $category->username = $request->input('username');
       $category->email = $request->input('email');
       $category->phone = $request->input('phone');
       $category->otp = $request->input('otp');
       $category->save();

       return redirect('admin')->with('msg',"User Added Sucessfully");

    }

    public function edit($id)
    {
        $list = Admin::find($id);
        return view('adminedit', ['list' => $list]);
    }

    public function update($id, Request $request){

        $list = $request->all();
        Admin::find($id)->update($list);

        return redirect('admin')->with('msg','User updated Sucessfully');
    }

    public function paginate()
    {
        $data = Admin::paginate(5);
        return view('admin',compact('data'));
    }

    public function search(Request $request)
    {
        $output = "";
        $athletes = Admin::where('full_name','like','%'.$request->search.'%')->orWhere('id','like','%'.$request->search.'%')->get();
        foreach($athletes as $athletes)
        {
            $output.=
            '<tr>
            <td> '.$athletes->full_name.' </td>
            <td> '.$athletes->username.' </td>
            <td> '.$athletes->email.' </td>
            <td> '.$athletes->phone.' </td>
            <td> '.$athletes->otp.' </td>

            </tr>';
        }
        return response($output);


    }
}
