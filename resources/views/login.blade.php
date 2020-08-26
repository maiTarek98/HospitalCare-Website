@extends('master')
@section('content')

<div class="col-lg-offset-3 col-md-6 text-center">
   <h4>  لوحه التحكم</h4>
<br><br>
<form class="form-horizontal" action="/login" method="post" enctype="multipart/form-data">
{{csrf_field()}}

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">البريد الالكتروني</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">كلمه المرور:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" value="{{old('password')}}" name="password" id="pwd" placeholder="Enter password">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
<div>
    
    @foreach ($errors->all() as $err)
    <div class="callout callout-danger" style="background-color: #dd4b39 !important;">
          <h4>Warning!</h4>

          <p>{{ $err}} </p>
        </div><br>
    @endforeach
    </div>
</div>

