@extends('layouts.common')

@section('content')
    <style>
        .first {
            margin-top: 10px;
            text-align: justify;
        }

        @media (max-width: 767px) {
            .intro-left-content {
                margin-bottom: 0px;
                margin-top: 30px;
            }

            .header.h-transparent2.sticky {
                min-height: 50px;
            }

            .slider-img {
                min-height: auto;
            }

        }

        .carousel-item {
            min-height: auto;
            height: 100%;
            width: 100%;
        }

        .carousel-indicators {
            bottom: 0;
            display: none;
        }

        h2 {
            font-size: 28px !important;
        }

        .btn {
            width: 100%;
        }

        .btn:hover {
            background: #e7015e !important;
            width: 100%;
        }

        .post-meta {
            height: 70px;
        }

        h2 {
            font-size: 16px !important;
            line-height: 20px;
        }

        .post-meta {
            height: 30px;
        }

        .ts-contact {
            padding: 5px !important;
            padding: 6px 0px 42px 0px !important;
        }

        p {
            font-size: 20px !important;
            line-height: 35px;
            color: #4c4c4c;
        }

        h1 {
            font-size: 25px;
            color: #1f90cf;
        }
    </style>

    <!-- ts intro start -->

    <section class="ts-intro-item "
             style="background-color: #f1f1f1 ; background-image: linear-gradient(to right, #f1f1f1  , #F4F4F4);">
        <div class="container">
            <div class="row slider-section">
                <div class="col-md-6">
                    <div class="col-lg-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                        <div class="intro-left-content">
                            <img src="/images/numonic.png" style=" width: 100%"/>

                        </div>
                    </div><!-- col end-->
                </div>
                <div class="col-md-6 wow fadeInUp">
                    {{--   <h2 cl>এসি মেলা ২০২২</h2>--}}

                    <h1> বিনোদন ও খেলা উপভোগের অন্যতম অনুষঙ্গ টেলিভিশন।</h1>

                    <p>২০ নভেম্বর কাতারে শুরু হচ্ছে ফিফা আয়োজিত দ্য গ্রেটেস্ট শো অন আর্থ ‘ফুটবল বিশ্বকাপ ২০২২’। সারা
                        বিশ্বের মতো বিশ্বকাপ–উন্মাদনা শুরু হয়ে গেছে বাংলাদেশেও। প্রিয় দল ও প্রিয় তারকার খেলা দেখার জন্য
                        অনেকেই প্রস্তুতি নিচ্ছেন নতুন টিভি কেনার।
                        বাংলাদেশে টিভির বাজার, দেশি-বিদেশি বিভিন্ন ব্র্যান্ডের টিভির খোঁজ ও বৈশিষ্ট্য, দরদাম, চলতি
                        অফারসহ টিভির আদ্যোপান্ত নিয়ে প্রথম আলো ডিজিটালের বিশেষ আয়োজন।</p>

                </div>

                {{--  <div class=" mobile col-lg-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                      <div class="intro-left-content">
                          <img src="/images/numonic.png" style=" width: 100%"/>

                      </div>
                  </div><!-- col end-->--}}


            </div><!-- row end-->
        </div><!-- container end-->
    </section>
    <!-- ts intro end-->
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- carousel code -->
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <ol class="carousel-indicators">
                            @php($i=0)
                            @foreach($sliders as $res)
                                <li data-target="#carouselExampleIndicators"
                                    data-slide-to={{$i}} @if($i == 0) class="active" @endif></li>
                                @php($i++)
                            @endforeach
                        </ol>
                        <div class="carousel-inner">

                            <!-- first slide -->
                            @php($i=1)
                            @foreach($sliders as $res)
                                <div class="carousel-item @if($i==1) active @endif wow fadeInRight"
                                     data-wow-duration="1.5s" data-wow-delay="300ms">
                                    <div class="">
                                        {{-- <h3 data-animation="animated bounceInLeft">
                                             This is the caption for slide 1
                                         </h3>
                                         <h3 data-animation="animated bounceInRight">
                                             This is the caption for slide 1
                                         </h3>
                                         <button class="btn btn-primary btn-lg" data-animation="animated zoomInUp">Button</button>--}}
                                        <a href="{{$res->url}}" target="_blank">
                                            <img src="{{$res->featured_image}}" alt="Slider Image" class="slider-img"
                                                 width="100%">
                                        </a>


                                    </div>
                                </div>
                                @php($i++)
                            @endforeach

                        </div>

                        <!-- controls -->
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="ts-contact " style="background-color: #f1f1f1;">
        <div class="container">
            <div class="row mb-25">
                <div class="col-lg-12">
                    <div class="elementor-widget-container">
                        <div class="row ">
                            <div class="col-lg-2 col-6 fadeInUp mt-4 wow fadeInUp" data-wow-duration="1.5s"
                                 data-wow-delay="300ms">
                                <div class="card p-2" style="border: 1px solid; border-color: #9f9f9f">
                                    <a href="https://www.samsung.com/bd/tvs/all-tvs/" target="_blank">
                                        <div class="post-header mx-auto">
                                            <img src="/images/photos/1667980519.jpg"
                                                 class="img-responsive mb-2" width="100%"
                                                 alt="--">

                                        </div>
                                    </a>


                                    <!-- post-body end -->
                                </div>
                                <!-- post end-->
                            </div>
                            @foreach($photos as $res)

                                <div class="col-lg-2 col-6 fadeInUp mt-4 wow fadeInUp" data-wow-duration="1.5s"
                                     data-wow-delay="300ms">
                                    <div class="card p-2" style="border: 1px solid; border-color: #9f9f9f">
                                        <a href="{{$res->url}}" target="_blank">
                                            <div class="post-header mx-auto">
                                                <img src="{{$res->featured_image}}"
                                                     class="img-responsive mb-2" width="100%"
                                                     alt="--">

                                            </div>
                                        </a>


                                        <!-- post-body end -->
                                    </div>
                                    <!-- post end-->
                                </div>
                            @endforeach

                        </div> <!-- row end -->
                    </div>
                </div><!-- col end-->

            </div>

        </div>

    </section>

    @if(count($videos)>0)

        <section class="ts-contact" style="background-color: #f8f8f8;" id="video">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="section-title text-center">
                            <li class="nav-item" style="list-style: none">
                                <a href="#video">ভিডিও</a>
                            </li>
                        </h2>
                        <div class="elementor-widget-container">
                            <div class="row ">
                                @foreach($type1 as $res)

                                    <div class="col-lg-4 fadeInUp mt-3 wow fadeInUp" data-wow-duration="1.5s"
                                         data-wow-delay="300ms">
                                        <div class="card p-3" style="border: 1px solid; border-color: #9f9f9f">
                                            <div class="post-header mx-auto">
                                                <iframe width="100%" height="170"
                                                        src="{{$res->video_link}}"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>


                                            </div>
                                            <div class="post-body mx-auto">
                                                <div class="post-meta">

                                                    <h2>{{$res->video_title}}</h2>

                                                </div>

                                            </div>
                                            <!-- post-body end -->
                                        </div>
                                        <!-- post end-->
                                    </div>
                                @endforeach

                            </div> <!-- row end -->
                            {{--  <section class="ts-contact" id="video2">
                                  <div class="container">
                                      <div class="row">
                                          <div class="col-lg-12">
                                              <div class="elementor-widget-container">
                                                  <div class="row ">
                                                      @foreach($video2 as $res)

                                                          <div class="col-lg-4 fadeInUp mt-3 wow fadeInUp"
                                                               data-wow-duration="1.5s"
                                                               data-wow-delay="300ms">
                                                              <div class="card p-3"
                                                                   style="border: 1px solid; border-color: #9f9f9f">
                                                                  <div class="post-header mx-auto">
                                                                      <iframe width="100%" height="170"
                                                                              src="{{$res->video_link}}"
                                                                              title="YouTube video player" frameborder="0"
                                                                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                                              allowfullscreen></iframe>


                                                                  </div>
                                                                  <div class="post-body mx-auto">
                                                                      <div class="post-meta">

                                                                          <h2>{{$res->video_title}}</h2>

                                                                      </div>

                                                                  </div>
                                                                  <!-- post-body end -->
                                                              </div>
                                                              <!-- post end-->
                                                          </div>
                                                      @endforeach


                                                  </div> <!-- row end -->
                                              </div>
                                          </div><!-- col end-->

                                      </div>

                                  </div>

                              </section>
                              @if(count($video2) >0)
                                  <div class="row">
                                      <div class="mx-auto mt-2" id="videobtn">
                                          <button onclick="moreVideos()" class="btn  btn-primary ">More</button>
                                      </div>
                                  </div>
                              @endif--}}
                        </div>
                    </div><!-- col end-->

                </div>

            </div>

        </section>
        <section class="ts-contact" style="background-color: #f8f8f8;" id="video">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="section-title text-center">
                            <li class="nav-item" style="list-style: none">
                                <a href="#video">বিশেষজ্ঞদের মতামত</a>
                            </li>
                        </h2>
                        <div class="elementor-widget-container">
                            <div class="row ">
                                @foreach($type2 as $res)

                                    <div class="col-lg-4 fadeInUp mt-3 wow fadeInUp" data-wow-duration="1.5s"
                                         data-wow-delay="300ms">
                                        <div class="card p-3" style="border: 1px solid; border-color: #9f9f9f">
                                            <div class="post-header mx-auto">
                                                <iframe width="100%" height="170"
                                                        src="{{$res->video_link}}"
                                                        title="YouTube video player" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                        allowfullscreen></iframe>


                                            </div>
                                            <div class="post-body mx-auto">
                                                <div class="post-meta">

                                                    <h2>{{$res->video_title}}</h2>

                                                </div>

                                            </div>
                                            <!-- post-body end -->
                                        </div>
                                        <!-- post end-->
                                    </div>
                                @endforeach

                            </div> <!-- row end -->

                        </div>
                    </div><!-- col end-->

                </div>

            </div>

        </section>
    @endif

    @if(count($news)>0)
        <section class="ts-contact" style="background-color: #f1f1f1;" id="news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        {{--  <h2 class="section-title text-center">
                              <li class="nav-item" style="list-style: none">
                                  <a href="#status">আর্টিকেল</a>
                              </li>
                          </h2>--}}
                        <div class="elementor-widget-container">
                            <div class="row ">
                                @foreach($news as $res)

                                    <div class="col-lg-4 fadeInUp mt-3 wow fadeInUp" data-wow-duration="1.5s"
                                         data-wow-delay="300ms">
                                        <div class="card p-3" style="border: 1px solid; border-color: #9f9f9f">
                                            <div class="post-header mx-auto">
                                                <img src="{{$res->featured_image}}" height="225px"
                                                     class="img-responsive mb-2" width="100%"
                                                     alt="--">

                                            </div>
                                            <div class="post-body mx-auto">
                                                <div class="post-meta">
                                                    <a class="" href="{{$res->news_link}}" target="_blank">
                                                        <h2>{{$res->title}}</h2>
                                                    </a>
                                                </div>

                                                <div class="post-footer " style="cursor: pointer; color:#0d51a0 ">
                                                    <a href="{{$res->news_link}}" target="_blank">
                                                        Continue <i class="icon icon-arrow-right"></i></a>

                                                </div>


                                            </div>
                                            <!-- post-body end -->
                                        </div>
                                        <!-- post end-->
                                    </div>
                                @endforeach

                            </div> <!-- row end -->
                            {{--    <section class="ts-contact" id="news2">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="elementor-widget-container">
                                                    <div class="row ">
                                                        @foreach($news2 as $res)

                                                            <div class="col-lg-4 fadeInUp mt-3 wow fadeInUp"
                                                                 data-wow-duration="1.5s" data-wow-delay="300ms">
                                                                <div class="card p-3"
                                                                     style="border: 1px solid; border-color: #9f9f9f">
                                                                    <div class="post-header mx-auto">
                                                                        <img src="{{$res->featured_image}}" height="225px"
                                                                             class="img-responsive mb-2" width="100%"
                                                                             alt="--">

                                                                    </div>
                                                                    <div class="post-body mx-auto">
                                                                        <div class="post-meta">
                                                                            <a class="" href="{{$res->news_link}}"
                                                                               target="_blank">
                                                                                <h2>{{$res->title}}</h2>
                                                                            </a>
                                                                        </div>

                                                                        <div class="post-footer "
                                                                             style="cursor: pointer; color:#0d51a0 ">
                                                                            <a href="{{$res->news_link}}" target="_blank">
                                                                                Continue <i
                                                                                    class="icon icon-arrow-right"></i></a>

                                                                        </div>


                                                                    </div>
                                                                    <!-- post-body end -->
                                                                </div>
                                                                <!-- post end-->
                                                            </div>
                                                        @endforeach

                                                    </div> <!-- row end -->
                                                </div>
                                            </div><!-- col end-->

                                        </div>

                                    </div>

                                </section>
                                @if(count($news2) >0)
                                    <div class="row">
                                        <div class="mx-auto mt-2" id="newsbtn">
                                            <button onclick="moreNews()" class="btn  btn-primary ">More</button>
                                        </div>
                                    </div>
                                @endif--}}


                        </div>
                    </div><!-- col end-->

                </div>

            </div>

        </section>
    @endif

@endsection
