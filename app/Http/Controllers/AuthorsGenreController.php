<?php

namespace App\Http\Controllers;

use App\AuthorsGenre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AuthorsGenreController extends Controller
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
    public function select($id)
    {
        return json_decode(DB::table('authors_genres')->where('author_id',$id)->get(),true);
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
     * @param  \App\AuthorsGenre  $authorsGenre
     * @return \Illuminate\Http\Response
     */
    public function show(AuthorsGenre $authorsGenre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AuthorsGenre  $authorsGenre
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthorsGenre $authorsGenre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AuthorsGenre  $authorsGenre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuthorsGenre $authorsGenre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AuthorsGenre  $authorsGenre
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthorsGenre $authorsGenre)
    {
        //
    }
}
