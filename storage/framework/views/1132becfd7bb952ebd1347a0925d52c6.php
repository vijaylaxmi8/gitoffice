<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom-body'); ?>
<body class="cover1 justify-center">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

            <div class="flex justify-center min-h-screen align-middle">
                <main id="content"  class="w-full max-w-md mx-auto my-auto p-6">
                    <a href="<?php echo e(url('index')); ?>" class="header-logo">
                        <img src="<?php echo e(asset('build/assets/img/brand-logos/desktop-dark.png')); ?>" alt="logo" class="mx-auto block">
                    </a>
                    <div class="mt-7 box mb-0">
                        <div class="box-body">
                            <div class="text-center">
                                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign up</h1>
                                <p class="mt-3 text-sm text-gray-600 dark:text-white/70">
                                    Already have an account?
                                    <a class="text-primary decoration-2 hover:underline font-medium"
                                        href="<?php echo e(url('signin')); ?>">
                                        Sign in here
                                    </a>
                                </p>
                            </div>

                            <div class="mt-5">
                                <button type="button"
                                    class="w-full py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10">
                                    <img src="<?php echo e(asset('build/assets/img/authentication/social/1.png')); ?>" class="w-4 h-4" alt="google-img">Sign in with Google
                                </button>

                                <div
                                    class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-[1_1_0%] before:border-t before:border-gray-200 ltr:before:mr-6 rtl:before:ml-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 ltr:after:ml-6 rtl:after:mr-6 dark:text-white/70 dark:before:border-white/10 dark:after:border-white/10">
                                    Or</div>

                                <!-- Form -->
                                <form>
                                    <div class="grid gap-y-4">

                                        <!-- Form Group -->
                                        <div>
                                            <label class="block text-sm mb-2 dark:text-white">Full Name</label>
                                            <div class="relative">
                                                <input type="text"
                                                    class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                                    required>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div>
                                            <label class="block text-sm mb-2 dark:text-white">Email address</label>
                                            <div class="relative">
                                                <input type="email"
                                                    class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                                    required>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div>
                                            <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                                            <div class="relative">
                                                <input type="password" id="password" name="password"
                                                    class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                                    required>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div>
                                            <label for="confirm-password" class="block text-sm mb-2 dark:text-white">Confirm
                                                Password</label>
                                            <div class="relative">
                                                <input type="password" id="confirm-password" name="confirm-password"
                                                    class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                                    required>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Checkbox -->
                                        <div class="flex items-center">
                                            <div class="flex">
                                                <input id="remember-me" name="remember-me" type="checkbox"
                                                    class="shrink-0 mt-0.5 border-gray-200 rounded text-primary pointer-events-none focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:checked:bg-primary dark:checked:border-primary dark:focus:ring-offset-white/10">
                                            </div>
                                            <div class="ltr:ml-3 rtl:mr-3">
                                                <label for="remember-me" class="text-sm dark:text-white">I accept the <a
                                                        class="text-primary decoration-2 hover:underline font-medium"
                                                        href="<?php echo e(url('terms')); ?>">Terms and Conditions</a></label>
                                            </div>
                                        </div>
                                        <!-- End Checkbox -->

                                        <a href="<?php echo e(url('index')); ?>"
                                            class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10">Sign
                                            up</a>
                                    </div>
                                </form>
                                <!-- End Form -->
                            </div>
                        </div>
                    </div>
                </main>
            </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.custom-master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\my-projects\laravel\vite\synto\synto-laravel\synto\resources\views/pages/signup-cover.blade.php ENDPATH**/ ?>