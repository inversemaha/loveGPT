@extends('layouts.common')
@section('content')



<style>
    .img-fluid {
        max-width: 100%;
        display: block;
        height: 210px !important;
        width: auto;
        text-align: center;
    }
    .page-item.active .page-link {
        z-index: 2;
        color: #fff;
        background-color: #ef3f23;
        border-color: #ef3f23;
    }
    .page-link {
        position: relative;
        display: block;
        padding: 0.5rem 0.75rem;
        margin-left: -1px;
        line-height: 1.25;
        color: #ef3f23;
        background-color: #fff;
        border: 1px solid #ddd;
    }
</style>

    <!-- Header start -->
    <header id="header" class="header header-classic">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light navbar-toggleable-xl">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto navbarmiddle">

                        <li class="nav-item">
                            <a href="/">হোম</a>
                        </li>
                        <li class="nav-item">
                            <a href="#rules">নিয়মাবলী </a>
                        </li>
                        <li class="nav-item">
                            <a href="#upload">অংশ নিন </a>
                        </li>
                        <li class="nav-item">
                            <a href="#submission">নতুন সাবমিশন </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div><!-- container end-->
    </header>
    <!--/ Header end -->


    <section class="hero-area centerd-item" style="background: #f4f4f4">
        {{--<div class="banner-item" style="background-image:url(theme/images/hero_area/banner2.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="banner-content-wrap text-center">

                            <img src="/images/slider1.png" width="100%"/>

                        </div>
                        <!-- Banner content wrap end -->
                    </div><!-- col end-->

                </div><!-- row end-->
            </div>
            <!-- Container end -->
        </div>--}}
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="banner-content-wrap text-center">
                            {{-- <img src="/images/vision_slider.png" width="100%"/>--}}
                            <h4 style="padding: 28px 0px !important;">সেলফি কন্টেস্ট </h4>
                        </div>
                        <!-- Banner content wrap end -->
                    </div><!-- col end-->

                </div>
            </div>
        </div><!-- row end-->

    </section>


    <section class="ts-faq-sec" id="rules">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <img src="/images/vision_new.jpg" class="img-fluid " width="100%"/>
                </div>
                <div class="col-lg-7 mx-auto">

                    <h2 class="section-title text-center">
                        সেলফি আপলোডের নিয়মাবলী
                    </h2>
                    <div class="panel-group faq-item">

                        <div class="panel faq-list panel-default">
                            <ul>

                                <li> ভিশন অ্যান্ড্রয়েড টিভি সেলফি প্রতিযোগিতায় অংশগ্রহণ করতে অংশগ্রহণকারীকে মুঠোফোন সেলফি তুলে ওয়েবসাইটে আপলোড করতে হবে।</li>
                                <li> বিপিএল খেলা চলাকালে স্টেডিয়াম অথবা টিভি স্ক্রিনের সামনে বিশেষ মুহূর্তের সেলফি অথবা প্রিয় দলের জার্সি অথবা বিপিএলের প্রিয় খেলোয়াড়ের ছবি নিয়ে  সেলফি তুলতে হবে।</li>
                                <li> আপলোড করা ছবি ভোটার মাধ্যমে নির্বাচিত করা হবে।</li>
                                <li> একটি মুঠোফোন  নম্বর ব্যবহার করে দিনে একবারই অংশগ্রহণ করা যাবে।</li>
                                <li> সবোর্চ্চ প্রাপ্ত ভোটে নির্বাচত সেরা ১০ জনকে বিজয়ী ঘোষণা করা হবে।</li>
                                <li> বিজয়ীদের ভিশন অ্যান্ড্রয়েড টিভির পক্ষ থেকে দেওয়া হবে গিফট হ্যাম্পার।</li>
                                <li> প্রথম আলো ও ভিশন অ্যান্ড্রয়েড টিভি পরিবারের কোনো সদস্য এই কুইজে অংশগ্রহণ করতে পারবেন না।</li>
                                <li> কুইজে অংশগ্রহণকারীদের সংগৃহীত তথ্য প্রথম আলো ও ভিশন অ্যান্ড্রয়েড টিভি ভবিষ্যতে যোগাযোগের জন্য ব্যবহার করতে পারবে।</li>
                                <li> উল্লিখিত পুরস্কারের বদলে নগদ অর্থ প্রদান করা হবে না।</li>
                                <li> সকল পুরস্কার বিপিএল খেলার শেষে প্রদান করা হবে।</li>
                                <li> পুরস্কার গ্রহণের সময় অংশগ্রহণকারীকে অবশ্যই কুইজে নিবন্ধিত মুঠোফোন নম্বরটি সঙ্গে করে নিয়ে আসতে হবে এবং পুরস্কার প্রদান অনুষ্ঠানে উপস্থিত থেকে পুরস্কার গ্রহণ করতে হবে।</li>
                                <li> কুইজ - সংক্রান্ত নিয়মাবলি প্রথম আলো সংরক্ষণ করে। সকল ক্ষেত্রে প্রথম আলো কর্তৃপক্ষের সিদ্ধান্তই চূড়ান্ত।</li>


                            </ul>


                        </div>


                    </div><!-- panel-group -->


                </div><!-- col end -->


            </div><!-- row end-->
        </div><!-- .container end -->
    </section>




    <section class="ts-contact-form" style="background: #F4F4F4" id="upload">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="section-title text-center">

                        সেলফি আপলোড করুন
                    </h2>
                </div><!-- col end-->
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form id="contact-form" class=""
                          action="/selfie-contest/submit" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="error-container"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control form-control-name" placeholder="নাম" name="name"
                                           id="f-name" type="text" required="">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control form-control-phone" placeholder="ফোন নাম্বার "
                                           name="phone" id="phone" type="phone" required="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label >District <span
                                            class="text-danger">*</span></label>
                                    <select class="form-control" name="district"
                                            ng-change="changeCategory(district_id)"
                                            ng-model="district_id" required>
                                        @foreach(getDistrict() as $res)
                                            <option value="{{$res->id}}">{{$res->name}}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-group"><label> Upazila <span
                                            class="text-danger">*</span></label>
                                    <select class="form-control" name="upazila" ng-cloak required>

                                        <option value=" @{{upazila.id}}"
                                                ng-repeat="upazila in upazilas">
                                            @{{upazila.name}}
                                        </option>

                                    </select>
                                </div>
                            </div>


                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control form-control-message" name="selfie" required/>
                        </div>
                        <div class="text-center"><br>
                            <button class="btn" type="submit"> পাঠান</button>
                        </div>
                    </form><!-- Contact form end -->
                </div>
            </div>
        </div>

    </section>

    {{--    <section id="ts-speakers-standard" class="ts-speakers-standard ts-speakers speaker-classic section-bg">--}}
    <section id="submission" class="ts-speakers" style="background-image:url(theme/images/speakers/speaker_bg.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title text-center">
                        নতুন সেলফি
                    </h2>
                </div><!-- col end-->
            </div><!-- row end-->
            <div class="row">
                @foreach($data as $item)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms"
                         style="visibility: visible; animation-duration: 1.5s; animation-delay: 500ms; animation-name: fadeInUp;">
                        <div class="ts-speaker">
                            <div class="speaker-">
                                <img src="{{$item->selfie}}" class="img-fluid" alt="">

                            </div>
                            <div class="ts-speaker-info">
                                <h3 class="ts-title">{{$item->name}}</h3>
                                {{--  <p>
                                      013031060**
                                  </p>--}}
                            </div>
                            <hr>
                            <ul class="post-social-icons unstyled">

                                <li>{{$item->vote_count}}</li>
                                <li><!-- Button trigger modal -->
                                    <a type="button" data-toggle="modal"
                                       data-target="#model{{$item->id}}" style="cursor:pointer">
                                        <i class="fa fa-heart"></i>
                                    </a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="model{{$item->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="modelTitleId" aria-hidden="true">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">ভোট দিতে ফোন নাম্বার দিন </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <form class="form" action="/vote" method="post">
                                                        <div class="form-group">
                                                            @csrf
                                                            <label for="">ফোন নাম্বার</label>
                                                            <input type="text" name="phone" id="" class="form-control"
                                                                   placeholder="" aria-describedby="helpId" required>
                                                            <input type="hidden" name="id" value="{{$item->id}}">
                                                        </div>

                                                        <button type="submit" class="btn btn-primary btn-sm"> ভোট দিন
                                                        </button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- popup start-->

                    </div> <!-- col end-->
                @endforeach

                {{$data->links('pagination::bootstrap-4')}}
            </div><!-- row end-->
        </div><!-- container end-->


    </section>

    <section class="desktop">
        <div class="container">
            <center>
                <img  src="/images/desktop.jpg" alt="banner" >
            </center>
        </div>
    </section>
    <section class="mobile">
        <div class="container">
            <center>
                <img  src="/images/mobile.jpg" alt="banner" >
            </center>
        </div>
    </section>


<script>

    app.controller('myController', function ($scope, $http) {
        // $scope.district_id = "0";
        $scope.changeCategory = function (district_id) {

            console.log("fffff" + district_id);

            $http.get("/districts/" + district_id)
                .then(function (response) {
                    // $scope.myWelcome = response.data;
                    //console.log(response.data);
                    $scope.upazilas = response.data;

                })
        }


    });


</script>



@endsection
