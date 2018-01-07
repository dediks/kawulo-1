<!DOCTYPE html>
<html>
<head>
	<?php $__env->startSection('title', 'Detail'); ?>
	<?php echo $__env->make('layouts.link', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
	<!-- grow -->
	<?php $__env->startSection('grow'); ?>
	<div class="container">
		<h2>Detail</h2>
	</div>
	<?php $__env->stopSection(); ?>
	<!-- grow -->

	<?php $__env->startSection('content'); ?>
	<div class="product">
		<div class="container">
			<div class="product-price1">
				<div class="top-sing">
					<div class="col-md-7 single-top">
						<div class="flexslider">
							<ul class="slides">

								<?php $__currentLoopData = json_decode($images->gambar, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li data-thumb="<?php echo e(url('storage/'.$image)); ?>">
										<div class="thumb-image"> <img src="<?php echo e(url('storage/'.$image)); ?>" data-imagezoom="true" class="img-responsive"> </div>
									</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								


							</ul>
						</div>

						<div class="clearfix"> </div>
						<!-- slide -->


						<!-- FlexSlider -->
						<script defer src="<?php echo e(url('js/jquery.flexslider.js')); ?>"></script>
						<link rel="stylesheet" href="<?php echo e(url('css/flexslider.css')); ?>" type="text/css" media="screen" />
						<script>
// Can also be used with $(document).ready()
$(window).load(function() {
	$('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	});
});
</script>
</div>
<div class="col-md-5 single-top-in simpleCart_shelfItem">
	<div class="single-para ">
		<h4><?php echo e(strtoupper($item->nama_barang)); ?></h4>
		<div class="star-on">

			<div class="stock">
				<p>stok yang tersedia : <?php echo e($item->stock); ?></p>

			</div>

			<div class="clearfix"> </div>
		</div>

		<h5 class="item_price">Rp. <?php echo e(number_format($item->harga)); ?></h5>
		<p><?php echo e($item->deskripsi); ?> </p>
<a href="/home/cart/add/<?php echo e($item->id); ?>" class="add-cart item_add" onclick="refreshPage()">MASUKKAN KERANJANG</a>

		</div>
	</div>
	<div class="clearfix"> </div>
</div>
<!---->

<div class=" bottom-product">
	<?php $__currentLoopData = $others; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $other): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-md-4 bottom-cd simpleCart_shelfItem">
			<div class="product-at ">
				<a href="/home/single/<?php echo e($other->id); ?>"><img class="img-responsive" src="<?php echo e(url('storage/'.$other->gambar)); ?>" alt="">
					<div class="pro-grid">
						<span class="buy-in">BELI SEKARANG</span>
					</div>
				</a>
			</div>
			<p class="tun"><span><?php echo e($other->nama_barang); ?></span><br>stock yang tersedia : <?php echo e($other->stock); ?></p>
			<div class="ca-rt">
				<a href="#" class="item_add"><p class="number item_price"><i> </i>Rp. <?php echo e(number_format($other->harga)); ?></p></a>
			</div>
		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<!--//content-->
</body>
</html>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>