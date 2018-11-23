<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
    public function genre()
    {
        return $this->belongsTo('App\Genre','genre_id');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function users(){
        return $this->belongsToMany('App\User','book_user');
    }
}
