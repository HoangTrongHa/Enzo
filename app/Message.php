<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = "messages";
    protected $fillable = ["customer_id", "message"];

    public function user()
    {
        return $this->belongsTo(Customer::class);
    }
}
