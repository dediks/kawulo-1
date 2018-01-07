@extends('layouts.master')

<!DOCTYPE html>
<html>
<head>
	@section('title', 'Pembayaran')
	@include('layouts.link')
</head>
<body>
	<!-- grow -->
	@section('grow')
	<div class="container">
		<h2>Pembayaran</h2>
	</div>
	@stop
	<!-- grow -->

	@section('content')
		<div class="contact">
			<div class="container">
			<div class="contact-form">
		<div class="col-md-10 contact-grid">
			<form action="/pay" method="post">
						@if ($errors->any())
								<div class="alert alert-danger" role="alert">
										Please fix the following errors
								</div>
						@endif

						{!! csrf_field() !!}
						<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
								<input type="text"  id="nama" name="nama" placeholder="Nama" value="{{ $data['user']->name }}">
								@if($errors->has('nama'))
										<span class="help-block">{{ $errors->first('nama') }}</span>
								@endif
						</div>
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<input type="text" id="email" name="email" placeholder="Email" value="{{ $data['user']->email }}">
								@if($errors->has('email'))
										<span class="help-block">{{ $errors->first('email') }}</span>
								@endif
						</div>
						<div class="form-group{{ $errors->has('telp') ? ' has-error' : '' }}">
								<input type="text" id="telp" name="telp" placeholder="Nomor Telepon" value="{{ $data['user']->telp }}">
								@if($errors->has('telp'))
										<span class="help-block">{{ $errors->first('telp') }}</span>
								@endif
						</div>
						<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
								<textarea id="alamat" name="alamat" placeholder="Alamat Pengiriman">{{ $data['user']->alamat }}</textarea>
								@if($errors->has('alamat'))
										<span class="help-block">{{ $errors->first('alamat') }}</span>
								@endif
						</div>
						<div class="send">
							<input type="submit" value="Kirim">
						</div>
				</form>
		</div>
		<div class="col-md-2 contact-in">
				<div class="address-more">
				<h4>Cetak Nota</h4>
				<a href="#"><i class="fa fa-print" style="font-size: 9em; color:#8ce78a"></i></a>
				</div>
	</div>
	</div>
	</div>
	@stop
	<!--//content-->
</body>
</html>
