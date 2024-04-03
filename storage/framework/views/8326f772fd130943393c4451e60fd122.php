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
        <link rel="shortcut icon" href="<?php echo e(asset('build/assets/img/brand-logos/favicon.ico')); ?>">

        <!-- APP CSS -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css']); ?>

        
        <!-- APP SCSS -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss']); ?>


        <!-- SIMPLEBAR CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/simplebar/simplebar.min.css')); ?>">

        <!-- COLOR PICKER CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/@simonwep/pickr/themes/nano.min.css')); ?>">

        <!-- MAIN JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/main.js'); ?>


        <?php echo $__env->yieldContent('styles'); ?>

	</head>

	<body class="landing-body">

        <!-- SWITCHER -->
        <?php echo $__env->make('layouts.components.landing-switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- END SWITCHER -->

        <!-- LANDING ALERTS -->
        <?php echo $__env->make('layouts.components.landing-alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- END LANDING ALERTS -->

        <!-- LANDING PAGE -->
		<div class="landing-page-wrapper relative">

            <!-- LANDING HEADER -->
            <?php echo $__env->make('layouts.components.landing-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- END LANDING HEADER -->

            <!-- LANDING SIDEBAR -->
            <?php echo $__env->make('layouts.components.landing-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- END LANDING SIDEBAR -->

                <!-- MAIN-CONTENT -->
                <?php echo $__env->yieldContent('content'); ?>
                <!-- END MAIN-CONTENT -->

            <!-- LANDING FOOTER -->
            <?php echo $__env->make('layouts.components.landing-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- END LANDING FOOTER -->

		</div>
        <!-- END LANDING PAGE-->

        <!-- SCRIPTS -->
        
        <?php echo $__env->make('layouts.components.landing-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <!-- INTERNAL JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/landing.js'); ?>


        <!-- SWITCH JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/switch.js'); ?>


        <!-- END SCRIPTS -->

	</body>
</html>
<?php /**PATH E:\projects\laravel\vite\synto\synto-final\synto\resources\views/layouts/landing-master.blade.php ENDPATH**/ ?>