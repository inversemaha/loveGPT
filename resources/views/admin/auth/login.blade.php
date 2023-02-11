<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8"/>
    <title>Login | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css"/>

</head>

<body class="auth-body-bg">
<div class="home-btn d-none d-sm-block">
    <a href="/"><i class="mdi mdi-home-variant h2 text-white"></i></a>
</div>
<div>
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-4 col-12 mx-auto">
                <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                    <div class="w-100">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">


                                @include('includes.admin.message')

                                <div>
                                    <div class="text-center">
                                       {{-- <div>
                                            <a href="/" class="logo"><img src="/img/logo.png"
                                                                          height="100" alt="logo"></a>
                                        </div>--}}

                                        <h4 class="font-size-18 mt-4">Welcome Back !</h4>
                                        <p class="text-muted">Sign in to continue to Admin.</p>
                                    </div>

                                    <div class="p-2 mt-5">
                                        <form class="form-horizontal" method="post"
                                              action="/admin/login-check">

                                            @csrf
                                            <div class="form-group auth-form-group-custom mb-4">
                                                <i class="ri-user-2-line auti-custom-input-icon"></i>
                                                <label for="username">Email</label>
                                                <input type="text" class="form-control" id="username" name="email"
                                                       placeholder="Enter Email" value="{{old('email')}}">
                                            </div>

                                            <div class="form-group auth-form-group-custom mb-4">
                                                <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                                <label for="userpassword">Password</label>
                                                <input type="password" class="form-control" id="userpassword"
                                                       placeholder="Enter password" name="password" value="{{old('password')}}">
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="customControlInline">
                                                <label class="custom-control-label" for="customControlInline">Remember
                                                    me</label>
                                            </div>

                                            <div class="mt-4 text-center">
                                                <button class="btn btn-primary w-md waves-effect waves-light"
                                                        type="submit">Log In
                                                </button>
                                            </div>

                                            <div class="mt-4 text-center">
                                                <a href="/admin/password-recover" class="text-muted"><i
                                                        class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="mt-5 text-center">
                                        <p>© {{date('Y')}} Prothom Alo Digital. Crafted with <i class="mdi mdi-heart text-danger"></i> by
                                            Prothom Alo Digital</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
           {{-- <div class="col-lg-8">
                <div class="authentication-bg">
                    <div class="bg-overlay"></div>
                </div>
            </div>--}}
        </div>
    </div>
</div>


<!-- JAVASCRIPT -->
<script src="/assets/libs/jquery/jquery.min.js"></script>
<script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="/assets/libs/simplebar/simplebar.min.js"></script>
<script src="/assets/libs/node-waves/waves.min.js"></script>

<script src="/assets/js/app.js"></script>

</body>


</html>
