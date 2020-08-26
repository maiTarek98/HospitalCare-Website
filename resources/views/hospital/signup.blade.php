@extends('Hospital/layout/main')

@section('content')
<div class="public-jumptron col-xs-12">
            <div class="container">
                <div class="jump-inner col-xs-12">
                    <h2>signup</h2>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">signup</li>
                    </ol>
                </div>
            </div>
        </div>
<div class="register-box col-xs-12">
            <div class="container">
                <div class="register-inner">
                    <h3>registeration form</h3>
                    <form action="/signup" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group position-role col-xs-12 @if($errors->has('name')) has-error @endif">
              <label for="inputEmail3"> Doctor Name   </label>
              <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder=" Doctor Name">
                <strong class="help-block">{{ $errors->first('name') }}</strong> 
           </div>
           <div class="form-group position-role col-xs-12 @if($errors->has('birth')) has-error @endif">
              <label for="inputEmail3" > Birth   </label>
              <input type="date" class="form-control" name="birth" value="{{old('birth')}}" placeholder=" Doctor Name">
                <strong class="help-block">{{ $errors->first('birth') }}</strong> 
           </div>
           <div class="form-group position-role col-xs-12 @if($errors->has('email')) has-error @endif">
              <label for="inputEmail3"> email   </label>
              <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder=" Doctor Name">
                <strong class="help-block">{{ $errors->first('email') }}</strong> 
           </div>
           <div class="form-group position-role col-xs-12 @if($errors->has('password')) has-error @endif">
              <label for="inputEmail3" > password   </label>
              <input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder=" Doctor Name">
                <strong class="help-block">{{ $errors->first('password') }}</strong> 
           </div>
           <div class="form-group position-role col-xs-12 @if($errors->has('retype')) has-error @endif">
              <label for="inputEmail3"> retype   </label>
              <input type="password" class="form-control" name="retype" value="{{old('retype')}}" placeholder=" Doctor Name">
                <strong class="help-block">{{ $errors->first('retype') }}</strong> 
              
           </div>

                        <div class="position-role col-xs-12">
                            <h4>position</h4>
                            <div class="form-group col-md-4 col-xs-12">
                                <input type="radio" name="position" id="doc" value="doctor">
                                <label for="doc">doctor</label>
                            </div>
                            <div class="form-group col-md-4 col-xs-12">
                                <input type="radio" name="position" id="recp" value="receptionist">
                                <label for="recp">receptionist</label>
                            </div>
                            <div class="form-group col-md-4 col-xs-12">
                                <input type="radio" name="position" id="patient" value="patient">
                                <label for="patient">patient</label>
                            </div>
                        </div>
                        <div class="doc-role col-xs-12">
                            <div class="form-group col-md-12 col-xs-12">
                                <label for="pos">position</label>
                                <select class="form-control" id="pos" name="type">
                                    <option value="none"> none</option>
                                    <option value="pediatrist"> pediatrist</option>
                                    <option value="therapist">therapist</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <label for="expr">experience</label>
                                <input type="text" id="expr" name="expr" class="form-control" placeholder="ex: 4 years">
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <label for="of_address">office address</label>
                                <input type="text" id="of_address" name="office" class="form-control">
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <label for="work_days">work days</label>
                                <input type="text" id="work_days" name="work" class="form-control" placeholder="ex: monday to friday">
                            </div>
                        </div>

                        <div class="form-group position-role col-xs-12 @if($errors->has('phone')) has-error @endif">
              <label for="inputEmail3"> phone   </label>
              <input type="text" class="form-control" name="phone" value="{{old('phone')}}" placeholder=" Doctor Name">
                <strong class="help-block">{{ $errors->first('phone') }}</strong> 
           </div>

           <div class="form-group col-md-12 col-xs-12">
                                    <input type="text" placeholder="www.facebook.com/userID" class="form-control social-links" name="facebook" value="{{old('facebook')}}">
                                    <i class="zmdi zmdi-facebook"></i>
                                </div>
                                <div class="form-group col-md-12 col-xs-12">
                                    <input type="text" placeholder="www.twitter.com/userID" class="form-control social-links" name="twitter" value="{{old('twitter')}}">
                                    <i class="zmdi zmdi-twitter"></i>
                                </div>
                                <div class="form-group col-md-12 col-xs-12">
                                    <input type="text" placeholder="www.linkedin.com/userID" class="form-control social-links" name="linkedIn" value="{{old('linkedIn')}}">
                                    <i class="zmdi zmdi-linkedin"></i>
            </div>        
          
           <div class="form-group position-role col-xs-12 @if($errors->has('address')) has-error @endif">
              <label for="inputEmail3"> address   </label>
              <textarea class="form-control" name="address" > {{old('address')}}</textarea>
                <strong class="help-block">{{ $errors->first('address') }}</strong> 
              
           </div>
                        <div class="form-group col-md-12 col-xs-12">
                        <div class="col-md-12">
              <button type="submit" class="btn btn-success">
                SignUp
              </button>
            </div>                        </div>
                    </form>
                </div>
            </div>
        </div>

@stop