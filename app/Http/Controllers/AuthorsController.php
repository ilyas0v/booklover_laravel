<?php

namespace App\Http\Controllers;

use App\Authors;
use App\AuthorsGenre;
use App\Book;
use App\BookGenre;
use App\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function select($author)
    {
        $author = Authors::where('full_name',$author)->get()[0];
        $author_genres = AuthorsGenre::select('genre_id')->where('author_id' , $author->id)->get();
        $genre_id = [];
        $book_ids = [];
        foreach ($author_genres as $ids)
        {
            $genre_id[]=$ids->genre_id;
        }
        $books = Book::where('author',$author->full_name)->get();


        $genres  = Genre::whereIn('id' , $genre_id)->get();
        //var_dump($book_genre);exit;
        return view('author')->withAuthor($author)->withGenres($genres)->withBooks($books);
        //return json_decode(DB::table('authors')->where('full_name',$author)->get(),true);
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
     * @param  \App\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function show(Authors $authors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function edit(Authors $authors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Authors $authors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Authors  $authors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Authors $authors)
    {
        //
    }
}
