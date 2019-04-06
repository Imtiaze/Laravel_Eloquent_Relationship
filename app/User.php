<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    
    public function passport(){
        return $this->hasOne(Passport::class);
    }

    public function phones() {
        return $this->hasMany(Phone::class);
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }
    
    public function posts(){
        return $this->hasMany(Post::class);
    }
   
}
