<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class upload extends Model
{
    protected $table = 'upload';
    protected $fillable = ["avatar", "Front", "idnhanhvien", "Back", "luong", "Biasotietkiem", "manypicture","customerid"];

    public function AvartaCustomer(){
        return $this->belongsTo(Customer::class,"customerid");
    }
}
