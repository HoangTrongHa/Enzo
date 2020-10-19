<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class upload extends Model
{
    protected $table = 'upload';
    protected $fillable = ["avatar", "Front", "idnhanhvien", "Back", "luong", "Biasotietkiem", "manypicture","customer_id"];

    public function AvartaCustomer(){
        return $this->belongsTo("app\Customer","customer_id");
    }
}
