@extends('layouts.layout')
@section('content')
    @php
        $_url="";
        if(isset($_GET['searchby'])&&$_GET['searchby']!="Book name")
            $_url=strtolower($_GET['searchby']);
        else
            $_url="book";
    @endphp
    <div class="container-fluid" style="margin-top:70px;">
        <div class="row">
            <div class="col col-md-6 col-md-offset-3">

                <form id="formSearchBar" class="search-form-simple" action="{{url('search'."/".$_url)}}" method="post">
                    <label class="search-icon">
                        <input onclick="searchClick()" style="display:none" type="submit">
                        <span style="color:grey" class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </label>
                    <input type="text" id="keyword" name="keyword" style="height: 50px;font-size:25px; outline: none; border:none; box-shadow: none; -webkit-box-shadow: none;" placeholder="Search on BookLover" class="form-control" value="<?php if(isset($_GET['keyword'])) echo $_GET['keyword']?>">
                </form>

            </div>
            <div class="col col-md-12 col-xs-12" style="border-bottom: 1px solid lightgrey; border-top:1px solid lightgrey; padding: 10px">
                <div class="dropdown col-md-offset-1" style="float: left; margin-right: 20px">
                    <button class="btn btn-secondary dropdown-toggle" style="background:none; outline:none; box-shadow: none" type="button" id="SearchByButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php if(isset($_GET['searchby'])) echo $_GET['searchby']; else echo 'Book name'?>&#9660;
                    </button>
                    <div class="dropdown-menu" aria-labelledby="SearchByButton">
                        <form action="{{route('search')}}" method="get">
                            <input type="submit" name="searchby" value="Book name" class="genre_style"/></br>
                            <input type="submit" name="searchby" value="Author" class="genre_style"/></br>
                            <input type="submit" name="searchby" value="ISBN" class="genre_style"/></br>
                            <input type="submit" name="searchby" value="Year" class="genre_style"/></br>
                            <input type="submit" name="searchby" value="Publisher" class="genre_style"/></br>
                        </form>

                    </div>
                </div>
                <div class="dropdown" style="float: left; margin-right: 20px">
                    <button class="btn btn-secondary dropdown-toggle" style="background:none; outline:none; box-shadow: none" type="button" id="GenreButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php if(isset($_GET['genre'])) echo $_GET['genre']; else echo 'Genre'?> &#9660;
                    </button>
                    <div class="dropdown-menu" style="max-width: 350px" aria-labelledby="GenreButton">
                            <?php
                                $_genres = app('\App\Http\Controllers\GenreController')->index();
                                $_genres = json_decode($_genres,true);
                                foreach ($_genres as $genre)
                            {?>

                            <a href="{{url("search/genre/{$genre['name']}")}}" class="genre_style_a" style=""/>{{$genre['name'] }}</a></br>
                            <?php }?>

                    </div>
                </div>
                <div class="dropdown" style="float: left; margin-right: 20px">
                    <button class="btn btn-secondary dropdown-toggle" style="background:none; outline:none; box-shadow: none" type="button" id="LanguageButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php if(isset($_GET['lang'])) echo $_GET['lang']; else echo 'Language'?> &#9660;
                    </button>
                    <div class="dropdown-menu" aria-labelledby="LanguageButton">

                            <a href="{{url('search/lang/English')}}" class="genre_style_a"/>English</a></br>
                            <a href="{{url('search/lang/Azerbaijani')}}" class="genre_style_a"/>Azerbaijani</a></br>
                            <a href="{{url('search/lang/Russian')}}" class="genre_style_a"/>Russian</a></br>
                            <a href="{{url('search/lang/Turkish')}}" class="genre_style_a"/>Turkish</a></br>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container discover-books">
        <div class="row">
                @if(isset($books))
                @foreach ($books as $book_)
                <div class="col col-md-2 col-sm-6 col-xs-12 col-sm-6 col-xs-12">
                    <a href="{{url('book/'.$book_->id)}}">
                        <div class="box">
                            <p class="price">$10</p>
                            <div class="img-wrapper"><img src="{{asset('storage/'.$book_->image)}}" alt=""></div>
                            <p class="book-title"><b>{{$book_->name}}</b></p>
                            <a href="{{url("author/{$book_->author}")}}" class="book-author">{{$book_->author}}</a>
                            <hr class="short-line">

                                <a href="{{route('search',['genre'=>$book_->genre->name])}}" class="book-genre">{{$book_->genre->name}}</a>

                            <hr class="long-line">
                            <span style="color:grey" class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span><b>4.5</b></span>
                        </div>
                    </a>
                </div>
             @endforeach
                @endif
        </div>
    </div>
    <script>
        function searchClick() {
            document.getElementById('formSearchBar').onsubmit = function () {
                return false;
            }
            var key=document.getElementById('keyword').value;
            var full_url=document.getElementById('formSearchBar').action+"/"+key;
            window.location=full_url;
        }
    </script>
    @endsection