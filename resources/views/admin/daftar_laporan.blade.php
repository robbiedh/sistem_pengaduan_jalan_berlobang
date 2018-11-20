@extends('layouts.admin_lte')

@section('content')



<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Orders</h3>

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
                     <th>ID </th>
                      <th>posisi</th>
                      <th>pelapor</th>
                      <th>tingkat kerusakan</th>
                      <th>Gambar </th>
                      <th>Status</th>
                      <th> Time </th>
                      <th> Action </th>
                  </tr>
                  </thead>
                  <tbody>
                    @if(count($laporan)>0)
                    @foreach($laporan as $key => $data)
                  <tr>
                    <td><a href="pages/examples/invoice.html">{{$key}}</a></td>
                    <td>{{$data->current_possition}}</td>
                    <td><span class="label label-success">{{$data->user}}</span></td>
                    <td>
                      {{$data->tingkat_kerusakan}}
                    </td>
                    <td>
                      <img src="/storage/avatars/{{$data->foto}}" width='50' hegiht='50'/>
                     
                    </td>
                    <td>{{$data->status}}</td>
                    <td>{{$data->created_at}}</td>
                    <td>
                          <a href="/admin/laporan/{{$data->id_laporan}}"> <i class="fa-address-book"></i>
  
                    </td>
                  </tr>
                  @endforeach
                  @else
                  <h1> No Data </h1>
                  @endif
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            
            <!-- /.box-footer -->
          </div>



@endsection