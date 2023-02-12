<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivePlays extends Model
{
    use HasFactory;
    protected $table = "ActivePlays";
    protected $fillable = [
       'espn_game_id',
       'game_id',
       'name',
       'budget',
       'entries',
       'home_team',
       'opponent_team',
       'bet_window_start',
       'bet_window_end',
       'active',
       'is_popular',
       'put_value',
       'to_win',
      
   ];

}
