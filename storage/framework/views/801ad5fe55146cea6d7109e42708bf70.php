

<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">Welcome <span class="text-primary"><?php echo e($staff->fname.' '.$staff->mname.' '.$staff->lname); ?></h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        My Dashboard
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                            
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                    <div class="box-body">
                                        <div class="flex">
                                        <div class="ltr:mr-3 rtl:ml-3">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 "><i
                                                class="ti ti-users text-2xl leading-none"></i></div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm"></p>
                                            <div class="flex justify-between items-center">
                                            <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white"></h5>
                                            <span class="text-success badge bg-success/20 rounded-sm p-1"><i
                                                class="ti ti-trending-up leading-none"></i> +1.03%</span>
                                            </div>
                                            
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                    <div class="box-body">
                                        <div class="flex">
                                        <div class="ltr:mr-3 rtl:ml-3">
                                            <div class="avatar rounded-sm text-secondary p-2.5 bg-secondary/20"><i
                                                class="ti ti-users-minus text-2xl leading-none"></i></div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">Department</p>
                                            <div class="flex justify-between items-center">
                                            <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white"><?php echo e($dept); ?></h5>
                                           
                                            </div>
                                            <a class="flex  items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="<?php echo e(route('Non-Teaching.departments')); ?>">
                                                 view
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                    <div class="box-body">
                                        <div class="flex">
                                        <div class="ltr:mr-3 rtl:ml-3">
                                            <div class="avatar rounded-sm text-warning p-2.5 bg-warning/20 "><i
                                                class="ti ti-briefcase text-2xl leading-none"></i></div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">Association</p>
                                            <div class="flex justify-between items-center">
                                                <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white"></h5>
                                            </div>
                                            <a class="flex  items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="<?php echo e(route('Non-Teaching.associations')); ?>">
                                                 view
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                    <div class="box-body">
                                        <div class="flex">
                                        <div class="ltr:mr-3 rtl:ml-3">
                                            <div class="avatar rounded-sm text-success p-2.5 bg-success/20 "><i
                                                class="ti ti-chart-bar text-2xl leading-none"></i></div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">Leaves</p>
                                            <div class="flex justify-between items-center">
                                            <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white">5</h5>
                                            <span class="text-success badge bg-success/20 rounded-sm p-1"><i
                                                class="ti ti-trending-down leading-none"></i>+4.25%</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 xxl:col-span-6">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="sm:flex justify-between sm:space-y-0 space-y-2">
                                            <h5 class="box-title my-auto">Overview</h5>
                                            <div class="inline-flex rounded-md shadow-sm">
                                                <button type="button" class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                                1D
                                                </button>
                                                <button type="button" class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                                1W
                                                </button>
                                                <button type="button" class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                                1M
                                                </button>
                                                <button type="button" class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                                3M
                                                </button>
                                                <button type="button" class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-soft-primary">
                                                6M
                                                </button>
                                                <button type="button" class="ti-btn-group text-xs !border-0 py-2 px-3 ti-btn-primary">
                                                1Y
                                                </button>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div id="performanceReport"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--Event Information-->
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div  class="box" style="height: 450px; overflow-y: auto;">
                                    <div class="box-header justify-between flex">
                                        <div class="box-title my-auto">
                                        Upcoming Events
                                        </div>
                                        <div>
                                            <button type="button" aria-label="button" class="ti-btn ti-btn-soft-primary ltr:mr-2 rtl:ml-2 py-1 m-0">View All</button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="overflow-x-auto">
                                            <ul class="list-unstyled timeline-widget mb-0">
                                                <?php $__currentLoopData = $departmentevent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="ti-list-group border-0 p-0 w-full timeline-widget-list">
                                                        <div class="flex w-full">
                                                            <div class="ltr:mr-12 rtl:ml-12 text-center">
                                                                <span class="block text-sm font-semibold"><?php echo e(\Carbon\Carbon::parse($event->start_date)->format('d M')); ?></span>
                                                                
                                                            </div>
                                                            <div class="flex flex-wrap flex-auto items-center justify-between w-full">
                                                                <div class="flex-1">
                                                                    <a href="javascript:void(0);">
                                                                        <p class="mb-1 timeline-widget-content text-sm text-wrap !max-w-[15rem] font-semibold"><?php echo e($event->event_name); ?></p>
                                                                        <p class="mb-0 text-xs leading-none text-gray-500 dark:text-white/70"><?php echo e(\Carbon\Carbon::parse($event->start_date)->format('h:i A')); ?><span
                                                                                class="badge bg-primary/10 ltr:ml-2 rtl:mr-2 py-1 text-xs text-primary rounded-sm"><?php echo e($event->organizers); ?></span>
                                                                                <br>
                                                                                
                                                                        </p>
                                                                    </a>
                                                                </div>
                                                                <div class="hs-dropdown ti-dropdown">
                                                                    <a aria-label="anchor" href="javascript:void(0);" class="text-lg leading-none text-gray-500">
                                                                        <i class="ri-more-2-line"></i>
                                                                    </a>
                                                                    <div class="hs-dropdown-menu ti-dropdown-menu hidden">
                                                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                            Action
                                                                        </a>
                                                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                            Another action
                                                                        </a>
                                                                        <a class="ti-dropdown-item" href="javascript:void(0);">
                                                                            Something else here
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!---->
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box" style="height: 450px; overflow-y: auto;">
                                        <div class="box-header justify-between flex">
                                            <div class="box-title my-auto">
                                            Notice Board
                                            </div>
                                            <div>
                                                <a class="flex  items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="<?php echo e(route('HOD.notice.index')); ?>">
                                                    View All
                                                </a>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <ul class="list-unstyled mb-0">
                                            <?php $__currentLoopData = $departmentnotice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="ti-list-group mb-6 border-0 p-0 w-full">
                                                    <div class="flex border-0">
                                                        <div class="ltr:mr-3 rtl:ml-3">
                                                            <div class="calendar-icon icons">
                                                            <div class="avatar bg-primary/20 text-primary text-sm rounded-sm text-center p-1.5 leading-none">
                                                                <span class="block mb-1"><?php echo e(\Carbon\Carbon::parse($dn->date)->format('d M')); ?></span>
                                                                
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="ltr:ml-1 rtl:mr-1 my-auto">
                                                            <div class="font-semibold text-sm text-gray-800 dark:text-white"><?php echo e($dn->title); ?></div> 
                                                            <small class="text-xs font-normal text-gray-500 dark:text-white/70"><?php echo e($dn->description); ?>...</small>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                           <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex">
                                                <div class="ltr:mr-3 rtl:ml-3">
                                                    <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 ">
                                                        <i class="ti ti-users text-2xl leading-none"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-1">
                                                    <p class="text-sm font-bold">Professional Activity </p>
                                                    <div class="flex justify-between items-center">
                                                        <div class="flex flex-col">
                                                            <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white"><?php echo e($ntactivityattendedCount); ?></h5>
                                                            <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="<?php echo e(route('Non-Teaching.professionalactivities')); ?>">
                                                             Attended
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                        <div class="box-body">
                                            <div class="flex">
                                                <div class="ltr:mr-3 rtl:ml-3">
                                                    <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 ">
                                                        <i class="ti ti-users text-2xl leading-none"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-1">
                                                    <p class="text-sm font-bold">Professional Activity </p>
                                                    <div class="flex justify-between items-center">
                                                        <div class="flex flex-col">
                                                            <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white"><?php echo e($ntactivityconductedCount); ?></h5>
                                                            <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="<?php echo e(route('Non-Teaching.professionalactivities')); ?>">
                                                             Conducted
                                                            </a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                    <div class="box-body">
                                        <div class="flex">
                                        <div class="ltr:mr-3 rtl:ml-3">
                                            <div class="avatar rounded-sm text-success p-2.5 bg-success/20 "><i
                                                class="ti ti-chart-bar text-2xl leading-none"></i></div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold"></p>
                                            <div class="flex justify-between items-center">
                                            <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white"></h5>
                                           
                                            </div>
                                            <a class="flex  items-center font-semibold text-primary hover:text-primary dark:text-primary truncate">
                                                 
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                    <div class="box-body">
                                        <div class="flex">
                                        <div class="ltr:mr-3 rtl:ml-3">
                                            <div class="avatar rounded-sm text-success p-2.5 bg-success/20 "><i
                                                class="ti ti-chart-bar text-2xl leading-none"></i></div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold"></p>
                                            <div class="flex justify-between items-center">
                                            <h5 class="mb-0 text-2xl font-semibold text-gray-800 dark:text-white"></h5>
                                            
                                            </div>
                                            
                                                 
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                               
                            </div>
                            <!-- End::row-3 -->

                            <!-- Start::row-4 -->
                            <!--<div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 lg:col-span-5">
                                    <div class="box">
                                        <div class="box-header flex justify-between">
                                            <div class="box-title my-auto">
                                                Attendance
                                            </div>
                                            <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                <button type="button" class="ti-btn m-0 rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                                    View All</button>
                                            </div>
                                        </div>
                                        <div class="box-body p-0 attendance-table">
                                            <div class="overflow-auto">
                                                <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">S.no</th>
                                                            <th scope="col">Employee</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Checkin</th>
                                                            <th scope="col">Checkout</th>
                                                            <th scope="col">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="">
                                                        <td>1</td>
                                                        <td>
                                                            <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                            <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>" alt="Image Description">
                                                            <div class="block w-full my-auto">
                                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[130px] truncate">Alice Rex</span>
                                                                <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">Tester</span>
                                                            </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-success/10 text-success/80">Present</span></td>
                                                        <td>09:30 Am</td>
                                                        <td>06:30 Pm</td>
                                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                <i class="ti ti-phone"></i>
                                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                                Call
                                                                </span>
                                                            </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);" class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                <i class="ti ti-message-circle"></i>
                                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                                Chat
                                                                </span>
                                                            </a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        <tr class="">
                                                        <td>2</td>
                                                        <td>
                                                            <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                            <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/5.jpg')); ?>" alt="Image Description">
                                                            <div class="block w-full my-auto">
                                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[130px] truncate">Rehna Eni</span>
                                                                <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">UI/UX Designer
                                                                </span>
                                                            </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-success/10 text-success/80">Present</span></td>
                                                        <td>09:45 Am</td>
                                                        <td>06:50 Pm</td>
                                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                <i class="ti ti-phone"></i>
                                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                                Call
                                                                </span>
                                                            </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);" class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                <i class="ti ti-message-circle"></i>
                                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                                Chat
                                                                </span>
                                                            </a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        <tr class="">
                                                        <td>3</td>
                                                        <td>
                                                            <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                            <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>" alt="Image Description">
                                                            <div class="block w-full my-auto">
                                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[130px] truncate">
                                                                Bob Upt</span>
                                                                <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">Backend
                                                                </span>
                                                            </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-danger/10 text-danger/80">Absent</span></td>
                                                        <td>00:00 Am</td>
                                                        <td>00:00 Pm</td>
                                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                <i class="ti ti-phone"></i>
                                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                                Call
                                                                </span>
                                                            </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);" class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                <i class="ti ti-message-circle"></i>
                                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                                Chat
                                                                </span>
                                                            </a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        <tr class="">
                                                        <td>4</td>
                                                        <td>
                                                            <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                            <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>" alt="Image Description">
                                                            <div class="block w-full my-auto">
                                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[130px] truncate">Charlie Davieson</span>
                                                                <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">Team Lead
                                                                </span>
                                                            </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-success/10 text-success/80">Present</span></td>
                                                        <td>10:00 Am</td>
                                                        <td>07:00 Pm</td>
                                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                <i class="ti ti-phone"></i>
                                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                                Call
                                                                </span>
                                                            </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);" class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                <i class="ti ti-message-circle"></i>
                                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                                Chat
                                                                </span>
                                                            </a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        <tr class="">
                                                        <td>5</td>
                                                        <td>
                                                            <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                            <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/21.jpg')); ?>" alt="Image Description">
                                                            <div class="block w-full my-auto">
                                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[130px] truncate">Suzika Stallone</span>
                                                                <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">UI Designer
                                                                </span>
                                                            </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-success/10 text-success/80">Present</span></td>
                                                        <td>09:30 Am</td>
                                                        <td>05:15 Pm</td>
                                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                <i class="ti ti-phone"></i>
                                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                                Call
                                                                </span>
                                                            </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);" class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                <i class="ti ti-message-circle"></i>
                                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                                Chat
                                                                </span>
                                                            </a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        <tr class="">
                                                        <td>6</td>
                                                        <td>
                                                            <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                            <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>" alt="Image Description">
                                                            <div class="block w-full my-auto">
                                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[130px] truncate">Mc Greggor</span>
                                                                <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">Java Developer
                                                                </span>
                                                            </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-danger/10 text-danger/80">Absent</span></td>
                                                        <td>00:00 Am</td>
                                                        <td>00:00 Pm</td>
                                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                <i class="ti ti-phone"></i>
                                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                                Call
                                                                </span>
                                                            </a>
                                                            </div>
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);" class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                <i class="ti ti-message-circle"></i>
                                                                <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                                Chat
                                                                </span>
                                                            </a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-7">
                                    <div class="box">
                                        <div class="box-header flex justify-between">
                                            <div class="box-title my-auto">
                                                Leave Request
                                            </div>
                                            <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                <button type="button" class="ti-btn m-0 rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                                    View All</button>
                                            </div>
                                        </div>
                                        <div class="box-body p-0">
                                            <div class="overflow-auto">
                                                <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Employee</th>
                                                            <th scope="col">Type</th>
                                                            <th scope="col">From</th>
                                                            <th scope="col">To</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="">
                                                        <td>
                                                            <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                            <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>" alt="Image Description">
                                                            <div class="block w-full my-auto">
                                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 max-w-[180px] truncate">Socrates Itumay</span>
                                                                <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">Team Lead</span>
                                                            </div>
                                                            </div>
                                                        </td>
                                                        <td>Sick Leave</td>
                                                        <td>05-04-2023</td>
                                                        <td>08-04-2023</td>
                                                        <td><span class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-success/10 text-success">Approved</span></td>
                                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                <i class="ti ti-eye"></i>
                                                                <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                            </div>
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
                                                            <a href="javascript:void(0);"
                                                                class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                <i class="ti ti-trash"></i>
                                                                <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Delete
                                                                </span>
                                                            </a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        <tr class="">
                                                        <td>
                                                            <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                            <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                            <div class="block w-full my-auto">
                                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 max-w-[180px] truncate">Samantha Paul</span>
                                                                <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">Sr.UI Developer</span>
                                                            </div>
                                                            </div>
                                                        </td>
                                                        <td>Casual Leave</td>
                                                        <td>20-04-2023</td>
                                                        <td>24-04-2023</td>
                                                        <td><span class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-warning/10 text-warning">Pending</span></td>
                                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                <i class="ti ti-eye"></i>
                                                                <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                            </div>
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
                                                            <a href="javascript:void(0);"
                                                                class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                <i class="ti ti-trash"></i>
                                                                <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Delete
                                                                </span>
                                                            </a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        <tr class="">
                                                        <td>
                                                            <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                            <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/14.jpg')); ?>" alt="Image Description">
                                                            <div class="block w-full my-auto">
                                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 max-w-[180px] truncate">Gray Noal</span>
                                                                <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">Java Developer</span>
                                                            </div>
                                                            </div>
                                                        </td>
                                                        <td>Paternity Leave</td>
                                                        <td>18-04-2023</td>
                                                        <td>24-04-2023</td>
                                                        <td><span class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-success/10 text-success">Approved</span></td>
                                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                <i class="ti ti-eye"></i>
                                                                <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                            </div>
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
                                                            <a href="javascript:void(0);"
                                                                class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                <i class="ti ti-trash"></i>
                                                                <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Delete
                                                                </span>
                                                            </a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        <tr class="">
                                                        <td>
                                                            <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                            <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/15.jpg')); ?>" alt="Image Description">
                                                            <div class="block w-full my-auto">
                                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 max-w-[180px] truncate">Gray Noal</span>
                                                                <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">React Developer</span>
                                                            </div>
                                                            </div>
                                                        </td>
                                                        <td>Personal Leave</td>
                                                        <td>05-04-2023</td>
                                                        <td>06-04-2023</td>
                                                        <td><span class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-danger/10 text-danger">Rejected</span></td>
                                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                <i class="ti ti-eye"></i>
                                                                <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                            </div>
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
                                                            <a href="javascript:void(0);"
                                                                class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                <i class="ti ti-trash"></i>
                                                                <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Delete
                                                                </span>
                                                            </a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        <tr class="">
                                                        <td>
                                                            <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                            <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>" alt="Image Description">
                                                            <div class="block w-full my-auto">
                                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 max-w-[180px] truncate">Emiley Jackson</span>
                                                                <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">Full Stack Developer</span>
                                                            </div>
                                                            </div>
                                                        </td>
                                                        <td>Maternity Leave</td>
                                                        <td>05-04-2023</td>
                                                        <td>06-06-2023</td>
                                                        <td><span class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-success/10 text-success">Approved</span></td>
                                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                <i class="ti ti-eye"></i>
                                                                <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                            </div>
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
                                                            <a href="javascript:void(0);"
                                                                class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                <i class="ti ti-trash"></i>
                                                                <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Delete
                                                                </span>
                                                            </a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        <tr class="">
                                                        <td>
                                                            <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                                            <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/16.jpg')); ?>" alt="Image Description">
                                                            <div class="block w-full my-auto">
                                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 max-w-[180px] truncate">Pope Johnson</span>
                                                                <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">Jr.Java Developer</span>
                                                            </div>
                                                            </div>
                                                        </td>
                                                        <td>Gifted Leave</td>
                                                        <td>06-04-2023</td>
                                                        <td>20-04-2023</td>
                                                        <td><span class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-warning/10 text-warning">Pending</span></td>
                                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                            <a href="javascript:void(0);"
                                                                class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                                <i class="ti ti-eye"></i>
                                                                <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                View
                                                                </span>
                                                            </a>
                                                            </div>
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
                                                            <a href="javascript:void(0);"
                                                                class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                <i class="ti ti-trash"></i>
                                                                <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Delete
                                                                </span>
                                                            </a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            <!-- End::row-4 -->

                            <!-- Start::row-5 -->
                            <!--<div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12">
                                    <div class="box">
                                    <div class="box-header">
                                        <div class="flex">
                                        <h5 class="box-title my-auto">Employee Salary Details</h5>
                                        <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
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
                                                <th scope="col" class="dark:text-white/80">Employee Details</th>
                                                <th scope="col" class="dark:text-white/80">Department</th>
                                                <th scope="col" class="dark:text-white/80">Designation</th>
                                                <th scope="col" class="dark:text-white/80">Salary</th>
                                                <th scope="col" class="dark:text-white/80">Leaves</th>
                                                <th scope="col" class="dark:text-white/80">Net Salary</th>
                                                <th scope="col" class="dark:text-white/80">Status</th>
                                                <th scope="col" class="dark:text-white/80">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody class="">
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                    <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/8.jpg')); ?>" alt="Image Description">
                                                    <div class="block w-full my-auto">
                                                    <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 max-w-[180px] truncate">Robert Steeve</span>
                                                    <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">robertsteeve112@demo.com</span>
                                                    </div>
                                                </div>
                                                </td>
                                                <td><span>Front End</span></td>
                                                <td><span>UI Designer</span></td>
                                                <td><span>$12,000</span></td>
                                                <td><span>2</span></td>
                                                <td><span>$11,890</span></td>
                                                <td><span class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-success/10 text-success">Paid</span></td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                    <i class="ti ti-eye"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        View
                                                    </span>
                                                    </a>
                                                </div>
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
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                    </a>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tx-center">2</td>
                                                <td>
                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                    <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>" alt="Image Description">
                                                    <div class="block w-full my-auto">
                                                    <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 max-w-[180px] truncate">Steeve Robert</span>
                                                    <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">steeverobert121@demo.com</span>
                                                    </div>
                                                </div>
                                                </td>
                                                <td><span>Front End</span></td>
                                                <td><span>UI Developer</span></td>
                                                <td><span>$15,000</span></td>
                                                <td><span>0</span></td>
                                                <td><span>$15,000</span></td>
                                                <td><span
                                                    class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-success/10 text-success">Paid</span>
                                                </td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                    <i class="ti ti-eye"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        View
                                                    </span>
                                                    </a>
                                                </div>
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
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                    </a>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tx-center">3</td>
                                                <td>
                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                    <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>" alt="Image Description">
                                                    <div class="block w-full my-auto">
                                                    <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 max-w-[180px] truncate">Mary Rose</span>
                                                    <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">marymary334@demo.com</span>
                                                    </div>
                                                </div>
                                                </td>
                                                <td><span>Back End</span></td>
                                                <td><span>PHP Developer</span></td>
                                                <td><span>$22,000</span></td>
                                                <td><span>1</span></td>
                                                <td><span>$21,890</span></td>
                                                <td><span
                                                    class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-warning/10 text-warning">pending</span>
                                                </td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                    <i class="ti ti-eye"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        View
                                                    </span>
                                                    </a>
                                                </div>
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
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                    </a>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tx-center">4</td>
                                                <td>
                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                    <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/21.jpg')); ?>" alt="Image Description">
                                                    <div class="block w-full my-auto">
                                                    <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 max-w-[180px] truncate">Stella Rose</span>
                                                    <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">stellarose258@demo.com</span>
                                                    </div>
                                                </div>
                                                </td>
                                                <td><span>Android</span></td>
                                                <td><span>Ionic Developer</span></td>
                                                <td><span>$21,500</span></td>
                                                <td><span>0</span></td>
                                                <td><span>$21,500</span></td>
                                                <td><span
                                                    class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-danger/10 text-danger">Technical
                                                    Issue</span></td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                    <i class="ti ti-eye"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        View
                                                    </span>
                                                    </a>
                                                </div>
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
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                    </a>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tx-center">5</td>
                                                <td>
                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                    <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/11.jpg')); ?>" alt="Image Description">
                                                    <div class="block w-full my-auto">
                                                    <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 max-w-[180px] truncate">John Abraham</span>
                                                    <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">abrahamjohn394@demo.com</span>
                                                    </div>
                                                </div>
                                                </td>
                                                <td><span>Front End</span></td>
                                                <td><span>UI Designer</span></td>
                                                <td><span>$12,000</span></td>
                                                <td><span>3</span></td>
                                                <td><span>$11,835</span></td>
                                                <td><span
                                                    class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-success/10 text-success">Paid</span>
                                                </td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                    <i class="ti ti-eye"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        View
                                                    </span>
                                                    </a>
                                                </div>
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
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                    </a>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tx-center">6</td>
                                                <td>
                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                    <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>" alt="Image Description">
                                                    <div class="block w-full my-auto">
                                                    <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 max-w-[180px] truncate">Richard Bose</span>
                                                    <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">richardrichi.1233@demo.com</span>
                                                    </div>
                                                </div>
                                                </td>
                                                <td><span>Front End</span></td>
                                                <td><span>UI Developer</span></td>
                                                <td><span>$12,000</span></td>
                                                <td><span>4</span></td>
                                                <td><span>$11,780</span></td>
                                                <td><span
                                                    class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-warning/10 text-warning">pending</span>
                                                </td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                    <i class="ti ti-eye"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        View
                                                    </span>
                                                    </a>
                                                </div>
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
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                    </a>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tx-center">7</td>
                                                <td>
                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                    <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/13.jpg')); ?>" alt="Image Description">
                                                    <div class="block w-full my-auto">
                                                    <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 max-w-[180px] truncate">Abagnale Mal</span>
                                                    <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">abgnalemal000@demo.com</span>
                                                    </div>
                                                </div>
                                                </td>
                                                <td><span>Back End</span></td>
                                                <td><span>Java Developer</span></td>
                                                <td><span>$25,000</span></td>
                                                <td><span>0</span></td>
                                                <td><span>$25,000</span></td>
                                                <td><span
                                                    class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-success/10 text-success">Paid</span>
                                                </td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                    <i class="ti ti-eye"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        View
                                                    </span>
                                                    </a>
                                                </div>
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
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                    </a>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tx-center">8</td>
                                                <td>
                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                    <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/5.jpg')); ?>" alt="Image Description">
                                                    <div class="block w-full my-auto">
                                                    <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 max-w-[180px] truncate">Rose Mary</span>
                                                    <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">rosemary434@demo.com</span>
                                                    </div>
                                                </div>
                                                </td>
                                                <td><span>Back End</span></td>
                                                <td><span>PHP Developer</span></td>
                                                <td><span>$22,000</span></td>
                                                <td><span>0</span></td>
                                                <td><span>$22,000</span></td>
                                                <td><span
                                                    class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-danger/10 text-danger">Technical
                                                    Issue</span></td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                    <i class="ti ti-eye"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        View
                                                    </span>
                                                    </a>
                                                </div>
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
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                    </a>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tx-center">9</td>
                                                <td>
                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                    <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>" alt="Image Description">
                                                    <div class="block w-full my-auto">
                                                    <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 max-w-[180px] truncate">Johnson Oley</span>
                                                    <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">johnsonoley394@demo.com</span>
                                                    </div>
                                                </div>
                                                </td>
                                                <td><span>Android</span></td>
                                                <td><span>Ionic Developer</span></td>
                                                <td><span>$21,500</span></td>
                                                <td><span>1</span></td>
                                                <td><span>$21,455</span></td>
                                                <td><span
                                                    class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-warning/10 text-warning">pending</span>
                                                </td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                    <i class="ti ti-eye"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        View
                                                    </span>
                                                    </a>
                                                </div>
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
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                    </a>
                                                </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tx-center">10</td>
                                                <td>
                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                    <img class="avatar avatar-sm rounded-sm" src="<?php echo e(asset('build/assets/img/users/7.jpg')); ?>" alt="Image Description">
                                                    <div class="block w-full my-auto">
                                                    <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 max-w-[180px] truncate">Stephen Msi</span>
                                                    <span class="block text-xs text-gray-400 dark:text-white/80 !font-normal">stephenmsi222@demo.com</span>
                                                    </div>
                                                </div>
                                                </td>
                                                <td><span>Back End</span></td>
                                                <td><span>PHP Developer</span></td>
                                                <td><span>$25,000</span></td>
                                                <td><span>0</span></td>
                                                <td><span>$25,000</span></td>
                                                <td><span
                                                    class="whitespace-nowrap inline-block py-1 px-3 rounded-sm text-xs font-medium bg-success/10 text-success">Paid</span>
                                                </td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                    <i class="ti ti-eye"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        View
                                                    </span>
                                                    </a>
                                                </div>
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
                                                    <a href="javascript:void(0);"
                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                    <i class="ti ti-trash"></i>
                                                    <span
                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                        role="tooltip">
                                                        Delete
                                                    </span>
                                                    </a>
                                                </div>
                                                </td>
                                            </tr>
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
                            </div>-->
                            <!-- End::row-5 -->

                        </div>
                        <!-- End::main-content -->

                    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

        <!-- APEX CHARTS JS -->
        <script src="<?php echo e(asset('build/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

        <!-- INDEX JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/index-8.js'); ?>
        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.components.staff.master-nonteaching', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views/Staff/Non-Teaching/dashboard.blade.php ENDPATH**/ ?>