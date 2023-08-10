@extends('layouts.master')
@section('title','Tambah Data Kerjasama - Sistem Informasi Kerjasama Polinema')
@include('layouts.components.additional')
@section('content_header_title','Tambah Data Kerjasama')
@section('st1', 'active')
@section('content')
<section class="content">
	<form class="quickForm" method="post" action="{{ route('kerjasama.store') }}">
		@csrf
		<div class="row">
			<div class="col-md-6">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Informasi Mitra</h3>

						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
								<i class="fas fa-minus"></i>
							</button>
						</div>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Mitra:</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-hands"></i></span>
								</div>
								<input type="mitra" class="form-control" name="mitra" id="mitra" placeholder="Masukkan Mitra Kerjasama">
							</div>
						</div>

						<div class="form-group">
							<label>Kualifikasi:</label>
							<select name="kualifikasi" class="form-control select2bs4" style="width: 100%;">
								@foreach($kualifikasi as $k)
								<option value="{{$k->id}}">{{$k->kualifikasi}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label>Jenis Mitra:</label>
							<select name="jenis_mitra" class="form-control select2bs4" style="width: 100%;">
								@foreach($jenismitra as $jm)
								<option value="{{$jm->id}}">{{$jm->jenis_mitra}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="bentuk_kerjasama">Bentuk Kerjasama:</label>
							<input type="text" name="bentuk_kerjasama" class="form-control" id="bentuk_kerjasama">
						</div>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
			<div class="col-md-6">
				<div class="card card-secondary">
					<div class="card-header">
						<h3 class="card-title">Tanggal Kerjasama</h3>

						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
								<i class="fas fa-minus"></i>
							</button>
						</div>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label>Tanggal Mulai:</label>
							<div class="input-group date" id="tgl_mulai" data-target-input="nearest">
								<input type="text" name="tgl_mulai" class="form-control datetimepicker-input" data-target="#tgl_mulai"/>
								<div class="input-group-append" data-target="#tgl_mulai" data-toggle="datetimepicker">
									<div class="input-group-text"><i class="fa fa-calendar"></i></div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Tanggal Akhir:</label>
							<div class="input-group date" id="tgl_akhir" data-target-input="nearest">
								<input type="text" name="tgl_akhir" class="form-control datetimepicker-input" data-target="#tgl_akhir"/>
								<div class="input-group-append" data-target="#tgl_akhir" data-toggle="datetimepicker">
									<div class="input-group-text"><i class="fa fa-calendar"></i></div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
				<div class="card card-secondary">
					<div class="card-header">
						<h3 class="card-title">Contact Mitra</h3>

						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
								<i class="fas fa-minus"></i>
							</button>
						</div>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label>Telepon:</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-phone"></i></span>
								</div>
								<input type="text" name="telepon" class="form-control" placeholder="Masukkan Nomor Telepon Mitra">
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email Address</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-envelope"></i></span>
								</div>
								<input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email Address Mitra">
							</div>
						</div>
					</div>
					<!-- /.card-body -->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<a href="{{route('kerjasama.index')}}" class="btn btn-secondary">Cancel</a>
				<input type="submit" value="Submit data kerjasama" class="btn btn-success float-right">
			</div>
		</div>
	</form>
</section>
@stop
@endsection