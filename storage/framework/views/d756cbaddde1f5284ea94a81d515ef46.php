

<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>


    <script>
        var base_url = "<?php echo e(URL::to('/')); ?>";
    </script>

<?php $__env->startSection('content'); ?>

            <main id="content"  class="w-full max-w-md mx-auto p-6">
                <a href="<?php echo e(url('index')); ?>" class="header-logo">
                    
                </a>
                <div class="mt-7 bg-white rounded-sm shadow-sm dark:bg-bgdark">
                    <div class="p-4 sm:p-7">
                        <div class="text-center">
                            <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Change password?</h1>
                            <p class="mt-3 text-sm text-gray-600 dark:text-white/70">
                                Remember your password?
                                <a class="text-primary decoration-2 hover:underline font-medium"
                                    href="<?php echo e(url('signin')); ?>">
                                    Sign in here
                                </a>
                            </p>
                        </div>

                        <div class="mt-5">
                            <!-- Form -->
                            <form id="form" action="<?php echo e(route('password.change')); ?>" method="post">
                                <div class="grid gap-y-4">

                                    <!-- Form Group -->
                                    <div>
                                        <div class="flex justify-between items-center">
                                            <label class="block text-sm mb-2 dark:text-white font-bold">Current Password</label>
                                        </div>
                                        <div class="relative">
                                            <input type="password" id="password" name="password" class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70 current_password" placeholder="Enter Current Password" required>
                                            <span id="current_password_status"></span>
                                            <?php if($errors->has('password')): ?>
                                                <span id="password-error" class="text-red"><?php echo e($errors->first('password')); ?></span>
                                            <?php endif; ?>
                                            <div id="togglePassword" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                                    <path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.90026 14.4853 7.90026 12C7.90026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.9003 9.51472 16.9003 12C16.9003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.9003 13.3807 14.9003 12C14.9003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.90026 10.6193 9.90026 12C9.90026 13.3807 10.6196 14.5 12.0003 14.5Z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->
                                    <!-- Form Group -->
                                    <div>
                                        <div class="flex justify-between items-center">
                                            <label class="block text-sm mb-2 dark:text-white font-bold">New Password</label>
                                        </div>
                                        <div class="relative">
                                            <input type="password" id="new_password" name="new_password" class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70" placeholder="New Password" required>
                                            <?php if($errors->has('new_password')): ?>
                                                <span id="new-password-error" class="text-red"><?php echo e($errors->first('new_password')); ?></span>
                                            <?php endif; ?>
                                            <div id="togglenew_password" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                                    <path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.90026 14.4853 7.90026 12C7.90026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.9003 9.51472 16.9003 12C16.9003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.9003 13.3807 14.9003 12C14.9003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.90026 10.6193 9.90026 12C9.90026 13.3807 10.6196 14.5 12.0003 14.5Z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div>
                                        <div class="flex justify-between items-center">
                                            <label class="block text-sm mb-2 dark:text-white font-bold">Confirm Password</label>
                                        </div>
                                        <div class="relative">
                                            <input type="password" id="confirm_password" name="confirm_password" class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70 confirm_password" placeholder="Confirm Password" required>
                                            <span id="confirm_password_status"></span>
                                            <?php if($errors->has('confirm_password')): ?>
                                                <span id="confirm-password-error" class="text-red"><?php echo e($errors->first('confirm_password')); ?></span>
                                            <?php endif; ?>
                                            <div id="toggleconfirm_password" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                                    <path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.90026 14.4853 7.90026 12C7.90026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.9003 9.51472 16.9003 12C16.9003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.9003 13.3807 14.9003 12C14.9003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.90026 10.6193 9.90026 12C9.90026 13.3807 10.6196 14.5 12.0003 14.5Z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Form Group -->

                                    <button type="submit"
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm dark:focus:ring-offset-white/10">
                                         Change password
                                    </button>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            // Check current password on focusout
            $(document).on('focusout', '.current_password', function () {
                alert('focussed out of password field');
                var current_password = $(this).val();
                $.ajax({
                    url: base_url + '/checkcurrentpassword',
                    method: 'GET',
                    data: { 'current_password': current_password },
                    success: function (data) {
                        console.log(data);
                        if (data == 0) {
                            $('#current_password_status').removeClass('text-green-400');
                            $('#current_password_status').text('The current password seems to be incorrectly entered! Kindly check').addClass('text-red-400');
                        } else {
                            $('#current_password_status').removeClass('text-red-400');
                            $('#current_password_status').text('The current password is matching with our records').addClass('text-green-400');
                        }
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            });

            // password visibility
            $("#togglePassword").click(function () {
                var passwordInput = $("#password");
                var type = passwordInput.attr("type") === "password" ? "text" : "password";
                passwordInput.attr("type", type);
            });

            // new paswword visibility 
            $("#togglenew_password").click(function () {
                var passwordInput = $("#new_password");
                var type = passwordInput.attr("type") === "password" ? "text" : "password";
                passwordInput.attr("type", type);
            });

            // confirm paswword visibility 
                $("#toggleconfirm_password").click(function () {
                var passwordInput = $("#confirm_password");
                var type = passwordInput.attr("type") === "password" ? "text" : "password";
                passwordInput.attr("type", type);
            });

            
        });
    </script>
       

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.components.staff.master-nonteaching', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views/auth/change_password.blade.php ENDPATH**/ ?>