<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveEntries extends Model
{
    use HasFactory;
    protected $table = "ActiveEntries";
    protected $fillable = [
       'bet_id',
       'user_id',
       'active_play_id',
       'bet_value',
       'bet_type',
       'players',
       'is_completed',
       'verified',
       'meta',
     

   ];
}
