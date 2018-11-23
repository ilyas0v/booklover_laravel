<?php

namespace App\Http\Controllers;

use App\Book;
use App\BookGenre;
use App\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookGenreController extends Controller
{
    public function select($id)
    {
       $genres = DB::table('book_genres')->where('book_id',$id)->get();
       return $genres;
    }
    public function genre($genre)
    {
        $genres = Genre::where('name',$genre)->get()[0];
        $book_genres=BookGenre::where('genre_id',$genres->id)->get();
        $genre_ids = [];
        foreach ($book_genres as $gn)
        {
            $genre_ids[]=$gn->book_id;
        }
        $books = Book::whereIn('id' , $genre_ids)->get();
        //var_dump($books);exit();
        return view('search')->withBooks($books)->withGenres($genres);
    }
}
