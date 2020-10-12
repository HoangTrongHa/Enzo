<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Arr;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', "avatar"
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getImage()
    {
        if (is_null($this->__get("image"))) {
            return asset("public/image/avatar-1.png");
        } else {
            return asset($this->__get("image"));

        }
    }
    public const ADMIN_ROLE = 1;
    public const USER_ROLE =0;
//    protected $type= [
//        0 =>[
//            'name'=>"Close",
//            'class'=>'badge badge-danger badge-pill'
//        ],
//       1 =>[
//           "name" => "Active",
//            'class'=>'badge badge-primary badge-pill'
//       ]
//    ];
//    public function getRole(){
//        return Arr::get($this->type,$this->role);
//    }

}
