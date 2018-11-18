@extends('layouts.admin_lte')

@section('content')

@if(count($laporan)>0)
<div class="box-body">
      <div class="table-responsive">
  <table class="table no-margin">
    <tr>
      <th>ID </th>
      <th>posisi</th>
      <th>pelapor</th>
      <th>tingkat kerusakan</th>
      <th>status</th>
      <th>dibuat pada</th>
      <th></th>
    </tr>
  @foreach($laporan as $laporan)
    <tr>
      <td>{{$laporan->id_laporan}}</td>
      <td>{{$laporan->current_position}}</td>
      <td>{{$laporan->user}}</td>
      <td>{{$laporan->tingkat_kerusakan}}</td>
      <td>{{$laporan->status}}</td>
      <td>{{$laporan->created_at}}</td>
      <td>
      <a href="/admin/laporan/{{$laporan->id_laporan}}"> <i class="fa-address-book"></i>
      </a>
      </td>
    </tr>
  @endforeach
  </table>
  </div>
  </div>

@else
  <h1>gak ada laporan lagi</h1>
@endif

@endsection