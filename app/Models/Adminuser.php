<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;



class Adminuser extends Authenticatable


{
    // use HasFactory;
    protected $table = "admin";
    protected $guard = 'admin';

    protected $fillable = [
        'full_name',
        'username',
        'email',
        'phone',
        'otp',
        'password',
       
        'role',

    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
