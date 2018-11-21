<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book Lover</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="shortcut icon" href="{{asset('images/icon.png')}}" type="image/x-icon" />
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
  <style>
  </style>
</head>
<body>

  <div class="loader-container">
    <div class="loader">
      <div class="loader-inner">
        <div class="loader-inner-inner">

        </div>
      </div>
    </div>
  </div>
.
  @include('partials.searchbox')

<nav class="navbar navbar-inverse navbar-fixed">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('main')}}">
        <img id="birinci_logo" src="{{asset('images/logo.png')}}" height="30" alt="">
        <img id="ikinci_logo" src="{{asset('images/responsiv logo.png')}}" height="50" alt="">
      </a>
    </div>
    <div class="collapse navbar-collapse"  id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a style="color:white;font-weight:bold;" href="{{route('main')}}">Discover</a></li>
        @guest
          <li><a style="font-weight:bold" href="{{route('login')}}">Log in</a></li>
          <!--<li style="color:#ddd;padding:15px 10px 15px 0px">or</li> -->
          <li><a href="{{route('register')}}" class="rounded-button">Sign up</a></li>
        @else
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <img src="{{asset('images/'.Auth::user()->profile_img)}}" style="width:20px;border-radius:50%;">
            {{ Auth::user()->name }}
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('profile')}}">Profile</a></li>
              <li><a href="#">Account Settings</a></li>
            <li><a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log out</a></li>
          </ul>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </li>
        @endguest
      </ul>

      <ul class="nav navbar-nav search-on-right">
        <li>
          <a href="#" data-toggle="modal" data-target=".search-modal">
            <svg style="width:17px;fill:#fff;" class="rf-icon rf-icon--search" xmlns="http://www.w3.org/2000/svg" viewBox="5605.991 836 16.958 16.95"><path data-name="Path 150" d="M5612.5 836a6.493 6.493 0 0 1 5.29 10.27l4.88 4.88a1.076 1.076 0 0 1-1.52 1.52l-4.88-4.88a6.5 6.5 0 1 1-3.77-11.79zm0 11a4.5 4.5 0 1 0-4.5-4.5 4.5 4.5 0 0 0 4.5 4.5z"></path></svg>
          </a>
        </li>
      </ul>


      <!--
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
      </ul>
    -->
    </div>
  </div>
</nav>
