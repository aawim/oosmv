<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'replies';
  
    protected $hidden = [ 'created_at', 'updated_at', 'is_active'];
}
