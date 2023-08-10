@extends('layouts.master')
@section('title','Manage User - Sistem Informasi Kerjasama Polinema')
@section('content_header_title','Manage User')
@include('layouts.components.additional')
@section('st2', 'active')
@section('content')
<div class="col-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data User</h3>
    </div>
    <div class="card-body table-responsive">
      <table id="tbuser" class="table table-bordered table-hover nowrap">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>Roles</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($data as $key => $user)
         <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->username }}</td>
          <td>{{ $user->email }}</td>
          <td>
            @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
            <label class="badge badge-success">{{ $v }}</label>
            @endforeach
            @endif
          </td>
          <td>
            <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default">
              Delete
            </button>
          </td>
          @endforeach
        </tr>
      </tbody>
      <tfoot>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>Roles</th>
            <th>Action</th>
          </tr>
      </tfoot>
    </table>
  </div>
  <div class="card-footer">
    <a class="btn btn-primary float-left" href="{{route('roles.index')}}">Manage Roles</a>
    <a class="btn btn-success float-left" href="{{route('users.create')}}">Tambah User</a>
  </div>
</div>
</div>
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Konfirmasi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Yakin Akun Data Ini?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
        {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
@stop
@endsection