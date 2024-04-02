<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom-body'); ?>
<body class="authentication-page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

            <main id="content" class="mx-auto">
                <canvas class="error-basic-background"></canvas>
                <div class="text-center py-10 px-4 sm:px-6 lg:px-8">
                    <h1 class="block font-bold text-primary text-9xl dark:text-primary">404</h1>
                    <p class="mt-3 text-2xl font-bold text-gray-800 dark:text-white">Oops, something went wrong.</p>
                    <p class="text-gray-600 dark:text-white/70">Sorry, we couldn't find your page.</p>
                    <div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">
                        <a class="w-full sm:w-auto inline-flex justify-center items-center gap-x-3 text-center bg-primary hover:bg-primary border border-transparent text-white text-sm font-medium rounded-sm focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 focus:ring-offset-white transition py-2 px-3 dark:focus:ring-offset-white/10"
                            href="<?php echo e(url('index')); ?>">
                            <i class="ri-arrow-left-line"></i>
                            Get Back to Home
                        </a>
                    </div>
                </div>
            </main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

        <!-- PARTICLES JS -->
        <script src="<?php echo e(asset('build/assets/libs/particlesjs/particles.min.js')); ?>"></script>

        <!-- INTERNAL 401-ERROR JS  -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/401-error.js'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.custom-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\laravel\vite\synto\synto\resources\views/pages/error404.blade.php ENDPATH**/ ?>