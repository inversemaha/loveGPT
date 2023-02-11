@extends('layouts.admin')
@section('title', 'Photos Edit')
@section('page', 'Photos Edit')

@section('content')

    <div class="row">


        <div class="col-8 ">

            @include('includes.admin.message')


            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Update Photos</h4>

                    <form class="form-horizontal" method="post"
                          action="/admin/manage-photo/update" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-2 col-form-label">
                                Title</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" placeholder="Title"
                                       name="question_title" value="{{$result->question_title}}">
                                <input type="hidden" name="id" value="{{$result->id}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input"
                                   class="col-md-2 col-form-label">Option One</label>
                            <div class="col-md-10">

                                <input class="form-control" type="text" placeholder="Title"
                                       name="option_one" value="{{$result->option_one}}"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input"
                                   class="col-md-2 col-form-label">Option Two</label>
                            <div class="col-md-10">

                                <input class="form-control" type="text" placeholder="Title"
                                       name="option_two" value="{{$result->option_two}}"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input"
                                   class="col-md-2 col-form-label">Option Three</label>
                            <div class="col-md-10">

                                <input class="form-control" type="text" placeholder="Title"
                                       name="option_three" value="{{$result->option_three}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input"
                                   class="col-md-2 col-form-label">Option Four</label>
                            <div class="col-md-10">

                                <input class="form-control" type="text" placeholder="Title"
                                       name="option_four" value="{{$result->option_four}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input"
                                   class="col-md-2 col-form-label">Answer</label>
                            <div class="col-md-10">


                                <select class="form-control" name="right_answer" id="">
                                    <option value="1" @if($result->right_answer=="1") selected @endif>Option One</option>
                                    <option value="2" @if($result->right_answer=="2") selected @endif>Option Two</option>
                                    <option value="3" @if($result->right_answer=="3") selected @endif>Option Three</option>
                                    <option value="4" @if($result->right_answer=="4") selected @endif>Option Four</option>

                                </select>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input"
                                   class="col-md-2 col-form-label">Image</label>
                            <div class="col-md-10">
                                <input type="file" class="form-control " name="image">
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
