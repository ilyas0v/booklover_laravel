@extends('layouts.layout')
    @section('content')
        @php
            if(isset($_GET['profile']))
            {
                $user_id=$_GET['profile'];
                $new_user=true;
            }
            else{

                $user_id= \Illuminate\Support\Facades\Auth::id();
            }
        @endphp
        <div class="container" style="margin-top: 70px;">
            <div class="row">
                <div class="col col-md-3" >
                    <img src="{{asset('images/'.Auth::user()->profile_img)}}" class="img-circle center-block">
                </div>
                <div class="col col-md-8">
                    <h3 style="display: inline-block;padding: 0"><?= \Illuminate\Support\Facades\Auth::user()->name." ".\Illuminate\Support\Facades\Auth::user()->surname?> </h3>
                    <hr style="border: 0.5px solid #fbba42;margin: 10px 0" >
                    <b style="display: inline-block;float: left">Birthday: &nbsp;</b><p>@php $_date=\Illuminate\Support\Facades\Auth::user()->date_of_birth; echo date("j F Y",strtotime($_date)); @endphp</p>
                    <b style="display: inline-block;float: left">Activity: &nbsp;</b><p>Joined on <?= date('j-M-Y',strtotime(\Illuminate\Support\Facades\Auth::user()->created_at))?></p>
                </div>
                <div class="col col-md-11 categories-with-nav" style="border-top:1px solid lightgray; border-bottom: 1px solid lightgray">
                        <ul class="nav nav-pills">
                            <li role="presentation"  id="allBtn"  class="active" ><a href="#" onclick="allClick()">All books</a></li>
                            <li role="presentation"  id="favBtn" ><a href="#" onclick="favClick()">Favorites</a></li>
                            <li role="presentation" id="wishBtn" ><a href="#" onclick="wishClick()">Wish-list</a></li>
                        </ul>
                </div>
                <div class="col col-md-11" id="booksPlace">
                </div>
            </div>
        </div>
        <script>
            allClick();
            function allClick() {
                document.getElementById("allBtn").classList.add("active");
                document.getElementById("favBtn").classList.remove("active");
                document.getElementById("wishBtn").classList.remove("active");
                var i,code="";
                for(i=0;i<12;i++)
                {
                    code+="<div class=\"col col-md-2 col-sm-6 col-xs-12 col-sm-6 col-xs-12\">\n" +
                        "  <a href=\"{{route('book')}}\">\n" +
                        "    <div class=\"box\">\n" +
                        "      <p class=\"price\">$10</p>\n" +
                        "      <div class=\"img-wrapper\"><img src=\"images/geisha.jpg\" alt=\"\"></div>\n" +
                        "      <p class=\"book-title\"><b>Memoirs of a Geisha</b></p>\n" +
                        "      <a href=\"{{route('author')}}\" class=\"book-author\">Author</a>\n" +
                        "      <hr class=\"short-line\">\n" +
                        "      <a href=\"{{route('search',['genre'=>'abc'])}}\" class=\"book-genre\">genre</a>\n" +
                        "      <hr class=\"long-line\">\n" +
                        "      <span style=\"color:grey\" class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>\n" +
                        "      <span><b>4.5</b></span>\n" +
                        "    </div>\n" +
                        "  </a>\n" +
                        "</div>";
                }
                document.getElementById("booksPlace").innerHTML=code;
            }
            function favClick() {
                document.getElementById("allBtn").classList.remove("active");
                document.getElementById("favBtn").classList.add("active");
                document.getElementById("wishBtn").classList.remove("active");
                var i,code="";
                for(i=0;i<6;i++)
                {
                    code+="<div class=\"col col-md-2 col-sm-6 col-xs-12 col-sm-6 col-xs-12\">\n" +
                        "  <a href=\"{{route('book')}}\">\n" +
                        "    <div class=\"box\">\n" +
                        "      <p class=\"price\">$10</p>\n" +
                        "      <div class=\"img-wrapper\"><img src=\"images/geisha.jpg\" alt=\"\"></div>\n" +
                        "      <p class=\"book-title\"><b>Memoirs of a Geisha</b></p>\n" +
                        "      <a href=\"{{route('author')}}\" class=\"book-author\">Author</a>\n" +
                        "      <hr class=\"short-line\">\n" +
                        "      <a href=\"{{route('search',['genre'=>'abc'])}}\" class=\"book-genre\">genre</a>\n" +
                        "      <hr class=\"long-line\">\n" +
                        "      <span style=\"color:grey\" class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>\n" +
                        "      <span><b>4.5</b></span>\n" +
                        "    </div>\n" +
                        "  </a>\n" +
                        "</div>";
                }
                document.getElementById("booksPlace").innerHTML=code;
            }
            function wishClick() {
                document.getElementById("allBtn").classList.remove("active");
                document.getElementById("favBtn").classList.remove("active");
                document.getElementById("wishBtn").classList.add("active");

                var i,code="";
                for(i=0;i<5;i++)
                {
                    code+="<div class=\"col col-md-2 col-sm-6 col-xs-12 col-sm-6 col-xs-12\">\n" +
                        "  <a href=\"{{route('book')}}\">\n" +
                        "    <div class=\"box\">\n" +
                        "      <p class=\"price\">$10</p>\n" +
                        "      <div class=\"img-wrapper\"><img src=\"images/geisha.jpg\" alt=\"\"></div>\n" +
                        "      <p class=\"book-title\"><b>Memoirs of a Geisha</b></p>\n" +
                        "      <a href=\"{{route('author')}}\" class=\"book-author\">Author</a>\n" +
                        "      <hr class=\"short-line\">\n" +
                        "      <a href=\"{{route('search',['genre'=>'abc'])}}\" class=\"book-genre\">genre</a>\n" +
                        "      <hr class=\"long-line\">\n" +
                        "      <span style=\"color:grey\" class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>\n" +
                        "      <span><b>4.5</b></span>\n" +
                        "    </div>\n" +
                        "  </a>\n" +
                        "</div>";
                }
                document.getElementById("booksPlace").innerHTML=code;
            }
        </script>
    @endsection
