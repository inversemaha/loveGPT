@extends('layouts.admin')
@section('title', 'News')
@section('page', 'News')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">News</h4>
                    <a href="/admin/news/create" class="btn btn-primary btn-sm waves-effect waves-light float-right">+New</a>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Link</th>
                            <th>Featured Image</th>
                            <th>Is Featured</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @php($i=1)
                        @foreach($results as $res)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$res->title}}</td>
                                <td><a href="{{$res->news_link}}" target="_blank">Link </a></td>
                                <td><img src="{{$res->featured_image}}" width="100px"></td>
                                <td>
                                    @if($res->is_featured)
                                        Yes
                                    @else
                                        No
                                    @endif
                                </td>
                                <td>
                                    <a href="/admin/news/edit/{{$res->id}}" class="mr-3 text-primary"
                                       data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i
                                            class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="/admin/news/delete/{{$res->id}}" class="text-danger"
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
