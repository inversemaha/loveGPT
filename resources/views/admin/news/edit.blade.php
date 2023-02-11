@extends('layouts.admin')
@section('title', 'News Edit')
@section('page', 'News Edit')

@section('content')

    <div class="row">


        <div class="col-8 ">

            @include('includes.admin.message')


            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">New News</h4>
                    <form class="form-horizontal" method="post"
                          action="/admin/news/update" enctype="multipart/form-data">


                        @csrf


                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label"> Title</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" placeholder="Title" name="title"
                                       value="{{$result->title}}"
                                       required>
                                <input type="hidden" name="id" value="{{$result->id}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">News Link</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" placeholder="News Link" name="news_link"
                                       value="{{$result->news_link}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Featured Image</label>
                            <div class="col-md-10">
                                <input type="file" class="form-control " name="image">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Is Featured</label>
                            <div class="col-md-10">
                                <div class="custom-control custom-switch mb-2" dir="ltr">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1"
                                           name="is_featured" @if($result->is_featured==1) checked @endif>
                                    <label class="custom-control-label" for="customSwitch1">Yes</label>
                                </div>
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
