@extends('layouts.admin_lte')

@section('content')

@if(count($user)>0)
  <table>
    <th>
      <td>ID </td>
      <td>Nama User</td>
      <td>email user</td>
      <td>hak aksess</td>
    </th>
  @foreach($user as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->acces}}</td>
    </tr>
  @endforeach
  </table>

@else
  <h1>gak ada user lagi</h1>
@endif

@endsection