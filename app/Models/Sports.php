<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sports extends Model
{
    use HasFactory;

    protected $table = "Sports";

    protected $fillable = [
        'key',
        'group',
        'title',
        'description',
        'active',
        'has_outrights',
       
    ];
}
