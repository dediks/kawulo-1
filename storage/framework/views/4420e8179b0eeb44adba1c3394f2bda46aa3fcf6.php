<!DOCTYPE html>
<html>
<head>
	<?php $__env->startSection('title', 'Pembayaran'); ?>
	<?php echo $__env->make('layouts.link', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
	<!-- grow -->
	<?php $__env->startSection('grow'); ?>
	<div class="container">
		<h2>Pembayaran</h2>
	</div>
	<?php $__env->stopSection(); ?>
	<!-- grow -->

	<?php $__env->startSection('content'); ?>
		<div class="contact">
			<div class="container">
			<div class="contact-form">
		<div class="col-md-10 contact-grid">
			<form action="/pay" method="post">
						<?php if($errors->any()): ?>
								<div class="alert alert-danger" role="alert">
										Please fix the following errors
								</div>
						<?php endif; ?>

						<?php echo csrf_field(); ?>

						<div class="form-group<?php echo e($errors->has('nama') ? ' has-error' : ''); ?>">
								<input type="text"  id="nama" name="nama" placeholder="Nama" value="<?php echo e($data['user']->name); ?>">
								<?php if($errors->has('nama')): ?>
										<span class="help-block"><?php echo e($errors->first('nama')); ?></span>
								<?php endif; ?>
						</div>
						<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
								<input type="text" id="email" name="email" placeholder="Email" value="<?php echo e($data['user']->email); ?>">
								<?php if($errors->has('email')): ?>
										<span class="help-block"><?php echo e($errors->first('email')); ?></span>
								<?php endif; ?>
						</div>
						<div class="form-group<?php echo e($errors->has('telp') ? ' has-error' : ''); ?>">
								<input type="text" id="telp" name="telp" placeholder="Nomor Telepon" value="<?php echo e($data['user']->telp); ?>">
								<?php if($errors->has('telp')): ?>
										<span class="help-block"><?php echo e($errors->first('telp')); ?></span>
								<?php endif; ?>
						</div>
						<div class="form-group<?php echo e($errors->has('alamat') ? ' has-error' : ''); ?>">
								<textarea id="alamat" name="alamat" placeholder="Alamat Pengiriman"><?php echo e($data['user']->alamat); ?></textarea>
								<?php if($errors->has('alamat')): ?>
										<span class="help-block"><?php echo e($errors->first('alamat')); ?></span>
								<?php endif; ?>
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
	<?php $__env->stopSection(); ?>
	<!--//content-->
</body>
</html>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>