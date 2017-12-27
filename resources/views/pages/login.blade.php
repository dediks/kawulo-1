@extends('layouts.master') 

<!DOCTYPE html>
<html>
<head>
	@section('title', 'Masuk')
	@include('layouts.link')
</head>
<body>
	<!-- grow -->
		@section('grow')
		<div class="container">
			<h2>Masuk</h2>
		</div>
		@stop
	<!-- grow -->
	
		@section('content')
		<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Masuk</h3>
					<form action="#" method="post">
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Password" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Masuk">
					</form>
				</div>
				<div class="forg">
					<a href="#" class="forg-left">Forgot Password</a>
					<a href="/home/register" class="forg-right">Register</a>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>
	@stop
<!--//content-->
</body>
</html>
