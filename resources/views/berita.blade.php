@extends('layouts.layout')
@section('content')
<!--Home Sections-->

            <section id="hello" class="home bg-mega">
                <div class="overlay">
                </div>
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


           
                {{-- Start weather  seaction  --}}
                <section id="testimonial" class="testimonial fix roomy-100">
                        <div class="container">
                            <div class="row">
                                    <div class="col-md-12">
                                            <div class="head_title text-center sm-text-center wow fadeInDown">
                                                <h2>Cuaca  Hari ini</h2>
                                                <div class="separator_center"></div>
                                            </div>
                                        </div>
                                            <div id="m-booked-weather-bl250-10947"> <div class="booked-wzs-250-175 weather-customize" style="background-color:#137AE9;width:160px;" id="width1"> <div class="booked-wzs-250-175_in"> <div class="booked-wzs-250-175-data"> <div class="booked-wzs-250-175-left-img wrz-18"> <a target="_blank" href="http://www.booked.net/"> <img src="//s.bookcdn.com/images/letter/logo.gif" alt="www booked net" /> </a> </div> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>28</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: <span class="plus">+</span>28&deg;</div> <div class="booked-wzs-day-n">L: <span class="plus">+</span>20&deg;</div> </div> </div> <div class="booked-wzs-250-175-info"> <div class="booked-wzs-250-175-city">Bandung </div> <div class="booked-wzs-250-175-date">Sunday, 30 September</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">See 7-Day Forecast</span> </div> </div> </div> </div> <a target="_blank" href="http://www.booked.net/weather/bandung-9580"> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Mon</td> <td>Tue</td> <td>Wed</td> <td>Thu</td> <td>Fri</td> <td>Sat</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>25&deg;</td> <td class="week-day-val"><span class="plus">+</span>25&deg;</td> <td class="week-day-val"><span class="plus">+</span>27&deg;</td> <td class="week-day-val"><span class="plus">+</span>31&deg;</td> <td class="week-day-val"><span class="plus">+</span>30&deg;</td> <td class="week-day-val"><span class="plus">+</span>29&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>19&deg;</td> <td class="week-day-val"><span class="plus">+</span>18&deg;</td> <td class="week-day-val"><span class="plus">+</span>18&deg;</td> <td class="week-day-val"><span class="plus">+</span>19&deg;</td> <td class="week-day-val"><span class="plus">+</span>18&deg;</td> <td class="week-day-val"><span class="plus">+</span>21&deg;</td> </tr> </table> </a> </div></div> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-10947'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=9580&type=3&scode=124&ltid=3458&domid=w209&anc_id=45956&cmetric=1&wlangID=1&color=137AE9&wwidth=160&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->
                                
                            </div>
                        </div>
                </section>
                {{-- end section wather  --}}

          {{-- Start weather  seaction  --}}
          <section id="testimonial" class="testimonial fix roomy-100">
                <div class="container">
                    <div class="row">
                            <div class="col-md-12">
                            <div class="card">
                                    <img src="img_avatar.png" alt="Avatar" style="width:100%">
                                    <div class="container">
                                      <h4><b>John Doe</b></h4> 
                                      <p>Architect & Engineer</p> 
                                    </div>
                                  </div>
                            </div>

                    </div>
                        </div>
          </section>
            <style type="text/css"> 
            .card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
    padding: 2px 16px;
}
            </style>

           
        
@endsection


