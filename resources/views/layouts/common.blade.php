<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs ================================================== -->
    <meta charset="utf-8">

    <!-- Mobile Specific Metas ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>টিভি মেলা ২০২২</title>
    <!-- Site Title -->


    <!-- CSS
          ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/theme/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="/theme/css/font-awesome.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="/theme/css/animate.css">

    <!-- Template styles-->
    <link rel="stylesheet" href="/theme/css/style.css">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="/theme/css/responsive.css">

    <link rel="stylesheet" href="/css/custom.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <link rel="icon" type="image/png" href="/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <meta property="og:image" content="{{ $thumbnail }}"/>
    <meta property="og:image:width" content="600"/>
    <meta property="og:image:height" content="375"/>
    <meta property="og:title" content="{{ $fb_title }} ">
    <meta property="og:description"
          content="{{ $fb_sub_title }}">
    <script>
        var app = angular.module('myApp', []);

        console.log("My App Initiated")

    </script>

    <style>
        .img-thumbnail {
            border: 1px solid #e4e4e4;
        }
    </style>


{{--    <link rel="stylesheet" href="/theme/css/custom.css">--}}


<!-- Global site tag (gtag.js) - Google Analytics -->
{{--    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XBP1L4YGNR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-XBP1L4YGNR');
    </script>--}}
</head>

<body>
<div class="body-inner">

    <header id="header" class="header header  desktop {{--header-transparent--}} h-transparent2 fixed">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-2 col-6">
                    <!-- logo-->
                    <a class="navbar-brand logo" href="/">
                        <img src="/images/tv_mela_Logo.png" width="150px" alt="">
                    </a>
                </div><!-- end col -->

                <div class="col-lg-8">
                    <nav class="navbar navbar-expand-lg navbar-light text-center justify-content-end">

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="dropdown nav-item active">
                                    <a style="color:#EF3F23 " href="/">হোম </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#news">খবর </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#video">ভিডিও </a>
                                </li>
                                {{-- <li class="nav-item">
                                     <a href="#status">গ্যালারি </a>
                                 </li>--}}


                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- end col -->
                <div class="col-lg-2 d-none d-lg-block text-right">
                    <a target="_blank" href="https://www.prothomalo.com/"> <img src="/images/p_alo.png" width="130px"
                                                                                alt=""></a>
                </div>
                <!-- end col -->
            </div>

        </div><!-- container end-->
    </header>

    {{--  <!-- Header start -->
    <header id="header" class="header header-classic">
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="row">
                    <div class="col-md-2 col-4 ">
                        <a class="navbar-brand" href="/">

                            <img src="/images/logo.png" alt="">
                        </a>

                    </div>
                    <div class="col-md-8 col-8">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ml-auto">
                                <li class="dropdown nav-item active">
                                    <a style="color:#EF3F23 " href="/">হোম </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#apply">অংশগ্রহণ করুন </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#status">ভোট দিন   </a>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 pull-right" >
                        <a target="_blank" href="https://www.prothomalo.com/">

                            <img src="/images/palologoblack.png"  alt="">
                        </a>

                    </div>
                </div>
                <!-- logo-->


            </nav>
        </div><!-- container end-->
    </header>
  <!--/ Header end -->--}}


    @yield('content')


    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <div class="row">
                    <div class="col-md-10 col-12 mx-auto">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <img src="/images/palologoblack.png" class="footer-logo" style="height: 75px"/>
                                {{-- <img src="/images/palologo.png" style="height: 75px"/>--}}
                            </div>
                            <div class="col-md-6 col-12">
                                <p class="footer-p">
                                    কপিরাইট ©
                                    <a href="https://www.prothomalo.com/" target="_blank">
                                        প্রথম আলো ডিজিটাল
                                    </a>
                                    <br>
                                    প্রগতি ইনস্যুরেন্স ভবন, ২০-২১ কারওয়ান বাজার, ঢাকা ১২১৫। <br>ফোন: ৮১৮০০৭৮-৮১</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Javascript Files
          ================================================== -->
    <!-- initialize jQuery Library -->


    <script src="/theme/js/jquery.js"></script>
    <script src="/theme/js/popper.min.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="/theme/js/bootstrap.min.js"></script>

    <!-- Counter -->
    <script src="/theme/js/jquery.appear.min.js"></script>
    <!-- Countdown -->
    <script src="/theme/js/jquery.jCounter.js"></script>
    <!-- magnific-popup -->
    <script src="/theme/js/jquery.magnific-popup.min.js"></script>
    <!-- carousel -->
    <script src="/theme/js/owl.carousel.min.js"></script>
    <!-- Waypoints -->
    <script src="/theme/js/wow.min.js"></script>
    <!-- isotop -->
    <script src="/theme/js/isotope.pkgd.min.js"></script>

    <!-- Template custom -->
    <script src="/theme/js/main.js"></script>


</div>
<!-- Body inner end -->



</body>


</html>
