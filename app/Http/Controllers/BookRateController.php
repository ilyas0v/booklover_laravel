<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\BookRate;

class BookRateController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }

  public function rate(Request $request, $book_id){
    $user_id = Auth::user()->id;
    $point = $request->point;

    if(count(BookRate::where('user_id',$user_id)->where('book_id',$book_id)->get())===0){
      $br = new BookRate();
      $br->user_id = $user_id;
      $br->book_id = $book_id;
      $br->point = $point;
      $br->save();
      return $point;
    }else{
      return 'rated';
    }
  }
}
