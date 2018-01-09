@extends('layouts.master')

	@section('title', 'Home')

	@section('grow', '')
	@section('content')
		<div class="banner">
			<div class="container">
			  <script src="{{url('js/responsiveslides.min.js')}}"></script>
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
				<div id="top" class="callbacks_container">
				<ul class="rslides" id="slider">
					<li>
						<div class="banner-text">
							<h3>Lorem Ipsum is</h3>
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
						<a href="/home/single" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{url('images/t1.jpg')}}" alt="">
							<div class="b-wrapper">
								<h3 class="b-animate b-from-top top-in   b-delay03 ">
									<span>TRIBECA LIVING</span>
								</h3>
							</div>
						</a>
					</div>
					<div class="col-md-6">
							<a href="/home/single" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{url('images/t2.jpg')}}" alt="">
								<div class="col-md1 ">
								<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in1   b-delay03 ">
										<span>CLARISSA</span>
									</h3>
								</div>
							</a>
						</div>
						<div class="col-md2">
							<div class="col-md-6 men1">
								<a href="/home/single" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{url('images/t3.jpg')}}" alt="">
									<div class="b-wrapper">
										<h3 class="b-animate b-from-top top-in2   b-delay03 ">
											<span>COLORMATE</span>
										</h3>
									</div>
								</a>
							</div>
							<div class="col-md-6 men2">
								<a href="/home/single" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{url('images/t4.jpg')}}" alt="">
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
						@foreach($items as $item)
							<div class="col-md-3 grid-top simpleCart_shelfItem">
								<a href="/home/single/{{$item->id}}" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{{url('storage/'.$item->gambar)}}" alt="">
									<div class="b-wrapper">
										<h3 class="b-animate b-from-left b-delay03 ">
											<span>{{$item->nama_barang}}</span>
										</h3>
									</div>
								</a>
								<p><a href="/home/single/{{$item->id}}">{{$item->nama_barang}}</a></p>
								<a href="/home/cart/add/{{$item->id}}" class="item_add"><p class="number item_price"><i> </i>Rp. {{number_format($item->harga)}}</p></a>
							</div>
						@endforeach
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
				<div class="row text-center">
					{{ $items->links()}}
				</div>
			</div>
		</div>
	</div>
@stop
<!--//content-->
