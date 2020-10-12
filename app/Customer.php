<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{   use Notifiable;
    protected $table =  "customer";
    protected $fillable = ["tenchuhan","tenphienam","male","sinhnhat","thanhphangiadinh","diachinha","sodienthoaicodinh","sodienthoaididong",
        "matkhau","email","linkweb","truso","sdtcty","songuoilam","chucvu","namcongtac","thoigianlamviec","thoigiannghi","nguoibaolanh",
        "nguoibaolanh","diachinguoibaolanh","sdtnguoibaolanh"];

    protected $hidden =[
      "matkhau",'remember_token',
    ];
}
