<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

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

    public function user_rate(){
      if(Auth::user()){
        $bookrate = BookRate::where('book_id',$this->id)->where('user_id',Auth::user()->id)->get();
        if(count($bookrate) > 0)
          return $bookrate[0]->point;
        else
          return 0;
      }
      return 0;
    }

    public function rates(){
      return $this->hasMany('App\BookRate' , 'book_id');
    }

    public function avg_rate(){
      $sum=0;
      $n = count($this->rates);
      if($n===0) return 0;
      foreach($this->rates as $rate){
        $sum+=$rate->point;
      }
      return number_format($sum/$n , 1);
    }
}
