<!DOCTYPE html>
<html>
<head>
	<title>Kawulo | <?php echo $__env->yieldContent('title'); ?></title>
	<?php echo $__env->make('layouts.link', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
	<div class="header">
		<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
	<div class="grow">
		<?php echo $__env->yieldContent('grow'); ?>
	</div>
	<div>
		<?php echo $__env->yieldContent('content'); ?>
	</div>
	<div class="footer w3layouts">
		<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
</body>
</html>