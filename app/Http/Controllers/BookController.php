<?php

namespace App\Http\Controllers;

use App\Book;
use App\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    public function select($name)
    {
       $books = DB::table('books')->where('name','like','%'.$name.'%')->get();
        return $books;
    }

    public function isbn($isbn)
    {
            $books = Book::where('isbn', $isbn)->get();
            return view('search')->withBooks($books);
    }
    public function lang($language)
    {
        $books = Book::where('language', $language)->get();
        return view('search')->withBooks($books);
    }
    public function book($name)
    {
        $books = Book::where('name','like', '%'.$name.'%')->get();
        //var_dump($books);exit();
        return view('search')->withBooks($books);
    }
    public function year($year)
    {
        $books = Book::where('year',$year)->get();
        return view('search')->withBooks($books);
    }
    public function publisher($name)
    {
        $books = Book::where('publisher','like', '%'.$name.'%')->get();
        return view('search')->withBooks($books);
    }
    public function author($name)
    {
        $books = Book::where('author','like', '%'.$name.'%')->get();
        return view('search')->withBooks($books);
    }
    public function id($id)
    {
        $books = Book::where('id',$id)->get()[0];
        return view('book')->withBooks($books);
    }
    public function genre($genre)
    {
        $genres = Genre::where('name',$genre)->get()[0];

        $books = Book::where('genre_id',$genres->id)->get();
        return view('search')->withBooks($books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Book $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $books)
    {
        //
    }
}
