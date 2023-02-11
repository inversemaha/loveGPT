@extends('layouts.admin')
@section('title', 'Photo')
@section('page', 'Photo')

@section('content')

    <div class="row">


        <div class="col-8 ">

            @include('includes.admin.message')


            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">New Photo</h4>
                    <form class="form-horizontal" method="post"
                          action="/admin/photo/store" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label"> Title</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" placeholder="Title" name="title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Description</label>
                            <div class="col-md-10">

                                <textarea class="form-control" placeholder="Description" name="description"
                                          required></textarea>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Featured Image</label>
                            <div class="col-md-10">
                                <input type="file" class="form-control " name="image" required>
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
