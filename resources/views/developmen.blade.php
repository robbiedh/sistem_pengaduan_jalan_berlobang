@extends('layouts.admin_lte')

@section('content')
<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Development Time</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <div class="form-group">
                  <label> Your Token Access :</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."> {{$token}}</textarea>
                </div>
         
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
          
        </div>
        <!-- /.box-footer-->
      </div>
      
     <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Used</h3>
          </div>
          <div class="box-body">
          
            <div class="form-group">
                  <label>Get Data Laporan </label>
                  <textarea class="form-control" rows="3" placeholder="Enter ...">curl -i -H "Accept: application/json" -H "Content-Type: application/json" -H "Authorization: Bearer  {{$token}}" {{url('/api/data_laporan')}}</textarea>
                </div>
          </div>
          
          <!-- /.box-body -->
        </div>
  @endsection