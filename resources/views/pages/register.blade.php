@extends('layouts.master')

	@section('title', 'Daftar')
	@include('layouts.link')

	<!-- grow -->
	@section('grow')
	<div class="container">
		<h2>Daftar</h2>
	</div>
	@stop
	<!-- grow -->

	@section('content')
		<div class="contact">
			<div class="container">
			<div class="contact-form">
		<div class="col-md-10 contact-grid">
			<form action="/home/register" method="post">
						@if ($errors->any())
								<div class="alert alert-danger" role="alert">
										Please fix the following errors
								</div>
						@endif

						{!! csrf_field() !!}
						<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
								<input type="text"  id="nama" name="nama" placeholder="Nama" value="{{ old('nama') }}">
								@if($errors->has('nama'))
										<span class="help-block">{{ $errors->first('nama') }}</span>
								@endif
						</div>
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
								@if($errors->has('email'))
										<span class="help-block">{{ $errors->first('email') }}</span>
								@endif
						</div>
						<div class="form-group{{ $errors->has('telp') ? ' has-error' : '' }}">
								<input type="text" id="telp" name="telp" placeholder="Nomor Telepon" value="{{ old('budi') }}">
								@if($errors->has('telp'))
										<span class="help-block">{{ $errors->first('telp') }}</span>
								@endif
						</div>
						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<input type="password" id="password" name="password" placeholder="Kata Sandi" value="{{old('password')}}">
								@if($errors->has('sandi'))
										<span class="help-block">{{ $errors->first('sandi') }}</span>
								@endif
						</div>
						<div class="form-group{{ $errors->has('password2') ? ' has-error' : '' }}">
								<input type="password" id="password2" name="password2" placeholder="Konfirmasi Kata Sandi" value="{{old('password2')}}">
								@if($errors->has('password2'))
										<span class="help-block">{{ $errors->first('password2') }}</span>
								@endif
						</div>
						<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
								<textarea id="alamat" name="alamat" placeholder="Alamat">{{ old('alamat') }}</textarea>
								@if($errors->has('alamat'))
										<span class="help-block">{{ $errors->first('alamat') }}</span>
								@endif
						</div>
						<div class="send">
							<input type="submit" value="Daftar">
						</div>
				</form>
		</div>

	</div>
	</div>
@stop
<!--//content-->
