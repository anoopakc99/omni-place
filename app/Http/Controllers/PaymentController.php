<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Doctrine\DBAL\Schema\View;
use Livewire\Macros\ViewMacros;

class PaymentController extends Controller
{
    public function index()
    {
        $result['data']=Payment::all();
        return view ('payment',$result);
    }
    public function show()
    {
        return view('paymentadd');
        
    }

    public function paginate()
    {
        $data = Payment::paginate(10);
        return view('payment',compact('data'));
    }

    public function edit($id)
    {
        $list = Payment::find($id);
        return view('paymentedit', ['list' => $list]);
    }
    public function update($id, Request $request){

        $list = $request->all();
        Payment::find($id)->update($list);

        return redirect('payment')->with('msg','Payment data  updated');
    }
}
