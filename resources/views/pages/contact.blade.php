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
					<form action="#" method="post">
						<input type="text" value="Nama" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">
					
						<input type="text" value="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
						<input type="text" value="Subjek" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Subject';}">
						
						<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Pesan</textarea>
						<div class="send">
							<input type="submit" value="Kirim">
						</div>
					</form>
				</div>
				<div class="col-md-4 contact-in">

						<div class="address-more">
						<h4>Alamat</h4>
							<p>Nama Perusahaan,</p>
							<p>Syalala syalala,</p>
							<p>Syalala syalala. </p>
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
				<iframe src="{{url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771')}}"></iframe>
			</div>
		</div>
		
	</div>
	@stop
<!--//content-->
</body>
</html>
