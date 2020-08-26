@extends('Hospital/layout/main')

@section('content')
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


@stop