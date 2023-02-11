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



    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Applicants</h4>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th> #</th>
                            <th> Phone Number</th>


                        </tr>
                        </thead>


                        <tbody>
                        <?php
                        $i = 1;
                        ?>
                        @foreach($results as $res)
                            <tr>
                                <td>{{$i++}}</td>

                                <td>{{$res->phone}}</td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection
