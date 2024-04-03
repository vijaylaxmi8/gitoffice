<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom-body'); ?>
<body class="authentication-page">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

            <main id="content"  class="w-full max-w-md mx-auto p-6">
                <a href="<?php echo e(url('index')); ?>" class="header-logo">
                    <img src="<?php echo e(asset('build/assets/img/brand-logos/git_logo.jpg')); ?>" alt="logo" class="mx-auto block dark:hidden">
                    <img src="<?php echo e(asset('build/assets/img/brand-logos/git_logo.jpg')); ?>" alt="logo" class="mx-auto hidden dark:block">
                </a>
                <div class="mt-7 bg-white rounded-sm shadow-sm dark:bg-bgdark">
                    <div class="p-4 sm:p-7">
                        <div class="mt-5">
                            <!-- Form -->
                            <form action="<?php echo e(route('reset.password.update')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="grid gap-y-4">
                                    
                                    <!-- Form Group -->
                                    <div>
                                        <div class="flex justify-between items-center">
                                            <label class="block text-sm mb-2 dark:text-white font-bold">Email</label>
                                        </div>
                                        <div class="relative">
                                            <input placeholder="Enter your email" type="email" name="email" class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70" required>
                                            <?php if($errors->has('email')): ?>
                                                <span class="text-red"><?php echo e($errors->first('email')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div>
                                        <div class="flex justify-between items-center">
                                            <label class="block text-sm mb-2 dark:text-white font-bold">New Password</label>
                                        </div>
                                        <div class="relative">
                                            <input placeholder="Enter new password" type="password" name="new_password" class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70" required>
                                            <?php if($errors->has('new_password')): ?>
                                                <span id="new-password-error" class="text-red"><?php echo e($errors->first('new_password')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div>
                                        <div class="flex justify-between items-center">
                                            <label class="block text-sm mb-2 dark:text-white font-bold">Confirm Password</label>
                                        </div>
                                        <div class="relative">
                                            <input placeholder="Enter Confirm password" type="password" name="confirm_password" class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70" required>
                                            <?php if($errors->has('confirm_password')): ?>
                                                <span id="confirm-password-error" class="text-red"><?php echo e($errors->first('confirm_password')); ?></span>
                                            <?php endif; ?>
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

                                    <button type="submit"
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10">Change
                                        password</button>
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
<?php echo $__env->make('layouts.custom-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views/auth/reset_password.blade.php ENDPATH**/ ?>