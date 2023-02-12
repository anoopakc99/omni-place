<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preferences extends Model
{
    use HasFactory;
    protected $table = "Preferences";

    protected $fillable = [
        'user_id',
        'game_identifier',
        'favourite_teams',

    ];
}
