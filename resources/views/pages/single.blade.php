@extends('layouts.master')

<!DOCTYPE html>
<html>
<head>
	@section('title', 'Detail')
	@include('layouts.link')
</head>
<body>
	<!-- grow -->
	@section('grow')
	<div class="container">
		<h2>Detail</h2>
	</div>
	@stop
	<!-- grow -->

	@section('content')
	<div class="product">
		<div class="container">
			<div class="product-price1">
				<div class="top-sing">
					<div class="col-md-7 single-top">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="{{url('storage/'.$item->gambar)}}">
									<div class="thumb-image"> <img src="{{url('storage/'.$item->gambar)}}" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="{{url('storage/'.$item->gambar)}}">
									<div class="thumb-image"> <img src="{{url('storage/'.$item->gambar)}}" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="{{url('storage/'.$item->gambar)}}">
									<div class="thumb-image"> <img src="{{url('storage/'.$item->gambar)}}" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="{{url('storage/'.$item->gambar)}}">
									<div class="thumb-image"> <img src="{{url('storage/'.$item->gambar)}}" data-imagezoom="true" class="img-responsive"> </div>
								</li>
							</ul>
						</div>

						<div class="clearfix"> </div>
						<!-- slide -->


						<!-- FlexSlider -->
						<script defer src="{{url('js/jquery.flexslider.js')}}"></script>
						<link rel="stylesheet" href="{{url('css/flexslider.css')}}" type="text/css" media="screen" />
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
		<h4>{{ $item->nama_barang }}</h4>
		<div class="star-on">

			<div class="stock">
				<p>Stok yang tersedia : {{ $item->stock }}</p>

			</div>

			<div class="clearfix"> </div>
		</div>

		<h5 class="item_price">Rp. {{ $item->harga }}</h5>
		<p>{{ $item->deskripsi }} </p>
		<div class="available">
			<ul>
				<li>Color
					<select>
						<option>Silver</option>
						<option>Black</option>
						<option>Dark Black</option>
						<option>Red</option>
					</select></li>
					<li class="size-in">Size<select>
						<option>Large</option>
						<option>Medium</option>
						<option>small</option>
						<option>Large</option>
						<option>small</option>
					</select></li>
					<div class="clearfix"> </div>
				</ul>
			</div>

			<a href="/home/cart/add/{{$item->id}}" class="add-cart item_add" onclick="refreshPage()">MASUKKAN KERANJANG</a>

		</div>
	</div>
	<div class="clearfix"> </div>
</div>
<!---->

<div class=" bottom-product">
	<div class="col-md-4 bottom-cd simpleCart_shelfItem">
		<div class="product-at ">
			<a href="#"><img class="img-responsive" src="{{url('images/pi3.jpg')}}" alt="">
				<div class="pro-grid">
					<span class="buy-in">BELI SEKARANG</span>
				</div>
			</a>
		</div>
		<p class="tun"><span>Lorem ipsum establish</span><br>CLARISSA</p>
		<div class="ca-rt">
			<a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>
		</div>
	</div>
	<div class="col-md-4 bottom-cd simpleCart_shelfItem">
		<div class="product-at ">
			<a href="#"><img class="img-responsive" src="{{url('images/pi1.jpg')}}" alt="">
				<div class="pro-grid">
					<span class="buy-in">BELI SEKARANG</span>
				</div>
			</a>
		</div>
		<p class="tun"><span>Lorem ipsum establish</span><br>CLARISSA</p>
		<div class="ca-rt">
			<a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>
		</div>					</div>
		<div class="col-md-4 bottom-cd simpleCart_shelfItem">
			<div class="product-at ">
				<a href="#"><img class="img-responsive" src="{{url('images/pi4.jpg')}}" alt="">
					<div class="pro-grid">
						<span class="buy-in">BELI SEKARANG</span>
					</div>
				</a>
			</div>
			<p class="tun"><span>Lorem ipsum establish</span><br>CLARISSA</p>
			<div class="ca-rt">
				<a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>
			</div>					</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
</div>
@stop
<!--//content-->
</body>
</html>
