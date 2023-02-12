<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveBets extends Model
{
    use HasFactory;
    protected $table = "ActiveBets";
    protected $fillable = [
       'player_limit',
       'unique_game_id',
       'active_play_id',
       'active',
       'is_completed',
       'is_deleted',
      
   ];
}
