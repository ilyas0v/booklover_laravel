@extends('layouts.layout')

@section('content')
<div class="container-fluid with-background">
  <div class="transparent-layer">
    <h1 class="page-main-title">Discover your favorite books</h1>
  </div>
</div>


<div class="container categories-with-nav">
  <ul class="nav nav-pills">
    <li role="presentation" class="active"><a href="#">Last books</a></li>
    <li role="presentation"><a href="#">Most readed</a></li>
    <li role="presentation"><a href="#">Most liked</a></li>
  </ul>
</div>

<div class="container discover-books">
  <div class="row">
    @for($i=0;$i<12;$i++)
      @include("partials.book-box")
    @endfor
  </div>
</div>
@endsection
