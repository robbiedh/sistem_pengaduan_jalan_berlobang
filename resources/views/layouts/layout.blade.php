<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pengaduan Jalan Rusak</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="{{asset('image/png')}}" href="favicon.ico">

        <!--Google Fonts link-->
        {{-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> --}}
{{-- <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> --}}
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">


        <link rel="stylesheet" href="{{asset('css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/fonticons.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootsnav.css')}}">


        <!--For Plugins external css-->
 {{-- <link rel="stylesheet" href="{{asset('css/plugins.css')}}" /> --}}

        <!--Theme custom css -->
         <link rel="stylesheet" href="{{asset('css/style.css')}}"> 
        {{-- <link rel="stylesheet" href="{{asset('css/colors/maron.css')}}"> --}}

        <!--Theme Responsive css-->
         <link rel="stylesheet" href="{{asset('css/responsive.css')}}" /> 

        {{-- <script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script> --}}
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
{{-- 
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object"></div>
                 
                </div>
            </div>
        </div> --}}

        {{-- <!--End off Preloader --> --}}
        {{-- <section id="testimonial" class="testimonial fix roomy-100"> --}}

        {{-- <div class="culmn"> --}}
            <!--Home page style-->


            <nav class="navbar navbar-default navbar-fixed white no-background bootsnav text-uppercase">

                <div class="container">    
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" >
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.html">

                            Creative Studio

                        </a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" >
                        <ul class="nav navbar-nav navbar-right"  >
                            <li><a href="/">home</a></li>                                               
                            <li><a href="{{ url('berita/1')}}">Berita & Cuaca</a></li>                                                             
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>                                       
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>  
            </nav>
            
            @yield('content')

            <div class="scrollup">
                    <a href="#"><i class="fa fa-chevron-up"></i></a>
                </div><!-- End off scroll up -->
    
    
                <footer id="footer" class="footer bg-mega">
                    <div class="container">
                        <div class="row">
                            <div class="main_footer p-top-40 p-bottom-30">
                                <div class="col-md-6 text-left sm-text-center">
                                    <p class="wow fadeInRight" data-wow-duration="1s">
                                        @2018. All Rights Reserved
                                    </p>
                                </div>
                                <div class="col-md-6 text-right sm-text-center sm-m-top-20">
                                    <ul class="list-inline">
                                        <li><a href="">Facebook</a></li>
                                        <li><a href="">Twitter</a></li>
                                        <li><a href="">Instagram</a></li>
                                        <li><a href="">Pinterest</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
    
    
    
    
            </div>
    
            <!-- JS includes -->
    
            <script src="{{asset('js/vendor/jquery-1.11.2.min.js')}}"></script>
            <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
    
            <script src="{{asset('js/isotope.min.js')}}"></script>
            <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
            <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
            <script src="{{asset('js/slick.min.js')}}"></script>
            <script src="{{asset('js/jquery.collapse.js')}}"></script>
            <script src="{{asset('js/bootsnav.js')}}"></script>
    
    
    
            <script src="{{asset('js/plugins.js')}}"></script>
             <script src="{{asset('js/main.js')}}"></script>
    
        </body>
    </html>
    
