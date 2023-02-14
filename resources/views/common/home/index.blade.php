<!DOCTYPE html>
<html class=no-js lang=zxx>
<head>
    <meta charset=utf-8/>
    <meta http-equiv=x-ua-compatible content="ie=edge"/>

    <title>পাঠক–দর্শকদের পাঠানো প্রশ্ন এবং উত্তর নিয়ে প্রথম আলো ডিজিটালের বিশেষ আয়োজন: LoveGPT </title>

    <meta name=description content=""/>
    <meta name=viewport content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" type="image/x-icon" href="https://www.prothomalo.com/default.svg"/>


    <meta property="og:image" content="/img/thumb.png"/>
    <meta property="og:image:width" content="600"/>
    <meta property="og:image:height" content="375"/>
    <meta property="og:title" content="পাঠক–দর্শকদের পাঠানো প্রশ্ন এবং উত্তর নিয়ে প্রথম আলো ডিজিটালের বিশেষ আয়োজন: LoveGPT ">
    <meta property="og:description"
          content="আপনিও যদি সম্পর্কবিষয়ক কোনো জটিলতার মধ্যে থাকেন, তাহলে সুনির্দিষ্ট সমস্যা বা প্রশ্নটি সাবমিট করুন। পরামর্শ দেবেন দেশসেরা মানসিক রোগ–বিশেষজ্ঞ প্যানেল।">

    <link rel=stylesheet
          href="/frontend/css/bootstrap.css"/>
    <link rel=stylesheet href="/frontend/css/main.css"/>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Hind Siliguri', sans-serif;
        }

        .hero-area.index4 .personal-image {
            margin-top: 80px;
            text-align: center;
        }

        .section-title2 {
            text-align: center;
            margin-bottom: 0px;
            padding: 0px;
            position: relative;
            z-index: 5;
        }

        .desktop{
            display: block;
        }
        .mobile{
            display: none;
        }
        @media only screen and (max-width: 767px){
            .hero-area.index4 .personal-image {
                display: block !important;
            }

            .desktop{
                display: none;
            }
            .mobile{
                display: block;
            }
        }

    </style>


</head>
<body>

@include('sweetalert::alert')

<div class=preloader>
    <div class=preloader-inner>
        <div class=preloader-icon>
            <span></span>
            <span></span>
        </div>
    </div>
</div>


<header class="header index4">
    <div class=navbar-area>
        <div class=container>
            <div class="row align-items-center">
                <div class=col-lg-12>
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand logo" href="/">
                            <img src="/img/logo.png" alt=Logo/>
                        </a>
                        <button class=navbar-toggler type=button data-toggle=collapse
                                data-target="#navbarSupportedContent" aria-controls=navbarSupportedContent
                                aria-expanded=false aria-label="Toggle navigation">
                            <span class=toggler-icon></span>
                            <span class=toggler-icon></span>
                            <span class=toggler-icon></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id=navbarSupportedContent>
                            <ul id=nav class="navbar-nav ml-auto">

                                <li class=nav-item>
                                    <a href="/" class="{{--active--}}">হোম</a>
                                </li>
                                <li class=nav-item><a href="#answer">জিজ্ঞাসাগুলি</a></li>

                            </ul>
                        </div>

                        <div class=button>
                            <a href="#question" class="btn">প্রশ্ন করুন</a>
                        </div>
                    </nav>

                </div>
            </div>

        </div>

    </div>

</header>
<section class="hero-area index4">

    <div class="row ">
        <div class="col-lg-12 col-12">
            <div class="personal-image wow fadeInRight" data-wow-delay=.5s>
                <img src="/img/slider.png" class="w-100 desktop" alt="#">
                <img src="/img/slider.png" class="w-100 mobile" alt="#">
            </div>
        </div>
    </div>

</section>


