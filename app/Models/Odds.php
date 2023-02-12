<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odds extends Model
{
    use HasFactory;
    protected $table = "Odds";

    protected $fillable = [
        'api',
        'data_set',
        'last_sync_time',
        'api_url',
    ];
}
