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
                    <input type="text" name="search" style="height: 50px;font-size:25px; outline: none; border:none; box-shadow: none; -webkit-box-shadow: none;" placeholder="Search on BookLover" class="form-control" value="<?php if(isset($_GET['search'])) echo $_GET['search']?>">
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
                            <?php for($i=1;$i<=10;$i++){?>
                            <input type="submit"name="genre" value="Genre <?=$i?>" class="genre_style"/>
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
            @for($i=0;$i<12;$i++)
                @include("partials.book-box")
            @endfor
        </div>
    </div>
    @endsection