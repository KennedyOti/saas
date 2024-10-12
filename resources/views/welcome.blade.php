<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token for POST calls -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel DataGrid</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/gridphp/themes/base/jquery-ui.custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/gridphp/jqgrid/css/ui.jqgrid.bs.css') }}">

    <!-- JS Libraries -->
    <script src="{{ asset('assets/gridphp/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/gridphp/jqgrid/js/i18n/grid.locale-en.js') }}"></script>
    <script src="{{ asset('assets/gridphp/jqgrid/js/jquery.jqGrid.min.js') }}"></script>
    <script src="{{ asset('assets/gridphp/themes/jquery-ui.custom.min.js') }}"></script>

    <!-- CSRF Token for Ajax calls -->
    <script type="text/javascript">
        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</head>

<body>
    <div class="container">
        <!-- Render the DataGrid -->
        <div>{!! $grid !!}</div>
    </div>

    <script type="text/javascript">
        // Optional: Customize toolbar actions for Import/Export
        $(document).ready(function() {
            $('.ui-jqgrid .ui-jqgrid-titlebar-close').hide(); // Optional: Hide close button
        });
    </script>
</body>

</html>
