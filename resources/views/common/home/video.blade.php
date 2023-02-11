

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

                            @foreach($videos as $res)

                                <div class="col-lg-4 fadeInUp mt-3 wow fadeInUp" data-wow-duration="1.5s"
                                     data-wow-delay="300ms">
                                    <div class="card p-1">
                                        <div class="post-header mx-auto">
                                            <iframe width="100%" height="230"
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

@if(count($videos1)>0)

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
                            @foreach($videos1 as $res)

                                <div class="col-lg-4 fadeInUp mt-3 wow fadeInUp" data-wow-duration="1.5s"
                                     data-wow-delay="300ms">
                                    <div class="card p-1">
                                        <div class="post-header mx-auto">
                                            <iframe width="100%" height="230"
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
    <section class="news" style="background-color: #f1f1f1;" id="news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title text-center">
                        <li class="nav-item" style="list-style: none">
                            <a href="#status">খবর </a>
                        </li>
                    </h2>
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


                    </div>
                </div><!-- col end-->

            </div>

        </div>

    </section>
@endif
