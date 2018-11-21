<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookGenreController extends Controller
{
    public function select($id)
    {
       $genres = DB::table('book_genres')->where('book_id',$id)->get();
       return $genres;
    }
}
