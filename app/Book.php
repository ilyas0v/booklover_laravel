<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
    public function genres(){
        return $this->belongsToMany('App\Genre');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function users(){
        return $this->belongsToMany('App\User','book_user');
    }
}
