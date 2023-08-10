@extends('layouts.master')
@section('title','Manage Role - Sistem Informasi Kerjasama Polinema')
@include('layouts.components.additional')
@section('content')
<div class="col-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Manage Role</h3>
    </div>
    <div class="card-body table-responsive">
      <table id="tbuser" class="table table-bordered table-hover nowrap">
        <thead>
          <tr>
           <th>No</th>
           <th>Name</th>
           <th width="280px">Action</th>
         </tr>
       </thead>
       <tbody>
         @foreach ($roles as $key => $role)
         <tr>
          <td>{{ ++$i }}</td>
          <td>{{ $role->name }}</td>
          <td>
            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
            @can('role-edit')
            <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
            @endcan
            @can('role-delete')
            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endcan
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="card-footer">
    <a class="btn btn-secondary float-left" href="{{route('users.index')}}">Kembali ke Users</a>
    <a class="btn btn-success float-left" href="{{route('roles.create')}}">Tambah Role</a>
  </div>
</div>
</div>
{!! $roles->render() !!}
@stop
@endsection