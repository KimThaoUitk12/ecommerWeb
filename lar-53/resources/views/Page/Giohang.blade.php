@extends('master')
@section('content')
<div class="row">
	<script type="text/javascript">
		$(document).ready(function(){
			$(".BCapnhat").click(function(e){
				e.preventDefault();
				var sl=$(this).parents().val();
				var id=$(this).attr("id");
				$.ajax({
					url:'capnhat-giohang/'+id+'/'+sl,
					type:'GET',
					dataType:"html",
					data:{
						"_token":_token,
						"sl":sl,
						"id":id
					},
					success:function(data){
						loacation.reload();
					},
					error: function(){
				        alert("yeah");
				   }
				});
			});
		});
	</script>
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Giỏ Hàng</strong> Của Bạn </span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Xóa</th>
									<th>Mặt hàng</th>
									<th> Tên Sản Phẩm </th>
									<th> Giá trên 1 sản phẩm </th>
									<th> Số Lượng </th>
									<th> Giá Tiền </th>
									<!-- <th> Tổng </th> -->
								</tr>
							</thead>
							<tbody id="body">
								<form method="POST" action="">
									<input type="hidden" name="_token" value="{{csrf_token()}}">
								@if(Session::has('cart'))
								@foreach($sp_in_cart as $sp)
								<div class="cart">
									<tr class="info">
										<td><a href="{{route('xoagiohang',$sp['item']['MASP'])}}"><input type="button" value="Xóa"></a></td>
										<td><a href="{{route('chitietsanpham',$sp['item']['MASP'])}}"><img alt="" src="source/images/Iphone/{{$sp['item']['ANHDAIDIEN']}}"></a></td>
										@if($sp['item']['GIAKHUYENMAI']==0)
										<td>{{$sp['item']['TENSP']}}</td>
										<td class="gia">{{$sp['item']['GIA']}}</td>
										@else
										<td>{{$sp['item']['TENSP']}}</td>
										<td class="gia">{{$sp['item']['GIAKHUYENMAI']}}</td>
										@endif
										<td class="capnhat">
											<input  size="3" class="sl" type="text" value="{{$sp['qty']}}" class="input-mini">
											<input type="button" name="cập nhật" class="BCapnhat" id="{{$sp['item']['MASP']}}" value="Cập nhật" >
										</td>
										<td class="dongia">{{number_format($sp['price'])}}đ</td>
									</tr>			  
								</div>
								<tr>
								</tr>
								@endforeach
								@endif 
								</form> 
								
							</tbody>
							@if(Session::has('cart'))
							<strong><font size="5"><p id="total">Tổng cộng: {{number_format($totalprice)}} đ</p></font></strong>
							@endif
						</table>
						
						
						<p class="buttons center">				
							<!-- <button class="btn" type="button"> Cập Nhật </button>
							<button class="btn" type="button"> Tiếp Tục </button> -->
							<a href="{{route('trangdathang')}}"><button class="btn btn-inverse" type="submit" id="checkout">Thanh Toán</button></a>
						</p>					
					</div>
					<div class="span3 col">
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">Hãng sản xuất</li>
								<li><a href="products.html">Samsung</a></li>
								<li class="active"><a href="products.html">Xiaomi</a></li>
								<li><a href="products.html">Oppo</a></li>
								<li><a href="products.html">Realme  </a></li>
								<li><a href="products.html">Iphone </a></li>
							</ul>
							<br/>
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Đề xuất</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<a href="product_detail.html"><img alt="" src="source/anh_chitiet_sanpham/nn1.png"></a><br/>
													<!-- <a href="product_detail.html" class="title">Asus X441NA N4200/4GB/500GB/Win10</a><br/> -->
													<a href="#" class="category">ASUS Laptop</a>
													<p class="price">7.490.000đ</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<a href="product_detail.html"><img alt="" src="source/anh_chitiet_sanpham/nn2.png"></a><br/>
													<!-- <a href="product_detail.html" class="title">Laptop HP 15 bs161TU i5 8250U/4GB/1TB/Win10/</a><br/> -->
													<a href="#" class="category">HP Laptop</a>
													<p class="price">13.990.000đ</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>
				@endsection