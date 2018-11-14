@extends('layouts.layout')

@section('content')


<div class="container" style="background:#ddd;margin-top:70px;margin-bottom:50px;">
  <div class="row" >

    <div class="col col-md-3 col-sm-3">
      <img src="images/geisha.jpg" class="img-fluid" style="display:block;width:90%;margin:auto">
      <a href="#" class="btn btn-success btn-lg" style="display: block;margin:auto;margin-top:10px;width:80%;">Read this book</a>
      <div class="rate-book">
        <p>Rate this book</p>
        <span id="star-1" data-star="1" class="big-star unchecked-star glyphicon glyphicon-star" aria-hidden="true"></span>
        <span id="star-2" data-star="2" class="big-star unchecked-star glyphicon glyphicon-star" aria-hidden="true"></span>
        <span id="star-3" data-star="3" class="big-star unchecked-star glyphicon glyphicon-star" aria-hidden="true"></span>
        <span id="star-4" data-star="4" class="big-star unchecked-star glyphicon glyphicon-star" aria-hidden="true"></span>
        <span id="star-5" data-star="5" class="big-star unchecked-star glyphicon glyphicon-star" aria-hidden="true"></span>
      </div>
    </div>

    <div class="col col-md-5 col-sm-9">
      <h1 class="book-title">Memoirs of a Geisha</h1>
      <h2 class="book-authors">By <a class="page-link" href="{{route('author')}}">Arthur Golden</a></h2>
      <div class="book-rating">
        <span  class="checked-star glyphicon glyphicon-star" aria-hidden="true"></span>
        <span  class="checked-star glyphicon glyphicon-star" aria-hidden="true"></span>
        <span  class="checked-star glyphicon glyphicon-star" aria-hidden="true"></span>
        <span  class="checked-star glyphicon glyphicon-star" aria-hidden="true"></span>
        <span  class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span>4.0</span>
        ·
        <span><a href="#">Rating details</a></span>
      </div>
      <p class="book-description">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>

    <div class="col col-md-4">
      <div class="share">
        <p>Share book on social media</p>
        <a href="#" title="Share on Facebook"><img src="images/fb.png" height="40" alt=""></a>
        <a href="#" title="Share on Twitter"><img src="images/tw.png" height="40" alt=""></a>
        <a href="#" title="Share on Instagram"><img src="images/ins.png" height="40" alt=""></a>
      </div>
      <hr style="border-color: #ccc;">
      <h3>Recommended books</h3>
      <div class="row rec-books">
        <div class="col-md-4 col-sm-4 col-xs-4"><img src="images/geisha.jpg" style="width:100%;"></div>
        <div class="col-md-4 col-sm-4 col-xs-4"><img src="images/geisha.jpg" style="width:100%;"></div>
        <div class="col-md-4 col-sm-4 col-xs-4"><img src="images/geisha.jpg" style="width:100%;"></div>
        <div class="col-md-4 col-sm-4 col-xs-4"><img src="images/geisha.jpg" style="width:100%;"></div>
        <div class="col-md-4 col-sm-4 col-xs-4"><img src="images/geisha.jpg" style="width:100%;"></div>
        <div class="col-md-4 col-sm-4 col-xs-4"><img src="images/geisha.jpg" style="width:100%;"></div>
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col-md-12">
      <h3>Comments:</h3>
      <div class="panel panel-primary">
        <div class="panel-heading main_color">
          <img src="images/profile.png" class="user-image-thumb">
          <h3 class="panel-title">Name Surname</h3>
        </div>
        <div class="panel-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
        </div>
      </div>

      <div class="panel panel-primary">
        <div class="panel-heading main_color">
          <img src="images/profile.png" class="user-image-thumb">
          <h3 class="panel-title">Name Surname</h3>
        </div>
        <div class="panel-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
        </div>
      </div>

      <div class="panel panel-primary">
        <div class="panel-heading main_color">
          <img src="images/profile.png" class="user-image-thumb">
          <h3 class="panel-title">Name Surname</h3>
        </div>
        <div class="panel-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
        </div>
      </div>


    </div>
  </div>
</div>



@endsection
