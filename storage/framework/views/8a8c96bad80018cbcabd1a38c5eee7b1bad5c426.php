<!DOCTYPE html>
<html>
<head>
	<?php $__env->startSection('title', 'Home'); ?>
	<?php echo $__env->make('layouts.link', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
	<?php $__env->startSection('grow', ''); ?>
	<?php $__env->startSection('content'); ?>
	<div class="banner">
		<div class="container">
			  <script src="<?php echo e(url('js/responsiveslides.min.js')); ?>"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
			<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
			    <li>

						<div class="banner-text">
							<h3>Lorem Ipsum is   </h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>

						</div>

				</li>
				<li>

						<div class="banner-text">
							<h3>There are many  </h3>
						<p>Popular belief Contrary to , Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>


						</div>

				</li>
				<li>
						<div class="banner-text">
							<h3>Sed ut perspiciatis</h3>
						<p>Lorem Ipsum is not simply random text. Contrary to popular belief, It has roots in a piece of classical Latin literature from 45 BC.</p>


						</div>

				</li>
			</ul>
		</div>

	</div>
</div>
<div class="container">
	<div class="cont">
		<div class="content">
			<div class="content-top-bottom">
				<h2>PRODUK KAMI</h2>
				<div class="col-md-6 men">
					<a href="/home/single" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="<?php echo e(url('images/t1.jpg')); ?>" alt="">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-top top-in   b-delay03 ">
								<span>TRIBECA LIVING</span>
							</h3>
						</div>
					</a>


				</div>
				<div class="col-md-6">

					<div class="col-md1 ">
						<a href="/home/single" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="<?php echo e(url('images/t2.jpg')); ?>" alt="">
							<div class="b-wrapper">
								<h3 class="b-animate b-from-top top-in1   b-delay03 ">
									<span>CLARISSA</span>
								</h3>
							</div>
						</a>
					</div>
					
					

	<div class="col-md2">
		<div class="col-md-6 men1">
			<a href="/home/single" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="<?php echo e(url('images/t3.jpg')); ?>" alt="">
				<div class="b-wrapper">
					<h3 class="b-animate b-from-top top-in2   b-delay03 ">
						<span>COLORMATE</span>
					</h3>
				</div>
			</a>
		</div>

		<div class="col-md-6 men2">
			<a href="/home/single" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="<?php echo e(url('images/t4.jpg')); ?>" alt="">
				<div class="b-wrapper">
					<h3 class="b-animate b-from-top top-in2   b-delay03 ">
						<span>HERLEQUIN</span>
					</h3>
				</div>
			</a>
		</div>
		
	</div>
</div>
<div class="clearfix"> </div>
</div>

<div class="content-top">
	<h1>PRODUK BARU</h1>
	<div class="grid-in">
		<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-3 grid-top simpleCart_shelfItem">
				<a href="/home/single/<?php echo e($item->id); ?>" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="<?php echo e(url('storage/'.$item->gambar)); ?>" alt="">
					<div class="b-wrapper">
						<h3 class="b-animate b-from-left    b-delay03 ">
							<span><?php echo e($item->nama_barang); ?></span>
						</h3>
					</div>
				</a>
				<p><a href="/home/single/<?php echo e($item->id); ?>"><?php echo e($item->nama_barang); ?></a></p>
				<a href="/home/cart/add/<?php echo e($item->id); ?>" class="item_add"><p class="number item_price"><i> </i><?php echo e($item->harga); ?></p></a>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<!-- <div class="col-md-3 grid-top simpleCart_shelfItem">
		<a href="/home/single" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="<?php echo e(url('images/pi1.jpg')); ?>" alt="">
		<div class="b-wrapper">
		<h3 class="b-animate b-from-left    b-delay03 ">
		<span>ESSENTIAL</span>
	</h3>
</div>
</a>
<p><a href="/home/single">ESSENTIAL</a></p>
<a href="#" class="item_add"><p class="number item_price"><i> </i>Rp. 5.000.000</p></a>
</div>
<div class="col-md-3 grid-top simpleCart_shelfItem">
<a href="/home/single" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="<?php echo e(url('images/pi2.jpg')); ?>" alt="">
<div class="b-wrapper">
<h3 class="b-animate b-from-left    b-delay03 ">
<span>CLARISSA</span>
</h3>
</div>
</a>
<p><a href="/home/single">CLARISSA</a></p>
<a href="#" class="item_add"><p class="number item_price"><i> </i>Rp. 5.000.000</p></a>
</div>
<div class="col-md-3 grid-top">
<a href="/home/single" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="<?php echo e(url('images/pi4.jpg')); ?>" alt="">
<div class="b-wrapper">
<h3 class="b-animate b-from-left    b-delay03 ">
<span>LITTLE HOME</span>
</h3>
</div>
</a>
<p><a href="/home/single">LITTLE HOME</a></p>
<a href="#" class="item_add"><p class="number item_price"><i> </i>Rp. 5.000.000</p></a>
</div> -->
<div class="clearfix"> </div>
</div>
</div>

<div class="clearfix"> </div>
</div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<!--//content-->
</body>
</html>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>