<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Merchant Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/dashboard/libs/jqvmap/jqvmap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dashboard/libs/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/dashboard/libs/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/dashboard/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/dashboard/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/dashboard/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="authentication-bg authentication-bg-pattern d-flex align-items-center">

    <div class="home-btn d-none d-sm-block">
        <a href="index.html"><i class="fas fa-home h2 text-white"></i></a>
    </div>

    <div class="account-pages w-100 mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">

                        <div class="card-body p-4">

                            <div class="text-center mb-4">
                                <a href="index.html">
                                    <span><img src="{{ asset('assets/dashboard/images/logo-light.png') }}" alt=""
                                            height="28"></span>
                                </a>
                            </div>

                            <form action="{{ route('merchant.post.login') }}" class="pt-2" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="emailaddress">Email address</label>
                                    <input class="form-control" type="email" id="emailaddress" required="" name="email"
                                        placeholder="Enter your email">
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <a href="auth-recoverpassword.html" class="text-muted float-right"><small>Forgot
                                            your password?</small></a>
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" required="" id="password" name="password"
                                        placeholder="Enter your password">
                                    @error('email')
                                    <p class="text-danger">{{ $password }}</p>
                                    @enderror
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-success btn-block" type="submit"> Log In </button>
                                </div>

                            </form>

                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <p class="text-muted mb-0">Don't have an account? <a href="auth-register.html"
                                            class="text-dark ml-1"><b>Sign Up</b></a></p>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
    <script src="{{ asset('assets/dashboard/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/libs/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/libs/chart-js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/libs/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/libs/jqvmap/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('assets/dashboard/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/app.min.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>
