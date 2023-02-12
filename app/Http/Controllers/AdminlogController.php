<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\Adminuser;

class AdminlogController extends Controller
{
    public function log(Request $request)
    {
      $request->validate([
        'email' => 'required',
        'password' => 'required'
      ]);
      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
        $user = Auth::guard('admin');
        $request->Session()->put('user', $user);
        return redirect('dashboard');
      }
      return redirect('/login')->with('msg', 'Invalid username/password');
    }
}


// public function log(Request $request) {
//     // Validate the form data
//     $this->validate($request, [
//         'email' => 'required|email',
//         'passkey' => 'required',
//     ]);
//     // Attempt to log the user in
//     // Passwordnya pake bcrypt
//     if (Auth::guard('admin')->attempt(['email' => $request->email, 'passkey' => $request->passkey])) {
//         // if successful, then redirect to their intended location
//         return redirect()->intended('/dashboard');
//     } else if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
//         return redirect()->intended('/login');
//     }
// }
// {

    // if(Auth::guard('admin')->attempt($request->only('email','passkey'),$request->filled('remember'))){
    //     //Authentication passed...
    //     return redirect()
    //         ->intended(url('/dashboard'))
    //         ->with('status','You are Logged in as pharmacist!');
    // }
    // if(Auth::guard('web')->attempt($request->only('email','passkey'),$request->filled('remember'))){
    //     //Authentication passed...
    //     return redirect()
    //         ->intended(url('/login'))
    //         ->with('status','You are Logged in as user!');
    // }

    // return $this->loginFailed();


}
}
