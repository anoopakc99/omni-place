<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentRequest;

class PaymentRequestController extends Controller
{
    public function index()
    {
        $result['data']=PaymentRequest::all();
        return view ('paymentrequest',$result);
    }

    public function paginate()
    {
        $data = PaymentRequest::paginate(10);
        return view('paymentrequest',compact('data'));
    }

    public function edit($id)
    {
        $list = PaymentRequest::find($id);
        return view('paymentrequestedit', ['list' => $list]);
    }
    public function update($id, Request $request){

        $list = $request->all();
        PaymentRequest::find($id)->update($list);

        return redirect('paymentrequest')->with('msg','Payment Request data  updated');
    }
}
