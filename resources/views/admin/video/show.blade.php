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
                                <select class="form-control" name="type" required>
                                    <option value="1"> Type 1</option>
                                    <option value="2"> Type 2</option>
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

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Video</h4>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Title</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @php($i=1)
                        @foreach($results as $res)
                            <tr>
                                <td>{{$i++}}</td>

                                <td>{{$res->type}}</td>
                                <td>{{$res->video_title}}</td>
                                <td><a href="{{$res->video_link}}" target="_blank">Link</a> </td>

                                <td>
                                    <a href="/admin/video/edit/{{$res->id}}" class="mr-3 text-primary"
                                       data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i
                                            class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="/admin/video/delete/{{$res->id}}" class="text-danger"
                                       data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick="return confirm('Are you sure you want to delete?');"><i
                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection
