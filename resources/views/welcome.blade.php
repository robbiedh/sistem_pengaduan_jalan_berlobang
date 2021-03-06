@extends('layouts.layout')
@section('content')

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


            
            <section id="feature" class="feature p-top-100">

                <div class="container">
                    
                    <div class="row">
                          <div id="map" style="height: 250px; width: 100%; color:red; "></div>
                       
                    </div><!--End off row-->
                </div><!--End off container -->
                 <script >
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          
          center: {lat: -0.789275, lng: 113.921327}
        });

        setMarkers(map);
      }

      // Data for the markers consisting of a name, a LatLng and a zIndex for the
      // order in which these markers should display on top of each other.
      var beaches = [
        @foreach($data_laporan as $key => $data)
        
        ['{{$data->current_possition}}', {{$data->lat}}, {{$data->long}}, {{$key}}, '{{$data->foto}}', '{{$data->status}}' ],
        
        @endforeach
      
      ];
      var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
            '<div id="bodyContent">'+
            '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
            'sandstone rock formation in the southern part of the '+
            'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
            'south west of the nearest large town, Alice Springs; 450&#160;km '+
            '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
            'features of the Uluru - Kata Tjuta National Park. Uluru is '+
            'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
            'Aboriginal people of the area. It has many springs, waterholes, '+
            'rock caves and ancient paintings. Uluru is listed as a World '+
            'Heritage Site.</p>'+
            '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
            'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
            '(last visited June 22, 2009).</p>'+
            '</div>'+
            '</div>';

      function setMarkers(map) {
        // Adds markers to the map.

        // Marker sizes are expressed as a Size of X,Y where the origin of the image
        // (0,0) is located in the top left of the image.

        // Origins, anchor positions and coordinates of the marker increase in the X
        // direction to the right and in the Y direction down.
        var image = {
          url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          // This marker is 20 pixels wide by 32 pixels high.
          size: new google.maps.Size(20, 32),
          // The origin for this image is (0, 0).
          origin: new google.maps.Point(0, 0),
          // The anchor for this image is the base of the flagpole at (0, 32).
          anchor: new google.maps.Point(0, 32)
        };
       
        var shape = {
          coords: [1, 1, 1, 20, 18, 20, 18, 1],
          type: 'poly'
        };
        
        for (var i = 0; i < beaches.length; i++) {
          var beach = beaches[i];
         
          
         var  maker = new google.maps.Marker({
            position: {lat: beach[1], lng: beach[2]},
            map: map,
            icon: image,
            shape: shape,
            title: beach[0],
            zIndex: beach[3],
            info: "<h3> Titik Lokasi </h3><br><p>Lokasi:"+beach[0]+"</p><br><p> Status : "+beach[5]+"</p><br><img  src='https://ubunubun-robbie-dev.c9users.io/storage/avatars/"+beach[4]+"' width='100' heght='100' />"
            
          });
         var  infowindow = new google.maps.InfoWindow({
          content: "<img  src='https://ubunubun-robbie-dev.c9users.io/storage/avatars/"+beach[4]+"' width='50' heght='50' />"
        });
        
        //   maker.addListener('click', function() {
        
        //   infowindow.open(map,  maker);
        // });
        
        google.maps.event.addListener( maker, 'click', function() {

        infowindow.setContent( this.info );
        infowindow.open( map, this );

        });
        
    
        }
        
        
      }
                       
                                </script>
   <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbCEZR7lFNoJCdptAZ4zlZNnAMU2pf7Bc&callback=initMap">
    </script>

                <br />
                <br />
                <br />
                <hr />
                <br />
                <br />
                <br />

                

                <!--Our Work Section-->
                <div class="container">
                    <div class="row">
                        <div class="main_work">
                            <div class="col-md-12">
                                <div class="head_title text-left sm-text-center wow fadeInDown">
                                    <h2>Kategori</h2>
                                    <h5><em>Beberapa kategori kondisi jalan yang rusak </em></h5>
                                    <div class="separator_left"></div>
                                </div>
                            </div>

                            <div class="col-md-7 col-md-offset-5 col-sm-12 col-xs-12">
                                <div class="work_item">
                                    <div class="row">
                                        <div class="col-md-7 col-sm-12 col-xs-12 text-right pull-right sm-text-center">
                                            <div class="work_item_img">
                                                <img src="images/new/jalan_ringan.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-12 col-xs-12 text-right pull-left sm-text-center">
                                            <div class="work_item_details m-top-80 sm-m-top-20">
                                                <h4>Ringan</h4>
                                                <div class="work_separator1"></div>
                                                <p class="m-top-40 sm-m-top-10">Kondisi jalan rusak ringan yang masih dapat dilalui dengan baik oleh kendaraan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End off work-item -->

                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="work_item">
                                    <div class="row">
                                        <div class="col-md-7 col-sm-12 col-xs-12">
                                            <div class="work_item_img sm-text-center sm-m-top-40">
                                                <img src="images/new/jalan_sedang.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-12 col-xs-12 text-left pull-left sm-text-center">
                                            <div class="work_item_details m-top-80 sm-m-top-20">
                                                <h4>Sedang</h4>
                                                <div class="work_separator2"></div>
                                                <p class="m-top-40 sm-m-top-10">Kondisi jalan rusak sedang yang dapat menggangu kenyamanan dalam berkendara</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End off work-item -->

                            <div class="col-md-7 col-md-offset-5 col-sm-12 col-xs-12">
                                <div class="work_item">
                                    <div class="row">
                                        <div class="col-md-7 col-sm-12 col-xs-12 text-right pull-right sm-text-center">
                                            <div class="work_item_img sm-m-top-40">
                                                <img src="images/new/jalan_parah.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-12 col-xs-12 text-right pull-left sm-text-center">
                                            <div class="work_item_details m-top-80 sm-m-top-20">
                                                <h4>Berat</h4>
                                                <div class="work_separator1"></div>
                                                <p class="m-top-40 sm-m-top-10">Kondisi jalan rusak berat yang dapat menggangu kenyamanan dalam berkendara bahkan dapat menyebabkan kecelakaan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End off work-item -->

                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="work_item">
                                    <div class="row">
                                        <div class="col-md-7 col-sm-12 col-xs-12">
                                            <div class="work_item_img sm-text-center sm-m-top-40">
                                                <img src="images/new/jalan_hancur.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-12 col-xs-12 text-left pull-left sm-text-center">
                                            <div class="work_item_details m-top-80 sm-m-top-20">
                                                <h4>Berbahaya</h4>
                                                <div class="work_separator2"></div>
                                                <p class="m-top-40 sm-m-top-10">Kondisi jalan berbahaya yang disarankan untuk dihindari dan harus segera diperbaiki</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End off work-item -->

                        </div>
                    </div>
                </div>



                <br />
                <br />
                <br />
                <hr />
                <br />
                <br />
                <br />

                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="head_title text-left sm-text-center wow fadeInDown">
                                <h2>Manfaat</h2>
                                <h5><em>Beberapa manfaat jalan yang bagus bagi kehidupan </em></h5>
                                <div class="separator_left"></div>
                            </div>
                        </div>


                        <div class="service_content_area">
                            <!-- Service LEFT SIDE -->
                            <div class="col-md-4 service_left wow fadeInLeft">
                                <!-- Service -->

                                <div class="service_items">
                                    <div class="row">

                                        <!-- ICON -->
                                        <div class="col-xs-3">
                                            <div class="hexagon">
                                                <div class="about-content">
                                                    <span class="fa fa-leaf"></span>
                                                </div>    
                                            </div>
                                        </div>

                                        <div class="col-xs-9">
                                            <div class="text-left service_left_text">
                                                <h4 class="main-color">Sebagai alat penghubung</h4>
                                                <p>Jalan raya sebagai penghubung antara jalan satu dengan jalan yang lainnya</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- end Single Service item -->

                                <!-- Service -->
                                <div class="service_items">
                                    <div class="row">
                                        <!-- ICON -->
                                        <div class="col-xs-3">
                                            <div class="hexagon">
                                                <div class="about-content">
                                                    <span class="fa fa-diamond"></span>
                                                </div>    
                                            </div>
                                        </div>

                                        <div class="col-xs-9">
                                            <div class="text-left service_left_text">
                                                <h4 class="main-color">Efektif dan efisien</h4>
                                                <p>Kendaraan melaju semakin kencang di jalan yang baik</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- end Single Service item -->

                                <!-- Service -->
                                <div class="service_items">
                                    <div class="row">
                                        <!-- ICON -->
                                        <div class="col-xs-3">
                                            <div class="hexagon">
                                                <div class="about-content">
                                                    <span class="fa fa-android"></span>
                                                </div>    
                                            </div>
                                        </div>

                                        <div class="col-xs-9">
                                            <div class="text-left service_left_text">
                                                <h4 class="main-color">Nyaman</h4>
                                                <p>Jalan raya yang baik menyebabkan pengendara menjadi lebih puas dalam berkendara</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end Single Service item -->


                            </div>
                            <!-- /END Service LEFT -->

                            <!-- PHONE IMAGE -->
                            <div class="col-md-4 sm-m-top-40 sm-text-center">
                                <div class="service-img wow bounceIn">
                                    <img src="images/new/jalan_manfaat.jpg" alt="Architect Img">
                                </div>
                            </div>

                            <!-- Service RIGHT -->
                            <div class="col-md-4 service_right wow fadeInRight sm-m-top-40" >

                                <!-- Service -->
                                <div class="service_items">
                                    <div class="row">

                                        <div class="col-xs-9">
                                            <div class="service_right_text p-l-15 text-right">
                                                <h4 class="main-color">Aman</h4>
                                                <p>Dengan adanya jalan raya yang baik, hujan tidak akan tergenang</p>
                                            </div>
                                        </div>

                                        <!-- ICON -->
                                        <div class="col-xs-3">
                                            <div class="hexagon">
                                                <div class="about-content">
                                                    <span class="fa fa-cut"></span>
                                                </div>    
                                            </div>
                                        </div>

                                    </div>

                                </div> <!-- end Single Service item -->



                                <!-- Service -->
                                <div class="service_items">
                                    <div class="row">

                                        <div class="col-xs-9">
                                            <div class="service_right_text p-l-15 text-right">
                                                <h4 class="main-color">Ekonomis</h4>
                                                <p>Jalan dapat menghubungkan antara berbagai pulau sehingga distribusi barang menjadi lebih mudah</p>
                                            </div>
                                        </div>


                                        <!-- ICON -->
                                        <div class="col-xs-3">
                                            <div class="hexagon">
                                                <div class="about-content">
                                                    <span class="fa fa-bullhorn"></span>
                                                </div>    
                                            </div>
                                        </div>

                                    </div>

                                </div><!-- end Single Service item -->  

                                <!-- Service -->
                                <div class="service_items">
                                    <div class="row">


                                        <div class="col-xs-9">
                                            <div class="service_right_text p-l-15 text-right">
                                                <h4 class="main-color">Tempat Olahraga</h4>
                                                <p>Jalan yang baik dapat digunakan sebagai tempat berolahraga, seperti jogging, sepeda, dan lainnya</p>
                                            </div>
                                        </div>

                                        <!-- ICON -->
                                        <div class="col-xs-3">
                                            <div class="hexagon">
                                                <div class="about-content">
                                                    <span class="fa fa-paper-plane"></span>
                                                </div>    
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- end Single Service item --> 


                            </div><!-- /END Service RIGHT -->
                        </div>
                    </div> <!--End off row -->
                </div>

            </section> <!--End off About section -->




            <!--Testimonial Section-->
            <section id="testimonial" class="testimonial fix roomy-100">
                <div class="container">
                    <div class="row">

                    <div class="col-md-12">
                        <div class="head_title text-left sm-text-center wow fadeInDown">
                            <h2>Testimoni</h2>
                            <h5><em>Beberapa testimoni dari pengguna website </em></h5>
                            <div class="separator_left"></div>
                        </div>
                    </div>
                        <div class="main_testimonial text-center">

                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active testimonial_item">
                                        <div class="col-sm-10 col-sm-offset-1">

                                            <div class="test_authour">
                                                <img class="img-circle" src="images/new/foto1.png" alt="" />
                                                <h6 class="m-top-20">Rifqy Irsyad</h6>
                                                <h5><em>Pengguna Kendaraan</em> </h5>
                                            </div>

                                            <p class=" m-top-40">Aplikasi berbasis website ini sangat bermanfaat sebagai perantara antara masyarakat dengan pemerintah dalam pengaduan jalan yang rusak</p>


                                        </div>
                                    </div>
                                    <div class="item testimonial_item">
                                        <div class="col-sm-10 col-sm-offset-1">

                                            <div class="test_authour">
                                                <img class="img-circle" src="images/new/foto2.jpg" alt="" />
                                                <h6 class="m-top-20">Aulia Ramadhan</h6>
                                                <h5><em>Mahasiswa</em> </h5>
                                            </div>

                                            <p class=" m-top-40">Jalan yang rusak menjadi lebih cepat diperbaiki berkat informasi dari masyarakat, aplikasi ini dapat menjadi wadah bagi masyarakat untuk berkontribusi bagi sesama</p>


                                        </div>
                                    </div>
                                    <div class="item testimonial_item">
                                        <div class="col-sm-10 col-sm-offset-1">

                                            <div class="test_authour">
                                                <img class="img-circle" src="images/new/foto3.png" alt="" />
                                                <h6 class="m-top-20">Robby Dwi</h6>
                                                <h5><em>Bang Ijan</em> </h5>
                                            </div>

                                            <p class=" m-top-40">Informasi mengenai jalan yang rusak memberikan kemudahan bagi pemerintah untuk merencanakan perbaikan jalan secara efektif dan efisien</p>

                                        </div>
                                    </div>

                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="fa fa-long-arrow-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <span class="slash">/</span>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="fa fa-long-arrow-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>

                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->


                </br>
                </br>
                
            </section> <!--End off Testimonial section -->

            
            <!--Contact Us Section-->
            <section id="contact" class="contact fix">
                <div class="container">
                    <div class="row">
                        <div class="head_title text-left sm-text-center wow fadeInDown">
                            <h2>Contact Us</h2>
                            <h5><em>Silahkan hubungi kami jika ada pertanyaan</em></h5>
                            <div class="separator_left"></div>
                        </div>
                        </br>

                            <div class="col-md-6 sm-m-top-30">
                                <form class="" action="subcribe.php">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group"> 
                                                <label>Your Name *</label>
                                                <input id="first_name" name="name" type="text" class="form-control" required="">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Your Email *</label>
                                                <input id="email" name="email" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group"> 
                                                <label>Your Message *</label>
                                                <textarea class="form-control" rows="6"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <a href="" class="btn btn-default">SEND MESSAGE <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>

                            <div class="col-md-6">
                                <div class="contact_img">
                                    <img src="images/new/contact.jpg" alt="" />
                                </div>
                            </div>

                            <br>


                        </div>
                    </div><!--End off row -->
                </div><!--End off container -->
            </section><!--End off Contact Section-->

            </br>
            </br>
            </br>
            </br>
            </br>




 @endsection