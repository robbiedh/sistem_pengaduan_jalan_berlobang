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
                    <th>ID User </th>
                    <th>Name </th>
                    <th>Email </th>
                    <th>Acceess</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($data_user as $data)
                  <tr>
                    <td><a href="pages/examples/invoice.html">{{$data->id}}</a></td>
                    <td>{{$data->name}}</td>
                    <td><span class="label label-success">{{$data->email}}</span></td>
                    <td>
                      <span class="label label-success">{{$data->acces}}</span>
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