@extends('layouts.admin_lte')

@section('content')

<div class="row">
  <div class="box box-solid bg-light-blue-gradient">
      <div class="box-header">
      
      <i class="fa fa-map-marker"></i>

        <h3 class="box-title">
          Your  Location
        </h3>
      </div>

      <div class="box-body">
        <div id="map" style="height: 250px; widdt: 100%; color:red; "></div>
      </div>
      <!-- /.box-body-->
        <!-- /.row -->
    </div>
</div>

<div class="box">
<dl class="row">

  <dt class="col-md-3">ID </dt>
  <dd class="col-md-8">{{$laporan->id_laporan}}</dd>
  <br>
  <dt class="col-md-3">Posisi</dt>
  <dd class="col-md-8">{{$laporan->current_position}}</dd>

  <dt class="col-md-3">Pelapor</dt>
  <dd class="col-md-8">{{$laporan->user}}</dd>

  <dt class="col-md-3">Tingkat kerusakan</dt>
  <dd class="col-md-8">{{$laporan->tingkat_kerusakan}}</dd>

  <dt class="col-md-3">Status</dt>
  <dd class="col-md-8">{{$laporan->status}}</dd>

  <dt class="col-md-3">Dibuat pada</dt>
  <dd class="col-md-8">{{$laporan->created_at}}</dd>

  <dt class="col-md-3">Lokasi</dt>
  <dd class="col-md-8" id="lokasi">{{$laporan->lat}} - {{$laporan->long}}</dd>
  
</dl>
</div>

<script>
var map, infoWindow;
function initMap() {
  var lokasi = document.getElementById('lokasi').innerText.split(' - ')
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: parseInt(lokasi[0]), lng: parseInt(lokasi[1])},
    zoom: 17
  });
  infoWindow = new google.maps.InfoWindow;
}
</script>



@endsection