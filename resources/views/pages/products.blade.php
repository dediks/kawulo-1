@extends('layouts.master')

<!DOCTYPE html>
<html>
<head>
	@section('title', 'Produk')
	@include('layouts.link')
</head>
<body>
	<!-- grow -->
		@section('grow')
		<div class="container">
			<h2>Produk</h2>
		</div>
		@stop
	<!-- grow -->

		@section('content')
		<div class="pro-du">
		<div class="container">
			<div class="col-md-9 product1">

				@foreach ($items as $key => $item)
				@if(($key+1)%2==1)
					<div class=" bottom-product">
				@endif
					<div class="col-md-6 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
<<<<<<< HEAD
							<a href="/home/single/{{$item->id}}"><img class="img-responsive" src="{{url('storage/'.$item->gambar)}}" alt="">
							<div class="pro-grid">
										<span class="buy-in">BELI SEKARANG</span>
							</div>
						</a>
=======
							<img class="img-responsive" src="{{url('images/pi3.jpg')}}" alt="">
							<div class="pro-grid">
										<a href="#"><span class="item_add">Buy Now</span></a>
							</div>
>>>>>>> master
						</div>
						<p class="tun"><span>{{$item->nama_barang}}</span><br>stok yang tersedia : {{$item->stock}}</p>
						<div class="ca-rt">
<<<<<<< HEAD
							<a href="#" class="item_add"><p class="number item_price"><i> </i>Rp. {{$item->harga}}</p></a>
						</div>
						<div class="clearfix"></div>
					</div>
						@if(($key+1)%2==0)
								<div class="clearfix"> </div>
							</div>
						@endif
				@endforeach
=======
							<a href="#" class="item_add"><p class="number item_price"><i> </i>Rp. 5.400.000</p></a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							<a href="/home/single"><img class="img-responsive" src="{{url('images/pi1.jpg')}}" alt="">
							<div class="pro-grid">
										<span class="buy-in">Buy Now</span>
							</div>
						</a>
						</div>
						<p class="tun"><span>Lorem ipsum establish</span><br>CLARISSA</p>
						<div class="ca-rt">
							<a href="#" class="item_add"><p class="number item_price"><i> </i>Rp. 5.400.000</p></a>
						</div>
						<div class="clearfix"></div>
					</div>
						<div class="clearfix"> </div>
				</div>
				<div class=" bottom-product">
					<div class="col-md-6 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							<a href="/home/single"><img class="img-responsive" src="{{url('images/pi5.jpg')}}" alt="">
							<div class="pro-grid">
										<span class="buy-in">Buy Now</span>
							</div>
						</a>
						</div>
						<p class="tun"><span>Lorem ipsum establish</span><br>CLARISSA</p>
						<div class="ca-rt">
							<a href="#" class="item_add"><p class="number item_price"><i> </i>Rp. 5.400.000</p></a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							<a href="/home/single"><img class="img-responsive" src="{{url('images/pi.jpg')}}" alt="">
							<div class="pro-grid">
										<span class="buy-in">Buy Now</span>
							</div>
						</a>
						</div>
						<p class="tun"><span>Lorem ipsum establish</span><br>CLARISSA</p>
						<div class="ca-rt">
							<a href="#" class="item_add"><p class="number item_price"><i> </i>Rp. 5.400.000</p></a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"> </div>
				</div>
>>>>>>> master
				</div>

			<div class="col-md-3 prod-rgt">
				<div class=" pro-tp">
					<div class="pl-lft">
						<a href="/home/single"><img class="img-responsive" src="{{url('images/l2.jpg')}}" alt=""></a>
					</div>
					<div class="pl-rgt">
						<h6><a href="/home/single">TRIBECA LIVING</a></h6>
						<p><a href="/home/single">Rp. 4.500.000</a></p>
					</div>
						<div class="clearfix"></div>
				</div>
				<div class=" pro-tp">
					<div class="pl-lft">
						<a href="/home/single"><img class="img-responsive" src="{{url('images/l3.jpg')}}" alt=""></a>
					</div>
					<div class="pl-rgt">
						<h6><a href="/home/single">TRIBECA LIVING</a></h6>
						<p><a href="/home/single">Rp. 4.500.000</a></p>
					</div>
						<div class="clearfix"></div>
				</div>
				<div class=" pro-tp">
					<div class="pl-lft">
						<a href="/home/single"><img class="img-responsive" src="{{url('images/l1.jpg')}}" alt=""></a>
					</div>
					<div class="pl-rgt">
						<h6><a href="/home/single">TRIBECA LIVING</a></h6>
						<p><a href="/home/single">Rp. 4.500.000</a></p>
					</div>
						<div class="clearfix"></div>
				</div>
				<div class="pr-btm">
				<h4>What Our Client Say</h4>
					<img class="img-responsive" src="{{url('images/pi.jpg')}}" alt="">
					<h6>John</h6>
					<p>Lorem Ipsum is simply dummy text of the printing industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
			</div>
				<div class="clearfix"></div>
		</div>
	</div>
	@stop
<!--//content-->
</body>
</html>
