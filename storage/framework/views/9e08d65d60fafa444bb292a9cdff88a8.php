<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="dark">
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

	<body class="">

        <!-- SWITCHER -->
        <?php echo $__env->make('layouts.components.switcher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- END SWITCHER -->

        <!-- PAGE -->
		<div class="page">

            <!-- SIDEBAR -->
            <?php echo $__env->make('layouts.components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- END SIDEBAR -->

            <!-- HEADER -->
            <?php echo $__env->make('layouts.components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- END HEADER -->

                <!-- MAIN-CONTENT -->
                <?php echo $__env->yieldContent('content'); ?>
                <!-- END MAIN-CONTENT -->

            <!-- SEARCH-MODAL -->
            <?php echo $__env->make('layouts.components.search-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- END SEARCH-MODAL -->

            <!-- FOOTER -->
            <?php echo $__env->make('layouts.components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- END FOOTER -->

		</div>
        <!-- END PAGE-->

        <!-- SCRIPTS -->
        
        <?php echo $__env->make('layouts.components.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- STICKY JS -->
		<script src="<?php echo e(asset('build/assets/sticky.js')); ?>"></script>
        
        <!-- SWITCH JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/switch.js'); ?>

        
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/custom-switcher.js'); ?>


        <!-- END SCRIPTS -->

	</body>
</html>
<?php /**PATH E:\projects\laravel\vite\synto\synto\resources\views/layouts/master.blade.php ENDPATH**/ ?>