

<?php $__env->startSection('styles'); ?>

        
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.tailwindcss.min.css">

        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('build/assets/libs/flatpickr/flatpickr.min.css')); ?>">

        <link rel="stylesheet"  href= "https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css"/>
        <link rel="stylesheet"  href= "https://cdn.datatables.net/fixedcolumns/5.0.0/css/fixedColumns.dataTables.css"/>

            <style>
                th, td { white-space: nowrap; }
                div.dataTables_wrapper {
                    width: 800px;
                    margin: 0 auto;
                }
            </style>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                         Leave Entitlement
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg>
                                    </a>
                                    </li>
                            
                                </ol>
                            </div>
                            <!-- Page Header Close -->

            
                          

                            <!-- Start::row-5 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12">
                                    <?php if(session('status')): ?>
                                        <?php if(session('status') == 1): ?>
                                        <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                            <span class='font-bold'>Result</span> DataBase transaction Successful
                                        </div>
                                        <?php elseif(session('status') == 0): ?>
                                        <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                            <span class='font-bold'>Result</span> Error in Database transaction
                                        </div>
                                    
                                        <?php endif; ?>
                                        <?php 
                                            Illuminate\Support\Facades\Session::forget('status');  
                                            header("refresh: 3"); 
                                        ?>
                                    <?php endif; ?>
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="flex">
                                                <h5 class="box-title my-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                                    Leave Entitlement
                                                </h5>
                                                
                                            </div>
                                        </div>
                                        <div class="box-body">
                                               
                                            <div class=" rounded-sm     ">
                                                <table id="entitlement_table" class="stripe row-border order-column">
                                                    <thead class="bg-neutral-50 dark:bg-black/20" >
                                                        <tr class="">
                                                            <th scope="col" class="dark:text-white/80 font-bold" rowspan="2">Sl. No</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold" rowspan="2" >Employee Name</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold text-center"  colspan="<?php echo e(count($leave_types)); ?>" data-dt-order="disable"> Entitled</th> 
                                                           
                                                            <th scope="col" class="dark:text-white/80 font-bold text-center"   colspan="<?php echo e(count($leave_types_taken)); ?>" data-dt-order="disable"> Taken </th>
                                                                                 
                                                            <th scope="col" class="dark:text-white/80 font-bold text-center"  colspan="<?php echo e(count($leave_types)); ?>" data-dt-order="disable"> Balance</th>
                                                            
                                                            <th scope="col" class="dark:text-white/80 font-bold" rowspan="2" >Actions</th>
                                                        </tr>
                                                        <tr>
                                                      
                                                        <!--For Displaying Entitle menu options in header-->
                                                            <?php $__currentLoopData = $leave_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <th scope="col" class="dark:text-white/80 font-bold"><?php echo e($l_type->shortname); ?></th>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <!--For Displaying Taken menu options in header-->
                                                            <?php $__currentLoopData = $leave_types_taken; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l_type_taken): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <th scope="col" class="dark:text-white/80 font-bold"><?php echo e($l_type_taken->shortname); ?></th>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <!--For Displaying Balance menu options in header (the Same variable is used as of entitlement.)-->
                                                            <?php $__currentLoopData = $leave_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <th scope="col" class="dark:text-white/80 font-bold"><?php echo e($l_type->shortname); ?></th>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                           
                                                        </tr>
                                                    </thead>
                                                    <?php
                                                        $i=1;
                                                        
                                                    ?>
                                                    <tbody class="">

                                                        <?php $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td><?php echo e($i++); ?></td>
                                                                <td><?php echo e($st->fname." ".$st->mname." ".$st->lname); ?></td>
                                                                    
                                                                
                                                                           
                                                                    <?php $__currentLoopData = $leave_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                   
                                                                        <?php $__currentLoopData = $st->leave_staff_entitlements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        
                                                                            <?php if($lse->shortname == $l_type->shortname): ?>
                                                                                
                                                                                <td scope="col" class="dark:text-white/80 font-bold"><?php echo e($lse->pivot->entitled_curr_year); ?></td>
                                                                                
                                                                            <?php endif; ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                
                                                                
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                
                                                             
                                                                <td></td>
                                                                <td></td>
                                                               
                                                                
                                                                
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                                  
                                                </table>
                                            </div>
                                           
                                        </div>
                                        <div class="box-footer">
                                                    
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
       
        <!-- Include the latest jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <!-- Include the latest DataTables -->
        <script src="https://cdn.datatables.net/2.0.1/js/dataTables.min.js"></script>

       
       
       <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
      

      <script src=" https://cdn.datatables.net/fixedcolumns/5.0.0/js/dataTables.fixedColumns.js"></script>
      <script src="https://cdn.datatables.net/fixedcolumns/5.0.0/js/fixedColumns.dataTables.js"></script>
        <script>
            $(document).ready(function(){
                //new DataTable('#entitlement_table');
                new DataTable('#entitlement_table', {
                    
                    fixedColumns: true,
                    fixedColumns: {
                        left: 2
                    },
                  
                    responsive: true,
                    paging: true,
                    scrollCollapse: true,
                    scrollX: true,
                    sScrollY: 400,
                    columnDefs: [{
                                "defaultContent": "-",
                                "targets": "_all",
                            },
                            { targets: 1, width: '90px' },
                           
                        ]
                });
            });
        </script> 

       

        <!-- INDEX JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/index-8.js'); ?>
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views/ESTB/leaves/leave_entitlement/index.blade.php ENDPATH**/ ?>