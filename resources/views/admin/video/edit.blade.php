@extends('layouts.admin')
@section('title', 'Video Edit')
@section('page', 'Video Edit')

@section('content')

    <div class="row">


        <div class="col-8 ">

            @include('includes.admin.message')


            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Video Edit</h4>
                    <form class="form-horizontal" method="post"
                          action="/admin/video/update" enctype="multipart/form-data">

                        @csrf

                        <input type="hidden" name="id" value="{{$result->id}}">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Type </label>
                            <div class="col-md-10">
                                <select class="form-control" name="type" required>
                                    <option value="1" @if($result->type === "1")@endif> Type 1</option>
                                    <option value="2" @if($result->type === "2")@endif > Type 2</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Title </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" placeholder="Title" name="video_title"
                                       value="{{$result->video_title}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Video Link</label>
                            <div class="col-md-10">
                                <input class="form-control" placeholder="Video Link" name="video_link"
                                       value="{{$yt_link}}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-md-2 col-form-label"></label>
                            <div class="col-md-10">
                                <button class="btn btn-primary w-md waves-effect waves-light"
                                        type="submit">Update
                                </button>
                            </div>
                        </div>

                    </form>


                </div>
            </div>
        </div> <!-- end col -->
    </div>


@endsection
