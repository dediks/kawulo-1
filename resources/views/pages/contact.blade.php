@extends('layouts.master')

<!DOCTYPE html>
<html>
<head>
	@section('title', 'Kontak')
	@include('layouts.link')
</head>
<body>
	<!-- grow -->
		@section('grow')
		<div class="container">
			<h2>Kontak</h2>
		</div>
		@stop
	<!-- grow -->

		@section('content')
		<div class="contact">
			<div class="container">
			<div class="contact-form">

				<div class="col-md-8 contact-grid">

					<form action="/send" method="post">
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
								<div class="form-group{{ $errors->has('subjek') ? ' has-error' : '' }}">
                    <input type="text" id="subjek" name="subjek" placeholder="Subjek" value="{{ old('subjek') }}">
                    @if($errors->has('subjek'))
                        <span class="help-block">{{ $errors->first('subjek') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('pesan') ? ' has-error' : '' }}">
                    <textarea id="pesan" name="pesan" placeholder="Pesan">{{ old('pesan') }}</textarea>
                    @if($errors->has('pesan'))
                        <span class="help-block">{{ $errors->first('pesan') }}</span>
                    @endif
                </div>
								<div class="send">
									<input type="submit" value="Kirim">
								</div>
            </form>

				</div>
				<div class="col-md-4 contact-in">

						<div class="address-more">
						<h4>Alamat</h4>
							<p>Kawulo Furniture Company,</p>
							<p>Politeknik Elektronika Negeri Surabaya,</p>
							<p>Surabaya, Jawa Timur, Indonesia. </p>
						</div>
						<div class="address-more">
						<h4>Kontak</h4>
							<p>Telp : 081234567890</p>
							<p>Fax : 190-4509-494</p>
							<p>Email : <a href="mailto:contact@example.com"> kawulo@example.com</a></p>
						</div>

				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="map">
				<iframe src="{{url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6838938759383!2d112.79270954995806!3d-7.276763594721912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa10ea2ae883%3A0xbe22c55d60ef09c7!2sElectronics+Engineering+Polytechnic+Institute+of+Surabaya+(EEPIS)!5e0!3m2!1sen!2sid!4v1514457159439')}}"></iframe>
			</div>
		</div>

	</div>
	@stop
<!--//content-->
</body>
</html>
