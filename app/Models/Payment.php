<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = "Payments";

    protected $fillable = [
        'user_id',
        'charge_amount',
        'charge_method',
        'transaction_id',
        'charge_valid',
        'charge_response',
        'charge_state',
        'quantity',

    ];
}
