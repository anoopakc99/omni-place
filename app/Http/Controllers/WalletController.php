<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wallet;

class WalletController extends Controller
{
    public function index()
    {
        $result['data']=Wallet::all();
        return view ('wallet',$result);
    }

    public function show()
    {
        return view('walletadd');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'balance' => 'required|',
            'verified' => 'required|'


        ]);
       $category = new Wallet();

       $category->user_id = $request->post('user_id');
       $category->balance = $request->post('balance');
       $category->verified = $request->post('verified');
       $category->save();

       return redirect('wallet')->with('msg',"Wallet Added Sucessfully");

    }

    public function paginate()
    {
        $data = Wallet::paginate(10);
        return view('wallet',compact('data'));
    }

    public function edit($id)
    {
        $list = Wallet::find($id);
        return view('walletedit', ['list' => $list]);
    }

    public function update($id, Request $request){

        $list = $request->all();
        Wallet::find($id)->update($list);

        return redirect('wallet')->with('msg','Wallet data  updated');
    }

}
