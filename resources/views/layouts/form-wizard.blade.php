<!DOCTYPE html>
<!--
Template Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/vuexy_admin
Renew Support: https://1.envato.market/vuexy_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title') </title>
    <link rel="apple-touch-icon" href={{ asset ('images/ico/apple-icon-120.png') }}>
    <link rel="shortcut icon" type="image/x-icon" href={{ asset ('images/ico/favicon.ico') }}>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset ('vendors/css/vendors.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset ('vendors/css/forms/wizard/bs-stepper.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset ('vendors/css/forms/select/select2.min.css') }}>
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset ('css/bootstrap.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset ('css/bootstrap-extended.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset ('css/colors.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset ('css/components.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset ('css/themes/dark-layout.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset ('css/themes/bordered-layout.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset ('css/themes/semi-dark-layout.min.css') }}>

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset ('css/core/menu/menu-types/vertical-menu.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset ('css/plugins/forms/form-validation.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset ('css/plugins/forms/form-wizard.min.css') }}>
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href={{asset ('/css/style.css')}}>
    <!-- END: Custom CSS-->
    @yield('style')
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
    <script src={{ asset ('vendors/js/vendors.min.js') }}></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src={{ asset ('vendors/js/forms/wizard/bs-stepper.min.js') }}></script>
    <script src={{ asset ('vendors/js/forms/select/select2.full.min.js') }}></script>
    <script src={{ asset ('vendors/js/forms/validation/jquery.validate.min.js') }}></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src={{ asset ('js/core/app-menu.min.js') }}></script>
    <script src={{ asset ('js/core/app.min.js') }}></script>
    <script src={{ asset ('js/scripts/customizer.min.js') }}></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src={{ asset ('js/scripts/forms/form-wizard.min.js') }}></script>
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
  </body>
  <!-- END: Body-->
</html>