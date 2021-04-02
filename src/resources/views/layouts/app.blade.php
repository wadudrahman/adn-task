<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/prism.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    @stack('after_styles')
</head>
<body>
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    @include('layouts.topBar')
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        @include('layouts.sidebar')
        <!-- Page Sidebar Ends-->
        {{-- Page Content --}}
        <div class="page-body">
            @include('partials.breadcrumb')
            <!-- Container-fluid starts-->
            @yield('content')
            <!-- Container-fluid Ends-->
        </div>
        {{-- Including Footer --}}
        @include('layouts.footer')
    </div>
{{-- Core JS --}}
<!-- latest jquery-->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('js/config.js') }}"></script>
    <script>
        //Disabling Right Click Option
        // document.addEventListener('contextmenu', event => event.preventDefault());

        setTimeout(function () {
            $('.alert-dismissible').fadeOut(1000);
        }, 5000);
    </script>
@stack('scripts')
</body>

</html>
