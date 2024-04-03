

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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Staff Details <span class="text-primary"><?php echo e($staff_view->fname.' '.$staff_view->mname.' '.$staff_view->lname); ?></span></span></h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex  items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="<?php echo e(route('HOD.staff.stafflist')); ?>">
                                            Go Back to Staff
                                            <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 xl:col-span-3">
                                <div class="box">
                                    <div class="box-body relative">
                                        <div class="flex relative before:bg-black/50 before:absolute before:w-full before:h-full before:rounded-sm">
                                            <img src="<?php echo e(asset('build/assets/img/png-images/2.png')); ?>" alt="" class="h-[200px] w-full rounded-sm" id="profile-img2">
                                            <span class="absolute top-5 ltr:right-5 rtl:left-5 flex p-2 rounded-sm ring-1 ring-black/10 text-white bg-black/10 leading-none">
                                                <i class="ri ri-pencil-line"></i>
                                                <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" id="profile-change2">
                                            </span>
                                        </div>
                                        <div class="absolute top-[4.5rem] inset-x-0 text-center space-y-3">
                                            <div class="flex justify-center w-full">
                                                <div class="relative">
                                                    <img src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" class="w-24 h-24 rounded-full ring-4 ring-white/10 mx-auto" id="profile-img" alt="pofile-img">
                                                    <span class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white/10 text-white bg-white/10 dark:bg-bgdark leading-none">
                                                        <i class="ri ri-pencil-line"></i>
                                                        <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" id="profile-change">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-body pt-0">
                                        <nav class="flex flex-col space-y-2" aria-label="Tabs" role="tablist" data-hs-tabs-vertical="true">
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 active" id="profile-settings-item-1" data-hs-tab="#profile-settings-1" aria-controls="profile-settings-1" role="tab">
                                            <i class="ri ri-shield-user-line"></i>Staff Basic Information
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-2" data-hs-tab="#profile-settings-2" aria-controls="profile-settings-2" role="tab">
                                            <i class="ri ri-global-line"></i>Qualification
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-3" data-hs-tab="#profile-settings-3" aria-controls="profile-settings-3" role="tab">
                                            <i class="ri ri-lock-line"></i> Department
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-4" data-hs-tab="#profile-settings-4" aria-controls="profile-settings-4" role="tab">
                                            <i class="ri ri-account-circle-line"></i> Asociation
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-5" data-hs-tab="#profile-settings-5" aria-controls="profile-settings-5" role="tab">
                                            <i class="ri ri-notification-4-line"></i> Designation And Payscale
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-6" data-hs-tab="#profile-settings-6" aria-controls="profile-settings-6" role="tab">
                                            <i class="ri ri-notification-4-line"></i> Leaves
                                        </button>
                                        
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-9">
                                <div class="box">
                                    <div class="box-body p-0">
                                        <!-- Staff Information Start-->
                                        <div id="profile-settings-1" role="tabpanel" aria-labelledby="profile-settings-item-1">
                                            <div class="table-bordered ti-striped-table rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                <table id="attended" class="ti-custom-table ti-custom-table-head whitespace-nowrap mix-blend-overlay">
                                                    <tbody class="">
                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Staff Name</td>
                                                                <td><span><?php echo e($staff_view->fname . ' ' . $staff_view->mname . ' ' . $staff_view->lname); ?></span></td>
                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Employee Type</td>
                                                                <td><span><?php echo e($staff_view->latest_employee_type()->first()->employee_type); ?></span></td>

                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Email</td>
                                                                <td><span><?php echo e($staff_view->email); ?></span></td>
                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Religion</td>
                                                                <td>
                                                                    <?php if($staff_view->religion): ?>
                                                                        <span><?php echo e($staff_view->religion->religion_name); ?></span>
                                                                    <?php else: ?>
                                                                        <span>--NA--</span>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>

                                                             <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Caste Category</td>
                                                                
                                                                <td>
                                                                    <?php if($staff_view->caste): ?>
                                                                        <span><?php echo e($staff_view->caste->caste_name); ?></span>
                                                                    <?php else: ?>
                                                                        <span>--NA--</span>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>                

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Date Of Birth</td>
                                                                <td><span><?php echo e(\Carbon\Carbon::parse($staff_view->dob)->format('d-M-Y')); ?></span></td>

                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Date Of Joining</td>
                                                                <td><span><?php echo e(\Carbon\Carbon::parse($staff_view->doj)->format('d-M-Y')); ?></span></td>

                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Date Of Superannuation</td>
                                                                <td><span><?php echo e(\Carbon\Carbon::parse($staff_view->date_of_superanuation)->format('d-M-Y')); ?></span></td>

                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Date Of Confirmation</td>
                                                                <td><span><?php echo e(\Carbon\Carbon::parse($staff_view->date_of_confirmation)->format('d-M-Y')); ?></span></td>

                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Date Of Increment</td>
                                                                <td><span><?php echo e(\Carbon\Carbon::parse($staff_view->date_of_increment)->format('d-M-Y')); ?></span></td>

                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Blood Group</td>
                                                                <td><span><?php echo e($staff_view->bloodgroup); ?></span></td>
                                                            </tr>

                                                             <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Pancard No</td>
                                                                <td>
                                                                    <?php if($staff_view->pan_card): ?>
                                                                        <span><?php echo e($staff_view->pan_card); ?></span>
                                                                    <?php else: ?>
                                                                        <span>--NA--</span>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Adharcard No</td>
                                                                <td>
                                                                    <?php if($staff_view->adhar_card): ?>
                                                                        <span><?php echo e($staff_view->adhar_card); ?></span>
                                                                    <?php else: ?>
                                                                        <span>--NA--</span>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Contact No</td>
                                                                <td>
                                                                    <?php if($staff_view->contactno): ?>
                                                                        <span><?php echo e($staff_view->contactno); ?></span>
                                                                    <?php else: ?>
                                                                        <span>--NA--</span>
                                                                    <?php endif; ?>
                                                                </td>

                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">AICTE ID</td>
                                                                <td>
                                                                    <?php if($staff_view->aicte_id): ?>
                                                                        <span><?php echo e($staff_view->aicte_id); ?></span>
                                                                    <?php else: ?>
                                                                        <span>--NA--</span>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">VTU ID</td>
                                                                 <td>
                                                                    <?php if($staff_view->vtu_id): ?>
                                                                        <span><?php echo e($staff_view->vtu_id); ?></span>
                                                                    <?php else: ?>
                                                                        <span>--NA--</span>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>        

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Local Address</td>
                                                                <td><span><?php echo e($staff_view->local_address); ?></span></td>
                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Permanent Address</td>
                                                                <td><span><?php echo e($staff_view->permanent_address); ?></span></td>
                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Emergency No</td>
                                                                <td>
                                                                    <?php if($staff_view->emergency_no): ?>
                                                                        <span><?php echo e($staff_view->emergency_no); ?></span>
                                                                    <?php else: ?>
                                                                        <span>--NA--</span>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Emergency Name</td>
                                                                <td>
                                                                    <?php if($staff_view->emergency_name): ?>
                                                                        <span><?php echo e($staff_view->emergency_name); ?></span>
                                                                    <?php else: ?>
                                                                        <span>--NA--</span>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Staff Information Ends-->

                                        <!-- Qualification Start-->
                                        <div id="profile-settings-2" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-2">
                                            <div class="table-bordered ti-striped-table rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                <table id="attended" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                    <thead class="bg-gray-50 dark:bg-black/20">
                                                    <tr class="">
                                                        <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Qualification Name</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Board/University</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Year Of Passing</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Grade</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $i=1;
                                                        ?>
                                                        <tr class="">
                                                            <td><span><?php echo e($i++); ?></span></td>
                                                            <td><span><?php echo e($staff_view->qual_name); ?></span></td>
                                                            <td><span><?php echo e($staff_view->board_university); ?></span></td>
                                                            <td><span><?php echo e($staff_view->yop); ?></span></td>
                                                            
                                                            <td><span><?php echo e($staff_view->grade); ?></span></td>
                                                            <td><span><?php echo e($staff_view->status); ?></span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>  
                                            </div>
                                        </div>
                                        <!-- Qualification Ends-->

                                        <!-- Department Start-->
                                        <div id="profile-settings-3" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-3">
                                            <div class="table-bordered ti-striped-table rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                <table id="attended" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                    <thead class="bg-gray-50 dark:bg-black/20">
                                                    <tr class="">
                                                        <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Department Name</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Start Date</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">End Date</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Duration</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $i=1;
                                                        ?>
                                                            <tr class="">
                                                                <td><span><?php echo e($i++); ?></span></td>
                                                                 <td><span>
                                                                    <?php $__currentLoopData = $staff_view->departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st_dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if($st_dept->pivot->status=='active'): ?>
                                                                            <?php echo e($st_dept->dept_name); ?>

                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </span></td>
                                                                <td><span><?php echo e(\Carbon\Carbon::parse($st_dept->pivot->start_date)->format('d-M-Y')); ?></span></td>
                                                                <td><span><?php echo e($st_dept->pivot->end_date==null?'--NA--':\Carbon\Carbon::parse($st_dept->pivot->end_date)->format('d-M-Y')); ?></span></td>
                                                                <td><span>
                                                                    <?php
                                                                        $sdate=new DateTime($st_dept->pivot->start_date);
                                                                
                                                                        if ($st_dept->pivot->end_date!=null)
                                                                            $edate=new DateTime($st_dept->pivot->end_date);
                                                                        else
                                                                            $edate=Carbon\Carbon::now();
                                                                            $difference=$sdate->diff($edate);
                                                                        ?>    
                                                                
                                                                        <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>

                                                                </span></td>
                                                                <td><span><?php echo e($st_dept->pivot->status); ?></span></td>
                                                            </tr>
                                                    </tbody>
                                                </table>  
                                            </div>
                                       
                                        </div>
                                        <!-- Department Ends-->

                                        <!-- Asociation Start-->
                                        <div id="profile-settings-4" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-4">
                                             <div class="table-bordered ti-striped-table rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                <table id="attended" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                    <thead class="bg-gray-50 dark:bg-black/20">
                                                    <tr class="">
                                                        <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">association</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Start Date</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">TENURE END DATE</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">End Date</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Duration</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $i=1;
                                                        ?>
                                                        <tr class="">
                                                            <td><span><?php echo e($i++); ?></span></td>
                                                            <td><span>
                                                                <?php $__currentLoopData = $staff_view->associations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st_asso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($st_asso->pivot->status=='active'): ?>
                                                                        <?php echo e($st_asso->asso_name); ?>

                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </span></td>
                                                            <td><span><?php echo e(\Carbon\Carbon::parse($st_asso->pivot->start_date)->format('d-M-Y')); ?></span></td>
                                                            <td><span class="text-red-500"><?php echo e($st_asso->pivot->closing_date==null?'--NA--':\Carbon\Carbon::parse($st_asso->pivot->closing_date)->format('d-M-Y')); ?></span></td>
                                                            <td><span><?php echo e($st_asso->pivot->end_date==null?'--NA--': \Carbon\Carbon::parse($st_asso->pivot->end_date)->format('d-M-Y')); ?></span></td>
                                                            <td><span>
                                                                <?php
                                                                        $sdate=new DateTime($st_asso->pivot->start_date);
                                                                
                                                                    
                                                                if($st_asso->pivot->end_date!=null)
                                                                        $edate=new DateTime($st_asso->pivot->end_date);
                                                                else
                                                                        $edate=Carbon\Carbon::now();
                                                                
                                                                
                                                                $difference=$sdate->diff($edate);
                                                                ?>    
                                                                
                                                                    <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>

                                                            </span></td>
                                                            <td><span><?php echo e($st_asso->pivot->status); ?></span></td>

                                                        </tr>
                                                    </tbody>
                                                </table>  
                                            </div>
                                       
                                        </div>
                                        <!-- Asociation Ends-->


                                        <!--Designation And Payscale Start-->
                                        <div id="profile-settings-5" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-5">
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-body">
                                                    <div class="box-header">
                                                        <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i>Designation And Payscale Details</h5>
                                                    </div>
                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                            <tr class="">
                                                                <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Designation Name</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Start Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">End Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Duration</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Payscale Title</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Start Date </th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">End Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Duration</th>
                                                           
                            
                                                            </tr>
                                                            </thead>
                                                            <?php
                                                                $i=1;
                                                            ?>
                                                            <tbody class="">
                                                                <?php $__currentLoopData = $staff_view->designations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $designation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($designation->isadditional == 0 ): ?> <!--For working with regular designations-->
                                                                        <?php
                                                                        $rowcount=0;
                                                                            if($staff_view->employee_type=="Teaching" )
                                                                            {
                                                                                if($staff_view->teaching_payscale !=null){
                                                                                    foreach($staff_view->teaching_payscale as $tp)
                                                                                    {
                                                                                        if($designation->pivot->end_date==null && $tp->pivot->start_date>=$designation->pivot->start_date)
                                                                                        {    
                                                                                            $rowcount++;
                                                                                            
                                                                                        }
                                                                                        elseif($tp->pivot->start_date>=$designation->pivot->start_date && $tp->pivot->end_date<=$designation->pivot->end_date && $tp->pivot->end_date!=null)
                                                                                        {
                                                                                            $rowcount++;
                                                                                        
                                                                                        }
                                                                                    }
                                                                                }
                                                                            //  $rowcount++;
                                                                                if($staff_view->consolidated_teaching_pay !=null){
                                                                                    foreach($staff_view->consolidated_teaching_pay as $ctp){
                                                                                        if($designation->pivot->end_date==null && $ctp->start_date>=$designation->pivot->start_date)
                                                                                        {
                                                                                            $rowcount++;
                                                                                        }
                                                                                        elseif($ctp->start_date>=$designation->pivot->start_date && $ctp->end_date<=$designation->pivot->end_date && $ctp->end_date!=null)
                                                                                        {
                                                                                            $rowcount++;
                                                                                        
                                                                                        }
                                                                                    }
                                                                                }
                                                                                
                                                                                $rowcount++;
                                                                            }
                                                                            
                                                                        ?>

                                                                        <tr class="<?php echo e($designation->pivot->status =='inactive'?'bg-gray-200':''); ?>">
                                                                            <td rowspan=<?php echo e($rowcount); ?>><?php echo e($i++); ?>  </td>
                                                                            <td rowspan=<?php echo e($rowcount); ?>>
                                                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                                                    <div class="block w-full my-auto">
                                                                                    <?php echo e($designation->design_name); ?>

                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td rowspan=<?php echo e($rowcount); ?>><span><?php echo e(\Carbon\Carbon::parse($designation->pivot->start_date)->format('d-M-Y')); ?></span></td>
                                                                            <td rowspan=<?php echo e($rowcount); ?>><span><?php echo e($designation->pivot->end_date==null?'--NA--': \Carbon\Carbon::parse($designation->pivot->end_date)->format('d-M-Y')); ?></span></td>
                                                                            <td rowspan=<?php echo e($rowcount); ?>><span>
                                                                                <?php
                                                                                    $sdate=new DateTime($designation->pivot->start_date);
                                                                            
                                                                                    if ($designation->pivot->end_date!=null)
                                                                                        $edate=new DateTime($designation->pivot->end_date);
                                                                                    else
                                                                                        $edate=Carbon\Carbon::now();
                                                                                        $difference=$sdate->diff($edate);
                                                                                    ?>    
                                                                        
                                                                                        <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>

                                                                            </span>
                                                                            </td>
                                                                        </tr>

                                                                        <!-- Payscale and Designation Display for Teaching-->
                                                                        <?php if($staff_view->employee_type=='Teaching'): ?>
                                                                            
                                                                            <?php if($staff_view->teaching_payscale != null): ?> <!-- For checking if teaching payscale is null-->
                                                                                
                                                                                <?php $__empty_1 = true; $__currentLoopData = $staff_view->teaching_payscale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payscale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if($designation->pivot->end_date!=null && $designation->isadditonal==0): ?>
                                                                                        <?php if($payscale->pivot->start_date>=$designation->pivot->start_date && $payscale->pivot->end_date!=null && $payscale->pivot->end_date<=$designation->pivot->end_date): ?>
                                                                                            <tr class="<?php echo e($payscale->pivot->status =='inactive'?'bg-gray-200':''); ?>">
                                                                                                    
                                                                                                <td><span><?php echo e($payscale->payscale_title.'-'.$payscale->agp); ?></span></td>
                                                                                                <td><span><?php echo e(\Carbon\Carbon::parse($payscale->pivot->start_date)->format('d-M-Y')); ?></span></td>
                                                                                                <td><span><?php echo e($payscale->pivot->end_date ==null ?'--NA--': \Carbon\Carbon::parse($payscale->pivot->end_date)->format('d-M-Y')); ?></span></td>
                                                                                                <td><span>
                                                                                                    <?php
                                                                                                        $sdate=new DateTime($payscale->pivot->start_date);
                                                                                    
                                                                                                        if ($payscale->pivot->end_date!=null)
                                                                                                            $edate=new DateTime($payscale->pivot->end_date);
                                                                                                        else
                                                                                                            $edate=Carbon\Carbon::now();
                                                                                                            $difference=$sdate->diff($edate);
                                                                                                    ?>    
                                                                                
                                                                                                    <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>


                                                                                                </span></td>
                                                                                            </tr>    
                                                                                        <?php endif; ?>
                                                                                    <?php else: ?>
                                                                                        <?php if($payscale->pivot->end_date==null|| ($payscale->pivot->end_date>$designation->pivot->start_date )): ?>
                                                                                            <tr class="<?php echo e($payscale->pivot->status =='inactive'?'bg-gray-200':''); ?>"> 
                                                                                                            
                                                                                                <td><span><?php echo e($payscale->payscale_title.'-'.$payscale->agp); ?></span></td>
                                                                                                <td><span><?php echo e(\Carbon\Carbon::parse($payscale->pivot->start_date)->format('d-M-Y')); ?></span></td>
                                                                                                <td><span><?php echo e(($payscale->pivot->end_date ==null ?'--NA--':\Carbon\Carbon::parse($payscale->pivot->end_date)->format('d-M-Y'))); ?></span></td>
                                                                                                <td><span>
                                                                                                    <?php
                                                                                                        $sdate=new DateTime($payscale->pivot->start_date);
                                                                            
                                                                                                        if ($payscale->pivot->end_date!=null)
                                                                                                            $edate=new DateTime($payscale->pivot->end_date);
                                                                                                        else
                                                                                                                        $edate=Carbon\Carbon::now();
                                                                                                                        $difference=$sdate->diff($edate);
                                                                                                                    ?>    
                                                                        
                                                                                                                    <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>


                                                                                                </span></td>
                                                                                            
                                                                                            </tr>   
                                                                                        <?php endif; ?>
                                                                                        
                                                                                                
                                                                                    <?php endif; ?>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                                                                <?php endif; ?>
                                                                            <?php endif; ?> 
                                                                        <!-- For displaying the consolidated payscales for teaching staff.-->
                                                                        <?php if($staff_view->consolidated_teaching_pay != null): ?>
                                                                                <?php $__empty_1 = true; $__currentLoopData = $staff_view->consolidated_teaching_pay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cons_teaching_pay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                    <?php if($designation->pivot->end_date!=null && $designation->isadditonal==0): ?>
                                                                                        <?php if($cons_teaching_pay->start_date>=$designation->pivot->start_date && $cons_teaching_pay->end_date!=null && $cons_teaching_pay->end_date<=$designation->pivot->end_date): ?>
                                                                                            <tr class="<?php echo e($cons_teaching_pay->status =='inactive'?'bg-gray-200':''); ?>">
                                                                                                
                                                                                                <td><span><?php echo e($cons_teaching_pay->pay); ?></span></td>
                                                                                                <td><span><?php echo e(\Carbon\Carbon::parse($cons_teaching_pay->start_date)->format('d-M-Y')); ?></span></td>
                                                                                                <td><span><?php echo e($cons_teaching_pay->end_date ==null ?'--NA--': \Carbon\Carbon::parse($cons_teaching_pay->end_date)->format('d-M-Y')); ?></span></td>
                                                                                                <td><span>
                                                                                                        <?php
                                                                                                            $sdate=new DateTime($cons_teaching_pay->start_date);
                                                                                
                                                                                                            if ($cons_teaching_pay->end_date!=null)
                                                                                                                $edate=new DateTime($cons_teaching_pay->end_date);
                                                                                                            else
                                                                                                                $edate=Carbon\Carbon::now();
                                                                                                                $difference=$sdate->diff($edate);
                                                                                                            ?>    
                                                                            
                                                                                                            <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>


                                                                                                </span></td>
                                                                                                <td><!--Action button not added.--></td>
                                                                                            </tr>
                                                                                        <?php endif; ?>  
                                                                                    <?php else: ?>
                                                                                        <?php if($cons_teaching_pay->end_date==null|| ($cons_teaching_pay->end_date>$designation->pivot->start_date)): ?>
                                                                                            <tr class="<?php echo e($cons_teaching_pay->status =='inactive'?'bg-gray-200':''); ?>"> 
                                                                                                        
                                                                                                    <td><span><?php echo e($cons_teaching_pay->pay); ?></span></td>
                                                                                                    <td><span><?php echo e(\Carbon\Carbon::parse($cons_teaching_pay->start_date)->format('d-M-Y')); ?></span></td>
                                                                                                    <td><span><?php echo e(($cons_teaching_pay->end_date ==null ?'--NA--':\Carbon\Carbon::parse($cons_teaching_pay->end_date)->format('d-M-Y'))); ?></span></td>
                                                                                                    <td><span>
                                                                                                        <?php
                                                                                                            $sdate=new DateTime($cons_teaching_pay->start_date);
                                                                        
                                                                                                                if ($cons_teaching_pay->end_date!=null)
                                                                                                                    $edate=new DateTime($cons_teaching_pay->end_date);
                                                                                                                else
                                                                                                                    $edate=Carbon\Carbon::now();
                                                                                                                    $difference=$sdate->diff($edate);
                                                                                                                ?>    
                                                                    
                                                                                                                <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>


                                                                                                    </span></td>
                                                                                            </tr>   
                                                                                            <?php endif; ?>
                                                                                    
                                                                                            
                                                                                    <?php endif; ?> 
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                
                                                                                <?php endif; ?>
                                                                            <?php endif; ?>
                                                                            <!-- End of Teaching consolidated payscale -->
                                                                        </tr>  
                                                                        <!-- Teaching section designation and payscale ends here-->
                                                                    <?php else: ?>
                                                                    <!--Non teaching Section starts here-->
                                                                    
                                                                            <?php if($staff_view->ntpayscale != null): ?>
                                                                                    <?php $__currentLoopData = $staff_view->ntpayscale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ntpays): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <tr class="<?php echo e($ntpays->pivot->status =='inactive'?'bg-gray-200':''); ?>">
                                                                                            
                                                                                            <td>  
                                                                                                <?php
                                                                                                    $level1_payscales =  explode("-",$ntpays->payband)
                                                                                                ?> 
                                                                                                <?php if($ntpays->pivot->level == 1): ?>
                                                                                                    
                                                                                                    <?php echo e($level1_payscales[0].'-'.$level1_payscales[1].'-'.$level1_payscales[2]); ?>

                                                                                                
                                                                                                <?php elseif($ntpays->pivot->level == 2): ?>
                                                                                                
                                                                                                    <?php echo e($level1_payscales[2].'-'.$level1_payscales[3].'-'.$level1_payscales[4]); ?>

                                                                                                    
                                                                                                <?php else: ?>
                                                                                                        
                                                                                                    <?php echo e($level1_payscales[4].'-'.$level1_payscales[5].'-'.$level1_payscales[6]); ?>

                                                                                                
                                                                                                <?php endif; ?>
                                                                                            </td>
                                                                                            <td><?php echo e(\Carbon\Carbon::parse($ntpays->pivot->start_date)->format('d-M-Y')); ?></td>
                                                                                            <td><?php echo e(($ntpays->pivot->end_date == null ? '--NA--': \Carbon\Carbon::parse($ntpays->pivot->end_date)->format('d-M-Y') )); ?></td>
                                                                                            <td>
                                                                                            <?php
                                                                                                        $sdate=new DateTime($ntpays->pivot->start_date);
                                                                            
                                                                                                        if ($ntpays->pivot->end_date!=null)
                                                                                                            $edate=new DateTime($ntpays->pivot->end_date);
                                                                                                        else
                                                                                                            $edate=Carbon\Carbon::now();
                                                                                                            $difference=$sdate->diff($edate);
                                                                                                        ?>    
                                                                        
                                                                                                        <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>

                                                                                            </td>
                                                                                        </tr>
                                                                                    
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php endif; ?>
                                                                                <!--End of non teaching designation and poayscale section-->
                                                                                    <!--For non-teaching Consolidated payscale-->
                                                                                <?php if($staff_view->ntcpayscale !=null): ?>
                                                                                    <?php $__currentLoopData = $staff_view->ntcpayscale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ntcpays): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <tr class="<?php echo e($ntcpays->pivot->status =='inactive'?'bg-gray-200':''); ?>">
                                                                                        <td>  
                                                                                            <?php echo e($ntcpays->basepay.'-'.$ntcpays->allowance.'-'.$ntcpays->year.' Year'); ?>

                                                                                        </td>
                                                                                        <td><?php echo e(\Carbon\Carbon::parse($ntcpays->pivot->start_date)->format('d-M-Y')); ?></td>
                                                                                        <td><?php echo e($ntcpays->pivot->end_date == null? '--NA--': \Carbon\Carbon::parse($ntcpays->pivot->end_date)->format('d-M-Y')); ?></td>
                                                                                        <td>
                                                                                            <?php
                                                                                                $sdate=new DateTime($ntcpays->pivot->start_date);
                                                                    
                                                                                                if ($ntcpays->pivot->end_date!=null)
                                                                                                    $edate=new DateTime($ntcpays->pivot->end_date);
                                                                                                else
                                                                                                    $edate=Carbon\Carbon::now();
                                                                                                    $difference=$sdate->diff($edate);
                                                                                            ?>    
                                                                            
                                                                                            <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>


                                                                                        </td>
                                                                                        
                                                                                    </tr>
                                                                                    
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php endif; ?>
                                                                                <!--Non Teaching fixed salary section-->
                                                                                <?php if($staff_view->fixed_nt_pay !=null): ?>
                                                                                        <?php $__empty_1 = true; $__currentLoopData = $staff_view->fixed_nt_pay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fntp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                                        <tr class="<?php echo e($fntp->status =='inactive'?'bg-gray-200':''); ?>">
                                                                                            <td>  
                                                                                                <?php echo e($fntp->pay); ?>

                                                                                            </td>
                                                                                            <td><?php echo e(\Carbon\Carbon::parse($fntp->start_date)->format('d-M-Y')); ?></td>
                                                                                            <td><?php echo e($fntp->end_date == null? '--NA--': \Carbon\Carbon::parse($fntp->end_date)->format('d-M-Y')); ?></td>
                                                                                            <td>
                                                                                                <?php
                                                                                                    $sdate=new DateTime($fntp->start_date);
                                                                        
                                                                                                    if ($fntp->end_date!=null)
                                                                                                        $edate=new DateTime($fntp->end_date);
                                                                                                    else
                                                                                                        $edate=Carbon\Carbon::now();
                                                                                                        $difference=$sdate->diff($edate);
                                                                                                ?>    
                                                                                
                                                                                                                <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>


                                                                                            </td>
                                                                                        </tr>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                            
                                                                                        <?php endif; ?>
                                                                                    
                                                                                <?php endif; ?>

                                                                            <!--End of non-teaching fixed pay (if)-->
                                                                            
                                                                        <?php endif; ?>  
                                                                <?php endif; ?> <!--end if for addiotional designation checking--> 
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                            </tbody>
                                                        </table>  
                                                    </div>   
                                                </div>
                                            </div>
                                            <!--Additional Designation start-->
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-body">
                                                    <div class="box-header">
                                                        <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i>Additional Designation</h5>
                                                    </div>
                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                            <tr class="">
                                                                <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Additional Designation</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Department</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Start Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">End Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Duration</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Gcr</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Status</th>
                                                            </tr>
                                                            </thead>
                                                            <?php
                                                                $i=1;
                                                            ?>
                                                            <tbody class="">
                                                                <?php $__currentLoopData = $staff_view->designations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($desig->isadditional==1): ?>
                                                                        <?php $__currentLoopData = $staff_view->departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    
                                                                            <?php if($department->id==$desig->pivot->dept_id): ?>
                                                                                <?php
                                                                                    $dept=$department->dept_name;
                                                                                    break;
                                                                                ?>
                                                                    
                                                                            <?php endif; ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <tr class="<?php echo e($desig->pivot->status =='inactive'?'bg-gray-200':''); ?>">
                                                                            <td><?php echo e($i++); ?></td>
                                                                            <td><?php echo e($desig->design_name); ?></td>
                                                                            <td><?php echo e($desig->pivot->dept_id==null?'---NA---':$dept); ?></td>
                                                                            <td><?php echo e(\Carbon\Carbon::parse($desig->pivot->start_date)->format('d-M-Y')); ?></td>
                                                                            <td><?php echo e($desig->pivot->end_date==null?'--NA--':\Carbon\Carbon::parse($desig->pivot->end_date)->format('d-M-Y')); ?></td>
                                                                            <td><span>
                                                                                <?php
                                                                                    $sdate=new DateTime($desig->pivot->start_date);
                                                                            
                                                                                    if ($desig->pivot->end_date!=null)
                                                                                        $edate=new DateTime($desig->pivot->end_date);
                                                                                    else
                                                                                        $edate=Carbon\Carbon::now();
                                                                                        $difference=$sdate->diff($edate);
                                                                                ?> 
                                                                                <?php echo e($difference->y."years ".$difference->m."months ".$difference->d."days"); ?>

                                                                            </span></td>


                                                                            <td><?php echo e($desig->pivot->gcr); ?></td>
                                                                            <td><?php echo e($desig->status); ?></td>
                                                                        </tr>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </tbody>
                                                        </table>  
                                                    </div>   
                                                </div>
                                            </div>
                                            <!--Additional Designation Ends-->
                                        </div>
                                        <!--Designation And Payscale Ends-->

                                        <!-- Leaves Start-->
                                        <div id="profile-settings-6" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-6">
                                       
                                        </div>
                                        <!-- Leaves End-->
                                        
                                    </div>
                               
                                </div>
                            </div>
                        </div>
                        <!-- End::row-1 -->

                    </div>
                    <!-- Start::main-content -->

                </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

        <!-- FLATPICKR JS -->
        <script src="<?php echo e(asset('build/assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>

        <!-- CHOICES JS -->
        <script src="<?php echo e(asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')); ?>"></script>

        <!-- FORM-LAYOUT JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/profile-settings.js'); ?>
        

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.components.HOD.master-hod', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views/HOD/hodview.blade.php ENDPATH**/ ?>