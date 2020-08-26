<footer class="main-footer col-xs-12">
            <div class="container">
                <div class="footer-body col-xs-12">
                    <div class="block col-md-5 col-xs-12">
                        <div class="inner">
                            <h3>about us</h3>
                            <p class="desc">Dynamically Initiate Collaborative Alignments And Viral Web ServicesDynamically Initiate Collaborative Alignments And Viral Web Services</p>
                            <p class="desc">Dynamically Initiate Collaborative Alignments And Viral Web ServicesDynamically Initiate Collaborative Alignments And Viral Web ServicesInitiate Collaborative Alignments And Viral Web Services</p>
                            <div class="f-social">
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
                    <div class="block col-md-2 col-sm-6 col-xs-6">
                        <div class="inner">
                            <h3>useful links</h3>
                            <ul class="maping">
                                <li>
                                    <a href="#">appointments</a>
                                </li>
                                <li>
                                    <a href="#">contact us</a>
                                </li>
                                <li>
                                    <a href="#">support forums</a>
                                </li>
                                <li>
                                    <a href="#">login with account</a>
                                </li>
                                <li>
                                    <a href="#">register an account</a>
                                </li>
                                <li>
                                    <a href="#">help center</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="block col-md-2 col-sm-6 col-xs-6">
                        <div class="inner">
                            <h3>our services</h3>
                            <ul class="maping">
                                <li>
                                    <a href="#">dental</a>
                                </li>
                                <li>
                                    <a href="#">laboratory test</a>
                                </li>
                                <li>
                                    <a href="#">general analysis</a>
                                </li>
                                <li>
                                    <a href="#">traumatolgy</a>
                                </li>
                                <li>
                                    <a href="#">prostheses</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @foreach($setting as $show)
                    <div class="block col-md-3 col-xs-12">
                        <div class="inner">
                            <h3>contact us</h3>
                            <ul class="addressing">
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
                                            <span><a href="mailto:support@hospital.com">{{$show->email}}</a></span>
                                            <span><a href="mailto:support@hospital.com">{{$show->otherEmail}}</a></span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner-icon">
                                        <i class="zmdi zmdi-link"></i>
                                    </div>
                                    <div class="inner-data">
                                        <p>
                                            <span><a href="#" target="_blank">{{$show->site}}</a></span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="footer-rights col-xs-12">
                <div class="container">
<p>&copy; hospital. copyrights 2019</p>                </div>
            </div>
        </footer>
        <div class="search-flood">
            <div class="container">
                <div class="form-inner">
                    <div class="form-close">
                        <button class="close-flood">
                            <i class="zmdi zmdi-close"></i>
                        </button>
                    </div>
                 
                    <form method="GET">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="search" name="search" class="form-control" placeholder="search here...">
                            <input type="submit" value="search" class="btn">
                        </div>        
                    </form>
        

                </div>
            </div>
        </div>
        <div id="appoint-modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content col-xs-12">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">APPOINTMENT FORM</h4>
                    </div>
                    <div class="modal-body col-xs-12">
                        <form action="#" method="get">
                            <div class="form-group col-md-6 col-xs-12">
                                <label for="fname">first name</label>
                                <input type="text" id="fname" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label for="lname">last name</label>
                                <input type="text" id="lname" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label for="emailm">email address</label>
                                <input type="email" id="emailm" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label for="phnum">phone number</label>
                                <input type="text" id="phnum" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label for="gender">your gender</label>
                                <select class="form-control" id="gender">
                                    <option disabled selected>gender</option>
                                    <option>male</option>
                                    <option>female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label for="services">your services</label>
                                <select class="form-control" id="services">
                                    <option disabled selected>choose services</option>
                                    <option>surgey</option>
                                    <option>clicnic</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label for="date">date</label>
                                <input type="date" id="date" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <label for="time">time</label>
                                <input type="time" id="time" class="form-control">
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <label for="msg">your message</label>
                                <textarea class="form-control" id="msg"></textarea>
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <input type="submit" value="make an appointment" class="btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="forget-modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content col-xs-12">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">password reset</h4>
                    </div>
                    <div class="modal-body col-xs-12">
                        <form action="#" method="get">
                            <div class="form-group col-md-12 col-xs-12">
                                <label for="forget_mail">email reset</label>
                                <input type="email" id="forget_mail" class="form-control">
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <input type="submit" value="reset" class="btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end main-wrapper -->

    <div class="toTop col-xs-12 text-center">
        <i class="zmdi zmdi-chevron-up"></i>
    </div>
    <!-- /.toTop -->


    <!-- Javascript Files -->
    <script src="{{asset('Hospital/js/jquery-2.2.2.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('Hospital/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Hospital/js/jquery-smoothscroll.js')}}" type="text/javascript"></script>
    <script src="{{asset('Hospital/js/modernizr.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('Hospital/js/wow.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('Hospital/js/owl.carousel.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('Hospital/js/select2.full.min.js')}}"></script>
    <script src="{{asset('Hospital/js/jquery.mixitup.js')}}" type="text/javascript"></script>
    <script src="{{asset('Hospital/js/lightgallery.js')}}" type="text/javascript"></script>
<!--    <script src="js/gmap3.min.js" type="text/javascript"></script>-->
    <script src="{{asset('Hospital/js/script.js')}}" type="text/javascript"></script>
</body>

</html>