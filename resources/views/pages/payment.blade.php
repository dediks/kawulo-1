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
	<div class="login">
		<div class="main-agileits">
			<div class="form-w3agile form1">
				<form action="#" method="post">
					<div class="key">
						<i class="fa fa-user" aria-hidden="true"></i>
						<input  type="text" value="Username" name="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
						<div class="clearfix"></div>
					</div>
					<div class="key">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<input type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<div class="clearfix"></div>
					</div>
					<div class="key">
						<i class="fa fa-lock" aria-hidden="true"></i>
						<input type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
						<div class="clearfix"></div>
					</div>
					<div class="key">
						<i class="fa fa-lock" aria-hidden="true"></i>
						<input type="password" value="Konfirmasi Password" name="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="">
						<div class="clearfix"></div>
					</div>
					<input type="submit" value="Kirim">
				</form>
			</div>
		</div>
	</div>
	@stop
	<!--//content-->
</body>
</html>
