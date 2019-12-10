<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href={{ asset('bower_components/admin_template/vendor/fontawesome-free/css/all.min.css') }} rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href={{ asset('bower_components/admin_template/vendor/datatables/dataTables.bootstrap4.css') }} rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href={{ asset('bower_components/admin_template/css/sb-admin.css') }} rel="stylesheet">

</head>

<body id="page-top">
    @include('admin.layouts.header')
    <div id="wrapper">
        @include('admin.layouts.sidebar')
        @yield('content')
        @include('admin.layouts.footer')
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- JavaScript-->
    <!-- Bootstrap core JavaScript-->
    <script src={{ asset('bower_components/admin_template/vendor/jquery/jquery.min.js') }}></script>
    <script src={{ asset('bower_components/admin_template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('bower_components/admin_template/vendor/jquery-easing/jquery.easing.min.js') }}></script>
    <script src={{ asset('bower_components/admin_template/vendor/datatables/jquery.dataTables.js') }}></script>
    <script src={{ asset('bower_components/admin_template/vendor/datatables/dataTables.bootstrap4.js') }}></script>
    <script src={{ asset('bower_components/admin_template/js/sb-admin.min.js') }}></script>
    <script src={{ asset('bower_components/admin_template/js/demo/datatables-demo.js') }}></script>
    <script src={{ asset('js/app.js') }}></script>
    <script src={{ asset('bower_components/admin_template/vendor/chart.js/Chart.min.js') }}></script>
    <script src={{ asset('bower_components/admin_template/js/demo/chart-area-demo.js') }}></script>
    <script src={{ asset('bower_components/admin_template/js/demo/chart-bar-demo.js') }}></script>
    <script src={{ asset('bower_components/admin_template/js/demo/chart-pie-demo.js') }}></script>

</body>

</html>
