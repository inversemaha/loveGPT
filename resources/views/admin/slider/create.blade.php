@extends('layouts.admin')
@section('title', 'Slider')
@section('page', 'Slider')

@section('content')

    <div class="row">


        <div class="col-8 ">

            @include('includes.admin.message')


            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">New Slider</h4>
                    <form class="form-horizontal" method="post"
                          action="/admin/slider/store" enctype="multipart/form-data">

                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Title </label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" placeholder="Title" name="title"
                                       required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Slider Link</label>
                            <div class="col-md-10">
                                <input class="form-control" placeholder="Slider Link" name="url">
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
