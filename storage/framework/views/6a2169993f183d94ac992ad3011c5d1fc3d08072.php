<!DOCTYPE html>
<html>
<head>
	<?php $__env->startSection('title', 'Nota'); ?>
	<?php echo $__env->make('layouts.link', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
	<!-- grow -->
	<?php $__env->startSection('grow'); ?>
	<div class="container">
		<h2>Nota</h2>
	</div>
	<?php $__env->stopSection(); ?>
	<!-- grow -->

	<?php $__env->startSection('content'); ?>
	<div class="container">
		<div class="check">
			<h1>Keranjang (<?php echo e($data['count']); ?>)</h1>
			<div class="col-md-9 cart-items">

				

			<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<script>$(document).ready(function(c) {
				$('.close<?php echo e($key+1); ?>').on('click', function(c){
					$('.cart-header<?php echo e($key+1); ?>').fadeOut('slow', function(c){
						$('.cart-header<?php echo e($key+1); ?>').remove();
					});
				});
			});
		</script>
		<div class="cart-header<?php echo e($key+1); ?>">
			<div class="close<?php echo e($key+1); ?>"> </div>
			<div class="cart-sec simpleCart_shelfItem">
				<div class="cart-item cyc">
					<img src="<?php echo e(url('storage/'.$item->gambar)); ?>" class="img-responsive" alt=""/>
				</div>
				<div class="cart-item-info">
					<h3><a href="/home/single/<?php echo e($item->id); ?>"><?php echo e($item->nama_barang); ?></a></h3>
					<ul class="qty">
						<li><p>Kuantitas : <?php echo e($item->banyak); ?></p></li>
					</ul>
					<div class="delivery">
						<p>Biaya Pengiriman : Rp. <?php echo e(number_format (0.7*$item->harga)); ?></p>
						<span>Pengiriman 2-3 hari</span>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</div>
	<div class="col-md-3 cart-total">
		<a class="continue" href="/home">Tambah Belanja</a>
		<div class="price-details">
			<h3>Detail Biaya</h3>
			<span>Total</span>
			<span class="total1">Rp. <?php echo e(number_format($data['total'])); ?></span>
			<span>Diskon</span>
			<span class="total1">Rp. <?php echo e(number_format($data['diskon'])); ?></span>
			<span>Biaya Pengiriman</span>
			<span class="total1">Rp. <?php echo e(number_format($data['ongkir'])); ?></span>
			<div class="clearfix"></div>
		</div>
		<ul class="total_price">
			<li class="last_price"> <h4>TOTAL</h4></li>
			<li class="last_price"><span>Rp. <?php echo e(number_format($data['total']+$data['ongkir']-$data['diskon'])); ?></span></li>
			<div class="clearfix"> </div>
		</ul>


		<div class="clearfix"></div>
		<a class="order" href="/home/payment">Bayar</a>
	</div>

	<div class="clearfix">
	</div>
</div>
<?php $__env->stopSection(); ?>
<!--//content-->
</body>
</html>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>