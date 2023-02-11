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

                    <h4 class="card-title">Mcq Photo-contest Applicants</h4>
                    {{--   <a href="/admin/selfie-submission/excel-download" class="btn btn-info">Excel download</a>--}}

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th> #</th>
                            <th> Name</th>
                            <th>Phone</th>
                            <th> District</th>
                            <th> Upazila</th>
                            <th>Vote Count</th>


                        </tr>
                        </thead>


                        <tbody>
                        <?php
                        $i = 1;
                        ?>
                        @foreach($results as $res)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$res->full_name}}</td>
                                <td>{{$res->phone}}</td>
                                <td>{{$res->institution}}</td>


                            </tr>
                            <?php
                            $i++
                            ?>
                        @endforeach
                        {{--   {{ $results->appends(Request::except('page'))->links("pagination::bootstrap-4") }}--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection
