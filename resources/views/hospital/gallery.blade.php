@extends('Hospital/layout/main')

@section('content')
<div class="public-jumptron col-xs-12">
            <div class="container">
                <div class="jump-inner col-xs-12">
                    <h2>gallery</h2>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">gallery</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="gallery-box col-xs-12">
            <div class="container">
                <div class="gallery-filters col-xs-12">
                    <ul>
                        <li class="filter active" data-filter="all">all</li>
                        <li class="filter" data-filter=".health">health</li>
                        <li class="filter" data-filter=".x-ray">x-ray</li>
                        <li class="filter" data-filter=".dental">dental</li>
                        <li class="filter" data-filter=".surgery">surgery</li>
                    </ul>
                </div>
                <!-- end gallery-filters -->
                <div class="gallery-container col-xs-12">
                    <ul id="lightgallery">
                    @foreach($paginate as $data)

                        @if($data->type === 'health')
                        <li data-src="/Hospital/images/{{ $data->photo}}">
                            <div class="mix health col-md-4 col-sm-6 col-xs-12">
                                <a href="#">
                                <img class="img-responsive" src="/Hospital/images/{{ $data->photo }}" alt="gallery">
                                    <div class="img-caption">
                                        <i class="zmdi zmdi-aspect-ratio-alt"></i>
                                    </div>
                                </a>
                            </div>
                        </li>
                    
                        @elseif($data->type === 'x-ray')
                        <li data-src="/Hospital/images/{{ $data->photo}}">
                            <div class="mix x-ray col-md-4 col-sm-6 col-xs-12">
                                <a href="#">
                                <img class="img-responsive" src="/Hospital/images/{{ $data->photo }}" alt="gallery">
                                    <div class="img-caption">
                                        <i class="zmdi zmdi-aspect-ratio-alt"></i>
                                    </div>
                                </a>
                            </div>
                        </li>
                        @elseif($data->type === 'dental')
                        <li data-src="/Hospital/images/{{ $data->photo}}">
                            <div class="mix dental col-md-4 col-sm-6 col-xs-12">
                                <a href="#">
                                <img class="img-responsive" src="/Hospital/images/{{ $data->photo }}" alt="gallery">
                                    <div class="img-caption">
                                        <i class="zmdi zmdi-aspect-ratio-alt"></i>
                                    </div>
                                </a>
                            </div>
                        </li>

                        @elseif($data->type === 'surgery')
                        <li data-src="/Hospital/images/{{ $data->photo}}">
                            <div class="mix surgery col-md-4 col-sm-6 col-xs-12">
                                <a href="#">
                                <img class="img-responsive" src="/Hospital/images/{{ $data->photo }}" alt="gallery">
                                    <div class="img-caption">
                                        <i class="zmdi zmdi-aspect-ratio-alt"></i>
                                    </div>
                                </a>
                            </div>
                        </li>
                        @endif
                        @endforeach
                       
                    </ul>
                </div>
                <div class="gallery-pagination col-xs-12">
                    <div class="pager-num">
                      
                            {{ $paginate->links() }}
                      
                    </div>
                    <div class="pager-hint">
                        <p>page 1 of 4</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="newsletter col-xs-12">
            <div class="container">
                <div class="news-inner">
                    <i class="zmdi zmdi-calendar-note"></i>
                    <div class="news-data">
                        <p>do you want to visit our hospital ?</p>
                        <h4>make an free appointment !</h4>
                    </div>
                    <div class="news-link">
                        <a href="#" data-target="#appoint-modal" data-toggle="modal">make an appointment</a>
                    </div>
                </div>
            </div>
        </div>




@stop