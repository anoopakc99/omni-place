<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adminuser;
use Auth;

class AdminloginController extends Controller
{






  //   public function adminlogin(Request $request)
  // {
  //   $request->validate([
  //     'email'=>'required',
  //     'password' =>'required'
  //   ]);
  //   if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
  //   {
  //     $user=Auth::user();
  //     $request->Session()->put('user',$user);
  //     return redirect('dashboard');
  //   }
  //   return redirect('/login')->with('msg','Invalid username/password');
  // }
  
  
  //  public function logout(Request $request)
  //   {
  //       $request->Session()->forget('user');
  //       return redirect('/login');
  //   }
}