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

					<form action="/send" method="post">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                <?php endif; ?>

                <?php echo csrf_field(); ?>

                <div class="form-group<?php echo e($errors->has('nama') ? ' has-error' : ''); ?>">
                    <input type="text"  id="nama" name="nama" placeholder="Nama" value="<?php echo e($user->name); ?>">
                    <?php if($errors->has('nama')): ?>
                        <span class="help-block"><?php echo e($errors->first('nama')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                    <input type="text" id="email" name="email" placeholder="Email" value="<?php echo e($user->email); ?>">
                    <?php if($errors->has('email')): ?>
                        <span class="help-block"><?php echo e($errors->first('email')); ?></span>
                    <?php endif; ?>
                </div>
								<div class="form-group<?php echo e($errors->has('subjek') ? ' has-error' : ''); ?>">
                    <input type="text" id="subjek" name="subjek" placeholder="Subjek" value="<?php echo e(old('subjek')); ?>">
                    <?php if($errors->has('subjek')): ?>
                        <span class="help-block"><?php echo e($errors->first('subjek')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group<?php echo e($errors->has('pesan') ? ' has-error' : ''); ?>">
                    <textarea id="pesan" name="pesan" placeholder="Pesan"><?php echo e(old('pesan')); ?></textarea>
                    <?php if($errors->has('pesan')): ?>
                        <span class="help-block"><?php echo e($errors->first('pesan')); ?></span>
                    <?php endif; ?>
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
				<iframe src="<?php echo e(url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6838938759383!2d112.79270954995806!3d-7.276763594721912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa10ea2ae883%3A0xbe22c55d60ef09c7!2sElectronics+Engineering+Polytechnic+Institute+of+Surabaya+(EEPIS)!5e0!3m2!1sen!2sid!4v1514457159439')); ?>"></iframe>
			</div>
		</div>

	</div>
	<?php $__env->stopSection(); ?>
<!--//content-->
</body>
</html>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>