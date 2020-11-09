<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{   use Notifiable;
    protected $table =  "customer";
    protected $fillable = ["kanji_name","name_transliteration","male","birthday","family_structure","address","landline_number","phone_number",
        "password","email","linkweb","company","company_phone","num_people","position","work_year","work_time","work_break","protector",
        "guardian_address","phone_number_guard","static","maxtotal","borrowing","receive","payment_term","checklogin","loancus",
        "loancustomer","loanrefund","account_number","account_holder","account_type","name-of-financial-institution","name-bank"];
    protected $hidden =[
        "password",'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
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
