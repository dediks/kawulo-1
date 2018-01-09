	<?php $__env->startSection('title', 'Daftar'); ?>
	<?php echo $__env->make('layouts.link', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<!-- grow -->
	<?php $__env->startSection('grow'); ?>
	<div class="container">
		<h2>Daftar</h2>
	</div>
	<?php $__env->stopSection(); ?>
	<!-- grow -->

	<?php $__env->startSection('content'); ?>
		<div class="contact">
			<div class="container">
			<div class="contact-form">
		<div class="col-md-10 contact-grid">
			<form action="/home/register" method="post">
						<?php if($errors->any()): ?>
								<div class="alert alert-danger" role="alert">
										Please fix the following errors
								</div>
						<?php endif; ?>

						<?php echo csrf_field(); ?>

						<div class="form-group<?php echo e($errors->has('nama') ? ' has-error' : ''); ?>">
								<input type="text"  id="nama" name="nama" placeholder="Nama" value="<?php echo e(old('nama')); ?>">
								<?php if($errors->has('nama')): ?>
										<span class="help-block"><?php echo e($errors->first('nama')); ?></span>
								<?php endif; ?>
						</div>
						<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
								<input type="email" id="email" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>">
								<?php if($errors->has('email')): ?>
										<span class="help-block"><?php echo e($errors->first('email')); ?></span>
								<?php endif; ?>
						</div>
						<div class="form-group<?php echo e($errors->has('telp') ? ' has-error' : ''); ?>">
								<input type="text" id="telp" name="telp" placeholder="Nomor Telepon" value="<?php echo e(old('budi')); ?>">
								<?php if($errors->has('telp')): ?>
										<span class="help-block"><?php echo e($errors->first('telp')); ?></span>
								<?php endif; ?>
						</div>
						<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
								<input type="password" id="password" name="password" placeholder="Kata Sandi" value="<?php echo e(old('password')); ?>">
								<?php if($errors->has('sandi')): ?>
										<span class="help-block"><?php echo e($errors->first('sandi')); ?></span>
								<?php endif; ?>
						</div>
						<div class="form-group<?php echo e($errors->has('password2') ? ' has-error' : ''); ?>">
								<input type="password" id="password2" name="password2" placeholder="Konfirmasi Kata Sandi" value="<?php echo e(old('password2')); ?>">
								<?php if($errors->has('password2')): ?>
										<span class="help-block"><?php echo e($errors->first('password2')); ?></span>
								<?php endif; ?>
						</div>
						<div class="form-group<?php echo e($errors->has('alamat') ? ' has-error' : ''); ?>">
								<textarea id="alamat" name="alamat" placeholder="Alamat"><?php echo e(old('alamat')); ?></textarea>
								<?php if($errors->has('alamat')): ?>
										<span class="help-block"><?php echo e($errors->first('alamat')); ?></span>
								<?php endif; ?>
						</div>
						<div class="send">
							<input type="submit" value="Daftar">
						</div>
				</form>
		</div>

	</div>
	</div>
<?php $__env->stopSection(); ?>
<!--//content-->

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>