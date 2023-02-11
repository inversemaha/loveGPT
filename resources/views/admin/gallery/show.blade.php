@extends('layouts.admin')
@section('title', 'Photos')
@section('page', 'Photos')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Photos</h4>
                    <a href="/admin/photo/create" class="btn btn-primary btn-sm waves-effect waves-light float-right">+New</a>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Featured Image</th>
                            <th>URL</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @php($i=1)
                        @foreach($results as $res)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$res->title}}</td>

                                <td><img src="{{$res->featured_image}}" width="100px"></td>
                                <td>
                                    <a href="{{$res->url}}" target="_blank">Link</a>

                                </td>
                                <td>
                                    <a href="/admin/photo/edit/{{$res->id}}" class="mr-3 text-primary"
                                       data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i
                                            class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="/admin/photo/delete/{{$res->id}}" class="text-danger"
                                       data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i
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
