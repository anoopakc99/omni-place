<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;



class AdminShowController extends Controller
{
    public function show()
    {
         $count = Admin::count();
        // $cnt = Admin::all()->count();
        // dd($cnt);
        return view('dashboard',compact('count'));
    }


}
