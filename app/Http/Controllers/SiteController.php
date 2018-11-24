<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class SiteController extends Controller
{
  
    public function index()
    {
      $books = Book::orderBy('id','desc')->get();
      return view('main')->withBooks($books);
    }

}
