@extends('layouts.admin')
@section('title', 'Profile')
@section('page', 'Profile')

@section('content')

    <div class="row">


        <div class="col-8 ">

            @include('includes.admin.message')


            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal" method="post"
                          action="/admin/profile/update" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="" class="col-md-3 col-form-label">Name</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="name"
                                       value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-3 col-form-label">Old Password</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="old_password"
                                       value="" required>
                            </div>
                        </div>


                        <div class="form-group row" id="change_pass_btn">
                            <label for="" class="col-md-3 col-form-label"></label>
                            <div class="col-md-9">
                                <button class="btn btn-sm btn-primary" type="button" onclick="showPasswordField()">
                                    Change Password
                                </button>
                            </div>
                        </div>

                        <div class="form-group" style="display: none" id="new_pass_filed">
                            <div class="row">
                                <label for="" class="col-md-3 col-form-label">New Password</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="password"
                                           value="">
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

    <script>

        function showPasswordField() {
            document.getElementById('new_pass_filed').style.display = 'block';
            document.getElementById('change_pass_btn').style.display = 'none';
        }
    </script>


@endsection
