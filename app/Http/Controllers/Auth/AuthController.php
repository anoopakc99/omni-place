<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Session;
use App\Models\User;
use App\Models\Admin;
use App\Models\Athletes;
use App\Models\Games;
use App\Models\Sports;
use App\Models\Teams;
use App\Models\Adminuser;
use Illuminate\Support\Facades\DB;
use Hash;

class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    // public function __construct()
    // {
       // $this->middleware('auth')->except('logout');
    //     $this->middleware('guest:admin')->except('logout');
    //}

    public function index()
    {
        return view('auth.login');
    }


    // public function show()
    // {
    //     $admins = Adminuser::all();
    //     return response()->json(['admins'=>$admins],200);
    // }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.registration');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function postLogin(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $credentials = $request->only('email', 'password');
    //     if (Auth::attempt($credentials)) {
    //         return redirect()->intended('dashboard')
    //                     ->withSuccess('You have Successfully loggedin');
    //     }

    //     return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    // }

    // public function postLogin(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();

    //         return redirect()->intended('dashboard');
    //     }

    //     return back()->withErrors([
    //         'email' => 'Your email and password do not match.
    //          please try again',

    //     ])->onlyInput('email');
    // }
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (\Auth::guard('web')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->intended('dashboard');
        }

        return back()->withInput($request->only('email', 'remember'));
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|min:6',

        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if (Auth::check()) {
            $count = Admin::count();
            $athelet = Athletes::count();
            $games = Games::count();
            $sport = Sports::count();
            $team = Teams::count();
            return view('dashboard', compact('count', 'athelet', 'games', 'sport','team'));
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
        return User::create([
            'full_name' => $data['full_name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password'])
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function logout() {
    //     Session::flush();
    //     Auth::logout();

    //     return Redirect('login');
    // }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
    public function showMap(){
        $count = ['Shirts', 'T-Shirt', 'Pants', 'Coat', 'Kurta', 'Pajama'];
        $games = ['10', '5', '100', '90', '50', '30'];
        return view('dashboard',['count' => $count, 'games' => $games]);
    }


}
