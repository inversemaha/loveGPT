@extends('layouts.common')
@section('content')

    <!-- Header start -->
    <header id="header" class="header header-classic">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">

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
            <div class="col-lg-8 mx-auto">
                <img src="/images/slider.png" width="100%"/>
            </div>
        </div>

    </section>


    <section class="ts-faq-sec" id="rules">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <img src="/images/300.png" class="desktop" width="100%"/>

                    <img src="/images/320.png" class="mobile" width="100%"/>
                </div>

                <div class="col-lg-8 mx-auto">

                    <h2 class="section-title text-center">
                        পিকচার কুইজের নিয়মাবলী
                    </h2>
                    <div class="panel-group faq-item">

                        <div class="panel faq-list panel-default">
                            <ul>
                                <li>
                                    বিপিএল বস পাওয়ার্ড বাই প্রাণ সস পিকচার কুইজে অংশগ্রহণ করতে কুইজের সঠিক উত্তর
                                    নির্বাচন করে নাম ও মুঠোফোন নম্বর দিয়ে নিবন্ধিত হতে হবে।
                                </li>

                                <li>
                                    প্রতিদিন সঠিক উত্তরদাতাদের মধ্য থেকে ১ জনকে বিজয়ী নির্বাচিত করা হবে। বিজয়ীদের প্রাণ
                                    সসের পক্ষ থেকে দেওয়া হবে গিফট হ্যাম্পার।
                                </li>
                                <li>
                                    প্রথম আলো ও প্রাণ সসের পরিবারের কোনো সদস্য এই কুইজে অংশগ্রহণ করতে পারবেন না।
                                </li>
                                <li>
                                    কুইজে অংশগ্রহণকারীদের সংগৃহীত তথ্য প্রথম আলো ও প্রাণ সস ভবিষ্যতে যোগাযোগের জন্য
                                    ব্যবহার করতে পারবে।
                                </li>
                                <li>
                                    উল্লিখিত পুরস্কারের বদলে নগদ অর্থ প্রদান করা হবে না।
                                </li>
                                <li>
                                    সকল পুরস্কার বিপিএল খেলার শেষে প্রদান করা হবে।
                                </li>
                                <li>
                                    পুরস্কার গ্রহণের সময় অংশগ্রহণকারীকে অবশ্যই কুইজে নিবন্ধিত মুঠোফোন নম্বরটি সঙ্গে করে
                                    নিয়ে আসতে হবে এবং পুরস্কার প্রদান অনুষ্ঠানে উপস্থিত থেকে পুরস্কার গ্রহণ করতে হবে।
                                </li>
                                <li>
                                    কুইজ - সংক্রান্ত নিয়মাবলি প্রথম আলো সংরক্ষণ করে। সকল ক্ষেত্রে প্রথম আলো কর্তৃপক্ষের
                                    সিদ্ধান্তই চূড়ান্ত।
                                </li>

                            </ul>


                        </div>


                    </div><!-- panel-group -->


                </div><!-- col end -->


            </div><!-- row end-->
        </div><!-- .container end -->
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="/images/970x90.png" width="100%"/>
                </div>
            </div>
        </div>
    </section>


    @if(!is_null($data))
        <section class="ts-contact-form" id="upload">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="section-title text-center">

                            পিকচার কুইজে অংশ নিন
                        </h2>
                    </div><!-- col end-->
                </div>

                <div class="row">

                    <div class="question"><p class="bold">আজকের প্রশ্ন: </p></div>
                    <h4 style=" padding-left: 15px; padding-top: 10px;">  {{$data->question_title}} </h4>
                </div>
                <div class="row">

                    <div class="col-lg-5 mx-auto">
                        <img src="{{$data->image}}" class="img-thumbnail" width="100%">
                    </div>

                    <div class="col-lg-7 mx-auto">

                        <form class="form" action="/photo-contest/submit" method="POST">
                            @csrf

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="answer" onclick="valueChecked()"
                                           value="1">
                                    {{$data->option_one}}
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="answer" onclick="valueChecked()"
                                           value="2">
                                    {{$data->option_two}}
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="answer" onclick="valueChecked()"
                                           value="3">
                                    {{$data->option_three}}
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="answer" onclick="valueChecked()"
                                           value="4">
                                    {{$data->option_four}}
                                </label>
                            </div>

                            <div class="contestant-info" id="contestant-info">
                                <div class="form-group">
                                    <input class="form-control form-control-name" placeholder="নাম" name="name"
                                           id="f-name" type="text" required="">
                                    <input type="hidden" name="question_id" value="{{$data->id}}">
                                </div>

                                <div class="form-group">
                                    <input class="form-control form-control-phone" placeholder="ফোন নাম্বার "
                                           name="phone" id="phone" type="phone" required="">
                                </div>
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

                            <button type="button" id="submit-click" class="btn btn-primary btn-block"
                                    onclick="submitView()">জমা দিন
                            </button>
                            <button type="submit" id="submit-click2" class="btn btn-primary btn-block">জমা দিন</button>

                        </form>
                    </div>

                </div>
            </div>

        </section>
    @endif
    <script>
        let is_checked = false;

        document.getElementById("contestant-info").style.display = 'none';
        document.getElementById("submit-click").style.display = 'block';
        document.getElementById("submit-click2").style.display = 'none';

        function submitView() {
            console.log("ggggg");
            document.getElementById("contestant-info").style.display = 'block';
            document.getElementById("submit-click").style.display = 'none';
            document.getElementById("submit-click2").style.display = 'block';
        }

        function valueChecked() {
            is_checked = true;
        }


    </script>

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
