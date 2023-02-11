@extends('layouts.admin')
@section('title', 'Slider Edit')
@section('page', 'Slider Edit')

@section('content')

    <div class="row">


        <div class="col-8 ">

            @include('includes.admin.message')


            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Slider Edit</h4>
                    <form class="form-horizontal" method="post"
                          action="/admin/slider/update" enctype="multipart/form-data">

                        @csrf

                        <input type="hidden" name="id" value="{{$result->id}}">

                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Title </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" placeholder="Title" name="title"
                                       value="{{$result->title}}" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Slider Link</label>
                            <div class="col-md-10">
                                <input class="form-control" placeholder="Slider Link" name="url" value="{{$result->url}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Slider Image</label>
                            <div class="col-md-10">
                                <input type="file" class="form-control" placeholder="Slider Image" name="image">
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
