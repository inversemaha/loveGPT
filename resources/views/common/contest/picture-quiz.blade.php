@extends('layouts.common')
@section('content')


    <div class="main-banner">
        <div class="main-banner-item banner-item-two">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluidd">
                        <div class="row align-items-center">
                            {{-- <div class="col-lg-6">
                                 <div class="main-banner-content">
                                     <!--    <span>Play, Learn and Grow</span>-->
                                     <h1>আগামীর চোখে
                                         সম্ভাবনার বাংলাদেশ</h1>
                                     <p>তোমাদের আঁকা ছবির মাধ্যমে আমরা দেখতে চাই সম্ভাবনার বাংলাদেশকে। বিজয়ের এই ৫০ বছরে
                                         গ্রামীণফোন আয়োজন করেছে একটি চিত্রাঙ্কন প্রতিযোগিতা 'আগামীর চোখে সম্ভবনার বাংলাদেশ'
                                         সহযোগিতায় কিশোর আলো ও গোল্লাছুট। </p>
                                     <div class="banner-btn">
                                         <a href="#" class="default-btn">
                                             ছবি আপলোড করো
                                         </a>

                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6">
                                 <div class="main-banner-image-wrap">
                                     <img src="/theme/assets/img/main-banner/main-banner-1.png" alt="image">
                                     <div class="banner-image-wrap-shape">
                                         <img src="/theme/assets/img/main-banner/main-banner-shape-1.png" alt="image">
                                     </div>
                                 </div>
                             </div>--}}


                            <div class="col-lg-12">
                                <div class="main-banner-image-wrap">
                                    <img src="/images/slider.png" alt="image" width="100%">
                                    {{-- <div class="banner-image-wrap-shape">
                                         <img src="/theme/assets/img/main-banner/main-banner-shape-1.png" alt="image">
                                     </div>--}}
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--    <div class="main-banner-shape">
                <div class="shape-5">
                    <img src="/theme/assets/img/main-banner/banner-shape-5.png" alt="image">
                </div>
                <div class="shape-2">
                    <img src="/theme/assets/img/main-banner/banner-shape-2.png" alt="image">
                </div>
                <div class="shape-6">
                    <img src="/theme/assets/img/main-banner/banner-shape-6.png" alt="image">
                </div>
                <div class="shape-4">
                    <img src="/theme/assets/img/main-banner/banner-shape-4.png" alt="image">
                </div>
            </div>--}}
    </div>
    {{--
    <div class="partner-area ptb-100" style="    background: #F7F7F7;
        padding-top: 15px;
        padding-bottom: 15px;">
        <div class="container">

            <div class="col-md-8 col-12 mx-auto">
                <div class="row">

                    <div class="col-md-4 col-2">
                        <h4 class="text-center">সহযোগিতায়</h4>
                    </div>
                    <div class="col-md-4 col-5">
                        <img id="kishore" src="/images/kia.png" alt="image">
                    </div>
                    <div class="col-md-4 col-5">
                        <img src="/images/gollachut.png" alt="image">
                    </div>
                </div>
            </div>


        </div>
    </div>--}}


    <div id="rs-about" class="rs-about style1 bg1 md-pt-80">
        <div class="container">
            <div class="row y-bottom">
                <div class="col-lg-6 padding-0">
                    <img src="/theme/assets/images/about/about1.png" alt="">
                </div>
                <div class="col-lg-6 pl-66 pt-75 pb-75 md-pt-42 md-pb-72">
                    <div class="sec-title mb-47 md-mb-42">
                        <div class="sub-title primary">About Us</div>
                        <h2 class="title mb-0">Welcome to World Best Business Company</h2>
                    </div>
                    <div class="services-part mb-30">
                        <div class="services-icon">
                            <img src="/theme/assets/images/about/icons/1.png" alt="image">
                        </div>
                        <div class="services-text">
                            <h4 class="title">The ability to identify market-entry</h4>
                            <div class="desc">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet  eius modi tempora data.</div>
                        </div>
                    </div>
                    <div class="services-part">
                        <div class="services-icon">
                            <img src="/theme/assets/images/about/icons/2.png" alt="image">
                        </div>
                        <div class="services-text">
                            <h4 class="title">Ensure to increase of expected sales</h4>
                            <div class="desc">Find remarkable ideas is that this text has been the industry's standard ever in business.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="value-area ptb-100" id="info">
        <div class="container">
            <div class="row align-items-center">


                <div class="col-lg-8 col-12 mx-auto text-center">
                    <div class="who-we-are-content">
                        {{-- <span>এই প্রতিযোগিতা কাদের জন্য?</span>--}}
                        <h3>আজকের বিজয়ী</h3>

                        <div class="col-md-6">


                            <div class="card">
                                <img class="card-img-top" src="holder.js/100x180/" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Motiur Rahaman</h4>
                                    <p class="card-text">Text</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



@endsection
