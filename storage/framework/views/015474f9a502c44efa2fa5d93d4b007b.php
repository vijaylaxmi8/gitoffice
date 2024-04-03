

<?php $__env->startSection('styles'); ?>

        <!-- CHOICES CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')); ?>">

        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/flatpickr/flatpickr.min.css')); ?>">
        
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                <div class="content">

                    <!-- Start::main-content -->
                    <div class="main-content">

                       
                        <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                    
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                            Staff List
                                            <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                        
                                </ol>
                            </div>
                        <!-- Page Header Close -->

                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-6">
                                 <!-- For Checking whether status is set or no-->
                                 <?php if(session('status')): ?>
                                    <?php if(session('status') == 1): ?>
                                    <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                        <span class='font-bold'>Result: </span> Database transaction Successful
                                    </div>
                                    <?php elseif(session('status') == 0): ?>
                                    <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                        <span class='font-bold'>Result : </span> Error in Database transaction
                                    </div>
                                
                                    <?php endif; ?>
                                    <?php 
                                        Illuminate\Support\Facades\Session::forget('status'); 
                                        header("refresh: 1"); 
                                    ?>
                                <?php endif; ?>

                            </div>
                        </div>
                        <!-- Start::row-1 -->
                        <div class="col-span-12 xl:col-span-9">
                            <div class="box">
                                <div class="box-header">
                                    
                                </div>
       
                                <div class="box-body pt-0">
                                    <div class="mt-3">
                                        <div id="pills-with-brand-color-1" role="tabpanel" aria-labelledby="pills-with-brand-color-item-1">
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-body">
                                                    <div class="box-header">
                                                        <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i>Teaching Satff Details</h5>
                                                    </div>
                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <table id="teaching" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                                <tr class="">
                                                                    <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Staff Name</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Designation</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Association</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Contact No</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">View</th>
                                                                </tr>
                                                            </thead>
                                                            <?php
                                                                $i=1;
                                                            ?>
                                                            <tbody class="">
                                                                <?php $__currentLoopData = $teaching_staff_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teach): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <tr class="">

                                                                        <td><span><?php echo e($i++); ?></span></td>
                                                                        <td><span><?php echo e($teach->fname . ' ' . $teach->mname . ' ' . $teach->lname); ?></span></td>
                                                                        <td><span><?php echo e($teach->design_name); ?></span></td>
                                                                        <td><span><?php echo e($teach->asso_name); ?></span></td>
                                                                        <td><span><?php echo e($teach->contactno); ?></span></td>
                                                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                                <button
                                                                                    class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                                    <a href="<?php echo e(route('HOD.hodview',$teach->id)); ?>">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z"></path></svg>
                                                                                        <span
                                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                            role="tooltip">
                                                                                            View
                                                                                        </span>
                                                                                    </a>
                                                                                </button>                                                
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            
                                                            </tbody>
                                                            
                                                        </table>  
                                                    </div>   
                                                </div>
                                            </div>
                                            
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i>Non-Teaching Staff Details</h5>
                                                </div>
                                                <div class="box-body">
                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <table id="non-teaching" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                                <tr class="">
                                                                    <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Staff Name</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Designation</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Association</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Contact No</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">View</th>
                                                                </tr>
                                                            </thead>
                                                            <?php
                                                                $i=1;
                                                            ?>
                                                            <tbody class="">
                                                                <?php $__currentLoopData = $non_teaching_staff_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nonteach): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <tr class="">

                                                                        <td><span><?php echo e($i++); ?></span></td>
                                                                        <td><span><?php echo e($nonteach->fname . ' ' . $nonteach->mname . ' ' . $nonteach->lname); ?></span></td>
                                                                        <td><span><?php echo e($nonteach->design_name); ?></span></td>
                                                                        <td><span><?php echo e($nonteach->asso_name); ?></span></td> 
                                                                        <td><span><?php echo e($nonteach->contactno); ?></span></td> 
                                                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                                <button
                                                                                    class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                                        
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z"></path></svg>
                                                                                        <span
                                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                            role="tooltip">
                                                                                            View
                                                                                        </span>
                                                                                    </a>
                                                                                </button>                                                
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                   
                                                            
                                                            </tbody>
                                                            
                                                        </table>  
                                                    </div>   
                                                </div>
                                            </div>
                                        </div>   
                                    </div>                                                                      
                                </div>
                            </div>
                        </div>
                             <!-- End::row-1 -->
                    </div>    
                    <!-- End::main-content -->

                </div>
               

            

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

        <!-- FLATPICKR JS -->
        <script src="<?php echo e(asset('build/assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>

        <!-- CHOICES JS -->
        <script src="<?php echo e(asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')); ?>"></script>

         <!-- TABULATOR JS -->
         <script src="<?php echo e(asset('build/assets/libs/tabulator-tables/js/tabulator.min.js')); ?>"></script>

        <!-- FORM-LAYOUT JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/profile-settings.js'); ?>


        <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>


         <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"
        ></script>

        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>

        <script href="https://cdn.tailwindcss.com/3.3.5"></script>
        
        <script>
            $(document).ready(function(){
               //alert('Hello from jquery');

               new DataTable('#teaching');
            });
        </script>

        <script>
            $(document).ready(function(){
               //alert('Hello from jquery');

               new DataTable('#non-teaching');
            });
        </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.components.HOD.master-hod', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views//HOD/hodstaff.blade.php ENDPATH**/ ?>