<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin InstallCom</title>

    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">

    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <!-- Флеш сообщения -->
    <link rel="stylesheet" href="/plugins/toastr/toastr.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="/css/adminlte.css">
    <link rel="stylesheet" href="/css/my-admin.css">
</head>
<body class="hold-transition {{ isset($body_class_auth) ? $body_class_auth : 'sidebar-mini layout-fixed' }}">

    @if (!isset($body_class_auth))
        <div class="wrapper">
            <!-- Навбар -->
            @include('layouts-admin.navbar-admin')

            <!--Левый сайтбар -->
             @include('layouts-admin.sitebar-left-admin')
            
            <!-- Контент -->
            @yield('content')

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
    @else
        @yield('content')
    @endif
    
    


    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Флеш сообщения -->
    <script src="/plugins/toastr/toastr.min.js"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "1500000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>

    <!-- AdminLTE App -->
    <script src="/js/adminlte.js"></script>
    <script src="/js/my_admin_script.js"></script>
</body>
</html>