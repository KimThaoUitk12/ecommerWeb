
<!DOCTYPE html>
<!-- saved from url=(0036)http://localhost/lar-53/public/index -->
<html lang="vi"><head>
    <meta charset="utf-8">

    <title>Final Project Cellphone Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <base href="{{asset('themes')}}">
    <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
    <!-- bootstrap -->
    <link href="source/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="source/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="source/themes/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="themes/css/font-awesome.min2.css"> -->
    <link rel="stylesheet" type="text/css" href="source/themes/css/font-awesome.min3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link href="source/themes/css/bootstrappage.css" rel="stylesheet">

    <!-- global styles -->
    <link href="source/themes/css/flexslider.css" rel="stylesheet">
    <link href="source/themes/css/main.css" rel="stylesheet">

    <!-- scripts -->
    <script src="source/themes/js/jquery-1.7.2.min.js"></script>
    <script src="source/bootstrap/js/bootstrap.min.js"></script>
    <script src="source/themes/js/superfish.js"></script>
    <script src="source/themes/js/jquery.scrolltotop.js"></script>
    <!--[if lt IE 9]>           
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <style>
        img{
            height: 250px;
        }
    </style>
        @include('header')
        <section class="main-content"><div class="row">
                <div class="span12">
                    <br>
                    <div class="row">
                        <div class="span12">
                            <h4 class="title">

                                <span class="pull-left"><span class="text"><span class="line"><a href="source/product_detail.html"><strong>Các sản phẩm mới nhất</strong></a></span></span>
                                </span>

                                <span class="pull-right">
                                        <a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
                                    </span>
                            </h4>
                            <div id="myCarousel-2" class="myCarousel carousel slide">
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <ul class="thumbnails">
                                            @foreach($moi1 as $moi)
                                            <li class="span3">
                                                <div class="product-box" style="height: 400px;">
                                                    <span class="sale_tag"></span>
                                                    <p>
                                                        <a href="{{route('chitietsanpham',$moi->MASP)}}"><img style="max-height: 250px; width: auto;" src="source/images/Iphone/{{$moi->ANHDAIDIEN}}" alt=""></a>
                                                    </p>
                                                    <a href="{{route('chitietsanpham',$moi->MASP)}}" class="title">{{$moi->TENSP}}</a><br>
                                                    <a href="{{route('chitietsanpham',$moi->MASP)}}" class="category">
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
<!-- 
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/samsung/Samsung-Galaxy-a60-1.jpg" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Samsung Galaxy A60 6Gb/64Gb Chip Snapdragon 675</a><br>
                                                    <a href="products.html" class="category">
                                                        <p class="price">5,690,000 VNĐ</p>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/samsung/Samsung-Galaxy-a70-1.jpg" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Samsung Galaxy A70 6Gb/128Gb Chính Hãng Màn hình tràn viền lớn nhất</a><br>
                                                    <a href="products.html" class="category">
                                                        <p class="price">7,390,000 VNĐ</p>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/samsung/Samsung-Galaxy-a80-1.jpg" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Samsung Galaxy A80 8Gb/128Gb Chính Hãng Máy đẹp, camera trượt xoay, màn Fullview</a><br>
                                                    <a href="products.html" class="category">
                                                        <p class="price">10,890,000 VNĐ</p>
                                                    </a>
                                                </div>
                                            </li> -->

                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul class="thumbnails">
                                             @foreach($moi2 as $moi)
                                            <li class="span3">
                                                <div class="product-box" style="height: 400px;">
                                                    <span class="sale_tag"></span>
                                                    <p>
                                                        <a href="{{route('chitietsanpham',$moi->MASP)}}"><img style="max-height: 250px; width: auto;" src="source/images/Iphone/{{$moi->ANHDAIDIEN}}" alt=""></a>
                                                    </p>
                                                    <a href="{{route('chitietsanpham',$moi->MASP)}}" class="title">{{$moi->TENSP}}</a><br>
                                                    <a href="{{route('chitietsanpham',$moi->MASP)}}" class="category">
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


                                            <!-- <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/Xiaomi/Redmi-K20-Pro-1.png" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Ut wisi enim ad</a><br>
                                                    <a href="products.html" class="category">Commodo consequat</a>
                                                    <p class="price">5,390,000 VNĐ</p>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/Oppo/A9-2020-2.png" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">You think water</a><br>
                                                    <a href="products.html" class="category">World once</a>
                                                    <p class="price">6,990,000 VNĐ</p>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/Oppo/F11-pro-2.png" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Quis nostrud exerci</a><br>
                                                    <a href="products.html" class="category">Quis nostrud</a>
                                                    <p class="price">7,490,000 VNĐ</p>
                                                </div>
                                            </li> -->


                                        </ul>
                                    </div>

                                    <!-- -->
                                    <div class="item">
                                        <ul class="thumbnails">
                                            @foreach($moi3 as $moi)
                                            <li class="span3">
                                                <div class="product-box" style="height: 400px;">
                                                    <span class="sale_tag"></span>
                                                    <p>
                                                        <a href="{{route('chitietsanpham',$moi->MASP)}}"><img height="250px" src="source/images/Iphone/{{$moi->ANHDAIDIEN}}" alt=""></a>
                                                    </p>
                                                    <a href="{{route('chitietsanpham',$moi->MASP)}}" class="title">{{$moi->TENSP}}</a><br>
                                                    <a href="{{route('chitietsanpham',$moi->MASP)}}" class="category">
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
                                            
                                            <!-- <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/default/watch-S4-4.png" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Ut wisi enim ad</a><br>
                                                    <a href="products.html" class="category">Commodo consequat</a>
                                                    <p class="price">6,990,000 VNĐ</p>
                                                </div>
                                            </li>
 -->
                                        </ul>
                                    </div>
                                    <!-- -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="span12">
                            <h4 class="title">

                                <span class="pull-left"><span class="text"><span class="line"><a href="product_detail.html"><strong>Các sản phẩm Cao cấp</strong></a></span></span>
                                </span>

                                <span class="pull-right">
                                        <a class="left button" href="#myCarousel-3" data-slide="prev"></a><a class="right button" href="#myCarousel-3" data-slide="next"></a>
                                    </span>
                            </h4>
                            <div id="myCarousel-3" class="myCarousel carousel slide">
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <ul class="thumbnails">
                                            @foreach($caocap1 as $caocap)
                                            <li class="span3">
                                                 <div class="product-box" style="height: 400px;">
                                                    <span class="sale_tag"></span>
                                                    <p>
                                                        <a href="{{route('chitietsanpham',$caocap->MASP)}}"><img style="max-height: 250px; width: auto;" src="source/images/Iphone/{{$moi->ANHDAIDIEN}}" alt=""></a></a>
                                                    </p>
                                                    <a href="{{route('chitietsanpham',$caocap->MASP)}}" class="title">{{$moi->TENSP}}</a><br>
                                                    <a href="{{route('chitietsanpham',$moi->MASP)}}" class="category">
                                                        @if($caocap->GIAKHUYENMAI==0)
                                                        <p class="price">{{number_format($moi->GIA)}} VNĐ</p>
                                                        @else
                                                        <p class="price"><strike>{{number_format($caocap->GIA)}} VNĐ</strike></p>
                                                        <p class="price">{{number_format($caocap->GIAKHUYENMAI)}} VNĐ</p>
                                                        @endif
                                                    </a>

                                                </div>
                                            </li>
                                            @endforeach
                                            <!-- <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/iphone/11-pro.jpg" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">iPhone 11 Pro 64GB Mới Chính Hãng Chưa kích hoạt đủ bảo hành Việt Nam VN/A</a><br>
                                                    <a href="products.html" class="category">
                                                        <p class="price">30,990,000 VNĐ</p>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/samsung/Galaxy-note-10-plus.jpg" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Samsung Galaxy Note 10 Plus 12Gb/256Gb </a><br>
                                                    <a href="products.html" class="category">
                                                        <p class="price">21,590,000 VNĐ</p>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/iphone/xs-max.jpg" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">iPhone Xs Max 256Gb Bảo hành toàn quốc, kèm sạc, cable chính hãng</a><br>
                                                    <a href="products.html" class="category">
                                                        <p class="price">28,490,000 VNĐ</p>
                                                    </a>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul class="thumbnails">
                                             @foreach($caocap2 as $caocap)
                                            <li class="span3">
                                                 <div class="product-box" style="height: 400px;">
                                                    <span class="sale_tag"></span>
                                                    <p>
                                                        <a href="{{route('chitietsanpham',$caocap->MASP)}}"><img style="max-height: 250px; width: auto;" src="source/images/Iphone/{{$moi->ANHDAIDIEN}}" alt=""></a></a>
                                                    </p>
                                                    <a href="{{route('chitietsanpham',$caocap->MASP)}}" class="title">{{$moi->TENSP}}</a><br>
                                                    <a href="{{route('chitietsanpham',$moi->MASP)}}" class="category">
                                                        @if($caocap->GIAKHUYENMAI==0)
                                                        <p class="price">{{number_format($moi->GIA)}} VNĐ</p>
                                                        @else
                                                        <p class="price"><strike>{{number_format($caocap->GIA)}} VNĐ</strike></p>
                                                        <p class="price">{{number_format($caocap->GIAKHUYENMAI)}} VNĐ</p>
                                                        @endif
                                                    </a>

                                                </div>
                                            </li>
                                            @endforeach
                                           <!--  <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/samsung/note-9.jpg" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Samsung Galaxy Note 9 512Gb Chính Hãng Quyền năng mới, đậm dấu ấn</a><br>
                                                    <a href="products.html" class="category"></a>
                                                    <p class="price">22,350,000 VNĐ</p>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/samsung/s10-plus.jpg" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Samsung Galaxy S10+ 1TB Chính Hãng Vân tay siêu âm trên màn hình, thiết kế độc nhất</a><br>
                                                    <a href="products.html" class="category"></a>
                                                    <p class="price">33,990,000 VNĐ</p>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/iphone/8-plus.jpg" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">iPhone 8 Plus 256Gb Mới Chính Hãng chưa kích hoạt, bản Vn/a, nguyên hộp</a><br>
                                                    <a href="products.html" class="category"></a>
                                                    <p class="price">22,590,000 VNĐ</p>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </div>

                                    <!-- -->
                                    <div class="item">
                                        <ul class="thumbnails">
                                             @foreach($caocap3 as $caocap)
                                            <li class="span3">
                                                 <div class="product-box" style="height: 400px;">
                                                    <span class="sale_tag"></span>
                                                    <p>
                                                        <a href="{{route('chitietsanpham',$caocap->MASP)}}"><img style="max-height: 250px; width: auto;" src="source/images/Iphone/{{$moi->ANHDAIDIEN}}" alt=""></a></a>
                                                    </p>
                                                    <a href="{{route('chitietsanpham',$caocap->MASP)}}" class="title">{{$moi->TENSP}}</a><br>
                                                    <a href="{{route('chitietsanpham',$moi->MASP)}}" class="category">
                                                        @if($caocap->GIAKHUYENMAI==0)
                                                        <p class="price">{{number_format($moi->GIA)}} VNĐ</p>
                                                        @else
                                                        <p class="price"><strike>{{number_format($caocap->GIA)}} VNĐ</strike></p>
                                                        <p class="price">{{number_format($caocap->GIAKHUYENMAI)}} VNĐ</p>
                                                        @endif
                                                    </a>

                                                </div>
                                            </li>
                                            @endforeach

                                            <!-- <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/Oppo/r17-pro.jpg" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">OPPO R17 Pro chính hãng Thiết kế thời thượng,năng lượng tối đa</a><br>
                                                    <a href="products.html" class="category"></a>
                                                    <p class="price">16,990,000 VNĐ</p>
                                                </div>
                                            </li> -->

                                        </ul>
                                    </div>
                                    <!-- -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="span12">
                            <h4 class="title">

                                <span class="pull-left"><span class="text"><span class="line"><a href="product_detail.html"><strong>Các sản phẩm trung cấp</strong></a></span></span>
                                </span>

                                <span class="pull-right">
                                        <a class="left button" href="#myCarousel-4" data-slide="prev"></a><a class="right button" href="#myCarousel-4" data-slide="next"></a>
                                    </span>
                            </h4>
                            <div id="myCarousel-4" class="myCarousel carousel slide">
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <ul class="thumbnails">
                                            @foreach($trungcap1 as $trungcap)
                                            <li class="span3">
                                                 <div class="product-box" style="height: 400px;">
                                                    <span class="sale_tag"></span>
                                                    <p>
                                                        <a href="{{route('chitietsanpham',$trungcap->MASP)}}"><img height="250px" src="source/images/Iphone/{{$trungcap->ANHDAIDIEN}}" alt=""></a>
                                                    </p>
                                                    <a href="{{route('chitietsanpham',$trungcap->MASP)}}" class="title">{{$trungcap->TENSP}}</a><br>
                                                    <a href="{{route('chitietsanpham',$moi->MASP)}}" class="category">
                                                        @if($trungcap->GIAKHUYENMAI==0)
                                                        <p class="price">{{number_format($trungcap->GIA)}} VNĐ</p>
                                                        @else
                                                        <p class="price"><strike>{{number_format($trungcap->GIA)}} VNĐ</strike></p>
                                                        <p class="price">{{number_format($trungcap->GIAKHUYENMAI)}} VNĐ</p>
                                                        @endif
                                                    </a>

                                                </div>
                                            </li>
                                            @endforeach
                                           <!--  <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/Xiaomi/Mi-9-1.png" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Xiaomi Mi 9 Chính Hãng DGW 64 Gb Ram 6 Gb Chụp ảnh đẹp thứ 3 thế giới, Vân tay trong màn hình</a><br>
                                                    <a href="products.html" class="category">
                                                        <p class="price">10,490,000 VNĐ</p>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/samsung/Samsung-Galaxy-a80-1.jpg" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Samsung Galaxy A80 8Gb/128Gb Chính Hãng Máy đẹp, camera trượt xoay, màn Fullview</a><br>
                                                    <a href="products.html" class="category">
                                                        <p class="price">10,890,000 VNĐ</p>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/iphone/7-plus.jpg" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">iPhone 7 Plus 128GB Bảo Hành Trần Đã Active, Bản EU, Tặng Sạc, Cable Titan</a><br>
                                                    <a href="products.html" class="category">
                                                        <p class="price">11,390,000 VNĐ</p>
                                                    </a>
                                                </div>
                                            </li> -->

                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul class="thumbnails">
                                            @foreach($trungcap2 as $trungcap)
                                            <li class="span3">
                                                 <div class="product-box" style="height: 400px;">
                                                    <span class="sale_tag"></span>
                                                    <p>
                                                        <a href="{{route('chitietsanpham',$trungcap->MASP)}}"><img height="250px" src="source/images/Iphone/{{$trungcap->ANHDAIDIEN}}" alt=""></a>
                                                    </p>
                                                    <a href="{{route('chitietsanpham',$trungcap->MASP)}}" class="title">{{$trungcap->TENSP}}</a><br>
                                                    <a href="{{route('chitietsanpham',$moi->MASP)}}" class="category">
                                                        @if($trungcap->GIAKHUYENMAI==0)
                                                        <p class="price">{{number_format($trungcap->GIA)}} VNĐ</p>
                                                        @else
                                                        <p class="price"><strike>{{number_format($trungcap->GIA)}} VNĐ</strike></p>
                                                        <p class="price">{{number_format($trungcap->GIAKHUYENMAI)}} VNĐ</p>
                                                        @endif
                                                    </a>

                                                </div>
                                            </li>
                                            @endforeach
                                            <!-- <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/Xiaomi/Mi-8-pro.jpg" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Xiaomi Mi 8 Pro 128 Gb Ram 8 Gb Chính hãng DGW Vân tay dưới màn hình, bảo mật khuôn mặt</a><br>
                                                    <a href="products.html" class="category"></a>
                                                    <p class="price">12,290,000 VNĐ</p>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/Xiaomi/Mi-mix-3.jpg" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Xiaomi Mi Mix 3 – 256 Gb Ram 8 Gb Màn hình tràn viền đẹp nhất, tặng kèm sạc không dây chính hãng trong hộp</a><br>
                                                    <a href="products.html" class="category"></a>
                                                    <p class="price">12,790,000 VNĐ</p>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/Xiaomi/Mi-6.jpg" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Xiaomi Mi 6 Chính hãng DGW 64GB Ram 6GB Flagship cấu hình đỉnh, đáng sở hữu nhất</a><br>
                                                    <a href="products.html" class="category"></a>
                                                    <p class="price">9,890,000 VNĐ</p>
                                                </div>
                                            </li> -->

                                        </ul>
                                    </div>

                                    <!-- -->
                                    <div class="item">
                                        <ul class="thumbnails">
                                           @foreach($trungcap3 as $trungcap)
                                            <li class="span3">
                                                 <div class="product-box" style="height: 400px;">
                                                    <span class="sale_tag"></span>
                                                    <p>
                                                        <a href="{{route('chitietsanpham',$trungcap->MASP)}}"><img height="250px" src="source/images/Iphone/{{$trungcap->ANHDAIDIEN}}" alt=""></a>
                                                    </p>
                                                    <a href="{{route('chitietsanpham',$trungcap->MASP)}}" class="title">{{$trungcap->TENSP}}</a><br>
                                                    <a href="{{route('chitietsanpham',$moi->MASP)}}" class="category">
                                                        @if($trungcap->GIAKHUYENMAI==0)
                                                        <p class="price">{{number_format($trungcap->GIA)}} VNĐ</p>
                                                        @else
                                                        <p class="price"><strike>{{number_format($trungcap->GIA)}} VNĐ</strike></p>
                                                        <p class="price">{{number_format($trungcap->GIAKHUYENMAI)}} VNĐ</p>
                                                        @endif
                                                    </a>

                                                </div>
                                            </li>
                                            @endforeach

                                            <!-- <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="themes/images/cloth/anh13.png" alt="" /></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
                                                    <a href="products.html" class="category">Commodo consequat</a>
                                                    <p class="price">19.500.000đ</p>
                                                </div>
                                            </li> -->

                                        </ul>
                                    </div>
                                    <!-- -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="span12">
                            <h4 class="title">

                                <span class="pull-left"><span class="text"><span class="line"><a href="product_detail.html"><strong>Các sản phẩm phổ thông</strong></a></span></span>
                                </span>

                                <span class="pull-right">
                                        <a class="left button" href="#myCarousel-5" data-slide="prev"></a><a class="right button" href="#myCarousel-5" data-slide="next"></a>
                                    </span>
                            </h4>
                            <div id="myCarousel-5" class="myCarousel carousel slide">
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <ul class="thumbnails">
                                            <ul class="thumbnails">
                                           @foreach($phothong1 as $phothong)
                                            <li class="span3">
                                                 <div class="product-box" style="height: 400px;">
                                                    <span class="sale_tag"></span>
                                                    <p>
                                                        <a href="{{route('chitietsanpham',$phothong->MASP)}}"><img height="200px" width="auto" src="source/images/Iphone/{{$phothong->ANHDAIDIEN}}" alt=""></a>
                                                    </p>
                                                    <a href="{{route('chitietsanpham',$phothong->MASP)}}" class="title">{{$phothong->TENSP}}</a><br>
                                                    <a href="{{route('chitietsanpham',$moi->MASP)}}" class="category">
                                                        @if($phothong->GIAKHUYENMAI==0)
                                                        <p class="price">{{number_format($phothong->GIA)}} VNĐ</p>
                                                        @else
                                                        <p class="price"><strike>{{number_format($phothong->GIA)}} VNĐ</strike></p>
                                                        <p class="price">{{number_format($phothong->GIAKHUYENMAI)}} VNĐ</p>
                                                        @endif
                                                    </a>

                                                </div>
                                            </li>
                                            @endforeach

                                            <!-- <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/Realme/3-pro-8.png" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Realme 3 Pro 4GB/64GB Chính Hãng Chip S710, camera quay phim 960fps</a><br>
                                                    <a href="products.html" class="category">
                                                        <p class="price">4,390,000 VNĐ</p>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/Realme/5-pro-5.png" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Realme 5 Pro 8GB/128GB Chính Hãng Snapdragon 712 AIE, 4 Camera siêu khủng</a><br>
                                                    <a href="products.html" class="category">
                                                        <p class="price">6,990,000 VNĐ</p>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/Realme/5.jpg" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Realme 5 3GB/64GB Chính Hãng Snapdragon 665, 4 Camera siêu khủng</a><br>
                                                    <a href="products.html" class="category">
                                                        <p class="price">3,990,000 VNĐ</p>
                                                    </a>
                                                </div>
                                            </li> -->

                                        </ul>
                                    </div>
                                    <div class="item">
                                        <ul class="thumbnails">
                                             @foreach($phothong2 as $phothong)
                                            <li class="span3">
                                                 <div class="product-box" style="height: 400px;">
                                                    <span class="sale_tag"></span>
                                                    <p>
                                                        <a href="{{route('chitietsanpham',$phothong->MASP)}}"><img height="250px" src="source/images/Iphone/{{$phothong->ANHDAIDIEN}}" alt=""></a>
                                                    </p>
                                                    <a href="{{route('chitietsanpham',$phothong->MASP)}}" class="title">{{$phothong->TENSP}}</a><br>
                                                    <a href="{{route('chitietsanpham',$moi->MASP)}}" class="category">
                                                        @if($phothong->GIAKHUYENMAI==0)
                                                        <p class="price">{{number_format($phothong->GIA)}} VNĐ</p>
                                                        @else
                                                        <p class="price"><strike>{{number_format($phothong->GIA)}} VNĐ</strike></p>
                                                        <p class="price">{{number_format($phothong->GIAKHUYENMAI)}} VNĐ</p>
                                                        @endif
                                                    </a>

                                                </div>
                                            </li>
                                            @endforeach

                                            <!-- <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/Xiaomi/Redmi-Note-7-4.jpg" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Xiaomi Redmi Note 7 Chính Hãng DGW Ram 3GB / 32GB</a><br>
                                                    <a href="products.html" class="category"></a>
                                                    <p class="price">3,690,000 VNĐ</p>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/Xiaomi/Redmi-K20-Pro-1.png" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Xiaomi Redmi K20 Pro 64GB Ram 6GB</a><br>
                                                    <a href="products.html" class="category"></a>
                                                    <p class="price">6,790,000 VNĐ</p>
                                                </div>
                                            </li>
                                            <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="source/images/Xiaomi/Mi-cc9.jpg" alt=""></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Xiaomi Mi CC9 RAM 6GB/64GB</a><br>
                                                    <a href="products.html" class="category"></a>
                                                    <p class="price">5,590,000 VNĐ</p>
                                                </div>
                                            </li> -->

                                        </ul>
                                    </div>

                                    <!-- -->
                                    <div class="item">
                                        <ul class="thumbnails">
                                             @foreach($phothong3 as $phothong)
                                            <li class="span3">
                                                 <div class="product-box" style="height: 400px;">
                                                    <span class="sale_tag"></span>
                                                    <p>
                                                        <a href="{{route('chitietsanpham',$phothong->MASP)}}"><img height="250px" src="source/images/Iphone/{{$phothong->ANHDAIDIEN}}" alt=""></a>
                                                    </p>
                                                    <a href="{{route('chitietsanpham',$phothong->MASP)}}" class="title">{{$phothong->TENSP}}</a><br>
                                                    <a href="{{route('chitietsanpham',$moi->MASP)}}" class="category">
                                                        @if($phothong->GIAKHUYENMAI==0)
                                                        <p class="price">{{number_format($phothong->GIA)}} VNĐ</p>
                                                        @else
                                                        <p class="price"><strike>{{number_format($phothong->GIA)}} VNĐ</strike></p>
                                                        <p class="price">{{number_format($phothong->GIAKHUYENMAI)}} VNĐ</p>
                                                        @endif
                                                    </a>

                                                </div>
                                            </li>
                                            @endforeach

                                           <!--  <li class="span3">
                                                <div class="product-box">
                                                    <p>
                                                        <a href="product_detail.html"><img src="themes/images/cloth/laptop2.jpg" alt="" /></a>
                                                    </p>
                                                    <a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
                                                    <a href="products.html" class="category">Commodo consequat</a>
                                                    <p class="price">19.500.000đ</p>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <!-- -->

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




<!-- <div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 12px; right: 0px; opacity: 1; cursor: pointer;"><img src="source/themes/images/gotop.png" style="width:40px; height:40px; margin-top: 25px; margin-right: 17px;"></div> --></body></html>