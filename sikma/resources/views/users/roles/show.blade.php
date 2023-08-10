@extends('layouts.master')
@section('title','Manage Role - Sistem Informasi Kerjasama Polinema')
@include('layouts.components.additional')
@section('content')
<div class="col-8">
	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Show Role</h3>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Name:</strong>
						{{ $role->name }}
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<strong>Permissions:</strong>
						@if(!empty($rolePermissions))
						@foreach($rolePermissions as $v)
						<label class="label label-success">{{ $v->name }},</label>
						@endforeach
						@endif
					</div>
				</div>
			</div>
		</div>

	</div>

</div>

<!-- <div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2> Show Role</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
		</div>
	</div>
</div> -->



@stop
@endsection