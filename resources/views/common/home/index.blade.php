<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>বিকাশ FAN-টাস্টিক বিশ্বকাপ।</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/custom.css">
    <link rel="icon" type="image/x-icon" href="/images/bkash_logo.png">

    <meta property="og:image" content="{{ $thumbnail }}"/>
    <meta property="og:image:width" content="600"/>
    <meta property="og:image:height" content="375"/>
    <meta property="og:title" content="{{ $fb_title }} ">
    <meta property="og:description"
          content="{{ $fb_sub_title }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.3/angular.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        var app = angular.module('myApp', []);
        console.log("My App Initiated")
    </script>


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KP4T0XYRL9"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-KP4T0XYRL9');
    </script>

    <style>

        .desktop {
            display: block;
        }

        .mobile {
            display: none;
        }

        span, a {
            color: #d02053 !important;
            font-weight: bold;
        }

        .quote-item form .default-btn {
            background-color: #d02053;
        }

        .who-we-are-content {
            padding: 50px 0px;
        }

        .bg-light {
            padding: 20px 0px;
        }

        @media (max-width: 480px) {
            .mbvid {
                margin-top: 25px;
            }

            .desktop {
                display: none;
            }

            .mobile {
                display: block;
            }
        }
    </style>
</head>
<body ng-app="myApp" ng-controller="myController" ng-init="allSelfieData()">
@include('sweetalert::alert')

<div id="loading">
    <img id="loading-image" src="/images/loader.gif" alt="Loading..."/>
</div>

