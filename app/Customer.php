<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use Notifiable;

    protected $guard = 'writer';

    protected $fillable = [
        'customer_name', 'email', 'password',"phone_number","address","avatar",
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
