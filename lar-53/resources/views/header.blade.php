<div id="top-bar" class="container">
    <div class="row">
        <div class="span4">
            <form method="GET" class="search_form" action="{{route('search')}}">
                <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
                <div class="input-group">
                    <input type="text" class="search-query form-control input-group" placeholder="Tên máy, model,..." name="key">
                    <span class="input-group-btn">
                            <button class="btn btn-primary rounded-circle btnpro" type="submit" id="btn-search">
                                <span class="fa fa-search"></span>
                    </button>
                    </span>

                </div>
            </form>
        </div>
        <div class="span8">
            <div class="account pull-right">
                <ul class="user-menu">
                    <li><a href="{{route('canhan')}}">Tài khoản</a></li>
                    <li><a href="{{route('giohang')}}">Giỏ hàng</a></li>
                    <!-- <li><a href="">Thanh toán</a></li> -->
                    @if(Auth::check())
                    <li><a href="">Chào: {{Auth::user()->FULL_NAME}}</a></li>
                    <li><a href="{{route('logout')}}">Đăng xuất</a></li>
                    @else
                    <li><a href="{{route('dangky')}}">Đăng nhập</a></li>
                    @endif()
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="wrapper" class="container">
    <section class="navbar main-menu">
        <div class="navbar-inner main-menu">
            <a href="{{route('trang-chu')}}" class="logo pull-left">
                <h4 class="title">Di động thông minh </h4>
            </a>
            <nav id="menu" class="pull-right">
                <ul class="sf-js-enabled sf-shadow">
                    <li><a href="./products.html" class="sf-with-ul">Hãng sản xuất<span class="sf-sub-indicator"> »</span><span class="sf-sub-indicator"> »</span></a>
                        <ul style="display: none; visibility: hidden;">
                            @foreach($hang_may as $hang)
                            <li><a href="{{route('loaisanpham',$hang->MAHANG)}}">{{$hang->TENHANG}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <!-- <li><a href="./products.html">Bán chạy nhất</a></li>
                    <li><a href="./products.html">Sản phẩm mới</a></li> -->
                </ul>
            </nav>
        </div>
    </section><div class="_toggleMenu" style="display: none;"><a class="toggleMenu" href="#">- MENU -</a><ul class="nav">
                    <li><a href="./products.html" class="sf-with-ul parent">Hãng sản xuất<span class="sf-sub-indicator"> »</span></a>
                        <ul style="display: none; visibility: hidden;">
                            <li><a href="./products.html">Apple</a></li>
                            <li><a href="./products.html">Samsung</a></li>
                            <li><a href="./products.html">Oppo</a></li>
                            <li><a href="./products.html">Readmi</a></li>
                            <li><a href="./products.html">Xiaomi</a></li>
                            <li><a href="./products.html">Lenovo</a></li>
                            <li><a href="./products.html">Hãng khác</a></li>
                        </ul>
                    </li>
                    <!--
                    <li><a href="./products.html">Loại sản phẩm</a>
                        <ul>
                            <li><a href="./products.html">Chơi game</a></li>
                            <li><a href="./products.html">Học tập-văn phòng</a></li>
                            <li><a href="./products.html">Đồ họa-kỹ thuật</a></li>
                            <li><a href="./products.html">Cao cấp sang trọng</a></li>
                        </ul>
                    </li>
                -->
                    <!-- <li><a href="./products.html">Man</a></li>                     
                        <li><a href="./products.html">Hangbag</a></li> -->
                    <li><a href="./products.html">Bán chạy nhất</a></li>
                    <li><a href="./products.html">Sản phẩm mới</a></li>
                </ul></div><div class="_toggleMenu" style="display: none;"><a class="toggleMenu" href="#">- MENU -</a><ul class="nav">
                    <li><a href="./products.html" class="sf-with-ul parent">Hãng sản xuất<span class="sf-sub-indicator"> »</span></a>
                        <ul style="display: none; visibility: hidden;">
                            <li><a href="./products.html">Apple</a></li>
                            <li><a href="./products.html">Samsung</a></li>
                            <li><a href="./products.html">Oppo</a></li>
                            <li><a href="./products.html">Readmi</a></li>
                            <li><a href="./products.html">Xiaomi</a></li>
                            <li><a href="./products.html">Lenovo</a></li>
                            <li><a href="./products.html">Hãng khác</a></li>
                        </ul>
                    </li>
                    <!--
                    <li><a href="./products.html">Loại sản phẩm</a>
                        <ul>
                            <li><a href="./products.html">Chơi game</a></li>
                            <li><a href="./products.html">Học tập-văn phòng</a></li>
                            <li><a href="./products.html">Đồ họa-kỹ thuật</a></li>
                            <li><a href="./products.html">Cao cấp sang trọng</a></li>
                        </ul>
                    </li>
                -->
                    <!-- <li><a href="./products.html">Man</a></li>                     
                        <li><a href="./products.html">Hangbag</a></li> -->
                    <li><a href="./products.html">Bán chạy nhất</a></li>
                    <li><a href="./products.html">Sản phẩm mới</a></li>
                </ul></div>
    <section class="homepage-slider" id="home-slider">
        <div class="flexslider">
            <ul class="slides">
                <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;" class="">
                    <img src="source/themes/images/banner_dienthoai/banner0.gif" alt="anh bia 1">
                    <div class="intro">
                        <!--<h1>Laptop mua online</h1>
                        <p><span>Giảm thêm đến 1.000.000đ</span></p>
                        <p><span>Áp dụng kèm theo khuyến mãi trả thẳng khác</span></p> -->
                    </div>
                </li>
                <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;" class="">
                    <img src="source/themes/images/banner_dienthoai/banner1.png" alt="anh bia 2">

                </li>
                <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;" class="">
                    <img src="source/themes/images/banner_dienthoai/banner2.png" alt="anh bia 3">

                </li>
                <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: list-item;" class="flex-active-slide">
                    <img src="source/themes/images/banner_dienthoai/banner3.png" alt="anh bia 4">

                </li>
                <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;" class="">
                    <img src="source/themes/images/banner_dienthoai/banner4.png" alt="anh bia 5">

                </li>
            </ul>
        <ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>
    </section>
    <section class="header_text">
        Website chúng tôi chuyên cung cấp các sản phẩm chất lượng có uy tín và mới nhất trên thị trường hiện nay
        <br>Hãy ghé thăm trang web của chúng tôi và đừng bỏ lỡ các sản phẩm mới nhé!
    </section>