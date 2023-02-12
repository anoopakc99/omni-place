<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;
    protected $table = "Teams";

    protected $fillable = [
        'team_game_identifier',
        'team_name',
        'color_code_1',
        'color_code_2',
        'short_code',
        'team_group_name',
        'team_logo',
        'team_short_name',
        'team_url',
        'is_synced',
        'standing_summary',
        'team_record',
       
    ];
}
