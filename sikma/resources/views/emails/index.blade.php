@extends('layouts.master')
@section('title','Manage Notifikasi - Sistem Informasi Kerjasama Polinema')
@section('content_header_title','Manage Notifikasi')
@include('layouts.components.additional')
@section('st3', 'active')
@section('content')
<div class="col-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data User</h3>
      <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg">
        Buat Email
      </button>
    </div>
    <div class="card-body table-responsive">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>User</th>
            <th>Email</th>
            <th>Tanggal Ditambahkan</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($users as $key => $user)
         <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->created_at }}</td>
          @endforeach
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
<div class="col-12">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Email Terkirim</h3>
    </div>
    <div class="card-body table-responsive">
      <table class="table table-hover nowrap">
        <thead>
          <tr>
            <th>Subject</th>
            <th colspan="5">Body</th>
            <th>Terkirim</th>
            <th>Tanggal dibuat</th>
            <th>Tanggal Terkirim</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($emails as $key => $email)
         <tr>
          <td>{{ $email->subject }}</td>
          <td colspan="5">{{ $email->body }}</td>
          <td>{{ $email->delivered }}</td>
          <td>{{ $email->tgl_buat }}</td>
          <td>{{ $email->tgl_kirim }}</td>
          @endforeach
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Buat Email</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('send.email') }}" method="post">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <input name="subject" class="form-control" placeholder="Subject:" value="">
          </div>
          <div class="form-group">
            <input name="title" class="form-control" placeholder="Title:">
          </div>
          <div class="form-group">
            <textarea name="content" id="compose-textarea" class="form-control" style="height: 300px">
              Sehubungan dengan akan berakhirnya kerjasama dengan mitra, maka diberitahukan untuk meninjau kelanjutan dari hubungan kerjasama. Berikut rincian kerjasama yang akan segera berakhir dalam 6 bulan kedepan
            </textarea>
          </div>
          <div class="form-group clearfix">
            <div class="icheck-primary d-inline">
              <input type="radio" id="radioPrimary1" name="sending" value="now" checked>
              <label for="radioPrimary1">Kirim Sekarang</label>
            </div>
            <div class="icheck-primary d-inline">
              <input type="radio" id="radioPrimary2" name="sending" value="later">
              <label for="radioPrimary2">Kirim Nanti</label>
            </div>
          </div>
          <div class="form-group tampil" style="display: none;">
            <label>Tanggal dan waktu:</label>
            <div class="input-group date" id="tglkirim" data-target-input="nearest">
              <input type="text" name="tgl_kirim" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
              <!-- <input type="datetime-local" name="tgl_kirim"> -->
              <div class="input-group-append" data-target="#tglkirim" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          <div class="float-right">
            <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i>Kirim</button>
          </div>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@stop
@endsection