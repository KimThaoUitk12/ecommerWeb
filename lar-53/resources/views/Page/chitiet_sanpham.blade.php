@extends('master')
@section('content')
<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
								<a href="themes/images/cloth/laptop1.png" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="source/images/Iphone/{{$sanpham->ANHDAIDIEN}}"></a>												
								<ul class="thumbnails small">
								@foreach($anh as $img)							
									<li class="span1">
										<a href="anh_chitiet_sanpham/ip1.jpg" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="source/images/Iphone/{{$img->ANHDAIDIEN}}" alt=""></a>
									</li>
								@endforeach				
								</ul>
							</div>
							<div class="span5">
								<address>
									<strong>Nhà sãn xuất:</strong> <span></span><br>
									<strong>{{$sanpham->TENSP}}</strong><br>
									<strong>Vi xử lí:</strong> <span>{{$sanpham->GPU}}</span><br>
									<strong>Bộ nhớ trong:</strong> <span>{{$sanpham->RAM}}</span><br>
									<!-- <strong>Tình trạng:</strong> <span>Hết hàng</span><br> -->
									<!-- <strong>Loại:</strong> <span>Văn phòng</span><br>	 -->
									<!-- <strong>Lượt xem:</strong> <span>21932</span><br>
									<strong>Đã bán:</strong> <span>2154</span><br>	 -->						
								</address>									
								<h4><strong>
									@if($sanpham->GIAKHUYENMAI==0)
                                    <p class="price">{{number_format($sanpham->GIA)}} VNĐ</p>
                                    @else
                                    <p class="price"><strike>{{number_format($sanpham->GIA)}} VNĐ</strike></p>
                                    <p class="price">{{number_format($sanpham->GIAKHUYENMAI)}} VNĐ</p>
                                    @endif
                                    </strong></h4>
							</div>
							<div class="span5">
								<button class="btn btn-inverse" type="button"><a href="{{route('themgiohang',$sanpham->MASP)}}">Thêm vào giỏ</a></button>
								<!-- <form class="form-inline">
									<p>&nbsp;</p>
									<label>SL:</label>
									<input type="text" class="span1" placeholder="1">
									<button class="btn btn-inverse" type="submit">Thêm vào giỏ</button>
								</form> -->
							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li ><a href="#home" data-toggle="tab">Miêu tả</a></li>
									<li ><a href="#profile" data-toggle="tab">Thông tin sản phẩm</a></li>
									<!-- <li class="active">Cấu hình chi tiết</li> -->
								</ul>							 
								<div class="tab-content"><table class="table table-striped shop_attributes">	
											<tbody>
												<div class="tab-pane active" id="home">{{$sanpham->MOTA}}</div>
												<!-- <tr class="">
													<th>Màn hình</th>
													<td>{{$sanpham->MANHINH}}</td>
												</tr>		
												<tr class="">
													<th>Camera trước</th>
													<td>{{$sanpham->CAMERATRUOC}}</td>
												</tr>
												<tr class="">
													<th>Camera sau</th>
													<td>{{$sanpham->CAMERASAU}}</td>
												</tr>
												<tr class="">
													<th>RAM</th>
													<td>{{$sanpham->RAM}}</td>
												</tr>
												<tr class="">
													<th>Bộ nhớ trong</th>
													<td>{{$sanpham->BONHOTRONG}}</td>
												</tr>
												<tr class="">
													<th>CPU</th>
													<td>{{$sanpham->CPU}}</td>
												</tr>
												<tr class="">
													<th>GPU</th>
													<td>{{$sanpham->GPU}}</td>
												</tr>
												<tr class="">
													<th>Dung lượng pin</th>
													<td>{{$sanpham->PIN}}</td>
												</tr>
												<tr class="">
													<th>Hệ điều hành</th>
													<td>{{$sanpham->OS}}</td>
												</tr>
												<tr class="">
													<th>Thẻ sim</th>
													<td>{{$sanpham->SIM}}</td>
												</tr> -->
											</tbody>
										</table>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">	
											<tbody>
												<tr class="">
													<th>Màn hình</th>
													<td>{{$sanpham->MANHINH}}</td>
												</tr>		
												<tr class="">
													<th>Camera trước</th>
													<td>{{$sanpham->CAMERATRUOC}}</td>
												</tr>
												<tr class="">
													<th>Camera sau</th>
													<td>{{$sanpham->CAMERASAU}}</td>
												</tr>
												<tr class="">
													<th>RAM</th>
													<td>{{$sanpham->RAM}}</td>
												</tr>
												<tr class="">
													<th>Bộ nhớ trong</th>
													<td>{{$sanpham->BONHOTRONG}}</td>
												</tr>
												<tr class="">
													<th>CPU</th>
													<td>{{$sanpham->CPU}}</td>
												</tr>
												<tr class="">
													<th>GPU</th>
													<td>{{$sanpham->GPU}}</td>
												</tr>
												<tr class="">
													<th>Dung lượng pin</th>
													<td>{{$sanpham->PIN}}</td>
												</tr>
												<tr class="">
													<th>Hệ điều hành</th>
													<td>{{$sanpham->OS}}</td>
												</tr>
												<tr class="">
													<th>Thẻ sim</th>
													<td>{{$sanpham->SIM}}</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>							
							</div>		

							<!-- <div class="span9">	
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text"><strong>Sản phẩm</strong> cùng loại</span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-1" class="carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails listing-products">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="product_detail.html"><img alt="" src="source/anh_chitiet_sanpham/2-pro.png"></a><br/>
														<a href="product_detail.html" class="title">Điện thoại iPhone 11 Pro Max 256GB</a><br/>
														<p class="price">39.990.000₫</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="product_detail.html"><img alt="" src="source/anh_chitiet_sanpham/ap1.png"></a><br/>
														<a href="product_detail.html" class="title">Điện thoại iPhone 11 Pro Max 256GB</a><br/>
														<p class="price">37.990.000₫</p>
													</div>
												</li>       
												<li class="span3">
													<div class="product-box">												
														<a href="product_detail.html"><img alt="" src="source/anh_chitiet_sanpham/xs-max.png"></a><br/>
														<a href="product_detail.html" class="title">Điện thoại iPhone Xs Max 256GB</a><br/>
														<p class="price">33.990.000₫</p>
													</div>
												</li>												
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails listing-products">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="product_detail.html"><img alt="" src="source/anh_chitiet_sanpham/ap1.png"></a><br/>
														<a href="product_detail.html" class="title">Điện thoại iPhone 11 64GB</a><br/>
														<p class="price">21.990.000₫</p>
													</div>
												</li>       
												<li class="span3">
													<div class="product-box">												
														<a href="product_detail.html"><img alt="" src="source/anh_chitiet_sanpham/ap2.png"></a><br/>
														<a href="product_detail.html"  class="title">Điện thoại iPhone 7 Plus 32GB</a><br/>
														<p class="price">12.990.000₫</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="product_detail.html"><img alt="" src="source/anh_chitiet_sanpham/ap3.png"></a><br/>
														<a href="product_detail.html" class="title">Điện thoại iPhone 6s Plus 32GB</a><br/>
														<p class="price">9.990.000đ</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div> -->

							<div class="span9">	
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text"><strong>Sản phẩm</strong> cùng nhà sản xuất</span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails listing-products">
												<!-- <li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="product_detail.html"><img alt="" src="source/anh_chitiet_sanpham/ap1.png"></a><br/>
														<a href="product_detail.html" class="title">Asus Swift SF315</a><br/>
														<p class="price">21.990.000₫</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="product_detail.html"><img alt="" src="source/anh_chitiet_sanpham/xs-max.png"></a><br/>
														<a href="product_detail.html" class="title">Asus Vostro 5468</a><br/>
														<p class="price">12.990.000₫</p>
													</div>
												</li>       
												<li class="span3">
													<div class="product-box">												
														<a href="product_detail.html"><img alt="" src="source/anh_chitiet_sanpham/2-pro.png"></a><br/>
														<a href="product_detail.html" class="title">Asus S510UA</a><br/>
														<p class="price">16.290.000đ</p>
													</div>
												</li> -->
												 @foreach($sanphamtheohang1 as $sanphamtheohang)
                                            <li class="span3">
                                                 <div class="product-box" style="height: 400px;">
                                                    <span class="sale_tag"></span>
                                                    <p>
                                                        <a href="{{route('chitietsanpham',$sanphamtheohang->MASP)}}"><img style="max-height: 250px; width: auto;" src="source/images/Iphone/{{$sanphamtheohang->ANHDAIDIEN}}" alt=""></a></a>
                                                    </p>
                                                    <a href="{{route('chitietsanpham',$sanphamtheohang->MASP)}}" class="title">{{$sanphamtheohang->TENSP}}</a><br>
                                                    <a href="{{route('chitietsanpham',$sanphamtheohang->MASP)}}" class="category">
                                                        @if($sanphamtheohang->GIAKHUYENMAI==0)
                                                        <p class="price">{{number_format($sanphamtheohang->GIA)}} VNĐ</p>
                                                        @else
                                                        <p class="price"><strike>{{number_format($sanphamtheohang->GIA)}} VNĐ</strike></p>
                                                        <p class="price">{{number_format($sanphamtheohang->GIAKHUYENMAI)}} VNĐ</p>
                                                        @endif
                                                    </a>

                                                </div>
                                            </li>
                                            @endforeach											
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails listing-products">
												 @foreach($sanphamtheohang2 as $sanphamtheohang)
                                            <li class="span3">
                                                 <div class="product-box" style="height: 400px;">
                                                    <span class="sale_tag"></span>
                                                    <p>
                                                        <a href="{{route('chitietsanpham',$sanphamtheohang->MASP)}}"><img style="max-height: 250px; width: auto;" src="source/images/Iphone/{{$sanphamtheohang->ANHDAIDIEN}}" alt=""></a></a>
                                                    </p>
                                                    <a href="{{route('chitietsanpham',$sanphamtheohang->MASP)}}" class="title">{{$sanphamtheohang->TENSP}}</a><br>
                                                    <a href="{{route('chitietsanpham',$sanphamtheohang->MASP)}}" class="category">
                                                        @if($sanphamtheohang->GIAKHUYENMAI==0)
                                                        <p class="price">{{number_format($sanphamtheohang->GIA)}} VNĐ</p>
                                                        @else
                                                        <p class="price"><strike>{{number_format($sanphamtheohang->GIA)}} VNĐ</strike></p>
                                                        <p class="price">{{number_format($sanphamtheohang->GIAKHUYENMAI)}} VNĐ</p>
                                                        @endif
                                                    </a>

                                                </div>
                                            </li>
                                            @endforeach	
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="span3 col">
						<div class="block">	
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">Nhãn hiệu</li>
								<li><a href="products.html">Apple</a></li>
								<li><a href="products.html">Samsung</a></li>
								<li><a href="products.html">Opple</a></li>
								<li><a href="products.html">Realme</a></li>
								<li><a href="products.html">Xiaomi</a></li>
								<li><a href="products.html">Lenovo</a></li>
								<li><a href="products.html">Hãng khác</a></li>
							</ul>
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Có thể quan tâm</span></span>
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
                                                <a href="{{route('chitietsanpham',$ngaunhien[0]->MASP)}}"><img style="height: 250px;" src="source/images/Iphone/{{$ngaunhien[0]->ANHDAIDIEN}}"></a><br/>
                                                <a href="{{route('chitietsanpham',$ngaunhien[0]->MASP)}}" class="title">{{$ngaunhien[0]->TENSP}}</a><br/>
                                                <!-- <p class="price">10.490.000đ</p> -->
                                                @if($ngaunhien[0]->GIAKHUYENMAI==0)
                                                <p class="price">{{number_format($ngaunhien[0]->GIA)}} VNĐ</p>
                                                @else
                                                <p class="price"><strike>{{number_format($ngaunhien[0]->GIA)}} VNĐ</strike></p>
                                                <p class="price">{{number_format($ngaunhien[0]->GIAKHUYENMAI)}} VNĐ</p>
                                                @endif
                                            </div>
                                        </li>
                                    </ul>
                                </div>


                                <div class="item">
                                    <ul class="thumbnails listing-products">
                                        <li class="span3">
                                            <div class="product-box">
                                                <span class="sale_tag"></span>
                                                <a href="{{route('chitietsanpham',$ngaunhien[1]->MASP)}}"><img style="height: 250px;" src="source/images/Iphone/{{$ngaunhien[1]->ANHDAIDIEN}}"></a><br/>
                                                <a href="{{route('chitietsanpham',$ngaunhien[1]->MASP)}}" class="title">{{$ngaunhien[1]->TENSP}}</a><br/>
                                                <!-- <p class="price">10.490.000đ</p> -->
                                                @if($ngaunhien[1]->GIAKHUYENMAI==0)
                                                <p class="price">{{number_format($ngaunhien[1]->GIA)}} VNĐ</p>
                                                @else
                                                <p class="price"><strike>{{number_format($ngaunhien[1]->GIA)}} VNĐ</strike></p>
                                                <p class="price">{{number_format($ngaunhien[1]->GIAKHUYENMAI)}} VNĐ</p>
                                                @endif
                                            </div>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>
						</div>
						<div class="block">								
							<h4 class="title"><strong>Bán</strong> chạy</h4>								
							<ul class="small-product">
								<li>
									<a href="#" title="Praesent tempor sem sodales">
										<img src="source/anh_chitiet_sanpham/2-pro.png" alt="Praesent tempor sem sodales">
									</a>
									<a href="#">Điện thoại iPhone Xs Max 256GB</a>
								</li>
								<li>
									<a href="#" title="Luctus quam ultrices rutrum">
										<img src="source/anh_chitiet_sanpham/nn1.png" alt="Luctus quam ultrices rutrum">
									</a>
									<a href="#">Điện thoại Samsung Galaxy S10+ (512GB)</a>
								</li>
								<li>
									<a href="#" title="Fusce id molestie massa">
										<img src="source/anh_chitiet_sanpham/xs-max.png" alt="Fusce id molestie massa">
									</a>
									<a href="#">Điện thoại iPhone Xs Max 256GB</a>
								</li>   
							</ul>
						</div>
					</div>
				</div>
@endsection