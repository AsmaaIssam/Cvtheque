<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title> @yield('title') </title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset('vendors/css/vendors.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('vendors/css/forms/wizard/bs-stepper.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('vendors/css/forms/select/select2.min.css') }}>
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset('css/bootstrap.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('css/bootstrap-extended.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('css/colors.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('css/components.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('css/themes/dark-layout.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('css/themes/bordered-layout.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('css/themes/semi-dark-layout.css') }}>

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset('css/core/menu/menu-types/vertical-menu.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('css/plugins/forms/form-validation.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('css/pages/app-user.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('css/plugins/forms/form-wizard.min.css') }}>
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset('css/style.css') }}><!------------------------heeeeeeere---------------------------------->
    <!-- END: Custom CSS-->
   
    <!-- BEGIN: application-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- END: application-->
    
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="">
   
    <!-- BEGIN: Header-->
    @include('layouts.header')
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    @include('layouts.sidebar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        @yield('content')
    </div>
    <!-- END: Content-->

    <!-- BEGIN: Footer-->
    @include('layouts.footer')
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src={{ asset('vendors/js/vendors.min.js')}}></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src={{ asset('vendors/js/tables/datatable/jquery.dataTables.min.js') }}></script>
    <script src={{ asset('vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}></script>
    <script src={{ asset('vendors/js/tables/datatable/dataTables.responsive.min.js') }}></script>
    <script src={{ asset('vendors/js/tables/datatable/responsive.bootstrap4.js') }}></script>
    <script src={{ asset('vendors/js/tables/datatable/datatables.buttons.min.js') }}></script>
    <script src={{ asset('vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}></script>
    <script src={{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src={{ asset('js/core/app-menu.js') }}></script>
    <script src={{ asset('js/core/app.js') }}></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src={{ asset('js/scripts/pages/app-user-list.js') }}></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>