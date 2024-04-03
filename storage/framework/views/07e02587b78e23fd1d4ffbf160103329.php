<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom-body'); ?>
<body class="authentication-page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

            <main id="content"  class="w-full max-w-md mx-auto p-6">
                <a href="<?php echo e(url('index')); ?>" class="header-logo">
                    <img src="<?php echo e(asset('build/assets/img/brand-logos/desktop-logo.png')); ?>" alt="logo" class="mx-auto block dark:hidden">
                    <img src="<?php echo e(asset('build/assets/img/brand-logos/desktop-dark.png')); ?>" alt="logo" class="mx-auto hidden dark:block">
                </a>
                <div class="mt-7 bg-white rounded-sm shadow-sm dark:bg-bgdark">
                    <div class="p-4 sm:p-7">
                        <div class="text-center">
                            <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Lock Screen</h1>
                            <p class="mt-3 text-sm text-gray-600 dark:text-white/70">
                            Welcome Back , Please Enter Your Password
                            </p>
                        </div>

                        <div class="mt-5">
                            <!-- Form -->
                            <form>
                                <div class="grid gap-y-4">
                                    <!-- Lockscreen Image -->
                                    <img src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="locksreen-img" class="w-24 h-24 rounded-full mx-auto">
                                    <div>
                                        <h2 class="text-center block text-sm font-semibold text-gray-800 dark:text-white">Jsontaylor@gmail.com</h2>
                                        <p class="text-center text-xs text-gray-600 dark:text-white/70">Web designer  </p>
                                    </div>
                                    <!-- End Lockscreen Image -->
                                    <!-- Form Group -->
                                    <div>
                                        <div class="flex justify-between items-center">
                                            <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                                        </div>
                                        <div class="relative">
                                            <input type="password" id="password" name="password" class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70" required >
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <a href="<?php echo e(url('index')); ?>"
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10">Unlock</a>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.custom-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\my-projects\laravel\vite\synto\synto-laravel\synto\resources\views/pages/lockscreen.blade.php ENDPATH**/ ?>