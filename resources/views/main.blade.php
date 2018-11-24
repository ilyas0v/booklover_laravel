@extends('layouts.layout')

@section('content')
<div class="container-fluid with-background">
  <div class="transparent-layer">
    <h1 class="page-main-title">Discover your favorite books</h1>
  </div>
</div>


<div class="container categories-with-nav">
  <ul class="nav nav-pills">
    <li role="presentation" class="active"><a href="#">Latest books</a></li>
    <li role="presentation"><a href="#">Most read</a></li>
    <li role="presentation"><a href="#">Most liked</a></li>
  </ul>
</div>

<div class="container discover-books">
  <div class="row">
    @foreach($books as $book)
      <div class="col col-md-2 col-sm-6 col-xs-12 col-sm-6 col-xs-12">
        <a href="{{route('book_page',$book->id)}}">
          <div class="box">
            <p class="price">$10</p>
            <div class="img-wrapper"><img src="{{asset('storage\\'.$book->image)}}" alt=""></div>
            <p class="book-title"><b>{{$book->name}}</b></p>
            <a href="{{route('author_page',$book->author)}}" class="book-author">{{$book->author}}</a>
            <hr class="short-line">
            <a href="{{route('search_for_genre',$book->genre->name)}}" class="book-genre">{{$book->genre->name}}</a>
            <hr class="long-line">
            <p>
              <span style="color:grey" class="glyphicon glyphicon-star" aria-hidden="true"></span>
              <span><b>{{$book->avg_rate()}}</b></span>
            </p>
          </div>
        </a>
      </div>
    @endforeach
  </div>
</div>
@endsection
