@extends('Hospital/layout/main')

@section('content')
<div class="public-jumptron col-xs-12">
            <div class="container">
                <div class="jump-inner col-xs-12">
                    <h2>contact us</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">contact us</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="contact-box col-xs-12">
            <div class="container">
                <div class="contact-form col-xs-12">
                    <div class="block col-md-6 col-xs-12">
                        <div class="inner">
                            <h3>contact info</h3>

                            <div class="card-blocks col-xs-12">
                            @foreach($contact as $data)
                                <div class="card col-md-6 col-sm-6 col-xs-12">
                                    <div class="card-inner">
                                        <i class="zmdi zmdi-{{$data->icon}}"></i>
                                        <h4>{{$data->title}}</h4>
                                        <p>
                                            <span>{{$data->info}}</span>
                                            <span>{{$data->other}}</span>
                                        </p>
                                    </div>
                                </div>
                                
                                @endforeach
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end block -->

                    <div class="block col-md-6 col-xs-12">
                        <div class="inner">
                            <h3>form contact</h3>
                            <form action="/contact" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group position-role col-xs-12 @if($errors->has('fullname')) has-error @endif">
              <label for="inputEmail3"> fullname   </label>
              <input type="text" class="form-control" name="fullname" value="{{old('fullname')}}" placeholder=" Doctor Name">
                <strong class="help-block">{{ $errors->first('fullname') }}</strong> 
           </div>
           <div class="form-group position-role col-xs-12 @if($errors->has('subject')) has-error @endif">
              <label for="inputEmail3" > subject   </label>
              <input type="text" class="form-control" name="subject" value="{{old('subject')}}" placeholder=" Doctor Name">
                <strong class="help-block">{{ $errors->first('subject') }}</strong> 
           </div>
           <div class="form-group position-role col-xs-12 @if($errors->has('email')) has-error @endif">
              <label for="inputEmail3"> email   </label>
              <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder=" Doctor Name">
                <strong class="help-block">{{ $errors->first('email') }}</strong> 
           </div>
           <div class="form-group position-role col-xs-12 @if($errors->has('phone')) has-error @endif">
              <label for="inputEmail3" > phone   </label>
              <input type="text" class="form-control" name="phone" value="{{old('phone')}}" placeholder=" Doctor Name">
                <strong class="help-block">{{ $errors->first('phone') }}</strong> 
           </div>
           <div class="form-group position-role col-xs-12 @if($errors->has('message')) has-error @endif">
                        <label for="inputEmail3"> message   </label>
                        <textarea class="form-control" name="message"> {{old('message')}}</textarea>
                        <strong class="help-block">{{ $errors->first('message') }}</strong> 
                            </div>
           <div class="form-group col-md-12 col-xs-12">
                        <div class="col-md-12">
              <button type="submit" class="btn btn-success">
                Send
              </button>
            </div>                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-map col-xs-12">
                <div class="map"></div>
            </div>
        </div>

@stop