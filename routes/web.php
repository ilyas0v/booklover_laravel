<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
})->name('main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/book' , function(){
  return view('book');
})->name('book');
Route::get('/search', function () {
    return view('search');
})->name('search');
Route::get('/author', function () {
    return view('author');
})->name('author');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/author/{author_name}', 'AuthorsController@select');
Route::get('/search/genre/{genre}','BookGenreController@genre');
Route::any('/search/isbn/{isbn}','BookController@isbn');
Route::any('/search/book/{book}','BookController@book');
Route::any('/search/year/{year}','BookController@year');
Route::any('/search/author/{author}','BookController@author');
Route::any('/search/publisher/{publisher}','BookController@publisher');
Route::get('/search/lang/{language}','BookController@lang');
Route::get('/book/{id}','BookController@id');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
