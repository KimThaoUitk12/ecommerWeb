@extends('master')
@section('content')
<div class="row">
                <div class="span9">
                    <ul class="thumbnails listing-products">
                        @foreach($sp_theohang as $sp)
                        <li class="span3">
                            <div class="product-box" style="height: 350px;">
                                <span class="sale_tag"></span>
                                <a href="{{route('chitietsanpham',$sp->MASP)}}"><img alt="" style="height: 250px;width: auto;" src="source/images/Iphone/{{$sp->ANHDAIDIEN}}"></a><br/>
                                <a href="{{route('chitietsanpham',$sp->MASP)}}" class="title">{{$sp->TENSP}}</a><br/>
                                 @if($sp->GIAKHUYENMAI==0)
                                <p class="price">{{number_format($sp->GIA)}} VNĐ</p>
                                @else
                                <p class="price"><strike>{{number_format($sp->GIA)}} VNĐ</strike></p>
                                <p class="price">{{number_format($sp->GIAKHUYENMAI)}} VNĐ</p>
                                 @endif

                            </div>
                        </li>
                        @endforeach
                       
                    </ul>
                    <hr>
                    <div class="pagination pagination-small pagination-centered">{{$sp_theohang->links()}}</div>




               <!--      <div class="pagination pagination-small pagination-centered">
                        <ul>
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span>Prev</span>
                                </a>
                            </li>

                            <li class="active"><a href="products.html">1</a></li>
                            <li><a href="product2.html">2</a></li>
                            <li>
                                <a href="product2.html" aria-label="Next">

                                    <span>Next</span>
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </div> -->





                </div>
                <div class="span3 col">
                    <div id="menu-filter">
                        <h3>Mức Giá</h3>
                        <div>
                            <div class="checkbox checkbox-primary" name="gia" id="all">
                                <input id="checkbox1" type="checkbox" class="input-lg">
                                <label for="checkbox1">
						Tất cả
					</label>
                            </div>
                            <div class="checkbox checkbox-primary" name="gia" id="duoi5">
                                <input id="checkbox2" type="checkbox" class="input-lg">
                                <label for="checkbox2">
						Dưới 5 triệu
					</label>
                            </div>
                            <div class="checkbox checkbox-primary" name="gia" id="5den10">
                                <input id="checkbox3" type="checkbox" class="input-lg">
                                <label for="checkbox3">
						Từ 5 - 10 triệu
					</label>
                            </div>
                            <div class="checkbox checkbox-primary" name="gia" id="10den15">
                                <input id="checkbox4" type="checkbox" class="input-lg">
                                <label for="checkbox4">
						Từ 10 - 15 triệu
					</label>
                            </div>
                            <div class="checkbox checkbox-primary" name="gia" id="15den20">
                                <input id="checkbox5" type="checkbox" class="input-lg">
                                <label for="checkbox5">
						Từ 15 - 20 triệu
					</label>
                            </div>
                            <div class="checkbox checkbox-primary" name="gia" id="tren20">
                                <input id="checkbox6" type="checkbox" class="input-lg">
                                <label for="checkbox6">
						Trên 20 triệu
					</label>
                            </div>
                        </div>






                        <h3>Hãng Sản Xuất</h3>
                    <div>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox111" type="checkbox" class="input-lg">
                                <label for="checkbox111">Tất cả</label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox222" type="checkbox" class="input-lg">
                                <label for="checkbox222">Apple</label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox333" type="checkbox" class="input-lg">
                                <label for="checkbox333">Dell</label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox444" type="checkbox" class="input-lg">
                                <label for="checkbox444">Asus</label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox555" type="checkbox" class="input-lg">
                                <label for="checkbox555">HP</label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox666" type="checkbox" class="input-lg">
                                <label for="checkbox666">Acer</label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox777" type="checkbox" class="input-lg">
                                <label for="checkbox777">Lenovo</label>
                            </div>
                        </div>







                        <h3>Hệ Điều Hành</h3>
                        <div>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox8" type="checkbox" class="input-lg">
                                <label for="checkbox8">
						Tất cả
					</label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox9" type="checkbox" class="input-lg">
                                <label for="checkbox9">
                                    IOS
					</label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox10" type="checkbox" class="input-lg">
                                <label for="checkbox10">
                                    Android
					</label>
                            </div>
                        </div>


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

                </div>

                <script type="text/javascript">
                    $("#menu-filter").accordion();
                </script>

@endsection