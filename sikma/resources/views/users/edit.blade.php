@extends('layouts.master')
@section('title','Edit Data User - Sistem Informasi Kerjasama Polinema')
@section('content_header_title','Edit Data User')
@include('layouts.components.additional')
@section('st2', 'active')
@section('content')
<section class="content">
	<div class="row">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Masukkan Data User</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
						<i class="fas fa-minus"></i>
					</button>
					<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
						<i class="fas fa-times"></i>
					</button>
				</div>
			</div>
			<div class="card-body">
				{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Name:</strong>
							{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Username:</strong>
							{!! Form::text('username', null, array('placeholder' => 'Username','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Email:</strong>
							{!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Role:</strong>
							{!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','select2bs4')) !!}
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<a href="{{route('users.index')}}" class="btn btn-secondary">Cancel</a>
			<input type="submit" value="Submit" class="btn btn-success float-right">
		</div>
	</div>
	{!! Form::close() !!}
</section>
@stop
@endsection