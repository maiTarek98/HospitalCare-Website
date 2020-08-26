@extends('Hospital/layout/main')

@section('content')

<div class="public-jumptron col-xs-12">
            <div class="container">
                <div class="jump-inner col-xs-12">
                    @foreach($test as $show)
                    <h2>{{$show->name}}</h2>
                    
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">dr.amir nageh</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="profile-box col-xs-12">
            <div class="container">
                <div class="profile-img col-md-3 col-xs-12">
                    <div class="img-outer">
                        <img src="{{asset('Hospital/images/doctor1.jpg')}}" alt="profile image">
                    </div>
                    <div class="img-social">
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
                <!-- end profile-img -->
                <div class="profile-data col-md-9 col-xs-12">
                    <div class="data-left col-md-6 col-xs-12">
                        <h3>hello & welcome</h3>
                        <ul>
                            <li>
                                <small>full name:</small>

                            </li>
                            <li>
                                <small>birthday:</small>

                            </li>
                            <li>
                                <small>position:</small>

                            </li>
                            @if($show->position === 'doctor')

                            <li>
                                <small>experiences</small>

                            </li>
                            <li>
                                <small>office:</small>

                            </li>
                            <li>
                                <small>work days:</small>

                            </li>
                            @endif
                            <li>
                                <small>NO.phone:</small>

                            </li>
                            <li>
                                <small>email:</small>

                            </li>
                            <li>
                                <small>address:</small>

                            </li>
                        </ul>
                        <ul class="sec-list">
                            <li>
                                <span>{{$show->name}}</span>
                            </li>
                            <li>
                                <span>{{$show->birth}}</span>
                            </li>
                            <li>
                                <span>{{$show->position}}</span>
                            </li>
                            @if($show->position === 'doctor')
                            <li>
                                <span>{{$show->expr}} years</span>
                            </li>
                            <li>
                                <span>{{$show->office}}</span>
                            </li>
                            <li>
                                <span>{{$show->work}}</span>
                            </li>
                            @endif
                           
                           
                            <li>
                                <span>{{$show->phone}}</span>
                            </li>
                            <li>
                                <span>{{$show->email}}</span>
                            </li>
                            <li>
                                <span>{{$show->address}}</span>
                            </li>
                        </ul>
                    </div>
                    @if($show->position === 'doctor')

                    <div class="data-right col-md-6 col-xs-12">
                        <h3>education</h3>
                        <div class="ed-item col-xs-12">
                            <p>
                                <span>ph.d</span>
                                <span>2009</span>
                            </p>
                            <h4>ph.d in doctor</h4>
                            <p class="desc">stanford university graduate school of education</p>
                        </div>
                        <div class="ed-item col-xs-12">
                            <p>
                                <span>m.t.r.i</span>
                                <span>2004</span>
                            </p>
                            <h4>masters technological research institute</h4>
                            <p class="desc">boston university</p>
                        </div>
                        <div class="ed-item col-xs-12">
                            <p>
                                <span>b.a.p</span>
                                <span>2001</span>
                            </p>
                            <h4>bachelor of arts in psychology</h4>
                            <p class="desc">university of california, barkeley</p>
                        </div>
                    </div>
                    @endif
                </div>
                @endforeach
                <div class="profile-content col-xs-12">
                    <div class="content-intro col-md-6 col-xs-12">
                        <h3>bio</h3>
                        <p>Dramatically exploit equity invested methods of empowerment without viral e-tailers. Conveniently administrate compelling scenarios whereas ethical communities. Continually evisculate standardized solutions through top-line vortals. Synergistically.</p>
                        <p>Dramatically exploit equity invested methods of empowerment without viral e-tailers. Conveniently administrate compelling scenarios whereas ethical communities. Continually evisculate standardized solutions through top-line vortals. Synergistically.Dramatically exploit equity invested methods of empowerment without viral e-tailers. Conveniently administrate compelling scenarios whereas ethical communities. Continually evisculate standardized solutions through top-line vortals. Synergistically.</p>
                    </div>
                    <div class="content-form col-md-6 col-xs-12">
                        <h3>have a questions !</h3>
                        <form action="#" method="get">
                            <div class="form-group col-md-6 col-xs-12">
                                <input type="text" placeholder="first name" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <input type="text" placeholder="first name" class="form-control">
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <input type="email" placeholder="email address" class="form-control">
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <textarea placeholder="write message" class="form-control"></textarea>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <input type="submit" value="send" class="btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @stop