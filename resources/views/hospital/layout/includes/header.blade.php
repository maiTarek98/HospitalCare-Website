<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <title> Hospital - Homepage </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="Amir Nageh">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('Hospital/images/faveicon.png')}}">

    <!-- Css Files -->
    <link href="{{asset('Hospital/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Hospital/css/wfmi-style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Hospital/css/material-design-iconic-font.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Hospital/css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Hospital/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Hospital/css/lightgallery.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Hospital/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('Hospital/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Page Loader -->
    <div class="page-loader">
        <img src="{{asset('Hospital/images/h.gif')}}">
    </div>
    <!-- End Page Loader -->

    <div class="main-wrapper">
        <header class="main-head col-xs-12">
            <div class="login-area">
                <button type="button" class="close-login">
                    <i class="zmdi zmdi-close"></i>
                </button>
                        <div class="container">
                            <div class="login-form col-md-6 col-xs-12">
                                <h2>login area</h2>
                                <form class="form-horizontal" action="/" method="post" enctype="multipart/form-data">
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
                            </div>
                            <!-- /.login-form -->

                            <div class="signup-form col-md-6 col-xs-12">
                                <h2>signup area</h2>
                                <p>Interactively expedite focused results through installed base potentialities. Credibly restore world-class vortals whereas scalable interfaces.</p>
                                <a href="/signup">
                                    <i class="zmdi zmdi-account-add"></i> signup
                                </a>
                            </div>
                            <!-- /.signup-form -->

                            <!-- =========================================================================================================================================== -->

                            <div class="panel-pop modal" id="forget">
                                <div class="lost-inner">
                                    <h1>هل نسيت كلمة المرور ؟</h1>
                                    <div class="lost-item">
                                        <input type="text" placeholder="الايميل المستخدم في تسجيل الدخول">
                                    </div>
                                    <!-- /.lost-item -->
                                    <div class="text-center">
                                        <input type="submit" value="إعادة ضبط">
                                    </div>
                                    <!-- /.lost-item -->
                                </div>
                                <!-- /.lost-inner -->
                            </div>
                            <!-- /.modal -->

                            <!-- =========================================================================================================================================== -->

                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /.login-area -->
                  
            <div class="top-header col-xs-12">
                <div class="container">
                    <div class="header-contact">
                        <ul>
                        @if(! Auth::check())
                 @if(! isset(Auth::user()->email))
                            <li>

                                <a href="javascript:void(0)" class="show-login">
                                    <i class="zmdi zmdi-account-add"></i> login / signup
                                </a>
                            </li>
                            @endif
            @endif
                            <li>

                                <a href="callto:01024517052">
                                    <i class="zmdi zmdi-phone-in-talk"></i> 010-245-17052
                                </a>
                            </li>
                            <li>

                                <a href="mailto:support@hospital.com">
                                    <i class="zmdi zmdi-email"></i> support@hospital.com
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header-social">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-skype"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
         
            <!-- end top-header -->
            <div class="header-content col-xs-12">
                <div class="container">
                    <div class="logo">
                        <h1>
                            <a href="index.html">hos<span>pital</span></a>
                        </h1>
                    </div>
                    <div class="h-navigation">
                        <ul class="main-nav">
                            <li>
                                <a href="/" class="active">home</a>
                            </li>
                            <li>
                                <a href="/about">about us</a>
                            </li>
                            <li>
                                <a href="/service">services</a>
                            </li>
                            <li>
                                <a href="/gallery">gallery</a>
                            </li>
                            <li>
                                <a href="/team">our team</a>
                            </li>
                            <li>
                                <a href="/contact">contact us</a>
                            </li>
                        </ul>
                        <button type="button" class="toggle-menu-button">
                            <i class="toggle-menu-button-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </i>
                        </button>
                        <div class="main-search" style="margin-left: 50px;">
                            <a href="javascript:void(0)" class="open-search">
                                <i class="zmdi zmdi-search"></i>
                            </a>
                            @if(Auth::check())
                            @if(isset(Auth::user()->email))
                            <div class="dropdown">
                                <a data-toggle="dropdown" class="dropy" aria-expanded="false" style="margin-top: -3px;">
                                    <div class="usr-img">
                                        <img src="{{asset('Hospital/images/doctor1.jpg')}}" alt="profile image">
                                    </div>
                                    <div class="usr-data">
                                        <span>{{Auth::user()->name}}</span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="/profile/{{Auth::user()->id}}">profile</a></li>
                                    <li>
                                        <a href="setting.html">settings</a>
                                    </li>
                                    <li>
                                        <a href="/logoutt">logout</a>
                                    </li>
                                </ul>
                            </div>
                            @endif
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </header>   
      
        <div class="search-flood">
            <div class="container">
                <div class="form-inner">
                    <div class="form-close">
                        <button class="close-flood">
                            <i class="zmdi zmdi-close"></i>
                        </button>
                    </div>
                    <form action="{{url('/')}}" method="get">
                    {{csrf_field()}}
                        <div class="form-group">
                            <input type="search" name="search" class="form-control" placeholder="search here...">
                            <input type="submit" value="search" class="btn">
                        </div>
                      
                    </form>
                   
                </div>
            </div>
        </div>