<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{   use Notifiable;
    protected $table =  "customer";
    protected $fillable = ["tenchuhan","tenphienam","male","sinhnhat","thanhphangiadinh","diachinha","sodienthoaicodinh","sodienthoaididong",
        "password","email","linkweb","truso","sdtcty","songuoilam","chucvu","namcongtac","thoigianlamviec","thoigiannghi","nguoibaolanh",
        "nguoibaolanh","diachinguoibaolanh","sdtnguoibaolanh","static"];

    protected $hidden =[
      "password",'remember_token',
    ];

    public function upload(){
        return $this->belongsTo("app\upload");
    }
}
