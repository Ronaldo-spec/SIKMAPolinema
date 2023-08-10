@extends('layouts.master')
@section('title','Data Kerjasama - Sistem Informasi Kerjasama Polinema')
@section('content_header_title','Data Kerjasama')
@include('layouts.components.additional')
@section('st1', 'active')
@section('content')
<div class="col-12">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Kerjasama</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body table-responsive">
			<table id="tbkerjasama" class="table table-bordered nowrap text-center" >
				<thead>
					<tr>
						<th rowspan="2">No</th>
						<th rowspan="2">Mitra</th>					
						<th colspan="2">Tanggal MOU</th>
						<th colspan="2">Kualifikasi</th>
						<th colspan="4">Jenis Mitra</th>
						<th>Tindak Lanjut</th>
						<th colspan="2">Contact Person/Mitra</th>
						@if(Auth::user()->getRoleNames() == '["Admin"]')
						<th rowspan="2">Action</th>
						@endif
					</tr>
					<tr>
						<th>Mulai</th>
						<th>Akhir</th>
						<th>DN</th>
						<th>LN</th>
						<th>PT</th>
						<th>Industri</th>
						<th>Lembaga</th>
						<th>Pemerintah</th>
						<th>Bentuk kerjasama</th>
						<th>Telepon</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($kerjasama as $a)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$a->mitra}}</td>
						<td>{{$a->tgl_mulai}}</td>
						<td>{{$a->tgl_akhir}}</td>
						@if($a->kualifikasi->kualifikasi == 'Dalam Negeri')
						<td><i class="fas fa-check"></i></td>
						<td>N/A</td>
						@else
						<td>N/A</td>
						<td><i class="fas fa-check"></i></td>
						@endif
						@if($a->jenismitra->jenis_mitra == 'PT')
						<td><i class="fas fa-check"></i></td>
						<td>N/A</td>
						<td>N/A</td>
						<td>N/A</td>
						@elseif($a->jenismitra->jenis_mitra == 'Industri')
						<td>N/A</td>
						<td><i class="fas fa-check"></i></td>
						<td>N/A</td>
						<td>N/A</td>
						@elseif($a->jenismitra->jenis_mitra == 'Lembaga')
						<td>N/A</td>
						<td>N/A</td>
						<td><i class="fas fa-check"></i></td>
						<td>N/A</td>
						@elseif($a->jenismitra->jenis_mitra == 'Pemerintah')
						<td>N/A</td>
						<td>N/A</td>
						<td>N/A</td>
						<td><i class="fas fa-check"></i></td>
						@endif
						<td>{{$a->bentuk_kerjasama}}</td>
						<td>{{$a->telepon}}</td>
						<td>{{$a->email}}</td>
						@if(Auth::user()->getRoleNames() == '["Admin"]')
						<td>
							<a class="btn btn-primary" href="{{ route('kerjasama.edit',$a->id) }}">Edit</a>
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default">
								Delete
							</button>
						</td>
						@endif
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<!-- /.card-body -->
		@if(Auth::user()->getRoleNames() == '["Admin"]')
		<div class="card-footer">
			<div class="float-left">
				<a class="btn btn-success" href="{{route('kerjasama.create')}}">Tambah Data Kerjasama</a>
			</div>
		</div>
	</div>
	@endif
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
				<p>Yakin Menghapus Data Ini?</p>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
				<form action="{{ route('kerjasama.destroy',$a->id) }}" method="POST">
					@csrf
					@method('DELETE')
					<div class="float-right">
						<button type="submit" class="btn btn-danger">Hapus</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop
@endsection