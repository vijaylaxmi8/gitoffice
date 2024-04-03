

<?php $__env->startSection('styles'); ?>

    
        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/flatpickr/flatpickr.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Establishment Section</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Departments
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                            
                                </ol>
                            </div>
                            <!-- Page Header Close -->

            
                          

                            <!-- Start::row-5 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12">
                                    <div class="box">
                                    <div class="box-header">
                                        <div class="flex">
                                        <h5 class="box-title my-auto">Departments Details</h5>
                                        <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#hs-medium-modal">
                                                Add Department
                                                </button>
            
                                                <div id="hs-medium-modal" class="hs-overlay hidden ti-modal">
                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                        <div class="ti-modal-content">
                                                        <div class="ti-modal-header">
                                                            <h3 class="ti-modal-title">
                                                                Add New Department
                                                            </h3>
                                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                            data-hs-overlay="#hs-medium-modal">
                                                            <span class="sr-only">Close</span>
                                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                fill="currentColor" />
                                                            </svg>
                                                            </button>
                                                        </div>
                                                        <form  action="<?php echo e(route('ESTB.departments.store')); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <div class="ti-modal-body">
                                                                <div class="max-w-sm space-y-3">
                                                                    <label for="with-corner-hint" class="ti-form-label">Department Name : </label>
                                                                    <input type="text" name="dept_name" class="ti-form-input" placeholder="Department name">
                                                                </div>
                                                                <div class="max-w-sm space-y-3">
                                                                    <label for="" class="ti-form-label">Department Short Name : </label>
                                                                    <input type="text" name="dept_shortname" class="ti-form-input" placeholder="Department short name">
                                                                </div>
                                                                <label for="" class="ti-form-label">Year of Establishment :</label>
                                                                <div class="flex shadow-sm max-w-sm space-y-3">
                                                                    
                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                class="ri ri-calendar-line"></i></span>
                                                                    </div>
                    
                                                                    <input type="text" name="yoe"
                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                                        id="date" placeholder="Choose date" readonly>
                                                                </div>
                                                        
                                                            </div>
                                                            <div class="ti-modal-footer">
                                                                <button type="button"
                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                data-hs-overlay="#hs-medium-modal">
                                                                Close
                                                                </button>
                                                                
                                                                <input type="submit" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                                            
                                                            </div>
                                                        </form>  
                                                    </div>
                                                </div>
                                            </div>


                                            <button type="button" class="ti-btn m-0 rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                                View All</button>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto">
                                        <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                            <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr class="">
                                                <th scope="col" class="dark:text-white/80">S.no</th>
                                                <th scope="col" class="dark:text-white/80">Department Name</th>
                                                <th scope="col" class="dark:text-white/80">Department ShortName</th>
                                                <th scope="col" class="dark:text-white/80">Year of Establishment</th>
                                                <th scope="col" class="dark:text-white/80">Status</th>
                                                <th scope="col" class="dark:text-white/80">Actions</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody class="">
                                            <?php
   $i = 1;
   ?>
                                            <?php $__empty_1 = true; $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            
                                            <tr>
                                                <td><?php echo e($i++); ?></td>
                                                <td>
                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                    <div class="block w-full my-auto">
                                                        <?php echo e($dept->dept_name); ?>

                                                    </div>
                                                </div>
                                                </td>
                                                <td><span><?php echo e($dept->dept_shortname); ?></span></td>
                                                <td><span><?php echo e($dept->yoe); ?></span></td>
                                                <td><span><?php echo e($dept->status); ?></span></td>
                                                
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                    <i class="ti ti-pencil"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Edit
                                                    </span>
                                                    </a>
                                                </div>
                                                <div class="hs-tooltip ti-main-tooltip">
                                                <form action="<?php echo e(route('ESTB.departments.destroy',$dept->id)); ?>" method="post">
                                                   
                                                   <button> <a href="<?php echo e(route('ESTB.departments.destroy',$dept->id)); ?>"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <?php echo method_field('delete'); ?>
                                                     <?php echo csrf_field(); ?>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                    </a></button>
                                                </div>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="text-dark"><b>No Departments Added.</b></p>
                                            <?php endif; ?>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <div class="sm:flex items-center">
                                            <div class="">
                                                showing 5 Entries <i class="ri-arrow-right-line ml-2 font-semibold"></i>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                                <nav class="flex justify-center items-center space-x-2 rtl:space-x-reverse">
                                                    <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center gap-2 rounded-sm" href="javascript:void(0);">
                                                        <span aria-hidden="true">Prev</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="bg-primary text-white py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm" href="javascript:void(0);" aria-current="page">1</a>
                                                    <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm" href="javascript:void(0);">2</a>
                                                    <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm" href="javascript:void(0);">3</a>
                                                    <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center gap-2 rounded-sm" href="javascript:void(0);">
                                                        <span class="sr-only">Next</span>
                                                        <span aria-hidden="true">Next</span>
                                                    </a>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-5 -->

                        </div>
                        <!-- End::main-content -->

                    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

        <!-- APEX CHARTS JS -->
        <script src="<?php echo e(asset('build/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

        <!-- FLATPICKR JS -->
        <script src="<?php echo e(asset('build/assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/flatpickr.js'); ?>


        <!-- INDEX JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/index-8.js'); ?>
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views//ESTB/departments/index.blade.php ENDPATH**/ ?>