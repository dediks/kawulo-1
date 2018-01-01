<!DOCTYPE html>
<html>
<head>
	<?php $__env->startSection('title', 'Daftar'); ?>
	<?php echo $__env->make('layouts.link', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
	<!-- grow -->
	<?php $__env->startSection('grow'); ?>
	<div class="container">
		<h2>Daftar</h2>
	</div>
	<?php $__env->stopSection(); ?>
	<!-- grow -->

	<?php $__env->startSection('content'); ?>
	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Daftar</h3>
					<form action="#" method="post">
							<div class="key">
								<i class="fa fa-user" aria-hidden="true"></i>
								<input  type="text" value="Username" name="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
								<div class="clearfix"></div>
							</div>
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
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Konfirmasi Password" name="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-home" aria-hidden="true"></i>
							<input  type="text" value="Alamat" name="Alamat" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Alamat';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Kirim">
					</form>
				</div>
			</div>
		</div>
<?php $__env->stopSection(); ?>
<!--//content-->
</body>
</html>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>