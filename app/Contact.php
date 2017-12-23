<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['message'];
    protected $hidden = [
        'created_at', 'updated_at','is_active','is_read','user_ip'
    ];


}
