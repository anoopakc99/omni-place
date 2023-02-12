<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;
use App\Models\Admin;

class GraphController extends Controller
{
    public function showMap(){
         $count = ['count', 'games', 'Pants', 'Coat', 'Kurta', 'Pajama'];
        $games = ['10', '5', '100', '90', '50', '30'];
        return view('showMap',['count' => $count, 'games' => $games]);
    }
}
