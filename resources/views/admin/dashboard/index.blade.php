@extends('layouts.admin')
@section('title', 'Dashboard')
@section('page', 'Dashboard')

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2"><a href="/admin/sliders"> Number of
                                            Slider</a></p>
                                    <h4 class="mb-0">{{(\App\Models\Slider::count())}}</h4>
                                </div>
                                <div class="text-primary">
                                    <i class="ri-slideshow-2-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Total Article</p>
                                    <h4 class="mb-0">{{\App\Models\News::count()}}</h4>
                                </div>
                                <div class="text-primary">
                                    <i class="ri-list-check font-size-24"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Total Video</p>

                                        <h4 class="mb-0">
                                            {{\App\Models\Video::count()}}
                                        </h4>

                                </div>
                                <div class="text-primary">
                                    <i class="ri-question-answer-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body overflow-hidden">
                                    <p class="text-truncate font-size-14 mb-2">Total Logo</p>

                                        <h4 class="mb-0">
                                            {{\App\Models\Photos::count()}}
                                        </h4>

                                </div>
                                <div class="text-primary">
                                    <i class="ri-question-answer-fill font-size-24"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- end row -->


@endsection
