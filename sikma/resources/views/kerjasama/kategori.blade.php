@extends('layouts.master')
@section('title','Data Kerjasama - Sistem Informasi Kerjasama Polinema')
@section('content_header_title','Data Kerjasama')
@include('layouts.components.additional')
@section('content')
<div class="col-12">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Manage Data Kerjasama</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body table-responsive">
			<table id="tbkerjasama" class="table table-bordered nowrap text-center" style="overflow-x: scroll;">
				<thead>
					<tr>
						<th rowspan="2">No</th>
						<th rowspan="2">Mitra</th>					
						<th colspan="2">Tanggal MOU</th>
						<th colspan="2">Kualifikasi</th>
						<th colspan="4">Jenis Mitra</th>
						<th>Tindak Lanjut</th>
						<th colspan="2">Contact Person/Mitra</th>
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
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop
@endsection