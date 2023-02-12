<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athletes extends Model
{
    use HasFactory;
    protected $table = "Athletes";

    protected $fillable = [
        'shortName',
        'name',
        'href',
        'uid',
        'guid',
        'id',
        'height',
        'weight',
        'age',
        'position',
        'jersey',
        'salary',
        'birthDate',
        'headshot',
        'lastName',
        'college',
        'birthPlace',
        'team_id',
        'game_id',
       
    ];
}
