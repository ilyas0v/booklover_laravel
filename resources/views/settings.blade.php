@extends('layouts.layout')

@section('content')
    @if(\Illuminate\Support\Facades\Auth::check())
    <div class="container" style="margin-top:70px;margin-bottom:100px; ">
        <form  action="{{route('settings')}}" method="post">
            @csrf
            <input type="hidden" name="_method" value="put"/>
            <div class="row">
                <div class="col col-md-3">
                    <img src="{{asset('images/'.Auth::user()->profile_img)}}" class="img-circle center-block">
                    <br/>
                    <input class="form-control" type="file" name="image"  value="Choose Image" accept="image/*">
                </div>
                <div class="col col-md-5 col-md-offset-1">
                        <b style="display: inline-block;">First Name: &nbsp;</b><p>
                            <input type="text" name="name" placeholder="Name" class="form-control" value="<?= \Illuminate\Support\Facades\Auth::user()->name?>">
                        <br/>
                        <b style="display: inline-block;">Last Name: &nbsp;</b><p>
                            <input type="text" name="surname" placeholder="Surname" class="form-control" value="<?= \Illuminate\Support\Facades\Auth::user()->surname?>">
                        <br/>
                        <b style="display: inline-block;">Email: &nbsp;</b><p>
                            <input type="email" name="email" placeholder="Email" class="form-control" value="<?= \Illuminate\Support\Facades\Auth::user()->email?>">
                        <br/>
                        <b style="display: inline-block;">Birthday: &nbsp;</b><p>
                        <div class="col col-md-4">
                            <select class="form-control" name="month">
                                <?php
                                    $months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
                                ?>
                                    <option selected value=''>Select Month</option>
                                    @for($i=1;$i<=12;$i++)
                                        <option {{explode('-',\Illuminate\Support\Facades\Auth::user()->date_of_birth)[1]==str_pad($i,2,'0',STR_PAD_LEFT) ? 'selected':''}} value='{{$i}}'>{{$months[$i-1]}}</option>
                                     @endfor
                            </select>
                        </div>

                        <div class="col col-md-3">
                            <select class="form-control" name="day">
                                <option>Day</option>
                                @for($i=1;$i<=31;$i++)
                                    <option {{explode('-',\Illuminate\Support\Facades\Auth::user()->date_of_birth)[2]==str_pad($i,2,'0',STR_PAD_LEFT) ? 'selected':''}} value='{{$i}}'>{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col col-md-3">
                            <select class="form-control" name="year">
                                <option>Year</option>
                                @for($i=2018;$i>=1900;$i--)
                                    <option {{explode('-',\Illuminate\Support\Facades\Auth::user()->date_of_birth)[0]==$i ? 'selected':''}} value='{{$i}}'>{{$i}}</option>
                                @endfor
                            </select>
                        </div>

                        <br/>
                        <input type="password" name="password" placeholder="Current password" class="form-control" value="">



                        <br/>
                        <input class="btn btn-primary" type="submit" name="" value="Save Profile Settings">

                </div>
            </div>
        </form>
    </div>
    @else
        <?php header("Location: /login");exit();?>
    @endif
@endsection