<div class="navbar-area sticky-top ">

    <nav class="navbar navbar-expand-lg navbar-light  ">
        <div class="container">
            <a class="navbar-brand" href="/"> <img src="/images/bkash_logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="/">হোম </a>
                    </li>
                    {{-- <li class="nav-item">
                         <a class="nav-link" href="#news">খবর </a>
                     </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="#video">ছবি/ভিডিও</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <a href="#apply" class="btn btn-danger reg-btn text-white">অংশগ্রহন করুন</a>
                </form>
            </div>
        </div>
    </nav>

</div>
<section>
    <img src="/images/slider.png" alt="image" width="100%">

</section>
<section class="value-area ptb-100 bg-light" id="info">
    <div class="container">
        <div class="row align-items-center">


            <div class="col-md-6 mx-auto mbvid">

                <iframe style="width: 100%" height="315" src="https://www.youtube.com/embed/wxE_uKUKIHk"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
            <div class="col-md-6 mx-auto">
                <div class="who-we-are-content">

                    <h3 class="primary-color text-center">বিশ্বকাপ উদযাপনের মুহূর্ত শেয়ার করে জিতুন আকর্ষণীয়
                        পুরস্কার</h3>
                    <p>
                        বিশ্বজুড়ে বিশ্বকাপের আমেজ। কাতার কাঁপছে ফুটবল উম্মাদনায়।
                        কাতারে অবস্থানরত বাংলাদেশি ফুটবল–ফ্যানদের জন্য দারুণ সুযোগ!
                        স্টেডিয়ামের ভেতর–বাইরে অথবা কাতারের বিভিন্ন জায়গা থেকে বাংলাদেশিদের পাঠানো বিশ্বকাপ উদযাপনের
                        নানা মুহূর্তের ছবি বা শর্ট ভিডিও নিয়ে প্রথম আলো ডটকমের বিশেষ আয়োজন <span>‘বিকাশ FAN-টাস্টিক বিশ্বকাপ।’</span>

                        অংশ নিয়ে জিতে নিন মেগা পুরস্কার কাতার–ঢাকা–কাতার বিমান টিকেট, সাথে প্রতিদিন আকর্ষণীয় পুরস্কার।

                        তো, কাতার–প্রবাসী বন্ধুরা, বিশ্বকাপ হয়ে উঠুক আপনার জন্য FAN–টাসটিক!
                    </p>

                </div>


            </div>
            {{-- <div class="col-lg-6 col-12 mx-auto">
                 <div class="who-we-are-content">
                     --}}{{--<video controls class="w-100">

                         <source src="/images/video.mp4"
                                 type="video/mp4">
                     </video>--}}{{--

                     <video controls class="w-100">
                         <source src="/images/video.mp4" type="video/mp4"/>
                     </video>

                     --}}{{-- <div class="embed-responsive embed-responsive-21by9">
                          <iframe class="embed-responsive-item" src="/images/video.mp4" width="100%"
                                  height="350px"></iframe>
                      </div>--}}{{--

                 </div>
             </div>--}}
        </div>
    </div>
</section>

<section class="value-area ptb-100 form-section " id="apply">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 ">
                <div class="who-we-are-content">

                    <a href="https://www.bkash.com/bn/remittance?utm_source=Prothomalo&utm_medium=Display&utm_campaign=Fantastic_Bisshocup&utm_term=CPM&utm_content=Banner"
                       target="_blank"><img src="/images/remitance.png" style="width: 80%" class=""/></a>

                    {{--  <span>সিলন বিশ্বকাপ ফ্যামিলি মোমেন্ট</span>--}}
                    <h3 class="text-white pt-4">প্রতিযোগিতায় অংশগ্রহণের নিয়ম</h3>
                    <ul class="who-we-are-list text-white">


                        <li>
                            কাতারে অবস্থানরত বাংলাদেশিরাই এই প্রতিযোগিতায় অংশ নিতে পারবেন।
                        </li>
                        <li>
                            ছবি বা শর্ট ভিডিও পাঠানোর মেইল:<a href="mailto:ayojon@prothomalo.com" class="text-white">
                                ayojon@prothomalo.com </a>
                        </li>
                        <li>
                            অথবা সাবমিট করা যাবে www.bkashfantasticwc.pro ওয়েবসাইটে।
                        </li>
                        <li>
                            ছবি বা শর্ট ভিডিও পাঠানোর সময় অবশ্যই নিজের নাম ও ছবি, ফোন নাম্বার এবং ই–মেইল আইডি দিতে হবে।
                        </li>


                    </ul>


                </div>
            </div>
            <div class="col-lg-6">
                <div class="quote-item">
                    <div class="content">
                        <span>অংশগ্রহণ করুন </span>
                        <h3 class="primary-color">নিচের ফরমে আপনার তথ্য দিয়ে ছবি অথবা ভিডিও আপলোড করুন।</h3>
                    </div>
                    <form action="/selfie-contest/submit" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                   placeholder="নাম" required="">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="phone"
                                   placeholder="মুঠোফোন নম্বর" value="{{ old('phone') }}" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email"
                                   placeholder="ইমেইল" value="{{ old('email') }}" required="">
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label>ছবি/ভিডিও</label>
                                <div class="col-md-12 col-12 mt-2">

                                    <input class="form-control" type="file" name="image" required>


                                </div>
                            </div>
                        </div>

                        <button type="submit" class="default-btn">
                            পাঠিয়ে দিন
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</section>
<section class="ts-contact" style="background-color: #f8f8f8;" id="video">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="section-title text-center">
                    <li class="nav-item" style="list-style: none">
                        <a href="#video">ছবি/ভিডিও</a>
                    </li>
                </h2>
                <div class="elementor-widget-container">
                    <div class="row ">
                        @foreach($submit_data as $res)

                            <div class="col-lg-4 fadeInUp mt-3 wow fadeInUp" data-wow-duration="1.5s"
                                 data-wow-delay="300ms">
                                <div class="card p-1">
                                    <div class="post-header mx-auto">
                                        @if(strstr($res->selfie, "mp4"))
                                            <video controls class="w-100" height="300px">
                                                <source src="{{$res->selfie}}" type="video/mp4"/>
                                            </video>

                                        @elseif(strstr($res->selfie, "MOV"))
                                            <video controls class="w-100" height="300px">
                                                <source src="{{$res->selfie}}" type="video/mp4"/>
                                            </video>
                                        @elseif(strstr($res->selfie, "mov"))
                                            <video controls class="w-100" height="300px">
                                                <source src="{{$res->selfie}}" type="video/mp4"/>
                                            </video>
                                        @elseif(strstr($res->selfie, "png"))
                                            <img src="{{$res->selfie}}" width="100%" height="300px"/>
                                        @elseif(strstr($res->selfie, "jpg"))
                                            <img src="{{$res->selfie}}" width="100%" height="300px"/>
                                        @elseif(strstr($res->selfie, "JPG"))
                                            <img src="{{$res->selfie}}" width="100%" height="300px"/>

                                        @elseif(strstr($res->selfie, "webp"))
                                            <img src="{{$res->selfie}}" width="100%" height="300px"/>
                                        @elseif(strstr($res->selfie, "jpeg"))
                                            <img src="{{$res->selfie}}" width="100%" height="300px"/>
                                        @endif

                                    </div>

                                </div>
                            </div>
                        @endforeach


                    </div> <!-- row end -->
                    <div class="row mt-2 ">
                        <div class="col-md-6 mx-auto">
                            {{ $submit_data->appends(Request::except('page'))->links("pagination::bootstrap-4") }}
                        </div>

                    </div>

                </div>
            </div><!-- col end-->

        </div>

    </div>

</section>


<div class="container bg-grey" id="history" style="margin-bottom: 25px; margin-top: 25px; display: block">
    <a href="https://www.bkash.com/bn/remittance?utm_source=Prothomalo&utm_medium=Display&utm_campaign=Fantastic_Bisshocup&utm_term=CPM&utm_content=Banner"
       target="_blank">
        <img class="desktop" src="/images/banner.png" width="100%" height="auto">
        <img class="mobile" src="/images/mobi_banner.png" width="100%" height="auto">

    </a>
</div>

<div class="copyright-area">
    <div class="container">
        <div class="copyright-area-content">
            <div class="row">
                <div class="col-md-10 col-12 mx-auto">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <img src="/images/palologoblack.png" class="footer-logo" style="height: 75px">

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

<script>


    app.controller('myController', function ($scope, $http) {
        $scope.allSelfieData = function () {

            $http.get("/all-selfie-data")
                .then(function (response) {
                    $scope.data_list = response.data.results;
                    console.log($scope.data_list)


                })
        };
        $scope.voteSubmit = function () {
            console.log('ok')
            console.log($scope.name)
            console.log($scope.phone)
            return

            if ($scope.name == null || $scope.phone == null) {
                Swal.fire({
                    icon: 'error',
                    text: 'All fields are Required',
                })
                return;
            }


            let url = "/vote";
            let params = {
                'name': $scope.name,
                'phone': $scope.phone,
                'selfie_id': $scope.selfie_id,
            };
            $http.post(url, params).then(function success(response) {
                return "ok";


                if (response.data.status == 200) {

                    Swal.fire({
                        icon: 'success',
                        text: response.data.message,
                    });
                    $('#closemodal').click(function () {
                        $('#modalwindow').modal('hide');
                    });


                }
                if (response.data.status == 400) {
                    Swal.fire({
                        icon: 'error',
                        text: response.data.message,
                    });
                    $('#closemodal').click(function () {
                        $('#modalwindow').modal('hide');
                    });


                }
                console.log(response.data);

            });
            $scope.allSelfieData();

        }


    });


</script>
<script>
    $(window).on('load', function () {
        $('#loading').hide();


    });

    setTimeout(function () {
        $('#loading').hide();
    }, 4000);


    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }

    function clearImage() {
        document.getElementById('formFile').value = null;
        frame.src = "";
    }

    document.getElementById("videoUpload").onchange = function (event) {
        let file = event.target.files[0];
        let blobURL = URL.createObjectURL(file);
        document.querySelector("video").style.display = 'block';
        document.querySelector("video").src = blobURL;
    }

</script>

</body>
</html>
