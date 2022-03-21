<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
    <title>Register | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}admin-assets/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('/') }}admin-assets/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('/') }}admin-assets/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('/') }}admin-assets/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="home-btn d-none d-sm-block">
    <a href="{{ url('/') }}" class="text-dark"><i class="fas fa-home h2"></i></a>
</div>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-soft-primary">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary"> Register</h5>
                                    <p>Get your account now.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div>
                            <a href="{{ url('/') }}">
                                <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <form class="form-horizontal" action="{{ route("register") }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="name" id="" placeholder="Enter username">
                                </div>
                                <div class="form-group">
                                    <label for="useremail">Email</label>
                                    <input type="email" class="form-control" name="email" id="" placeholder="Enter email">
                                </div>

                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <input type="password" class="form-control" name="password" id="" placeholder="Enter password">
                                </div>
                                <div class="form-group">
                                    <label for="userpassword">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" id="" placeholder="Enter password">
                                </div>

                                <div class="mt-4">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">

                    <div>
                        <p>Already have an account ? <a href="{{ route('login') }}" class="font-weight-medium text-primary"> Login</a> </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- JAVASCRIPT -->
<script src="{{ asset('/') }}admin-assets/assets/libs/jquery/jquery.min.js"></script>
<script src="{{ asset('/') }}admin-assets/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}admin-assets/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{ asset('/') }}admin-assets/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('/') }}admin-assets/assets/libs/node-waves/waves.min.js"></script>

<!-- apexcharts -->
<script src="{{ asset('/') }}admin-assets/assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="{{ asset('/') }}admin-assets/assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="{{ asset('/') }}admin-assets/assets/js/app.js"></script>
</body>


</html>


