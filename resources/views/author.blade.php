@extends('layouts.layout')
@section('content')
    <?php $i=0?>
    <div class="container" style="margin-top: 70px; margin-bottom: 50px; background:#ddd; ">
        <div class="row">
            <div class="col col-md-3 col-sm-3 col-xs-6">
                <img src="{{asset("storage/".$author->image)}}" class="img-fluid" style="display:block;width:80%;margin:auto; vertical-align: center"/>
            </div>
            <div class="col col-md-8 col-sm-8" style="margin: auto;">
                <h1 class="author-main"><?= $author->full_name ?></h1>
                <hr style="border: 0.5px solid #fbba42" >
                <b style="display: inline-block; float: left; margin: 0 5px">Born:</b> <p><?php echo $author->birth_place.", ".$author->date_of_birth; if($author->date_of_death!=null) echo "-".$author->date_of_death;?></p>
                <b style="display: inline-block; float: left; margin: 0 5px">Genre:</b> <p>
                    @foreach($genres as $genre)


                            <a class="badge" href="{{url('search/genre/'.$genre->name)}}">{{$genre->name}}</a>
                    @endforeach
                </p>
                <p class="author-description">
                    <?= $author->info?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col col-md-12 col-sm-12">
                <h3 style="margin:auto; margin-left: 5px">Published Books</h3>
                <hr style="border:0.5px solid #fbba42; margin:0 5px"/>
                @foreach($books as $book)
                    <div class="col col-md-2 col-sm-6 col-xs-12 col-sm-6 col-xs-12">
                        <a href="{{url('book/'.$book->id)}}">
                            <div class="box">
                                <p class="price">$10</p>
                                <div class="img-wrapper"><img src="{{asset('storage/'.$book->image)}}" alt=""></div>
                                <p class="book-title"><b>{{$book->name}}</b></p>
                                <a href="{{url("author/{$book->author}")}}" class="book-author">{{$book->author}}</a>
                                <hr class="short-line">

                                <a href="{{route('search',['genre'=>$book->genre->name])}}" class="book-genre">{{$book->genre->name}}</a>
                                <hr class="long-line">
                                <span style="color:grey" class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                <span><b>4.5</b></span>
                            </div>
                        </a>
                    </div>
                    @endforeach
            </div>

        </div>
    </div>

    @endsection