<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveValue extends Model
{
    use HasFactory;
    protected $table = "ActivePlayerValues";
    protected $fillable = [
       'active_play_id',
       'team_id',
       'player_id',
       'player_value',
       'player_name',


   ];
}
