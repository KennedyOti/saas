<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="{{asset('assets/user/img/kaiadmin/favicon.ico')}}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{asset('assets/user/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
    WebFont.load({
        google: {
            families: ["Public Sans:300,400,500,600,700"]
        },
        custom: {
            families: [
                "Font Awesome 5 Solid",
                "Font Awesome 5 Regular",
                "Font Awesome 5 Brands",
                "simple-line-icons",
            ],
            urls: ["assets/css/fonts.min.css"],
        },
        active: function() {
            sessionStorage.fonts = true;
        },
    });
    </script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/user/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/user/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/user/css/kaiadmin.min.css')}}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{asset('assets/user/css/demo.css')}}" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/gridphp/themes/base/jquery-ui.custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/gridphp/jqgrid/css/ui.jqgrid.bs.css') }}">

    <!-- JS Libraries -->
    <script src="{{ asset('assets/gridphp/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/gridphp/themes/jquery-ui.custom.min.js') }}"></script> <!-- Load jQuery UI first -->
    <script src="{{ asset('assets/gridphp/jqgrid/js/i18n/grid.locale-en.js') }}"></script>
    <script src="{{ asset('assets/gridphp/jqgrid/js/jquery.jqGrid.min.js') }}"></script>

    <!-- CSRF Token for Ajax calls -->
    <script type="text/javascript">
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        @include('dashboard.partials.sidebar')
        <!-- End Sidebar -->

        <div class="main-panel">
            @include('dashboard.partials.header')

            @yield('content')

            @include('dashboard.partials.footer')
        </div>
    </div>
    <script src="{{ asset('assets/user/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/plugin/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/plugin/chart-circle/circles.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/plugin/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/plugin/jsvectormap/world.js') }}"></script>
    <script src="{{ asset('assets/user/js/plugin/gmaps/gmaps.js') }}"></script>
    <script src="{{ asset('assets/user/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/kaiadmin.min.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.ui-jqgrid .ui-jqgrid-titlebar-close').hide();
    });
    </script>
</body>

</html>