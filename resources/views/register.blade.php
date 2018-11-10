@extends('layouts.layout')

@section('content')


<div class="container" style="margin-top:70px;margin-bottom:100px; ">
  <div class="row">
    <div class="col col-md-4 col-md-offset-4">
      <form class="" action="" method="post">
        <div class="row">
          <div class="col col-md-6">
            <input type="text" name="name" placeholder="Name" class="form-control" value="">
          </div>
          <div class="col col-md-6">
            <input type="text" name="surname" placeholder="Surname" class="form-control" value="">
          </div>
          <div class="col col-md-12">
            <input type="email" name="email" placeholder="Email" class="form-control" value="">
          </div>
          <div class="col col-md-6">
            <input type="password" name="password" placeholder="password" class="form-control" value="">
          </div>
          <div class="col col-md-6">
            <input type="password" name="password_repeat" placeholder="Repeat password" class="form-control" value="">
          </div>
          <div class="col col-md-5">
            <select class="form-control">
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
            <select class="form-control" name="">
              <option>Day</option>
              <?php for($i=1;$i<=31;$i++){ ?>
              <option value="<?= $i ?>"><?= $i ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="col col-md-4">
            <select class="form-control" name="">
              <option>Year</option>
              <?php for($i=date("Y");$i>=1990;$i--){ ?>
              <option value="<?= $i ?>"><?= $i ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="col col-md-12">
            <label>
              <input type="checkbox" name="" value="">
              Please contact me via email.
            </label>
          </div>
        </div>
        <p>By clicking "Sign up" I agree that I have read and accepted the <a href="#" target="_blank">Terms of Use</a>.</p>
        <input class="btn btn-primary" type="submit" name="" value="Sign up">
      </form>
    </div>

  </div>
</div>

@endsection
