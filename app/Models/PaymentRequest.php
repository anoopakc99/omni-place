<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentRequest extends Model
{
    use HasFactory;
    protected $table = "Payment_requests";

    protected $fillable = [
        'user_id',
        'charge_intent',
        'charge_amount',
        'charge_method',
        'transaction_id',
        'charge_response',
        'charge_request',
        'charge_state',
        'quantity',

    ];
}
