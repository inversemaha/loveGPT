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

    {{--   <div class="row">
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

       </div>
   --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Applicants</h4>

                    <table id="datatable-buttonss" class="table table-striped table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th> Name</th>
                            {{--  <th>Category</th>--}}
                            <th>Phone</th>
                            <th>email</th>
                            <th>question</th>
                            <th>answer</th>
                           {{-- <th>Action</th>--}}


                        </tr>
                        </thead>


                        <tbody>

                        @foreach($results as $res)
                            <tr>
                                <td>{{$res->name}}</td>
                                {{-- <td>{{$res->category}}</td>--}}
                                <td>{{$res->phone}}</td>
                                <td>{{$res->email}}</td>
                                <td>{{$res->question}}</td>
                                <td>{{$res->answer}}</td>


                               {{-- <td>
                                    @if($res->is_short_listed)
                                        <span class="badge badge-success">Yes</span>
                                        <br>
                                        <a href="/admin/drawing/status-update/{{$res->id}}/0"
                                           class="btn btn-sm btn-danger">Change</a>
                                    @else
                                        <span class="badge badge-warning">No</span>
                                        <br>
                                        <a href="/admin/drawing/status-update/{{$res->id}}/1"
                                           class="btn btn-sm btn-primary">Change</a>
                                    @endif
                                </td>--}}


                            </tr>
                        @endforeach
                        {{ $results->appends(Request::except('page'))->links("pagination::bootstrap-4") }}
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
