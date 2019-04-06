<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    // public function country(){
    //     return $this->hasOne(Country::class, User::class);
    // }
}
