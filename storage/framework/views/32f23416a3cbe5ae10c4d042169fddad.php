<?php $__env->startSection('styles'); ?>

        <!-- TABULATOR CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/tabulator-tables/css/tabulator.min.css')); ?>">

        <!-- CHOICES CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Edit DataTable</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Basic Ui
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Edit DataTable
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Edit DataTable</h5>
                                </div>
                                <div class="box-body">
                                    <div class="overflow-hidden table-bordered">
                                    <div id="edit-table" class="ti-custom-table ti-striped-table ti-custom-table-hover"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Edit with Validation DataTable</h5>
                                </div>
                                <div class="box-body">
                                    <div class="overflow-hidden table-bordered">
                                    <div id="validation-table" class="ti-custom-table ti-striped-table ti-custom-table-hover"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-2 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

        <!-- TABULATOR JS -->
        <script src="<?php echo e(asset('build/assets/libs/tabulator-tables/js/tabulator.min.js')); ?>"></script>
        
        <!-- TABULATOR CUSTOM JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/editdata.js'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\laravel\vite\synto\synto\resources\views/pages/edittable.blade.php ENDPATH**/ ?>