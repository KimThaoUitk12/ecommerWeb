<!doctype html>
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
        @include('header')
        <section class="main-content">
            @yield('content')
        </section>
        @include('footer')


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
</body></html>