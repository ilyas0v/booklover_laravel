@extends('layouts.layout')

@section('content')
    @if(\Illuminate\Support\Facades\Auth::check())
    <div class="container" style="margin-top:70px;margin-bottom:100px; ">
        <form class="" action="" method="post">
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
                                <option selected value=''>Select Month</option>
                                <option value='1'>January</option>
                                <option value='2'>February</option>
                                <option value='3'>March</option>
                                <option value='4'>April</option>
                                <option value='5'>May</option>
                                <option value='6'>June</option>
                                <option value='7'>July</option>
                                <option value='8'>August</option>
                                <option value='9'>September</option>
                                <option value='10'>October</option>
                                <option value='11'>November</option>
                                <option value='12'>December</option>
                            </select>
                        </div>

                        <div class="col col-md-3">
                            <select class="form-control" name="day">
                                <option>Day</option>
                                <?php for($i=1;$i<=31;$i++){ ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col col-md-3">
                            <select class="form-control" name="year">
                                <option>Year</option>
                                <?php for($i=date("Y");$i>=1900;$i--){ ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <br/>
                        <input type="password" name="password" placeholder="current password" class="form-control" value="">


                        <br/>
                        <input type="password" name="password" placeholder="new password" class="form-control" value="">

                        <br/>
                        <input type="password" name="password_repeat" placeholder="Repeat password" class="form-control" value="">
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