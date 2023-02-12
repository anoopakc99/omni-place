<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CashWallet;

class CashWalletController extends Controller
{
    public function index()
    {
        $result['data']=CashWallet::all();
        return view ('cashwallet',$result);
    }

    public function show()
    {
        return view('cashwalletadd');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required',
            'balance' => 'required|',
            'verified' => 'required|'

        ]);
       $category = new CashWallet();

       $category->user_id = $request->post('user_id');
       $category->balance = $request->post('balance');
       $category->verified = $request->post('verified');
       $category->save();

       return redirect('cashwallet')->with('msg',"CashWallet Added Sucessfully");

    }

    public function paginate()
    {
        $data = CashWallet::paginate(10);
        return view('cashwallet',compact('data'));
    }

    public function edit($id)
    {
        $list = CashWallet::find($id);
        return view('cashwalletedit', ['list' => $list]);
    }
    public function update($id, Request $request){

        $list = $request->all();
        CashWallet::find($id)->update($list);

        return redirect('cashwallet')->with('msg','CashWallet data  updated');
    }
}
