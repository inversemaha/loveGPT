@extends('layouts.admin')
@section('title', 'Video')
@section('page', 'Video')

@section('content')

    <div class="row">


        <div class="col-8 ">

            @include('includes.admin.message')


            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">New Video</h4>
                    <form class="form-horizontal" method="post"
                          action="/admin/video/store" enctype="multipart/form-data">

                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Type </label>
                            <div class="col-md-10">
                                <select class="form-control" name="type">
                                    <option value="1">1 Type</option>
                                    <option value="2">2 Type</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Title </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" placeholder="Title" name="video_title"
                                       required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Video Link</label>
                            <div class="col-md-10">
                                <input class="form-control" placeholder="Video Link" name="video_link">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="" class="col-md-2 col-form-label"></label>
                            <div class="col-md-10">
                                <button class="btn btn-primary w-md waves-effect waves-light"
                                        type="submit">Save
                                </button>
                            </div>
                        </div>

                    </form>


                </div>
            </div>
        </div> <!-- end col -->
    </div>


@endsection
