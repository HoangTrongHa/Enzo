<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = "history";
    protected $fillable=["customerid","maxtotal","Deducted","receive","payment_term","status"];

    public function Customer(){
        return $this->belongsTo(Customer::class,"customerid");
    }
}
