@extends('layouts.admin_lte')

@section('content')
<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title"><b>Daftar laporan</b></h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="table-responsive">
        <table class="table no-margin">
          <thead>
          <tr>
            <th>No </th>
            <th>Alamat </th>
            <th>Detail Lokasi </th>
            <th>Tingkat kerusakan </th>
            <th>Keterangan </th>
            <th>Foto  </th>
            <th>Tanggal pengaduan  </th>
           

          </tr>
          </thead>
          <tbody>
              @foreach($data_laporan as $data)
          <tr>
            <td> {{ $loop->iteration }}</td>
            <td>{{$data->desa}},{{$data->kecamatan}},{{$data->kabupaten}},{{$data->provinsi}} </td>
            <td>{{$data->current_possition}}</td>
            @if($data->tingkat_kerusakan=='low')
            <td><span class="label label-success">Low</span></td>
            @elseif($data->tingkat_kerusakan=='medium')
            <td><span class="label label-warning">Medium</span></td>
            @elseif($data->tingkat_kerusakan=='hard')
            <td><span class="label label-danger">Hard</span></td>
            @endif
            <td>{{$data->keterangan}}</td>
          <td><img src="{{asset('/storage/avatars')}}/{{$data->foto}}" width="100" height="100"></td>
            <td>{{$data->updated_at}}</td>
            <td>
              <div class="sparkbar" data-color="#00a65a" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
            </td>
          </tr>
          @endforeach
         
          </tbody>
        </table>
      </div>
      <!-- /.table-responsive -->
    </div>
    <!-- /.box-body -->
    
    <!-- /.box-footer -->
  </div>
  @endsection