@extends('layouts.layout')
@section('content')
    <div class="container-fluid" style="margin-top:70px;">
        <div class="row">
            <div class="col col-md-6 col-md-offset-3">
                <form class="search-form-simple" action="" method="GET">
                    <label class="search-icon">
                        <input style="display:none" type="submit">
                        <span  style="color:grey" class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </label>
                    <input type="text" name="keyword" style="height: 50px;font-size:25px; outline: none; border:none; box-shadow: none; -webkit-box-shadow: none;" placeholder="Search on BookLover" class="form-control" value="<?php if(isset($_GET['keyword'])) echo $_GET['keyword']?>">
                </form>
            </div>
            <div class="col col-md-12 col-xs-12" style="border-bottom: 1px solid lightgrey; border-top:1px solid lightgrey; padding: 10px">
                <div class="dropdown col-md-offset-1" style="float: left; margin-right: 20px">
                    <button class="btn btn-secondary dropdown-toggle" style="background:none; outline:none; box-shadow: none" type="button" id="SearchByButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php if(isset($_GET['searchby'])) echo $_GET['searchby']; else echo 'Book name'?>&#9660;
                    </button>
                    <div class="dropdown-menu" aria-labelledby="SearchByButton">
                        <form action="{{'search'}}" method="get">
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
                        <form action="{{'search'}}" method="get">
                            <?php
                                $genres = app('\App\Http\Controllers\GenreController')->index();
                                $genres = json_decode($genres,true);
                                foreach ($genres as $genre)
                            {?>
                            <input type="submit" name="genre" value="{{$genre['name'] }}" class="genre_style"/></br>
                            <?php }?>
                        </form>
                    </div>
                </div>
                <div class="dropdown" style="float: left; margin-right: 20px">
                    <button class="btn btn-secondary dropdown-toggle" style="background:none; outline:none; box-shadow: none" type="button" id="LanguageButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php if(isset($_GET['lang'])) echo $_GET['lang']; else echo 'Language'?> &#9660;
                    </button>
                    <div class="dropdown-menu" aria-labelledby="LanguageButton">
                        <form action="{{'search'}}" method="get">
                            <input type="submit"name="lang" value="English" class="genre_style"/></br>
                            <input type="submit"name="lang" value="Azerbaijani" class="genre_style"/></br>
                            <input type="submit"name="lang" value="Russian" class="genre_style"/></br>
                            <input type="submit"name="lang" value="Turkish" class="genre_style"/></br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container discover-books">
        <div class="row">
            <?php
                if(isset($_GET['keyword']))
                {
                    $books = app('\App\Http\Controllers\BookController')->select($_GET['keyword']);
                    $books = json_decode($books,true);

                    foreach ($books as $book)
                    {
                        $bookgenre = app('\App\Http\Controllers\BookGenreController')->select($book['id']);
                        $bookgenre = json_decode($bookgenre,true);
                        $genre_id = $bookgenre[0]["genre_id"];

                        $selected_genre = app('\App\Http\Controllers\GenreController')->select($genre_id);
                        $selected_genre = json_decode($selected_genre,true);
                        ?>
                        <div class="col col-md-2 col-sm-6 col-xs-12 col-sm-6 col-xs-12">
                             <a href="{{route('book')}}">
                        <div class="box">
                            <p class="price">$10</p>
                            <div class="img-wrapper"><img src="{{asset('storage/'.$book['image'])}}" alt=""></div>
                            <p class="book-title"><b>{{$book['name']}}</b></p>
                            <a href="{{route('author')}}" class="book-author">{{$book['author']}}</a>
                            <hr class="short-line">
                            <a href="{{route('search',['genre'=>$selected_genre[0]['name']])}}" class="book-genre">{{$selected_genre[0]['name']}}</a>
                            <hr class="long-line">
                            <span style="color:grey" class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span><b>4.5</b></span>
                        </div>
                    </a>
                </div>
                    <?php
                    }
                }
                else{?>
                    @for($i=0;$i<12;$i++)
                        @include("partials.book-box")
                    @endfor
                <?php }?>
        </div>
    </div>

    @endsection