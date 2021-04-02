<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <title>{{ env('APP_NAME') }} - Registration</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}../">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
</head>
<body>
<!-- login page start-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-7">
            <img class="bg-img-cover bg-center" src="{{ asset('images/login/adn.png') }}"
                                   alt="looginpage">
        </div>
        <div class="col-xl-5 p-0">
            <div class="login-card">
                <div>
                    <div>
                        <a class="logo text-start" href="{{ route('landing') }}">
                            <img class="img-fluid for-light" src="{{ asset('images/logo/login.png') }}" alt="looginpage">
                            <img class="img-fluid for-dark" src="{{ asset('images/logo/logo_dark.png') }}" alt="looginpage">
                        </a>
                    </div>
                    <div class="login-main">
                        <form class="theme-form" method="post" action="{{ route('registration.post') }}">
                            @csrf
                            <h4>Register account</h4>
                            <p>Enter your information to register</p>
                            <div class="form-group">
                                <label class="col-form-label">Name</label>
                                <small class="text-muted">Required</small>
                                <input class="form-control" type="text" id="name" name="name"
                                       placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Email</label>
                                <input class="form-control" type="email" id="email" name="email"
                                       placeholder="example@domain.com">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Username</label>
                                <small class="text-muted">Required</small>
                                <input class="form-control" type="text" id="username" name="username"
                                       placeholder="example">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">MSISDN</label>
                                <input class="form-control" type="text" id="msisdn" name="msisdn"
                                       placeholder="01*********">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <small class="text-muted">Required (Minimum 6 Characters)</small>
                                <input class="form-control" type="password" id="password" name="password"
                                       placeholder="*********" required>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Confirm Password</label>
                                <small class="text-muted">Required</small>
                                <input class="form-control" type="password" id="password" name="password"
                                       placeholder="*********" required>
                            </div>
                            <div class="form-group mb-2 text-center">
                                <button class="btn btn-primary" type="submit">Register</button>
                            </div>
                            <p class="mt-4 mb-0">Already have an account?
                                <a class="ms-2" href="{{ route('login.get') }}"> Login</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</div>
</body>
</html>
