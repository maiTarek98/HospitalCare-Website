@extends('Hospital/layout/main')

@section('content')

<div class="main-slider col-xs-12">
@foreach($slider as $show)

            <div class="h-item">
            <img class="img-responsive" src="/Hospital/images/{{ $show->slidePhoto }}" alt="sliders">
                <div class="h-caption">
                    <div class="caption-inner">
                        <span>{{$show->subTitle}}</span>
                        <h3>{{$show->title}}</h3>
                        <p>{{$show->text}} </p>
                        <a href="#" data-target="#appoint-modal" data-toggle="modal">make an appointment</a>
                    </div>
                </div>
            </div>
        @endforeach
        
        </div>

        <div class="h-details col-xs-12">
            <div class="container">
            <div class="h-welcome col-md-6 col-xs-12">
                    <div class="h-img">
                        <img src="{{asset('Hospital/images/bg1.jpg')}}" alt="welcome image">
                    </div>
                    <div class="h-data">
                        <h3>welcome to our hospital</h3>
                        <p>Dynamically initiate collaborative alignments and viral web services. Rapidiously maintain impactful ideas whereas 24/365 resources. Quickly supply maintainable architectures with innovative benefits. Continually brand dynamic.</p>
                    </div>
                </div>
                <div class="h-cards col-md-6 col-xs-12">
                    <div class="block col-md-6 col-xs-6">
                        <div class="inner">
                            <h3>Opening Times</h3>
                            <ul>
                            @foreach($open as $show)

                                <li>
                                <span>{{$show->week}}</span>
                                <small>{{$show->from}} - {{$show->to}}</small>

                                </li>
                                @endforeach
                              
                            </ul>
                        </div>
                    </div>

                    <div class="block col-md-6 col-xs-6">
                        <div class="inner">
                            <h3>get in touch</h3>
                            <ul>
                                @foreach($setting as $show)
                                <li>
                                    <div class="inner-icon">
                                        <i class="zmdi zmdi-pin"></i>
                                    </div>
                                    <div class="inner-data">
                                        <p>
                                            <span>{{$show->location}}</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner-icon">
                                        <i class="zmdi zmdi-phone-in-talk"></i>
                                    </div>
                                    <div class="inner-data">
                                        <p>
                                            <span>{{$show->phone}}</span>
                                            <span>{{$show->otherPhone}}</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner-icon">
                                        <i class="zmdi zmdi-email"></i>
                                    </div>
                                    <div class="inner-data">
                                        <p>
                                            <span>{{$show->email}}</span>
                                            <span>{{$show->otherEmail}}</span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner-icon">
                                        <i class="zmdi zmdi-link"></i>
                                    </div>
                                    <div class="inner-data">
                                        <p>
                                            <span>{{$show->site}}</span>
                                          
                                        </p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="features col-xs-12">
            <div class="container">
                <div class="public-head col-xs-12">
                    <h3>WHY CHOOSE US</h3>
                    <p>Dynamically Initiate Collaborative Alignments And Viral Web Services</p>
                </div>
                <div class="features-body col-xs-12">
                @foreach($chosen as $show)

                    <div class="block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner">
                            <h4>{{$show->title}}</h4>
                            <p>{{$show->text}}</p>
                        </div>
                    </div>
      
                @endforeach
                <div class="clearfix"></div>

                </div>
            </div>
        </div>
        <div class="services col-xs-12">
            <div class="container">
                <div class="public-head col-xs-12">
                    <h3>the best services just got better</h3>
                    <p>Dynamically Initiate Collaborative Alignments And Viral Web Services</p>
                </div>
                <div class="services-body col-xs-12">
                @foreach($service as $show)

                    <div class="block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="inner-icon">
                                <div class="hexagon">
                                    <i class="icon-i-{{$show->icon}}"></i>
                                </div>
                            </div>
                            <div class="inner-data">
                            <h4>{{$show->title}}</h4>
                            <p>{{$show->text}}</p>                           
                         </div>
                        </div>
                    </div>
                    
                    @endforeach
                 
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        
        <div class="team col-xs-12">
            <div class="container">
                <div class="public-head col-xs-12">
                    <h3>meet our doctor and his professional staff</h3>
                    <p>Dynamically Initiate Collaborative Alignments And Viral Web Services</p>
                </div>
                <div class="team-slider col-xs-12">
                @foreach($users as $show)

                    <div class="t-item">
                        <div class="t-img">
                        <img class="img-responsive" src="/Hospital/images/{{ $show->image }}" alt="type of teams">
                        </div>
                        <div class="t-data">
                            <h3>
                                <a href="#">{{$show->name}}</a>
                            </h3>
                            <span>{{$show->type}}</span>
                            <p>{{$show->text}}</p>                            
                            <div class="t-social">
                                <ul>
                                <li>
                                        <a href="{{$show->facebook}}">
                                            <i class="zmdi zmdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$show->twitter}}">
                                            <i class="zmdi zmdi-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$show->linkedIn}}">
                                            <i class="zmdi zmdi-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>

        <div class="care col-xs-12">
            <div class="container">
                <div class="public-head col-xs-12">
                    <h3>the heighest standard of health care</h3>
                    <p>Dynamically Initiate Collaborative Alignments And Viral Web Services</p>
                </div>
                <div class="care-body col-xs-12">
                @foreach($health as $show)

                    <div class="block col-md-3 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="care-icon">
                                <i class="icon-i-{{$show->icon}}"></i>
                            </div>
                            <div class="care-data">
                            <span>{{$show->title}}</span>
                            <p>{{$show->text}}</p>                                  
                            <a href="#">
                                    read more
                                    <i class="zmdi zmdi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="appoint col-xs-12" id="appoint">
            <div class="container">
                <div class="app-form col-xs-12">
                    <div class="form-inner">
                        <h3>appointment form</h3>
                        <form action="/" method="post">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group position-role col-xs-12 @if($errors->has('firstName')) has-error @endif">
                        <label for="inputEmail3"> First Name   </label>
                        <input type="text" class="form-control" name="firstName" value="{{old('firstName')}}" placeholder=" Doctor Name">
                        <strong class="help-block">{{ $errors->first('firstName') }}</strong> 
                        </div>
                        <div class="form-group position-role col-xs-12 @if($errors->has('lastName')) has-error @endif">
                        <label for="inputEmail3" > lastName   </label>
                        <input type="text" class="form-control" name="lastName" value="{{old('lastName')}}" placeholder=" Doctor Name">
                        <strong class="help-block">{{ $errors->first('lastName') }}</strong> 
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

                        <div class="form-group col-md-12 col-xs-12">
                                <label for="pos">Gender</label>
                                <select class="form-control" id="pos" name="gender">
                                    <option value="male"> Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <label for="pos">Service</label>
                                <select class="form-control" id="pos" name="service">
                                    <option value="clinic"> clinic</option>
                                    <option value="surgey">surgey</option>
                                </select>
                            </div>
                        <div class="form-group position-role col-xs-12 @if($errors->has('date')) has-error @endif">
                        <label for="inputEmail3"> date   </label>
                        <input type="date" class="form-control" name="date" value="{{old('date')}}" placeholder=" Doctor Name">
                        <strong class="help-block">{{ $errors->first('date') }}</strong> 

                        </div>
                        <div class="form-group position-role col-xs-12 @if($errors->has('time')) has-error @endif">
                        <label for="inputEmail3"> time   </label>
                        <input type="time" class="form-control" name="time" value="{{old('time')}}" placeholder=" Doctor Name">
                        <strong class="help-block">{{ $errors->first('time') }}</strong> 

                        </div>

                        <div class="form-group position-role col-xs-12 @if($errors->has('message')) has-error @endif">
                        <label for="inputEmail3"> message   </label>
                        <textarea class="form-control" name="message"> {{old('message')}}</textarea>
                        <strong class="help-block">{{ $errors->first('message') }}</strong> 
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                        <div class="col-md-12">
              <button type="submit" class="btn btn-success">
              make an appointment
              </button>
            </div>                        </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="testomenal col-xs-12">
            <div class="container">
                <div class="public-head col-xs-12">
                    <h3>what our patients are saying</h3>
                    <p>Dynamically Initiate Collaborative Alignments And Viral Web Services</p>
                </div>
                <div class="client-slider col-xs-12">
                @foreach($openion as $show)
                    <div class="c-item">
                        <div class="c-img">
                        <img class="img-responsive" src="/Hospital/images/{{ $show->image }}" alt="openions photo">
                        </div>
                        <div class="c-data">
                            <i class="zmdi zmdi-quote"></i>
                            <p>{{ $show->text }}</p>
                            <div class="c-name">
                                <h3>{{ $show->doctorName }}</h3>
                                <span>{{ $show->patientName }} Patient | {{ $show->country }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                
                </div>
            </div>
        </div>
@stop