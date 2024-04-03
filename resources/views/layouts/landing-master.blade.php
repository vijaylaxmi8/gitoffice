<!DOCTYPE html>
<html lang="en" class="h-full" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-click" data-menu-position="fixed">
	<head>

		<!-- META DATA -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Tailwind Responsive Admin Web Dashboard Laravel Template">
        <meta name="keywords" content="admin, admin tailwind, laravel admin template, admin laravel, tailwind laravel, admin dashboard template, laravel tailwind, admin dashboard, admin panel, admin template, laravel admin dashboard, tailwind, laravel dashboard template, admin panel template, laravel admin panel, laravel dashboard">

        <!-- TITLE -->
		<title> Synto - Laravel Tailwind Admin Template </title>

        <!-- FAVICON -->
        <link rel="shortcut icon" href="{{asset('build/assets/img/brand-logos/favicon.ico')}}">

        <!-- APP CSS -->
        @vite(['resources/css/app.css'])

        
        <!-- APP SCSS -->
        @vite(['resources/sass/app.scss'])


        <!-- SIMPLEBAR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/simplebar/simplebar.min.css')}}">

        <!-- COLOR PICKER CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/nano.min.css')}}">

        @yield('styles')

	</head>

	<body class="landing-body">

        <!-- SWITCHER -->
        @include('layouts.components.landing-switcher')

        <!-- END SWITCHER -->

        <!-- LANDING ALERTS -->
        @include('layouts.components.landing-alerts')

        <!-- END LANDING ALERTS -->

        <!-- LANDING PAGE -->
		<div class="landing-page-wrapper relative">

            <!-- LANDING HEADER -->
            @include('layouts.components.landing-header')

            <!-- END LANDING HEADER -->

            <!-- LANDING SIDEBAR -->
            @include('layouts.components.landing-sidebar')

            <!-- END LANDING SIDEBAR -->

                <!-- MAIN-CONTENT -->
                @yield('content')
                <!-- END MAIN-CONTENT -->

            <!-- LANDING FOOTER -->
            @include('layouts.components.landing-footer')

            <!-- END LANDING FOOTER -->

		</div>
        <!-- END LANDING PAGE-->

        <!-- SCRIPTS -->
        
        @include('layouts.components.landing-scripts')

        
        <!-- DEFAULTMENU JS -->
        @vite('resources/assets/js/defaultmenu.js')


        <!-- INTERNAL JS -->
        @vite('resources/assets/js/landing.js')


        <!-- SWITCH JS -->
        @vite('resources/assets/js/switch.js')


        <!-- END SCRIPTS -->

	</body>
</html>
