<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable; //エイリアスを生成
use App\Notifications\CustomVerifyEmail;
use App\Notifications\CustomResetPassword;
use Overtrue\LaravelFavorite\Traits\Favoriter;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, Favoriter;                                              //Notifiable通知

    public function sendEmailVerificationNotification()
     {
         $this->notify(new CustomVerifyEmail());
     }
     public function sendPasswordResetNotification($token) {
         $this->notify(new CustomResetPassword($token));
     }


    protected $fillable = [
        'name', 'email', 'password', 'postal_code', 'address', 'phone'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}