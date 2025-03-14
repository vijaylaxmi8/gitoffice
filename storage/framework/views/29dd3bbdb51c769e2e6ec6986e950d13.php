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
                    <div class="mt-7 bg-white rounded-sm shadow-sm dark:bg-bgdark">
                        <div class="p-4 sm:p-7">
                            <div class="text-center">
                                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign in</h1>
                                <p class="mt-3 text-sm text-gray-600 dark:text-white/70">
                                    Don't have an account yet?
                                    <a class="text-primary decoration-2 hover:underline font-medium"
                                        href="<?php echo e(url('signup')); ?>">
                                        Sign up here
                                    </a>
                                </p>
                            </div>

                            <div class="mt-5">
                                <button type="button"
                                    class="w-full py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10">
                                    <svg class="w-4 h-auto" width="46" height="47" viewBox="0 0 46 47" fill="none">
                                        <path
                                            d="M46 24.0287C46 22.09 45.8533 20.68 45.5013 19.2112H23.4694V27.9356H36.4069C36.1429 30.1094 34.7347 33.37 31.5957 35.5731L31.5663 35.8669L38.5191 41.2719L38.9885 41.3306C43.4477 37.2181 46 31.1669 46 24.0287Z"
                                            fill="#4285F4" />
                                        <path
                                            d="M23.4694 47C29.8061 47 35.1161 44.9144 39.0179 41.3012L31.625 35.5437C29.6301 36.9244 26.9898 37.8937 23.4987 37.8937C17.2793 37.8937 12.0281 33.7812 10.1505 28.1412L9.88649 28.1706L2.61097 33.7812L2.52296 34.0456C6.36608 41.7125 14.287 47 23.4694 47Z"
                                            fill="#34A853" />
                                        <path
                                            d="M10.1212 28.1413C9.62245 26.6725 9.32908 25.1156 9.32908 23.5C9.32908 21.8844 9.62245 20.3275 10.0918 18.8588V18.5356L2.75765 12.8369L2.52296 12.9544C0.909439 16.1269 0 19.7106 0 23.5C0 27.2894 0.909439 30.8731 2.49362 34.0456L10.1212 28.1413Z"
                                            fill="#FBBC05" />
                                        <path
                                            d="M23.4694 9.07688C27.8699 9.07688 30.8622 10.9863 32.5344 12.5725L39.1645 6.11C35.0867 2.32063 29.8061 0 23.4694 0C14.287 0 6.36607 5.2875 2.49362 12.9544L10.0918 18.8588C11.9987 13.1894 17.25 9.07688 23.4694 9.07688Z"
                                            fill="#EB4335" />
                                    </svg>
                                    Sign in with Google
                                </button>

                                <div
                                    class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-[1_1_0%] before:border-t before:border-gray-200 ltr:before:mr-6 rtl:before:ml-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 ltr:after:ml-6 rtl:after:mr-6 dark:text-white/70 dark:before:border-white/10 dark:after:border-white/10">
                                    Or</div>

                                <!-- Form -->
                                <div>
                                    <div class="grid gap-y-4">
                                        <!-- Form Group -->
                                        <div>
                                            <label for="email" class="block text-sm mb-2 dark:text-white">Email address</label>
                                            <div class="relative">
                                                <input type="email" id="email" name="email"
                                                    class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70"
                                                    required>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div>
                                            <div class="flex justify-between items-center">
                                                <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                                                <a class="text-sm text-primary decoration-2 hover:underline font-medium"
                                                    href="<?php echo e(url('forgot')); ?>">Forgot password?</a>
                                            </div>
                                            <div class="relative">
                                                <input type="password" id="password" name="password"
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
                                                <label for="remember-me" class="text-sm dark:text-white">Remember me</label>
                                            </div>
                                        </div>
                                        <!-- End Checkbox -->
                                        <a href="<?php echo e(url('index')); ?>"
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10">Sign
                                        in</a>
                                    </div>
                                </div>
                                <!-- End Form -->
                            </div>
                        </div>
                    </div>
                </main>
            </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.custom-master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\my-projects\laravel\vite\synto\synto-laravel\synto\resources\views/pages/signin-cover.blade.php ENDPATH**/ ?>