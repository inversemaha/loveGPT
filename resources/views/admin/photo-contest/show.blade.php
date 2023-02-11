@extends('layouts.admin')
@section('title', 'Photos')
@section('page', 'Photos')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Photos</h4>
                    <button data-toggle="modal" data-target="#modelId"
                            class="btn btn-primary btn-sm waves-effect waves-light float-right">+New
                    </button>


                    <!-- Modal -->
                    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form class="form-horizontal" method="post"
                                          action="/admin/manage-photo/store" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">
                                                Title</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="Title"
                                                       name="question_title">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                   class="col-md-2 col-form-label">Option One</label>
                                            <div class="col-md-10">

                                                <input class="form-control" type="text" placeholder="Title"
                                                       name="option_one">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                   class="col-md-2 col-form-label">Option Two</label>
                                            <div class="col-md-10">

                                                <input class="form-control" type="text" placeholder="Title"
                                                       name="option_two">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                   class="col-md-2 col-form-label">Option Three</label>
                                            <div class="col-md-10">

                                                <input class="form-control" type="text" placeholder="Title"
                                                       name="option_three">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                   class="col-md-2 col-form-label">Option Four</label>
                                            <div class="col-md-10">

                                                <input class="form-control" type="text" placeholder="Title"
                                                       name="option_four">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                   class="col-md-2 col-form-label">Answer</label>
                                            <div class="col-md-10">


                                                <select class="form-control" name="right_answer" id="">
                                                    <option value="1">Option One</option>
                                                    <option value="2">Option Two</option>
                                                    <option value="3">Option Three</option>
                                                    <option value="4">Option Four</option>

                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                   class="col-md-2 col-form-label">Image</label>
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
                        </div>
                    </div>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Option</th>
                            <th>Featured Image</th>
                            <th>Ans</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @php($i=1)
                        @foreach($results as $res)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$res->question_title}}</td>
                                <td>
                                    1. {{$res->option_one}}<br>
                                    2. {{$res->option_two}}<br>
                                    3. {{$res->option_three}}<br>
                                    4. {{$res->option_four}}<br>
                                </td>
                                <td><img src="{{$res->image}}" width="100px"></td>
                                <td>{{$res->right_answer}}</td>

                                <td>
                                    @if($res->is_publish==1)
                                        <span class="badge badge-success">Yes</span>
                                        <br>
                                        <a href="/admin/manage-photo/status-update/{{$res->id}}/0"
                                           class="btn btn-sm btn-danger">Unpublish</a>
                                    @else
                                        <span class="badge badge-warning">No</span>
                                        <br>
                                        <a href="/admin/manage-photo/status-update/{{$res->id}}/1"
                                           class="btn btn-sm btn-primary">Publish</a>
                                    @endif
                                </td>

                                <td>
                                    <a href="/admin/manage-photo/edit/{{$res->id}}" class="mr-3 text-primary"
                                       data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i
                                            class="mdi mdi-pencil font-size-18"></i></a>
                                   {{-- <a href="/admin/photo/delete/{{$res->id}}" class="text-danger"
                                       data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i
                                            class="mdi mdi-trash-can font-size-18"></i></a>--}}
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
