<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;
    protected $fillable = [
        'name', 'email', 'password', 'contact'
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    

    public function cart_items(){
        return $this->hasMany(Cart::class,'user_id');
    }

    public function user_reviews(){
        return $this->hasMany(Review::class, 'user_id');
    }


}
