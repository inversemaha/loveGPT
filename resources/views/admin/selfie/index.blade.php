@extends('layouts.admin')
@section('title', 'Applicants')
@section('page', 'Applicants')

@section('content')
    <style>
        .modal-dialog,
        .modal-content {
            /* 80% of window height */
            height: 100%;
        }

        .modal-body {
            /* 100% = dialog height, 120px = header + footer */
            max-height: calc(100% - 120px);
            overflow-y: scroll;
        }

        .rotater {
            transition: all 0.3s ease;
            border: 0.0625em solid #f3f3f3;
        }

        label {
            padding: 0px 31px;
        }
    </style>

    <script>
        let rotateAngle = 90;

        function rotate(image) {
            image.setAttribute("style", "transform: rotate(" + rotateAngle + "deg)");
            rotateAngle = rotateAngle + 90;
        }
    </script>

    {{--    <div class="row">
            <div class="col-12">
                @include('includes.admin.message')
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif


                <div class="card">

                    <div class="card-body">
                        <form class="form-inline" action="/admin/drawing">
                            <div class="form-group row">
                                <label for="is_short_listed">Status </label>
                                <select class="form-control" name="is_short_listed" id="is_short_listed">
                                    <option value="">All</option>
                                    <option value="1">Shortlisted</option>
                                    <option value="0">Without Shortlisted</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="class_group">Class Group</label>
                                <select class="form-control" name="class_group" id="class_group">
                                    <option value="">All</option>
                                    <option value="৩–৯ বছর (ক বিভাগ)">৩–৯ বছর (ক বিভাগ)</option>
                                    <option value="১০–১২ বছর (খ বিভাগ)">১০–১২ বছর (খ বিভাগ)</option>
                                </select>
                            </div>

                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>--}}

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Applicants</h4>
                    <a href="/admin/selfie-submission/excel-download" class="btn btn-info">Excel download</a>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th> #</th>
                            <th> Name</th>
                            {{--  <th>Category</th>--}}
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Vote Count</th>
                            <th>Is Published</th>
                            <th>Action</th>


                        </tr>
                        </thead>


                        <tbody>
                        <?php
                        $i = $start_number;
                        ?>
                        @foreach($results as $res)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$res->name}}</td>
                                {{-- <td>{{$res->category}}</td>--}}
                                <td>{{$res->phone}}</td>
                                <td>{{$res->email}}</td>
                                <td>{{$res->vote_count}}</td>
                                <td>

                                    @if($res->is_publish==1)
                                        <span class="badge badge-success">Yes</span>
                                        <br>
                                        <a href="/admin/selfie/status-update/{{$res->id}}/0"
                                           class="btn btn-sm btn-danger">Unpublish</a>
                                    @else
                                        <span class="badge badge-warning">No</span>
                                        <br>
                                        <a href="/admin/selfie/status-update/{{$res->id}}/1"
                                           class="btn btn-sm btn-primary">Publish</a>
                                    @endif


                                </td>

                                <td>
                                    @if(strstr($res->selfie, "mp4"))
                                        <div class="embed-responsive embed-responsive-21by9" data-toggle="modal"
                                             data-target="#modelId{{$res->id}}" style="cursor: pointer;">
                                           {{-- <video controls width="250px" height="250px">
                                                <source src="{{$res->selfie}}" type="video/mp4"/>
                                            </video>--}}
                                            Open video
                                        </div>
                                        <a href="{{$res->selfie}}" download="">Download</a>
                                    @elseif(strstr($res->selfie, "MOV"))
                                        <div class="embed-responsive embed-responsive-21by9" data-toggle="modal"
                                             data-target="#modelId{{$res->id}}" style="cursor: pointer;">
                                            {{--<video controls width="250px" height="250px">
                                                <source src="{{$res->selfie}}" type="video/mp4"/>
                                            </video>--}}
                                            Open   video
                                        </div>
                                        <a href="{{$res->selfie}}" download="">Download</a>
                                    @elseif(strstr($res->selfie, "png"))
                                        <img src="{{$res->selfie}}" width="100px" data-toggle="modal"
                                             data-target="#modelId{{$res->id}}" style="cursor: pointer;"/>
                                    @elseif(strstr($res->selfie, "jpg"))
                                        <img src="{{$res->selfie}}" width="100px" data-toggle="modal"
                                             data-target="#modelId{{$res->id}}" style="cursor: pointer;"/>
                                    @elseif(strstr($res->selfie, "JPG"))
                                        <img src="{{$res->selfie}}" width="100px" data-toggle="modal"
                                             data-target="#modelId{{$res->id}}" style="cursor: pointer;"/>
                                    @elseif(strstr($res->selfie, "GPG"))
                                        <img src="{{$res->selfie}}" width="100px" data-toggle="modal"
                                             data-target="#modelId{{$res->id}}" style="cursor: pointer;"/>
                                    @elseif(strstr($res->selfie, "jpeg"))
                                        <img src="{{$res->selfie}}" width="100px" data-toggle="modal"
                                             data-target="#modelId{{$res->id}}" style="cursor: pointer;"/>
                                    @endif




                                    {{-- <a href="/admin/selfie-submission/details/{{$res->id}}">Details</a>--}}
                                </td>


                                <!-- Button trigger modal -->
                                {{--   <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                           data-target="#modelId{{$res->id}}">
                                       Launch
                                   </button>--}}

                                <!-- Modal -->
                                <div class="modal fade" id="modelId{{$res->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                @if(strstr($res->selfie, "mp4"))
                                                    <video controls class="w-100">
                                                        <source src="{{$res->selfie}}" type="video/mp4"/>
                                                    </video>

                                                @elseif(strstr($res->selfie, "MOV"))
                                                    <video controls class="w-100">
                                                        <source src="{{$res->selfie}}" type="video/mp4"/>
                                                    </video>
                                                @else
                                                        <img id="rotater{{$res->id}}" src="{{$res->selfie}}" class="rotater"
                                                             onclick="rotate(this)" width="100%"/>
                                                @endif
                                            </div>
                                            <a href="{{$res->selfie}}" download class="btn btn-primary">Download</a>

                                        </div>
                                    </div>

                                </div>


                            </tr>
                        @endforeach
                        {{--   {{ $results->appends(Request::except('page'))->links("pagination::bootstrap-4") }}--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
