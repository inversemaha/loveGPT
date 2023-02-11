@extends('layouts.admin')
@section('title', 'Settings')
@section('page', 'Settings')

@section('content')

    <div class="row">


        <div class="col-8 ">

            @include('includes.admin.message')


            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal" method="post"
                          action="/admin/settings/update" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="" class="col-md-3 col-form-label">App Version Code</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="app_version_code"
                                       value="{{$result->app_version_code}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-3 col-form-label">Fair Expired</label>
                            <div class="col-md-9">
                                <div class="custom-control custom-switch mb-2" dir="ltr">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" value="{{$result->is_expired}}"
                                           name="is_expired" @if($result->is_expired==1) checked @endif>
                                    <label class="custom-control-label" for="customSwitch1">Yes</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-md-3 col-form-label"></label>
                            <div class="col-md-9">
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
