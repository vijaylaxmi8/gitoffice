

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
                                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Staff Overview of <span class="text-primary"><?php echo e($staff->fname.' '.$staff->mname.' '.$staff->lname); ?></span></h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-sm">
                                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="<?php echo e(route('ESTB.staff')); ?>">
                                    Staff
                                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                </a>
                                </li>
                                <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                    Staff View
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
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11 14.0619V20H13V14.0619C16.9463 14.554 20 17.9204 20 22H4C4 17.9204 7.05369 14.554 11 14.0619ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Staff Basic Information
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="qualification" data-hs-tab="#qualification-tab" aria-controls="qualification-tab" role="tab">
                                            <a href="<?php echo e(route('ESTB.staff.qualifications',$staff->id)); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12 14V22H4C4 17.5817 7.58172 14 12 14ZM18 21.5L15.0611 23.0451L15.6224 19.7725L13.2447 17.4549L16.5305 16.9775L18 14L19.4695 16.9775L22.7553 17.4549L20.3776 19.7725L20.9389 23.0451L18 21.5ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Qualification
                                            </a> 
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-2" data-hs-tab="#profile-settings-2" aria-controls="profile-settings-2" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Department
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-3" data-hs-tab="#profile-settings-3" aria-controls="profile-settings-3" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11.8611 2.39057C12.8495 1.73163 14.1336 1.71797 15.1358 2.35573L19.291 4.99994H20.9998C21.5521 4.99994 21.9998 5.44766 21.9998 5.99994V14.9999C21.9998 15.5522 21.5521 15.9999 20.9998 15.9999H19.4801C19.5396 16.9472 19.0933 17.9102 18.1955 18.4489L13.1021 21.505C12.4591 21.8907 11.6609 21.8817 11.0314 21.4974C10.3311 22.1167 9.2531 22.1849 8.47104 21.5704L3.33028 17.5312C2.56387 16.9291 2.37006 15.9003 2.76579 15.0847C2.28248 14.7057 2 14.1254 2 13.5109V6C2 5.44772 2.44772 5 3 5H7.94693L11.8611 2.39057ZM4.17264 13.6452L4.86467 13.0397C6.09488 11.9632 7.96042 12.0698 9.06001 13.2794L11.7622 16.2518C12.6317 17.2083 12.7903 18.6135 12.1579 19.739L17.1665 16.7339C17.4479 16.5651 17.5497 16.2276 17.4448 15.9433L13.0177 9.74551C12.769 9.39736 12.3264 9.24598 11.9166 9.36892L9.43135 10.1145C8.37425 10.4316 7.22838 10.1427 6.44799 9.36235L6.15522 9.06958C5.58721 8.50157 5.44032 7.69318 5.67935 7H4V13.5109L4.17264 13.6452ZM14.0621 4.04306C13.728 3.83047 13.3 3.83502 12.9705 4.05467L7.56943 7.65537L7.8622 7.94814C8.12233 8.20827 8.50429 8.30456 8.85666 8.19885L11.3419 7.45327C12.5713 7.08445 13.8992 7.53859 14.6452 8.58303L18.5144 13.9999H19.9998V6.99994H19.291C18.9106 6.99994 18.5381 6.89148 18.2172 6.68727L14.0621 4.04306ZM6.18168 14.5448L4.56593 15.9586L9.70669 19.9978L10.4106 18.7659C10.6256 18.3897 10.5738 17.9178 10.2823 17.5971L7.58013 14.6247C7.2136 14.2215 6.59175 14.186 6.18168 14.5448Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Association
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-4" data-hs-tab="#profile-settings-4" aria-controls="profile-settings-4" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 15.2454V22.1169C17 22.393 16.7761 22.617 16.5 22.617C16.4094 22.617 16.3205 22.5923 16.2428 22.5457L12 20L7.75725 22.5457C7.52046 22.6877 7.21333 22.6109 7.07125 22.3742C7.02463 22.2964 7 22.2075 7 22.1169V15.2454C5.17107 13.7793 4 11.5264 4 9C4 4.58172 7.58172 1 12 1C16.4183 1 20 4.58172 20 9C20 11.5264 18.8289 13.7793 17 15.2454ZM12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15ZM12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13Z" fill="rgba(255,255,255,1)"></path></svg>
                                              Designation & Payscale
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-5" data-hs-tab="#profile-settings-5" aria-controls="profile-settings-5" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Leaves
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="salary" data-hs-tab="#salary-tab" aria-controls="salary-tab" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0004 16C14.2095 16 16.0004 14.2091 16.0004 12 16.0004 9.79086 14.2095 8 12.0004 8 9.79123 8 8.00037 9.79086 8.00037 12 8.00037 14.2091 9.79123 16 12.0004 16ZM21.0049 4.00293H3.00488C2.4526 4.00293 2.00488 4.45064 2.00488 5.00293V19.0029C2.00488 19.5552 2.4526 20.0029 3.00488 20.0029H21.0049C21.5572 20.0029 22.0049 19.5552 22.0049 19.0029V5.00293C22.0049 4.45064 21.5572 4.00293 21.0049 4.00293ZM4.00488 15.6463V8.35371C5.13065 8.017 6.01836 7.12892 6.35455 6.00293H17.6462C17.9833 7.13193 18.8748 8.02175 20.0049 8.3564V15.6436C18.8729 15.9788 17.9802 16.8711 17.6444 18.0029H6.3563C6.02144 16.8742 5.13261 15.9836 4.00488 15.6463Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Salary
                                        </button>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-9">
                                <div class="box">
                                    <div class="box-body p-0">
                                         

                                            

                                        <div id="qualification-tab" class="hidden" role="tabpanel" aria-labelledby="qualification">
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> Qualification History</h5>
                                                </div>
                                                <div class="box-body">
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0 font-bold">Staff Qualification</label>                                     
                                                        <button data-hs-overlay="#change_qualification" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                                 Add New Qualification
                                                        </button>
                                                    </div>
                                                    <div id="change_qualification" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                        Add New Qualification <span class="text-red-400"><?php echo e($staff->fname.' '.$staff->mname.' '.$staff->lname); ?></span>
                                                                    </h3>
                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                data-hs-overlay="#change_qualification">
                                                                                <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <form  action="<?php echo e(route('ESTB.staff.qualification.store',$staff->id)); ?>" method="post">
                                                                    <?php echo csrf_field(); ?>
                                                                    
                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Qualification</label>
                                                                                <select class="ti-form-select" name="qualifications_id">
                                                                                    <?php $__currentLoopData = $qualifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qualification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <option value="<?php echo e($qualification->id); ?>" ><?php echo e($qualification->qual_name); ?></option>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Status</label>
                                                                                        <select class="ti-form-select" name="status" id="status">
                                                                                            <option value="Pursuing">Pursuing</option>
                                                                                            <option value="Completed">Completed</option>
                                                                                        </select>
                                                                            </div> 
                                                                                <div class="space-y-2">
                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Year Of Passing :</label>
                                                                                        <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                            
                                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                            </div>
                                            
                                                                                            <input type="text" name="yearofpassing"
                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                id="date" placeholder="Choose Date" value="" readonly>
                                                                                        </div>
                                                                                </div>
                                                                                
                                                                                <div class="space-y-2">
                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Board Or University</label>
                                                                                        <input type="text" name="boardoruniversity" class="ti-form-input" value="" placeholder="Enter Board or University"/>
                                                                                </div>
                                                                                <div class="space-y-2">
                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Grade(CGP)</label>
                                                                                        <input type="text" name="grade" class="ti-form-input" value="" placeholder="Enter Your CGP Grade"/>
                                                                                </div>    
                                                                            </div>
                                                                        </div>    
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                data-hs-overlay="#change_qualification">
                                                                                 Close
                                                                        </button>
                                                                        
                                                                        <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Insert"/>
                                                                    </div>
                                                                </form>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                                <tr class="">
                                                                    <th scope="col" class="dark:text-white/80 font-bold ">S.no</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold ">Qualification Name</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Board/University</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Year of Passing</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Grade</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Status</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Actions</th>                                                                                                 
                                                                </tr>                                                             
                                                            </thead>
                                                            <?php
                                                                $i=1;
                                                            ?>
                                                            <tbody class="">
                                                            <?php $__empty_1 = true; $__currentLoopData = $staff->qualifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qualification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                <tr>
                                                                    <td><span><?php echo e($i++); ?></span></td>
                                                                    <td><span><?php echo e($qualification->qual_name); ?></span></td>
                                                                    <td><span><?php echo e($qualification->pivot->board_university); ?></span></td>
                                                                    <td><span><?php echo e($qualification->pivot->yop); ?></span></td>
                                                                    <td><span><?php echo e($qualification->pivot->grade); ?></span></td>
                                                                    <td><span><?php echo e($qualification->pivot->status); ?></span></td>
                                                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                        <button data-hs-overlay="#qual_edit_modal<?php echo e($i); ?>"
                                                                            class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            <span
                                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                role="tooltip">
                                                                                    Edit
                                                                            </span>
                                                                        </button>
                                                                    <div id="qual_edit_modal<?php echo e($i); ?>" class="hs-overlay hidden ti-modal">
                                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                            <div class="ti-modal-content">
                                                                                <div class="ti-modal-header">
                                                                                    <h3 class="ti-modal-title">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                        Edit New Qualification <span class="text-red-400"><?php echo e($staff->fname.' '.$staff->mname.' '.$staff->lname); ?></span>
                                                                                    </h3>
                                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                        data-hs-overlay="#qual_edit_modal<?php echo e($i); ?>">
                                                                                        <span class="sr-only">Close</span>
                                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                            fill="currentColor" />
                                                                                        </svg>
                                                                                    </button>
                                                                                </div>
                                                                                <form  action="<?php echo e(route('ESTB.staff.qualification.update',[$staff->id,$qualification->id])); ?>" method="post">
                                                                                     <?php echo csrf_field(); ?>
                                                                                     <?php echo method_field('patch'); ?>
                                                                                        <div class="ti-modal-body">
                                                                                            <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                <div class="space-y-2">
                                                                                                    <label class="ti-form-label mb-0 font-bold">Qualification </label>
                                                                                                    <select class="ti-form-select" name="qualifications_id">
                                                                                                        <?php $__currentLoopData = $qualifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qual): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                            
                                                                                                            <option value="<?php echo e($qual->id); ?>" <?php echo e(($qualification->id==$qual->id? "selected":"")); ?>  ><?php echo e($qual->qual_name); ?></option>
                                                                                                            
                                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                    </select>
                                                                                                    
                                                                                                </div>
                                                                                                    <div class="space-y-2">
                                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Status</label>
                                                                                                            <select class="ti-form-select" name="status" id="status">
                                                                                                                <option value="Persuing" <?php echo e(($qualification->pivot->status=="Pursuing"? "selected":"")); ?>>Pursuing</option>
                                                                                                                <option value="Completed" <?php echo e(($qualification->pivot->status=="Completed"? "selected":"")); ?>>Completed</option>
                                                                                                            </select>
                                                                                                    </div> 
                                                                                                        <div class="space-y-2">
                                                                                                            <label for="" class="ti-form-label mb-0 font-bold">Year Of Passing :</label>
                                                                                                            <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                            
                                                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                                                </div>
                                                                                                                    <input type="text" name="yearofpassing"
                                                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                            id="date" placeholder="Choose Date" value="<?php echo e($qualification->pivot->yop); ?>" readonly>
                                                                                                            </div>
                                                                                                        </div>
                                                                                
                                                                                                            <div class="space-y-2">
                                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Board Or University</label>
                                                                                                                <input type="text" name="boardoruniversity" class="ti-form-input" value="<?php echo e($qualification->pivot->board_university); ?>" placeholder="Enter Board or University"/>
                                                                                                            </div>
                                                                                                                <div class="space-y-2">
                                                                                                                    <label for="" class="ti-form-label mb-0 font-bold">Grade(CGP)</label>
                                                                                                                    <input type="text" name="grade" class="ti-form-input" value="<?php echo e($qualification->pivot->grade); ?>" placeholder="Enter Your CGP Grade"/>
                                                                                                                </div> 
                                                                                                            </div>
                                                                               
                                                                                                        </div>    
                                                                                                            <div class="ti-modal-footer">
                                                                                                                <button type="button"
                                                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                                     data-hs-overlay="#qual_edit_modal<?php echo e($i); ?>">
                                                                                                                    Close
                                                                                                                </button>
                                                                        
                                                                                                                <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                    
                                                                                                            </div>
                                                                    </form>  
                                                        </div>
                                                    </div>
                                                    </div>


                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                    <form action="<?php echo e(route('ESTB.staff.qualification.destroy',[$staff->id,$qualification->id])); ?>" method="post">
                                                                    
                                                                    <button onclick="return confirm('Are you Sure')"
                                                                        class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                        <?php echo method_field('delete'); ?>
                                                                        <?php echo csrf_field(); ?>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Delete
                                                                        </span>
                                                                        </button>
                                                                    </form>
                                                                    </div>


                                                                </tr>
                                                              
                                                             
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                <tr>
                                                                No records
                                                                </tr>
                                                            <?php endif; ?>
                                                           
                                                        
                                                            </tbody>
                                                        </table>  
                                                    </div>   
                                                </div>
                                            </div>
                                        </div>
                                                 
                                                        

                                        <!-- Association Section starts here -->
                                        
                                        </div>


                                        <!--Desination & Payscale section starts here-->
                                       
                                        
                                    </div>
                                    <div class="box-footer text-end space-x-3 rtl:space-x-reverse">
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
                //ajax call to change the dropdwon List for castecategory based on religion
               // The Controller is : GetCaste CategoryListCOntroller.php
               $(document).on('change','#religion_id',function(){
                    //alert('Changed');
                    var religion_id = $(this).val();
                    $.ajax({
                        url:'/ESTB/staff/getcastecategory_list',
                        method:'GET',
                        data:{'r_id':religion_id},
                        success:function(data) {
                       console.log(data);
                            var castecategoriesDropdown = $('#castecategory_list');
                            castecategoriesDropdown.empty(); // Clear existing options
                            data.forEach(function(item) {
                                castecategoriesDropdown.append($('<option>').text(item['caste_name']+"-"+item['subcastes_name']+"-"+item['category']+"-"+item['category_no']).attr('value', item['id']));
                            });
                                // $.each(data, function (key, value) {
                                //     console.log(value);
                                //     
                                // });
                            //$("#castecategory_list").html(data);
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });
                    
               });
               //for checking whether the employee type is teaching Or non teaching for enabling id's
               var employee_type = $('#employee_type').val();
                    if($(this).val()=='Teaching'){
                        $('#AICTE_id').show();
                        $('#VTU_id').show();

                        $('#ESI_no').hide();
                        $('#UN_no').hide();
                       
                    }else if($(this).val()=='Non-Teaching'){
                        $('#AICTE_id').hide();
                        $('#VTU_id').hide();

                        $('#ESI_no').show();
                        $('#UN_no').show();
                    }else{
                        //alert('Please choose appropriate employee type');
                    }
                   // on change the ids fields to be changed. 
               $(document).on('change','#employee_type',function(){
                    if($(this).val()=='Teaching'){
                        $('#AICTE_id').show();
                        $('#VTU_id').show();

                        $('#ESI_no').hide();
                        $('#UN_no').hide();
                       
                    }else if($(this).val()=='Non-Teaching'){
                        $('#AICTE_id').hide();
                        $('#VTU_id').hide();

                        $('#ESI_no').show();
                        $('#UN_no').show();
                    }else{
                        //do nothing.
                        alert('Please choose appropriate employee type');
                    }
                   
               });

            });

            $(document).on('change','#designation_id',function(){
                //alert('changed');
                if($(this).val()==1){
                    $('#dept_div').show();
                }else{
                    $('#dept_div'). hide();
                }
                
            });

                //while adding the consolidated field if the association choosen is contractual part time.
            $(document).on('change','#associations_id',function(){
                //alert('Association Changed');
                if($(this).val() == 4){
                    ///for checking if the association is contractual.
                    $('#consolidated_pay_div').removeClass('hidden');
                  //  $('#payscale_id_div').addClass('hidden');
                } 
                else{
                    $('#consolidated_pay_div').addClass('hidden');
                    //$('#payscale_id_div').removeClass('hidden');
                }
            });

            //while editing the consolidated teacching pay field , if choosen as contractual part time 
            $(document).on('change','#associations_id_edit',function(){
                //alert('Association Changed');
                if($(this).val() == 4) {//for checking if the association is contractual.
                    $('#consolidated_pay_div_edit').removeClass('hidden');
                    $('#payscale_id_div_edit').addClass('hidden');
                }else{
                    $('#consolidated_pay_div_edit').addClass('hidden');
                    $('#payscale_id_div_edit').removeClass('hidden');
                }
            });

            //on change of Pay type , get employee type, designation and then populate appropriate pay 
            $(document).on('change','input[type=radio][name=pay_type]',function(){
                    //alert($(this).val());
                     var pay_type = $(this).val();
                     var emp_type = $('#change_payscale_employee_type').val();
                     var designation_id = $('#change_payscale_designation_id').val();
                     alert(pay_type+'-'+emp_type+'-'+designation_id);
                    // //$('#payscalelevel').hide();
                    // //alert(pay_type+'-'+emp_type+'-'+designation_id);
                    // if(pay_type == "Fixed"){
                    //     $('#fixed_pay_div').show();
                    //     $('#payscale_div').hide();
                       
                    // }else{
                    //     $('#fixed_pay_div').hide();
                        
                    //     //ajax call for populating the pay 
                    $.ajax({
                            url:'/ESTB/staff/getstaffpay_list',
                            method:'GET',
                            data:{'pay_type':pay_type,'emp_type':emp_type,'designation_id':designation_id},
                            success:function(data) {
                                //console.log(data);
                                var staffPayDropdown = $('#ajax_data_populate');
                                staffPayDropdown.empty(); // Clear existing options
                                if(pay_type == "Consolidated"){
                                        console.log(data.ntcpayscales);
                                        staffPayDropdown.append('<label for="" class="ti-form-label mb-0 font-bold">Consolidated Pay </label><select class="ti-form-select" name="payscales_id" id="nt_consolidated_pay">');
                                      
                                        data.ntcpayscales.forEach(function(item) {

                                            $('#nt_consolidated_pay').append($('<option>').text(item['basepay']+'-'+item['allowance']+'- Year: '+item['year']).attr('value', item['id']));
                                        });
                                        //$('#payscale_div').show();
                                       console.log(staffPayDropdown);
                                        $('#nt_fixed_pay_div').hide(); // For displaying the payscale level
                                        $('#nt_payscale_div').hide();
                                        $('#payscalelevel').hide();
                                        // $("#ajax_data_populate").append(data.ntcpayscales);
                                        staffPayDropdown.append('</select>');


                                }

                                 if(pay_type == "Payscale"){
                                    if(emp_type == "Teaching"){
                                        //
                                        $('#teahing_consolidated_pay_div').hide();
                                        if($('#t_payscale_div').css('display') == 'none'){
                                            $('#t_payscale_div').show();
                                            
                                        }else{
                                            
                                            $('#ajax_data_populate').html('<label for="" class="ti-form-label mb-0 font-bold">Payscale </label><select class="ti-form-select" name="payscales_id" id="teaching_payscales_id">');
                                            data.forEach(function(item) {

                                                $('#teaching_payscales_id').append($('<option>').text(item['payscale_title']+"-"+item['basepay']+"-"+item['maxpay']+"-"+item['agp']).attr('value', item['id']));
                                            });
                                            $('#ajax_data_populate').append('</select>')
                                        }

                                       
                                        $('#nt_fixed_pay_div').hide();
                                        
                                        $("#payscale_id").append(data);
                                        $('#payscalelevel').hide();
                                    }else{
                                        console.log(data.ntpayscales);
                                        staffPayDropdown.append('<label for="" class="ti-form-label mb-0 font-bold">Payscale </label><select class="ti-form-select" name="payscales_id" id="nt_payscale">');
                                      
                                        data.ntpayscales.forEach(function(item) {

                                            $('#nt_payscale').append($('<option>').text(item['payband']).attr('value', item['id']));
                                        });
                                        $('#nt_fixed_pay_div').hide();
                                        $("#ajax_data_populate").append(data.ntpayscales);
                                        staffPayDropdown.append('</select>');

                                        if($('#payscalelevel').css('display') == 'none'){
                                                $('#payscalelevel').show();
                                        }else{
                                            $("#ajax_data_populate").append('<div class="space-y-2" id="payscalelevel"><label class="ti-form-label mb-0 font-bold">Increment Level </label>'
                                                                                    +'<select class="ti-form-select" name="payscale_level" id="payscale_level">'
                                                                                        +'<option value="null">Choose the payscale level </option>'
                                                                                        +'<option value="1" >Increment Level-1</option>'
                                                                                        +'<option value="2">Increment Level-2</option>'
                                                                                        +'<option value="3">Increment Level-3</option>'
                                                                                    +'</select>'
                                                                                +'</div>');
                                        }
                                        //$('#payscalelevel').show(); // For displaying the payscale level
                                    }
                                }
                                if(pay_type == "Fixed"){ // for fixed pay .for both (T and NT)

                                    
                                    $("#payscale_id").hide();
                                    $('#t_payscale_div').hide();
                                   // $('#nt_payscale_div').hide();
                                    if(emp_type == "Teaching"){
                                        //teaching fixed
                                        if($('#teahing_consolidated_pay_div').css('display') == 'none'){
                                                $('#teahing_consolidated_pay_div').show();
                                        }else{
                                                $('#ajax_data_populate').append('<label for="" class="ti-form-label mb-0 font-bold">Fixed Pay </label><input type="text" name="fixed_pay" class="ti-form-input" value=""/>');
                                        
                                            
                                        }
                                    }else{
                                        //non teaching fixed.
                                        if($('#nt_fixed_pay_div').css('display') == 'none'){
                                            $('#nt_fixed_pay_div').show();
                                        }else{
                                            $('#ajax_data_populate').append('<label for="" class="ti-form-label mb-0 font-bold">Fixed Pay </label><input type="text" name="fixed_pay" class="ti-form-input" value=""/>');
                                
                                        }
                                    }
                                   
                                        
                                    $('#payscalelevel').hide();
                                    }
                                
                                //$("#castecategory_list").html(data);
                            },
                            error: function (error) {
                                console.log(error);
                            }
                        });
                  

                        //for reseting the radio buttons 
                        $(document).on('change','#change_payscale_designation_id',function(){
                            //for re-populating the payscales by reseting the radio button of pay_type 
                            //This is connected with (on Change pay type)
                            if($('input[type=radio][name=pay_type]').is(':checked')){
                                //alert('its checked');
                                $('input[type=radio][name=pay_type]').prop('checked', false);
                            }
                        });
                   
               });

              
        </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views/ESTB/staff/staffqualification.blade.php ENDPATH**/ ?>