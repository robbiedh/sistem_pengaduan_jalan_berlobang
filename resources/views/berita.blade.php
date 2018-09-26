<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Pengaduan Jalan Rusak</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Fonts link-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">


        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/slick-theme.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/fonticons.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/bootsnav.css">


        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="css/style.css">
        <!--<link rel="stylesheet" href="css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="css/responsive.css" />

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->

        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                </div>
            </div>
        </div>

        <!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default navbar-fixed white no-background bootsnav text-uppercase">

                <div class="container">    
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.html">

                            Creative Studio

                        </a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <li><a href="/">home</a></li> 
                            <li><a href="aboutus.html">Laporan</a></li>                                              
                            <li><a href="{{ url('berita')}}">Berita</a></li>                            
                            <li><a href="blog.html">Cuaca</a></li>                                    
                            <li><a href="contactus.html">Kontak</a></li>                    
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>  


            </nav>


            <!--Home Sections-->

            <section id="hello" class="home bg-mega">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="home_text">
                                <h4 class="text-white text-uppercase">a new creative studio</h4>
                                <h1 class="text-white text-uppercase">Laporan Pengaduan Jalan Rusak</h1>

                                <div class="separator"></div>

                                <h5 class=" text-uppercase text-white"><em>Menjadi perantara bagi masyarakat dengan pemerintah dalam pengaduan jalan rusak</em></h5>
                                <br>
                                <button type="button" class="btn btn-warning  btn-block">Lapor</button>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->


            
            



            
            </br>
            </br>
            </br>
            </br>
            </br>

            <div class="col-md-12">
                <div class="head_title text-center sm-text-center wow fadeInDown">
                    <h2>Cuaca</h2>
                    <h5><em>Data cuaca kota bandung </em></h5>
                    <h6><em>High : {{$data_cuaca['high']}}° </em></h6>
                    <h6><em>Low : {{$data_cuaca['low']}}° </em></h6>
                    <h6><em>{{$data_cuaca['description']}} </em></h6>  

                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
          
                </div>
            </div>


            <div class="col-md-12">
                <div class="head_title text-center sm-text-center wow fadeInDown">
                    <h2>Berita</h2>
                    <h5><em>Berita terbaru saat ini</em></h5>
                    <table align="center" style="border: 0px solid black;">
                        <tr>
                        @foreach($data_news as $key => $data)
                        <td>
                            <a href=" {{$data_news[$key]['url']}} ">
                                <img width="200" height="200" src=" {{$data_news[$key]['urlToImage']}}"/>
                                <br>
                                {{$data_news[$key]['title']}}   
                            </a>
                        </td>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>    
                        </tr>

                        @endforeach
                    </table>           
            </div>







            <!-- scroll up-->
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

        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/isotope.min.js"></script>
        <script src="js/jquery.magnific-popup.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/jquery.collapse.js"></script>
        <script src="js/bootsnav.js"></script>



        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
