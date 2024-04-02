

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
                            <div>
                                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">Welcome<span class="text-primary"> <?php echo e($staff[0]->fname.' '.$staff[0]->mname.' '.$staff[0]->lname); ?></span></h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-sm">
                                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="#">
                                    Staff Department
                                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                </a>
                                </li>
                                
                                
                            </ol>
                        </div>
                        <!-- Page Header Close -->
                        
                    </div>
                    <!-- Start::main-content -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 xl:col-span-12">
                            <div class="box">
                                <div class="box-body">                
                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                        <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                            <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr class="">
                                                <th scope="col" class="dark:text-white/80 font-bold ">S.no</th>
                                                <th scope="col" class="dark:text-white/80 font-bold">Department Name</th>
                                                <th scope="col" class="dark:text-white/80 font-bold">Start Date</th>
                                                <th scope="col" class="dark:text-white/80 font-bold">End Date</th>
                                                <th scope="col" class="dark:text-white/80 font-bold">Duration</th>
                                                <th scope="col" class="dark:text-white/80 font-bold">Status</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $i=1;
                                                ?>
                                                <?php $__currentLoopData = $staff[0]->departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                
                                                <tr class="<?php echo e($dept->pivot->status =='active'?'':'bg-gray-200'); ?>">
                                                    <td><?php echo e($i++); ?></td>
                                                    <td>
                                                    <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                        <div class="block w-full my-auto">
                                                        
                                                                <?php echo e($dept->dept_name); ?>

                                                        
                                                        </div>
                                                    </div>
                                                    </td>
                                                    <td><span><?php echo e(\Carbon\Carbon::parse($dept->pivot->start_date)->format('d-M-Y')); ?></span></td>
                                                    <td><span><?php echo e($dept->pivot->end_date==null?'--NA--':\Carbon\Carbon::parse($dept->pivot->end_date)->format('d-M-Y')); ?></span></td>
                                                    <td><span>
                                                        <?php
                                                                    $sdate=new DateTime($dept->pivot->start_date);
                                                            
                                                                    if ($dept->pivot->end_date!=null)
                                                                        $edate=new DateTime($dept->pivot->end_date);
                                                                    else
                                                                        $edate=Carbon\Carbon::now();
                                                                        $difference=$sdate->diff($edate);
                                                                    ?>    
                                                        
                                                           <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>

                                                        </span></td>
                                                    <td><span><?php echo e($dept->pivot->status); ?></span></td>
                                                    
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
        <script>
            $(document).ready(function(){
            });
        </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.components.staff.master-teaching', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views/Staff/Teaching/departments.blade.php ENDPATH**/ ?>