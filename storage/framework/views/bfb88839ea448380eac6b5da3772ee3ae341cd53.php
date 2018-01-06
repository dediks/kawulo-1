<!DOCTYPE html>
<html>
<head>
	<?php $__env->startSection('title', 'Produk'); ?>
	<?php echo $__env->make('layouts.link', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
	<!-- grow -->
		<?php $__env->startSection('grow'); ?>
		<div class="container">
			<h2>Produk</h2>
		</div>
		<?php $__env->stopSection(); ?>
	<!-- grow -->

		<?php $__env->startSection('content'); ?>
		<div class="pro-du">
		<div class="container">
			<div class="col-md-9 product1">

				<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if(($key+1)%2==1): ?>
					<div class=" bottom-product">
				<?php endif; ?>
					<div class="col-md-6 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							<a href="/home/single/<?php echo e($item->id); ?>"><img class="img-responsive" src="<?php echo e(url('storage/'.$item->gambar)); ?>" alt="">
							<div class="pro-grid">
										<span class="buy-in">BELI SEKARANG</span>
							</div>
						</a>
						</div>
						<p class="tun"><span><?php echo e(strtoupper($item->nama_barang)); ?></span><br>stok yang tersedia : <?php echo e($item->stock); ?></p>
						<div class="ca-rt">
							<a href="#" class="item_add"><p class="number item_price"><i> </i>Rp. <?php echo e($item->harga); ?></p></a>
						</div>
						<div class="clearfix"></div>
					</div>
						<?php if(($key+1)%2==0): ?>
								<div class="clearfix"> </div>
							</div>
						<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>

			<div class="col-md-3 prod-rgt">
				<div class=" pro-tp">
					<div class="pl-lft">
						<a href="/home/single"><img class="img-responsive" src="<?php echo e(url('images/l2.jpg')); ?>" alt=""></a>
					</div>
					<div class="pl-rgt">
						<h6><a href="/home/single">TRIBECA LIVING</a></h6>
						<p><a href="/home/single">Rp. 4.500.000</a></p>
					</div>
						<div class="clearfix"></div>
				</div>
				<div class=" pro-tp">
					<div class="pl-lft">
						<a href="/home/single"><img class="img-responsive" src="<?php echo e(url('images/l3.jpg')); ?>" alt=""></a>
					</div>
					<div class="pl-rgt">
						<h6><a href="/home/single">TRIBECA LIVING</a></h6>
						<p><a href="/home/single">Rp. 4.500.000</a></p>
					</div>
						<div class="clearfix"></div>
				</div>
				<div class=" pro-tp">
					<div class="pl-lft">
						<a href="/home/single"><img class="img-responsive" src="<?php echo e(url('images/l1.jpg')); ?>" alt=""></a>
					</div>
					<div class="pl-rgt">
						<h6><a href="/home/single">TRIBECA LIVING</a></h6>
						<p><a href="/home/single">Rp. 4.500.000</a></p>
					</div>
						<div class="clearfix"></div>
				</div>
				<div class="pr-btm">
				<h4>What Our Client Say</h4>
					<img class="img-responsive" src="<?php echo e(url('images/pi.jpg')); ?>" alt="">
					<h6>John</h6>
					<p>Lorem Ipsum is simply dummy text of the printing industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
			</div>
				<div class="clearfix"></div>
		</div>
	</div>
	<?php $__env->stopSection(); ?>
<!--//content-->
</body>
</html>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>