{{--
<section class="hero-area index4">

    <div class=hero-inner>
        <div class=container>
            <div class="row ">
--}}
{{--                <div class="col-lg-6 co-12">
                    <div class=home-slider>
                        <div class=hero-text>
                            <h5 class="small wow fadeInUp" data-wow-delay=.3s>Hello There...</h5>
                            <h1 class="wow fadeInUp" data-wow-delay=.5s><span>I am</span> Stiven Milner</h1>
                            <ul class="wow fadeInUp" data-wow-delay=.7s>
                                <li>Web Developer</li>
                                <li>Graphics Designer</li>
                                <li>Ui/Ux Designer</li>
                            </ul>
                            <p class="wow fadeInUp" data-wow-delay=.9s>Lorem Ipsum is simply dummy text of the
                                printing and typesetting <br> industry. Lorem Ipsum has been the industry's standard
                                <br>dummy text ever since.</p>
                            <div class="button wow fadeInUp" data-wow-delay=1.1s>
                                <a href=about-us.html class=btn>Hire Me Now!</a>
                            </div>
                        </div>
                    </div>
                </div>--}}{{--

                <div class="col-lg-12 col-12">
                    <div class="personal-image wow fadeInRight" data-wow-delay=.5s>
                        <img src="/img/slider.png" class="w-100" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
--}}



@include('common.home.question-area')
{{--@include('common.home.intro-vid')--}}
{{--@include('common.home.question_answer')--}}
{{--@include('common.home.blog')--}}

<footer class=footer>
    <div class=footer-bottom>
        <div class=container>
            <div class=inner>
                <div class=row>
                    <div class=col-12>
                        <div class=left>
                            <p>কপিরাইট © <a href="https://www.prothomalo.com" rel=nofollow target=_blank>প্রথম আলো</a></p>
                            <p>প্রগতি ইনস্যুরেন্স ভবন, ২০-২১ কারওয়ান বাজার, ঢাকা ১২১৫।<br>
                                ফোন: ৮১৮০০৭৮-৮১</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>


<a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
</a>


<script src="/frontend/js/bootstrap.min.js%2bcount-up.min.js%2bwow.min.js.pagespeed.jc.H_qj8lYxGz.js"></script>
<script>eval(mod_pagespeed_yP1iwAfn2Z);</script>
<script>eval(mod_pagespeed_XtEUMc8KX4);</script>
<script>eval(mod_pagespeed_xBM9Ek6GWM);</script>
<script src="/frontend/js/tiny-slider.js%2bglightbox.min.js%2bimagesloaded.min.js.pagespeed.jc.Wd_qfjvhJd.js"></script>
<script>eval(mod_pagespeed_uqseOIoNp_);</script>
<script>eval(mod_pagespeed_PdNzy3KZZf);</script>
<script>eval(mod_pagespeed_1mE7F1sifU);</script>
<script src="/frontend/js/isotope.min.js%2bmain.js.pagespeed.jc.u7BrnQaMzd.js"></script>
<script>eval(mod_pagespeed_M6Tjrc9Mvb);</script>
<script>eval(mod_pagespeed_1Q5bMJEVeo);</script>


<script type="text/javascript">
   /* tns({
        container: '.testimonial-slider',
        items: 1,
        slideBy: 'page',
        autoplay: false,
        mouseDrag: true,
        gutter: 0,
        nav: true,
        controls: false,
        controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
        responsive: {0: {items: 1,}, 540: {items: 1,}, 768: {items: 1,}, 992: {items: 2,}, 1170: {items: 2,}}
    });*/

    imagesLoaded('#container', function () {
        var elem = document.querySelector('.grid');
        var iso = new Isotope(elem, {itemSelector: '.grid-item', masonry: {columnWidth: '.grid-item'}});
        let filterButtons = document.querySelectorAll('.portfolio-btn-wrapper button');
        filterButtons.forEach(e => e.addEventListener('click', () => {
            let filterValue = event.target.getAttribute('data-filter');
            iso.arrange({filter: filterValue});
        }));
    });
    GLightbox({
        'href': 'https://www.youtube.com/watch?v=ZtBK3TBUbVU',
        'type': 'video',
        'source': 'youtube',
        'width': 900,
        'autoplayVideos': true,
    });


    let txt = "আপনার প্রশ্ন কি?";
    var speed = 5;
    var i = 0;

    function typeWriter() {

        console.log(txt.length)
        if (txt.length > 1 && txt.length < 50) {
            speed = 50;
        }
        if (txt.length > 50 && txt.length < 100) {
            speed = 40;
        }
        if (txt.length > 100 && txt.length < 200) {
            speed = 30;
        }
        if (txt.length > 200 && txt.length < 350) {
            speed = 20;
        }
        if (txt.length > 350 && txt.length < 500) {
            speed = 10;
        }
        if (txt.length > 500) {
            speed = 5;
        }
        if (i < txt.length) {
            document.getElementById("response").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }

    typeWriter();


</script>
</body>

</html>
