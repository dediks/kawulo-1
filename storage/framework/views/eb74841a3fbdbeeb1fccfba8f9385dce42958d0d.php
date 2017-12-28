<!DOCTYPE html>
<html>
<head>
	<?php $__env->startSection('title', 'Kontak'); ?>
	<?php echo $__env->make('layouts.link', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
	<!-- grow -->
		<?php $__env->startSection('grow'); ?>
		<div class="container">
			<h2>Kontak</h2>
		</div>
		<?php $__env->stopSection(); ?>
	<!-- grow -->

		<?php $__env->startSection('content'); ?>
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
				<iframe src="<?php echo e(url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6838938759383!2d112.79270954995806!3d-7.276763594721912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa10ea2ae883%3A0xbe22c55d60ef09c7!2sElectronics+Engineering+Polytechnic+Institute+of+Surabaya+(EEPIS)!5e0!3m2!1sen!2sid!4v1514457159439')); ?>"></iframe>
			</div>
		</div>

	</div>
	<?php $__env->stopSection(); ?>
<!--//content-->
</body>
</html>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>