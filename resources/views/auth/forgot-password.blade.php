<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Page</title>
    <link rel="apple-touch-icon" href={{ asset('images/ico/apple-icon-120.png') }}>
    <link rel="shortcut icon" type="image/x-icon" href={{ asset('images/ico/favicon.ico') }}>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset('vendors/css/vendors.min.css') }}>
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
    <link rel="stylesheet" type="text/css" href={{ asset('css/core/menu/menu-types/horizontal-menu.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('css/plugins/forms/form-validation.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('css/pages/page-auth.css') }}>
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset('assets/css/style.css') }}>
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu blank-page navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="blank-page">
    <!-- BEGIN: Content-->
   
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v1 px-2">
                    <div class="auth-inner py-2">
                        <!-- Forgot Password v1 -->
                        <div class="card mb-0">
                            <div class="card-body">

                                <h4 class="card-title mb-1">Mot de passe oublié?</h4>
                                <p class="card-text mb-2">Enterez votre e-mail pour vous envoyer le lien pour rénitialiser votre mot de passe</p>
                                
                                @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                                @endif
                                
                                <x-jet-validation-errors class="mb-4" />
                                
                                <form class="auth-forgot-password-form mt-2" method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="forgot-password-email" class="form-label">Adresse E-mail</label>
                                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                    </div>
                                    <button class="btn btn-primary btn-block" tabindex="2">{{ __('Envoyer le lien') }}</button>
                                </form>

                                <p class="text-center mt-2">
                                    <a href="{{ route('login') }}"> <i data-feather="chevron-left" ></i> Back to login </a>
                                </p>
                            </div>
                        </div>
                        <!-- /Forgot Password v1 -->
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src={{ asset('vendors/js/vendors.min.js') }}></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src={{ asset('vendors/js/ui/jquery.sticky.js') }}></script>
    <script src={{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src={{ asset('js/core/app-menu.js') }}></script>
    <script src={{ asset('js/core/app.js"') }}></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src={{ asset('js/scripts/pages/page-auth-login.js') }}></script>
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