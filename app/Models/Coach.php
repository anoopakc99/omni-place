<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
    protected $table = "Coach";
    protected $fillable = [
       'coach_name',
       'team_id',
       'game_id',


   ];
}
