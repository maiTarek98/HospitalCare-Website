@extends('Hospital/layout/main')

@section('content')
<div class="public-jumptron col-xs-12">
            <div class="container">
                <div class="jump-inner col-xs-12">
                    <h2>our team</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">our team</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="team-box col-xs-12">
            <div class="container">
            @foreach($users as $show)
                <div class="block col-md-4 col-sm-6 col-xs-12">
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
                </div>
                @endforeach

                <div class="more-doc col-xs-12">
                    <a href="#">view our team</a>
                </div>
            </div>
        </div>




@stop