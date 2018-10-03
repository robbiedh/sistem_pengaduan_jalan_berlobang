@extends('layouts.admin_lte')

@section('content')
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
           
           <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Your  Location
              </h3>
            </div>

            <div class="box-body">
              <div id="map" style="height: 250px; width: 100%; color:red; "></div>
            </div>
            <!-- /.box-body-->
              <!-- /.row -->
          </div
    </div>
</section>

<section class="content">
        <div class="row">
                <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Input Keterangan</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form">
                            
                            <input hidden type="text" name="provinsi" />
                          <input hidden type="text" name="kabupaten" />
                          <input hidden type="text" name="kecamatan" />
                          <input hidden type="text" name="desa" />
                          <div class="box-body">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Current possition</label>
                                  <input  disabled type="text" class="form-control" id="user_position" >
                                </div>
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Detail Lokasi</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan detail Lokasi ">
                                      </div>
                                     
                            <div class="form-group">
                              <label for="exampleInputEmail1">Provinsi</label>
                              <select class="form-control" id="provinsi"> </select>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Kota/Kabupaten</label>
                              <select class="form-control" id="kabupaten"> </select>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">kecamatan</label>
                              <select class="form-control" id="kecamatan"> </select>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Desa</label>
                              <select class="form-control" id="desa"> </select>
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Tingkat kerusakan</label>
                                    <select class="form-control">
                    <option>Low</option>
                    <option>Medium</option>
                    <option>Hard</option>
                  </select>
                                </div>
                                 
                            <div class="form-group">
                              <label for="exampleInputFile">Upload Foto Jalan Berlobang</label>
                              <input type="file" id="exampleInputFile">
            
                             </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox">Data Sesui dengan keyataan 
                              </label>
                            </div>
                          </div>
                          <!-- /.box-body -->
            
                          <div class="box-footer">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            {{-- <button type="submit" class="btn btn- --}}

            </div>
        

</section>
<script>
  // Note: This example requires that you consent to location sharing when
  // prompted by your browser. If you see the error "The Geolocation service
  // failed.", it means you probably did not give permission for the browser to
  // locate you.
  var map, infoWindow;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -34.397, lng: 150.644},
      zoom: 17
    });
    infoWindow = new google.maps.InfoWindow;

    // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };

        infoWindow.setPosition(pos);
        infoWindow.setContent('Lokasi Anda Sekarang');
        
        get_detail(position.coords.latitude, position.coords.longitude);
        infoWindow.open(map);
        map.setCenter(pos);
      }, function() {
        handleLocationError(true, infoWindow, map.getCenter());
      });
    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
    }
  }

  function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
                          'Error: The Geolocation service failed.' :
                          'Error: Your browser doesn\'t support geolocation.');
    infoWindow.open(map);
  }

  function get_detail(lat,long) {
    $.ajax({   
        type: "GET",
        url: "https://maps.googleapis.com/maps/api/geocode/json?latlng="+lat+","+long+"&key=AIzaSyDbCEZR7lFNoJCdptAZ4zlZNnAMU2pf7Bc",             
        dataType: "html",               
        success: function(response){                    
            // $("#responsecontainer").html(response); 
          

           var temp=jQuery.parseJSON(response);
            //  console.log(''+temp.results[0]['address_components'][1]['long_name']);
             var temp1 =temp.results[0]['address_components'][0]['long_name'];
             var temp2 =temp.results[0]['address_components'][1]['long_name'];
             var temp3 =temp.results[0]['address_components'][2]['long_name'];
             var temp4 =temp.results[0]['address_components'][3]['long_name'];
             var temp5 =temp.results[0]['address_components'][4]['long_name'];
             try{
              var temp6 =temp.results[0]['address_components'][5]['long_name'];
             }catch(err){
              var temp6='';
             }
             try {
              var temp7 =temp.results[0]['address_components'][7]['long_name'];
              } catch(err) {
                var temp7='';
                }
            

             $("#user_position").val(temp1+" "+temp2+" "+temp3+" "+temp4+" "+temp5+" "+temp6+" "+temp7);

        }

    });
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbCEZR7lFNoJCdptAZ4zlZNnAMU2pf7Bc&callback=initMap">
</script>
<script type="text/javascript">

  document.addEventListener("DOMContentLoaded", function(){
   
              //Mengambil value dari option select provinsi kemudian parameternya dikirim menggunakan ajax 
          $.ajax({
     url:"{{url('/provinsi')}}",
     type:'GET',
     success: function(data){
         $('#provinsi').html(data);
        
     }
  });
          });
  
      $('#provinsi').change(function(){
   
              //Mengambil value dari option select provinsi kemudian parameternya dikirim menggunakan ajax 
              var prov = $('#provinsi').val();
              // var  provinsi_terpilih =$('#provinsi').val($(this).find("option:selected").attr("name"));

            
              $.ajax({
                  type : 'GET',
                  url : "{{url('/kota/')}}/"+prov,
                  
                      success: function (data) {
   
                      //jika data berhasil didapatkan, tampilkan ke dalam option select kabupaten
                      $("#kabupaten").html(data);
                  }
              });
          });
      $('#kabupaten').change(function(){
   
              //Mengambil value dari option select provinsi kemudian parameternya dikirim menggunakan ajax 
              var prov = $('#kabupaten').val();
   
              $.ajax({
                  type : 'GET',
                  url :"{{url('/kecamatan/')}}/"+prov,
                  
                      success: function (data) {
   
                      //jika data berhasil didapatkan, tampilkan ke dalam option select kabupaten
                      $("#kecamatan").html(data);
                  }
              });
          });
          $('#kecamatan').change(function(){
   
   //Mengambil value dari option select provinsi kemudian parameternya dikirim menggunakan ajax 
   var prov = $('#kecamatan').val();

   $.ajax({
       type : 'GET',
       url :"{{url('/desa/')}}/"+prov,
       
           success: function (data) {

           //jika data berhasil didapatkan, tampilkan ke dalam option select kabupaten
           $("#desa").html(data);
       }
   });
});
  </script>>





@endsection 
