<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review';
    protected $fillable = ['rating','description'];
    protected $hidden = [ 'created_at', 'updated_at', 'is_active'];
   
   
   
    // public function name()
    // {
    //     return $this->belongsTo(User::class, 'id');
    // }


    public function users()
    {
        return $this->belongsTo(User::class, 'id');
    }  



}
 