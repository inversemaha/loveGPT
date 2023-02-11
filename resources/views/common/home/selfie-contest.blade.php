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

                        <div class="col-lg-4 fadeInUp mt-3 wow fadeInUp" data-wow-duration="1.5s"
                             data-wow-delay="300ms" ng-repeat="item in data_list">
                            <div class="card p-1">
                                <div class="post-header mx-auto">
                                    <div ng-if="item.selfie.indexOf('png') !== -1">
                                        <img src="@{{ item.selfie }}" width="100%"
                                             height="350px">
                                    </div>
                                    <div class="embed-responsive embed-responsive-21by9"
                                         ng-if="item.selfie.indexOf('mp4') !== -1">
                                        <iframe class="embed-responsive-item" ng-src="@{{ item.selfie }}" width="100%"
                                                height="350px"></iframe>
                                    </div>


                                </div>
                                <div class="post-body mx-auto">
                                    <div class="post-meta">
                                        <div class="row">
                                            <div class="col-md-8 col-8">
                                                <!-- Button to Open the Modal -->
                                                <button class="default-btn"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#myModal@{{ item.id }}">
                                                    ভোট দিন
                                                </button>

                                                <!-- The Modal -->
                                                <div class="modal" id="myModal@{{ item.id }}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    {{--  <div class="col-lg-6">
                                                                          <div class="quote-image"></div>
                                                                      </div>--}}
                                                                    <div class="col-lg-12 mx-auto">
                                                                        <div class="quote-item">
                                                                            <div class="content">

                                                                                <h3>আপনার ভোট দিন ।</h3>
                                                                            </div>
                                                                            <form method="post">
                                                                                @csrf

                                                                                <input type="hidden"
                                                                                       name="selfie_id"
                                                                                       ng-model="selfie_id"
                                                                                       ng-value="@{{ item.id }}">
                                                                                <div class="form-group">
                                                                                    <input type="text"
                                                                                           class="form-control"
                                                                                           ng-model="name"
                                                                                           placeholder="নাম">
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <input type="text"
                                                                                           class="form-control"

                                                                                           ng-model="phone"
                                                                                           placeholder="মুঠোফোন নম্বর">
                                                                                </div>

                                                                                <button
                                                                                    ng-click="voteSubmit()"
                                                                                    class="default-btn">
                                                                                    পাঠিয়ে দিন
                                                                                </button>
                                                                            </form>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger"
                                                                        data-bs-dismiss="modal">Close
                                                                </button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-4">
                                                <span class="badge bg-danger">ভোট : @{{ item.votes }}</span>
                                            </div>


                                        </div>


                                    </div>

                                </div>
                                <!-- post-body end -->
                            </div>
                        </div>


                    </div> <!-- row end -->

                </div>
            </div><!-- col end-->

        </div>

    </div>

</section>
