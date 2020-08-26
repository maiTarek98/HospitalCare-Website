@extends('Hospital/layout/main')

@section('content')
<div class="public-jumptron col-xs-12">
            <div class="container">
                <div class="jump-inner col-xs-12">
                    <h2>Our Services</h2>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Our Services</li>
                    </ol>
                </div>
            </div>
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