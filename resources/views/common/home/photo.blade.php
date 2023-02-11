@if(count($photos)>0)

    <section class="ts-contact " style="background-color: #f1f1f1;">
        <div class="container">
            <div class="row mb-25">
                <div class="col-lg-12">
                    <div class="elementor-widget-container">
                        <div class="row ">
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
@endif
