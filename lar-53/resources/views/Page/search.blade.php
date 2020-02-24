@extends('master')
@section('content')
         <section class="main-content"><div class="row">
                <div class="span12">
                    <br>
                    <div class="row">
                        <div class="span12">
                            <h4 class="title">

                                <span class="pull-left"><span class="text"><span class="line"><a href="source/product_detail.html"><strong>Kết quả tìm kiếm</strong></a></span></span>
                                </span>

                                <span class="pull-right">
                                        <a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
                                    </span>
                            </h4>
                            <div id="myCarousel-2" class="myCarousel carousel slide">
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <ul class="thumbnails">
                                            @foreach($product as $moi)
                                            <li class="span3">
                                                <div class="product-box" style="height: 350px;">
                                                    <span class="sale_tag"></span>
                                                    <p>
                                                        <a href="{{route('chitietsanpham',$moi->MASP)}}"><img style="max-height: 250px; width: auto;"  src="source/images/Iphone/{{$moi->ANHDAIDIEN}}" alt=""></a>
                                                    </p>
                                                    <a href="{{route('chitietsanpham',$moi->MASP)}}" class="title">{{$moi->TENSP}}</a><br>
                                                    <a href="source/products.html" class="category">
                                                        @if($moi->GIAKHUYENMAI==0)
                                                        <p class="price">{{number_format($moi->GIA)}} VNĐ</p>
                                                        @else
                                                        <p class="price"><strike>{{number_format($moi->GIA)}} VNĐ</strike></p>
                                                        <p class="price">{{number_format($moi->GIAKHUYENMAI)}} VNĐ</p>
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

            </div>
        </section>
        <div class="row feature_box">
            <div class="span4">
                <div class="service">
                    <div class="responsive">
                        <img src="source/themes/images/feature_img_2.png" alt="">
                        <h4>THIẾT KẾ <strong>HIỆN ĐẠI</strong></h4>
                        <p>Các sản phẩm được thiết kế theo mẫu mã hiện đại, thời thượng phù hợp với xu hướng người dùng hiện nay.</p>
                    </div>
                </div>
            </div>
            <div class="span4">
                <div class="service">
                    <div class="customize">
                        <img src="source/themes/images/feature_img_1.png" alt="">
                        <h4>GIAO HÀNG <strong>MIỄN PHÍ</strong></h4>
                        <p>Sản phầm được giao hàng nhanh, gọn bằng nhiều hình thức nhằm đáp ứng tốt yêu cầu của khách hàng.</p>
                    </div>
                </div>
            </div>
            <div class="span4">
                <div class="service">
                    <div class="support">
                        <img src="source/themes/images/feature_img_3.png" alt="">
                        <h4>PHỤC VỤ <strong>24/7</strong></h4>
                        <p>Khách hàng luôn là ưu tiên hàng đầu và được phục vụ 24/7.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="source/themes/js/common.js"></script>
<script src="source/themes/js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
    $(function() {
        $(document).ready(function() {
            $('.flexslider').flexslider({
                animation: "fade",
                slideshowSpeed: 4000,
                animationSpeed: 600,
                controlNav: false,
                directionNav: true,
                controlsContainer: ".flex-container" // the container that holds the flexslider
            });
        });
    });

</script>




<div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 12px; right: 0px; opacity: 1; cursor: pointer;"><img src="source/themes/images/gotop.png" style="width:40px; height:40px; margin-top: 25px; margin-right: 17px;"></div>

@endsection()