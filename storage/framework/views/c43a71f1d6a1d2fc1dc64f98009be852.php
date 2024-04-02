

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
                                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"><span class="text-primary">
                                      <?php if(session('deptid')==8): ?>
                                        Weclome HOD Civil Engineering
                                        <?php elseif(session('deptid')==5): ?>
                                        Welcome HOD Computer Science and Engineering
                                         <?php elseif(session('deptid')==17): ?>
                                        Welcome HOD Architecture
                                         <?php elseif(session('deptid')==9): ?>
                                        Welcome HOD Aeronautical Engineering
                                         <?php elseif(session('deptid')==2): ?>
                                        Welcome HOD Electronics and Communication Engineering
                                         <?php elseif(session('deptid')==7): ?>
                                        Welcome HOD Electrtical and Electronics Engineering
                                         <?php elseif(session('deptid')==6): ?>
                                        Welcome HOD Information Science & Engineering
                                         <?php elseif(session('deptid')==1): ?>
                                        Welcome HOD Mechanical Engineering
                                        <?php elseif(session('deptid')==24): ?>
                                        Welcome HOD Master of Business Administration
                                         <?php elseif(session('deptid')==3): ?>
                                        Welcome HOD Master of Computer Applications
                                         <?php elseif(session('deptid')==13): ?>
                                        Welcome HOD Physics
                                         <?php elseif(session('deptid')==12): ?>
                                        Welcome HOD Mathematics
                                         <?php elseif(session('deptid')==14): ?>
                                        Welcome HOD Chemistry
                                    <?php endif; ?> 
                                    </span></h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-sm">
                                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="#">
                                    Patents
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
                                        <table id="patent" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                            <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr class="">
                                                <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Staff Name</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Dept Short Name</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">E-Gov ID</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Application No</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">application Date</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Title</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Status</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Patent No</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Publication No</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Publication Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $i=1;
                                                ?>
                                                <?php $__currentLoopData = $patents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr class="">

                                                        <td><span><?php echo e($i++); ?></span></td>
                                                        <td><span><?php echo e($pate->fname . ' ' . $pate->mname . ' ' . $pate->lname); ?></span></td>
                                                        <td><span><?php echo e($pate->dept_shortname); ?></span></td>
                                                        <td><span><?php echo e($pate->egov_id); ?></span></td>
                                                        <td><span><?php echo e($pate->appl_no); ?></span></td>
                                                        <td><span><?php echo e(\Carbon\Carbon::parse($pate->appl_date)->format('d-M-Y')); ?></span></td>
                                                        <td><span><?php echo e($pate->title); ?></span></td>
                                                        <td><span><?php echo e($pate->status); ?></span></td>
                                                        <td><span><?php echo e($pate->patent_no); ?></span></td>
                                                        <td><span><?php echo e($pate->publication_no); ?></span></td>
                                                        <td><span><?php echo e($pate->publication_date); ?></span></td>
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


        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"
        ></script>

        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>

        <script href="https://cdn.tailwindcss.com/3.3.5"></script>
        
        <script>
            $(document).ready(function(){
               //alert('Hello from jquery');

               new DataTable('#patent');
            });
        </script>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.components.HOD.master-hod', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views//HOD/Teaching/research/hodpatents.blade.php ENDPATH**/ ?>