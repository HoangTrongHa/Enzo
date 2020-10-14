<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class upload extends Model
{
    protected $table = 'upload';
    protected $fillable = ["avatar", "Front", "idnhanhvien", "Back", "manypicture", "luong", "Biasotietkiem", "manypicture"];

    public function Customer(){
        return $this->belongsTo("app\Customer");
    }
}
