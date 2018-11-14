@extends('layouts.layout')
@section('content')
    <div class="container" style="margin-top: 70px; margin-bottom: 50px; background:#ddd; ">
        <div class="row">
            <div class="col col-md-3 col-sm-3 col-xs-6">
                <img src="./images/geisha.jpg" class="img-fluid" style="display:block;width:80%;margin:auto; vertical-align: center"/>
            </div>
            <div class="col col-md-8 col-sm-8" style="margin: auto;">
                <h1 class="author-main">Arthur Golden</h1>
                <hr style="border: 0.5px solid #fbba42" >
                <b style="display: inline-block; float: left; margin: 0 5px">Born:</b> <p>Berlin, Germany. 12-Dec-1965</p>
                <b style="display: inline-block; float: left; margin: 0 5px">Genre:</b> <p><a href="{{route('search',['genre'=>'Graphic novel'])}}">Graphic novel</a>,<a href="{{route('search',['genre'=>'Romance'])}}">Romance</a>,<a href="{{route('search',['genre'=>'Comics'])}}">Comics</a></p>
                <p class="author-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col col-md-12 col-sm-12">
                <h3 style="margin:auto; margin-left: 5px">Published Books</h3>
                <hr style="border:0.5px solid #fbba42; margin:0 5px"/>
            </div>
            @for($i=0;$i<12;$i++)
                @include("partials.book-box")
            @endfor
        </div>
    </div>
    @endsection