<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressBook extends Model
{
    protected $table = 'addressbook';
    protected $hidden = [
        'created_at', 'updated_at','is_active',
    ];

}
