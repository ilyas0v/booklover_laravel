@extends('layouts.layout')
@section('title' , $books->name)
@section('meta')
<meta property="og:url"   content="{{url()->current()}}" />
  <meta property="og:type"  content="website" />
  <meta property="og:title" content="{{$books->name}}" />
  <meta property="og:description"   content="{{$books->description}}" />
  <meta property="og:image"  content="{{asset('storage/'.$books->image)}}" />
@endsection

@section('content')


<div class="container" style="background:#ddd;margin-top:70px;margin-bottom:50px;">
  @include('partials.book-read')
  <div class="row" >

    <div class="col col-md-3 col-sm-3">
      <img src="{{asset("storage/".$books->image)}}" class="img-fluid" style="display:block;width:90%;margin:auto">
      <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-success btn-lg" style="display: block;margin:auto;margin-top:10px;width:80%;">Read this book</a>
      <div class="rate-book">
        <p>Rate{{$books->user_rate() != 0 ? 'd' : ''}} this book</p>
        @if($books->user_rate() !== 0)
        <div style="width:100%;height:100%;position:absolute;z-index:1000"></div>
        @endif
        <span id="star-1" data-star="1" class="big-star unchecked-star glyphicon glyphicon-star" aria-hidden="true"></span>
        <span id="star-2" data-star="2" class="big-star unchecked-star glyphicon glyphicon-star" aria-hidden="true"></span>
        <span id="star-3" data-star="3" class="big-star unchecked-star glyphicon glyphicon-star" aria-hidden="true"></span>
        <span id="star-4" data-star="4" class="big-star unchecked-star glyphicon glyphicon-star" aria-hidden="true"></span>
        <span id="star-5" data-star="5" class="big-star unchecked-star glyphicon glyphicon-star" aria-hidden="true"></span>
      </div>
    </div>

    <div class="col col-md-5 col-sm-9">
      <h1 class="book-title">{{$books->name}}</h1>
      <h2 class="book-authors">By <a class="badge" style="font-size: 14px;" href="{{url('author/'.$books->author)}}">{{$books->author}}</a></h2>
      <div class="book-rating" style="position:relative;display: inline;">
        <div style="position:absolute;z-index:100;overflow: hidden;white-space: nowrap;width:{{$books->avg_rate()/5*100}}%">
          <span  class="checked-star glyphicon glyphicon-star" aria-hidden="true"></span>
          <span  class="checked-star glyphicon glyphicon-star" aria-hidden="true"></span>
          <span  class="checked-star glyphicon glyphicon-star" aria-hidden="true"></span>
          <span  class="checked-star glyphicon glyphicon-star" aria-hidden="true"></span>
          <span  class="checked-star glyphicon glyphicon-star" aria-hidden="true"></span>
        </div>
        <span  class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span  class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span  class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span  class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span  class="glyphicon glyphicon-star" aria-hidden="true"></span>
      </div>
      <div class="">
        <span>{{$books->avg_rate()}}</span>
        ·
        <span><a href="#">Rating details</a></span>
      </div>
      <p class="book-description">
        {{$books->description}}
      </p>
    </div>

    <div class="col col-md-4">
      <div class="share">
        <p>Share book on social media</p>
        <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" target="_blank" title="Share on Facebook"><img src="{{asset('images/fb.png')}}" height="40" alt=""></a>
        <a href="#" title="Share on Twitter"><img src="{{asset('images/tw.png')}}" height="40" alt=""></a>
        <a href="#" title="Share on Instagram"><img src="{{asset('images/ins.png')}}" height="40" alt=""></a>
      </div>
      <hr style="border-color: #ccc;">
      <h3>Recommended books</h3>
      <div class="row rec-books">
        <div class="col-md-4 col-sm-4 col-xs-4"><img src="{{asset('images/geisha.jpg')}}" style="width:100%;"></div>
        <div class="col-md-4 col-sm-4 col-xs-4"><img src="{{asset('images/geisha.jpg')}}" style="width:100%;"></div>
        <div class="col-md-4 col-sm-4 col-xs-4"><img src="{{asset('images/geisha.jpg')}}" style="width:100%;"></div>
        <div class="col-md-4 col-sm-4 col-xs-4"><img src="{{asset('images/geisha.jpg')}}" style="width:100%;"></div>
        <div class="col-md-4 col-sm-4 col-xs-4"><img src="{{asset('images/geisha.jpg')}}" style="width:100%;"></div>
        <div class="col-md-4 col-sm-4 col-xs-4"><img src="{{asset('images/geisha.jpg')}}" style="width:100%;"></div>
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col-md-12">
      <h3>Comments:</h3>
      <div class="panel panel-primary">
        <div class="panel-heading main_color">
          <img src="{{asset('images/profile.png')}}" class="user-image-thumb">
          <h3 class="panel-title">Name Surname</h3>
        </div>
        <div class="panel-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
        </div>
      </div>

      <div class="panel panel-primary">
        <div class="panel-heading main_color">
          <img src="{{asset('images/profile.png')}}" class="user-image-thumb">
          <h3 class="panel-title">Name Surname</h3>
        </div>
        <div class="panel-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
        </div>
      </div>

      <div class="panel panel-primary">
        <div class="panel-heading main_color">
          <img src="{{asset('images/profile.png')}}" class="user-image-thumb">
          <h3 class="panel-title">Name Surname</h3>
        </div>
        <div class="panel-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
        </div>
      </div>


    </div>
  </div>
</div>


<script>
$(document).ready(function(){
  $('.big-star:lt('+{{$books->user_rate()}}+')').addClass('checked-star');
  $('.rate-book').on('click','.unchecked-star', function(){
    @guest
    alert('You have to login before rate this book');
    return false;
    @endguest
    var rate = $(this).attr('data-star');
    $.ajax({
      url : '{{route("book_rate",$books->id)}}',
      data : {point : rate},
      method : 'GET',
      success : function(data){
        console.log(data);
        if(data=='rated'){
          alert('You rated before');
          return false;
        }
        $('.big-star:lt('+rate+')').addClass('checked-star').removeClass('unchecked-star');
      },
      error : function(e){
        console.log(e);
      }
    });
  });

  $('.rate-book').on('mouseover','.unchecked-star',function(){
    var rate = $(this).attr('data-star');
    //alert(rate);
    $('.big-star:lt('+rate+')').addClass('checked-star');
  });

  $('.rate-book').on('mouseleave','.unchecked-star',  function(){
    $('.unchecked-star').removeClass('checked-star');
  });
});


</script>


@endsection
