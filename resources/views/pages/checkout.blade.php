@extends('layouts.master')

	@section('title', 'Nota')

	@section('grow')
	<div class="container">
		<h2>Nota</h2>
	</div>
	@stop
	@section('content')
		<div class="container" id="dataSection">
			<div class="check">
				<h1>Keranjang (<span id="jumlahKeranjang">{{$data['count']}}</span>)</h1>
				<div class="col-md-9 cart-items">
					@foreach ($items as $key => $item)
						<div class="cart-header ourItem" id="beli{{$key}}">
							<div class="close" id="close{{$key}}" data-id="beli{{$key}}">
							</div>
							<input type="hidden" id="idTersembunyi{{$key}}" name="_token" value="{{$item->id}}">

							<div class="cart-sec simpleCart_shelfItem">
								<div class="cart-item cyc">
									<img src="{{url('storage/'.$item->gambar)}}" class="img-responsive" alt=""/>
								</div>
								<div class="cart-item-info">
									<h3><a href="/home/single/{{$item->id}}">{{$item->nama_barang}}</a></h3>
									<ul class="qty">
										<li><p>Kuantitas : {{$item->banyak}}</p></li>
									</ul>
									<div class="delivery">
										<p>Biaya Pengiriman : Rp. {{ number_format (0.7*$item->harga)}}</p>
										<span>Pengiriman 2-3 hari</span>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					@endforeach
				</div>
				<div class="col-md-3 cart-total">
					<a class="continue" href="/home">Tambah Belanja</a>
					<div class="price-details">
						<h3>Detail Biaya</h3>
						<span>Total</span>
						<span class="total1">Rp. {{ number_format($data['total']) }}</span>
						<span>Diskon</span>
						<span class="total1">Rp. {{ number_format($data['diskon']) }}</span>
						<span>Biaya Pengiriman</span>
						<span class="total1">Rp. {{ number_format($data['ongkir']) }}</span>
						<div class="clearfix"></div>
					</div>
					<ul class="total_price">
						<li class="last_price"> <h4>TOTAL</h4></li>
						<li class="last_price"><span>Rp. {{ number_format($data['total']+$data['ongkir']-$data['diskon']) }}</span></li>
						<div class="clearfix"> </div>
					</ul>
					<div class="clearfix"></div>
					<a class="order" href="/home/payment">Bayar</a>
				</div>
		<div class="clearfix"></div>
		</div>
	</div>

{{ csrf_field() }}
<script>
$(document).ready(function(){
	$('.ourItem').click(function(event) {
  	var idTombol = event.target.id;
		var idParent = $('#'+idTombol).parent().attr('id');
		var idData = $('#'+idParent).find('input').val();

		$('#'+idParent).fadeOut('slow',function(){
			$('#'+idParent).remove();

			$.post(
				'/home/checkout',
				{'id' : idData,  '_token': $('meta[name="csrf-token"]').attr('content')},
				function(data){
					if(data.status=='success'){
						window.location.replace(data.url);
					}
			})
		})
	});
});
</script>
@stop
