<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{   use Notifiable;
    protected $table =  "customer";
    protected $fillable = ["tenchuhan","tenphienam","male","sinhnhat","thanhphangiadinh","diachinha","sodienthoaicodinh","sodienthoaididong",
        "password","email","linkweb","truso","sdtcty","songuoilam","chucvu","namcongtac","thoigianlamviec","thoigiannghi","nguoibaolanh",
        "nguoibaolanh","diachinguoibaolanh","sdtnguoibaolanh","static","maxtotal","borrowing","receive","payment_term","checklogin","loancus"];
    protected $hidden =[
        "password",'remember_token',
    ];
    public function getStatic()
    {
        return $this->static;
    }
    public function upload()
    {
        return $this->hasMany(upload::class, 'customerid');
    }
    public function history()
    {
        return $this->hasMany(History::class, 'customerid');
    }

}
