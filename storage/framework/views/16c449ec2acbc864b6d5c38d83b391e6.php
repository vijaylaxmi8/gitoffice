<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom-body'); ?>
<body class="flex h-full !py-0 bg-white dark:bg-bgdark">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

            <div class="grid grid-cols-12 gap-6 w-full">
                <div class="lg:col-span-5 col-span-12 hidden lg:block relative  bg-primary/20">
                    <div class="relative w-full h-full z-[1] p-10">
                        <div id="content"  class="authentication-page justify-center w-full max-w-7xl mx-auto p-6">
                            <div class="mt-7">
                                <div class="p-6 sm:p-7 space-y-8">
                                    <img src="<?php echo e(asset('build/assets/img/authentication/3.png')); ?>" alt="logo" class="mx-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-7 col-span-12">
                    <div class="authentication-page w-full">
                        <!-- ========== MAIN CONTENT ========== -->
                        <main class="w-full max-w-5xl p-6 ">
                            <div class="mt-7">
                                <div class="p-4 sm:p-7">
                                    <div class="text-center">
                                        <h1 class="block text-5xl font-bold text-gray-800 dark:text-white">Coming Soon</h1>
                                        <p class="mt-3 text-sm text-gray-600 dark:text-white/70">
                                            Our website is almost Done, mean while enter your email id to get latest updates and
                                            notifications about the website.
                                        </p>
                                    </div>

                                    <div class="mt-5 space-y-6">

                                        <!-- Form Group -->
                                        <div class="max-w-md mx-auto">
                                            <div class="flex rounded-sm shadow-sm">
                                                <input type="text" placeholder="info@gmail.com"
                                                    class="ti-form-input rounded-none ltr:rounded-l-sm rtl:rounded-r-sm focus:z-10">
                                                <button type="button"
                                                    class="py-2 px-3 inline-flex flex-shrink-0 justify-center items-center gap-2 ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                                                    Notify me
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <div>
                                            <p class="mb-2 text-center text-sm text-gray-600 dark:text-white/70">
                                            Follow Us
                                            </p>
                                            <div class="flex space-x-1 rtl:space-x-reverse justify-center text-center">
                                                <button aria-label="button" type="button"
                                                    class="m-0 ti-btn ti-btn-soft-primary">
                                                    <i class="ri ri-github-line text-lg leading-none"></i>
                                                </button>
                                                <button aria-label="button" type="button"
                                                    class="m-0 ti-btn ti-btn-soft-primary">
                                                    <i class="ri ri-instagram-line text-lg leading-none"></i>
                                                </button>
                                                <button aria-label="button" type="button"
                                                    class="m-0 ti-btn ti-btn-soft-primary">
                                                    <i class="ri ri-twitter-line text-lg leading-none"></i>
                                                </button>
                                                <button aria-label="button" type="button"
                                                    class="m-0 ti-btn ti-btn-soft-primary">
                                                    <i class="ri ri-linkedin-line text-lg leading-none"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </main>
                        <!-- ========== END MAIN CONTENT ========== -->
                    </div>
                </div>
            </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.custom-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\laravel\vite\synto\synto\resources\views/pages/comingsoon.blade.php ENDPATH**/ ?>