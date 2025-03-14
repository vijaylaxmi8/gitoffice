<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Offcanvas</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Basic Ui
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Offcanvas
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12 lg:col-span-3">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Default Offcanvas</h5>
                                        </div>
                                        <div class="box-body">
                                            <button type="button" class="ti-btn ti-btn-primary" data-hs-overlay="#hs-overlay-example">
                                                Open offcanvas
                                            </button>

                                            <div id="hs-overlay-example" class="hs-overlay hidden ti-offcanvas ti-offcanvas-left" tabindex="-1">
                                            <div class="ti-offcanvas-header">
                                                <h3 class="ti-offcanvas-title">
                                                    Notifications
                                                </h3>
                                                <button type="button" class="ti-btn flex-shrink-0 h-8 w-8 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white dark:text-white/70 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10" data-hs-overlay="#hs-overlay-example">
                                                    <span class="sr-only">Close modal</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="ti-offcanvas-body !p-0">
                                                <ul class="flex flex-col">
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-t-0 border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-primary text-white rounded-full">
                                                            NW
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">New Website Created<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">20 Nov 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>30 mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-danger text-white rounded-full">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">3 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>2 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-info text-white rounded-full">
                                                                SA
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">17 Feb 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">29 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-success  text-white rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">31 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Brenda New product launching<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">1 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>7 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-secondary text-white rounded-full">
                                                            MB
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Medeleine Hey! there i'm available<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">5 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-info  text-white rounded-full">
                                                            OL
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Olivia New schedule release<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">6 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>45 mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-warning  text-white rounded-full">
                                                        A
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Kamala Preparing for new admin launch<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">7 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>28 mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Oisha Meeting with clinet for dinner<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">10 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>14 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-danger text-white rounded-full">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">3 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>2 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-info text-white rounded-full">
                                                                SA
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">17 Feb 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/14.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">29 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-success  text-white rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">31 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                </ul>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-9">
                                    <div class="box">
                                        <div class="box-header">
                                            <h5 class="box-title">Offcanvas Placements</h5>
                                        </div>
                                        <div class="box-body">
                                            <button type="button" class="ti-btn ti-btn-primary" data-hs-overlay="#hs-overlay-top">
                                                Toggle top offcanvas
                                            </button>

                                            <div id="hs-overlay-top" class="hs-overlay hidden ti-offcanvas ti-offcanvas-top" tabindex="-1">
                                                <div class="ti-offcanvas-header">
                                                <h3 class="ti-offcanvas-title">
                                                    Offcanvas title
                                                </h3>
                                                <button type="button" class="ti-btn flex-shrink-0 h-8 w-8 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white dark:text-white/70 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10" data-hs-overlay="#hs-overlay-top">
                                                    <span class="sr-only">Close modal</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                    </svg>
                                                </button>
                                                </div>
                                                <div class="ti-offcanvas-body">
                                                <p class="text-gray-800 dark:text-white/70">
                                                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                                                </p>
                                                </div>
                                            </div>

                                            <button type="button" class="ti-btn ti-btn-primary" data-hs-overlay="#hs-overlay-right">
                                                Toggle right offcanvas
                                            </button>

                                            <div id="hs-overlay-right" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right" tabindex="-1">
                                            <div class="ti-offcanvas-header">
                                                <h3 class="ti-offcanvas-title">
                                                    Notifications
                                                </h3>
                                                <button type="button" class="ti-btn flex-shrink-0 h-8 w-8 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white dark:text-white/70 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10" data-hs-overlay="#hs-overlay-right">
                                                    <span class="sr-only">Close modal</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="ti-offcanvas-body !p-0">
                                                <ul class="flex flex-col">
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-t-0 border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-primary text-white rounded-full">
                                                            NW
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">New Website Created<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">20 Nov 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>30 mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-danger text-white rounded-full">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">3 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>2 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-info text-white rounded-full">
                                                                SA
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">17 Feb 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">29 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-success  text-white rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">31 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Brenda New product launching<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">1 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>7 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-secondary text-white rounded-full">
                                                            MB
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Medeleine Hey! there i'm available<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">5 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-info  text-white rounded-full">
                                                            OL
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Olivia New schedule release<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">6 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>45 mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-warning  text-white rounded-full">
                                                        A
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Kamala Preparing for new admin launch<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">7 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>28 mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Oisha Meeting with clinet for dinner<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">10 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>14 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-danger text-white rounded-full">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">3 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>2 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-info text-white rounded-full">
                                                                SA
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">17 Feb 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/14.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">29 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-success  text-white rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">31 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                </ul>
                                            </div>
                                            </div>

                                            <button type="button" class="ti-btn ti-btn-primary" data-hs-overlay="#hs-overlay-bottom">
                                                Toggle bottom offcanvas
                                            </button>

                                            <div id="hs-overlay-bottom" class="hs-overlay hidden ti-offcanvas ti-offcanvas-bottom" tabindex="-1">
                                                <div class="ti-offcanvas-header">
                                                <h3 class="ti-offcanvas-title">
                                                    Offcanvas title
                                                </h3>
                                                <button type="button" class="ti-btn flex-shrink-0 h-8 w-8 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white dark:text-white/70 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10" data-hs-overlay="#hs-overlay-bottom">
                                                    <span class="sr-only">Close modal</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                    </svg>
                                                </button>
                                                </div>
                                                <div class="ti-offcanvas-body">
                                                <p class="text-gray-800 dark:text-white/70">
                                                    Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                                                </p>
                                                </div>
                                            </div>

                                            <button type="button" class="ti-btn ti-btn-primary" data-hs-overlay="#hs-overlay-left">
                                                Toggle left offcanvas
                                            </button>

                                            <div id="hs-overlay-left" class="hs-overlay hidden ti-offcanvas ti-offcanvas-left" tabindex="-1">
                                            <div class="ti-offcanvas-header">
                                                <h3 class="ti-offcanvas-title">
                                                    Notifications
                                                </h3>
                                                <button type="button" class="ti-btn flex-shrink-0 h-8 w-8 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white dark:text-white/70 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10" data-hs-overlay="#hs-overlay-left">
                                                    <span class="sr-only">Close modal</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="ti-offcanvas-body !p-0">
                                                <ul class="flex flex-col">
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-t-0 border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-primary text-white rounded-full">
                                                            NW
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">New Website Created<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">20 Nov 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>30 mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-danger text-white rounded-full">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">3 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>2 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-info text-white rounded-full">
                                                                SA
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">17 Feb 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">29 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-success  text-white rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">31 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Brenda New product launching<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">1 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>7 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-secondary text-white rounded-full">
                                                            MB
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Medeleine Hey! there i'm available<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">5 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-info  text-white rounded-full">
                                                            OL
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Olivia New schedule release<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">6 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>45 mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-warning  text-white rounded-full">
                                                        A
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Kamala Preparing for new admin launch<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">7 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>28 mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Oisha Meeting with clinet for dinner<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">10 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>14 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-danger text-white rounded-full">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">3 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>2 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-info text-white rounded-full">
                                                                SA
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">17 Feb 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/14.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">29 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-success  text-white rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">31 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                </ul>
                                            </div>
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
                                            <h5 class="box-title">Backdrop Offcanvas</h5>
                                        </div>
                                        <div class="box-body">
                                            <button type="button" class="m-1 ml-0 ti-btn ti-btn-primary" data-hs-overlay="#hs-overlay-body-scrolling">
                                                Enable body scrolling
                                            </button>

                                            <div id="hs-overlay-body-scrolling" class="hs-overlay ti-offcanvas ti-offcanvas-left hidden [--body-scroll:true] [--overlay-backdrop:false]" tabindex="-1">
                                            <div class="ti-offcanvas-header">
                                                <h3 class="ti-offcanvas-title">
                                                    Notifications
                                                </h3>
                                                <button type="button" class="ti-btn flex-shrink-0 h-8 w-8 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white dark:text-white/70 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10" data-hs-overlay="#hs-overlay-body-scrolling">
                                                    <span class="sr-only">Close modal</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="ti-offcanvas-body !p-0">
                                                <ul class="flex flex-col">
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-t-0 border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-primary text-white rounded-full">
                                                            NW
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">New Website Created<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">20 Nov 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>30 mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-danger text-white rounded-full">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">3 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>2 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-info text-white rounded-full">
                                                                SA
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">17 Feb 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">29 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-success  text-white rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">31 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Brenda New product launching<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">1 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>7 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-secondary text-white rounded-full">
                                                            MB
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Medeleine Hey! there i'm available<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">5 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-info  text-white rounded-full">
                                                            OL
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Olivia New schedule release<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">6 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>45 mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-warning  text-white rounded-full">
                                                        A
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Kamala Preparing for new admin launch<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">7 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>28 mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Oisha Meeting with clinet for dinner<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">10 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>14 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-danger text-white rounded-full">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">3 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>2 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-info text-white rounded-full">
                                                                SA
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">17 Feb 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/14.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">29 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-success  text-white rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">31 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                </ul>
                                            </div>
                                            </div>

                                            <button type="button" class="m-1 ml-0 ti-btn ti-btn-primary" data-hs-overlay="#hs-overlay-backdrop-default">
                                                Enable backdrop (default)
                                            </button>

                                            <div id="hs-overlay-backdrop-default" class="hs-overlay ti-offcanvas ti-offcanvas-left hidden" tabindex="-1">
                                            <div class="ti-offcanvas-header">
                                                <h3 class="ti-offcanvas-title">
                                                    Notifications
                                                </h3>
                                                <button type="button" class="ti-btn flex-shrink-0 h-8 w-8 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white dark:text-white/70 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10" data-hs-overlay="#hs-overlay-backdrop-default">
                                                    <span class="sr-only">Close modal</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="ti-offcanvas-body !p-0">
                                                <ul class="flex flex-col">
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-t-0 border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-primary text-white rounded-full">
                                                            NW
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">New Website Created<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">20 Nov 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>30 mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-danger text-white rounded-full">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">3 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>2 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-info text-white rounded-full">
                                                                SA
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">17 Feb 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">29 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-success  text-white rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">31 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Brenda New product launching<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">1 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>7 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-secondary text-white rounded-full">
                                                            MB
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Medeleine Hey! there i'm available<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">5 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-info  text-white rounded-full">
                                                            OL
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Olivia New schedule release<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">6 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>45 mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-warning  text-white rounded-full">
                                                        A
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Kamala Preparing for new admin launch<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">7 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>28 mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Oisha Meeting with clinet for dinner<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">10 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>14 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-danger text-white rounded-full">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">3 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>2 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-info text-white rounded-full">
                                                                SA
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">17 Feb 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/14.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">29 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-success  text-white rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">31 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                </ul>
                                            </div>
                                            </div>

                                            <button type="button" class="m-1 ml-0 ti-btn ti-btn-primary" data-hs-overlay="#hs-overlay-backdrop-with-scrolling">
                                                Enable both scrolling &amp; backdrop
                                            </button>

                                            <div id="hs-overlay-backdrop-with-scrolling" class="hs-overlay ti-offcanvas ti-offcanvas-left hidden" tabindex="-1" data-hs-overlay-scroll="true">
                                            <div class="ti-offcanvas-header">
                                                <h3 class="ti-offcanvas-title">
                                                    Notifications
                                                </h3>
                                                <button type="button" class="ti-btn flex-shrink-0 h-8 w-8 p-0 transition-none text-gray-500 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white dark:text-white/70 dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10" data-hs-overlay="#hs-overlay-backdrop-with-scrolling">
                                                    <span class="sr-only">Close modal</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="ti-offcanvas-body !p-0">
                                                <ul class="flex flex-col">
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-t-0 border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-primary text-white rounded-full">
                                                            NW
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">New Website Created<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">20 Nov 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>30 mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-danger text-white rounded-full">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">3 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>2 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-info text-white rounded-full">
                                                                SA
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">17 Feb 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">29 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-success  text-white rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">31 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Brenda New product launching<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">1 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>7 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-secondary text-white rounded-full">
                                                            MB
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Medeleine Hey! there i'm available<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">5 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-info  text-white rounded-full">
                                                            OL
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Olivia New schedule release<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">6 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>45 mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <span class="inline-flex items-center justify-center avatar avatar-sm bg-warning  text-white rounded-full">
                                                        A
                                                        </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Kamala Preparing for new admin launch<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">7 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>28 mins ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Oisha Meeting with clinet for dinner<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">10 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>14 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-danger text-white rounded-full">
                                                                CH
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for the new project<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">3 Jan 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>2 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-info text-white rounded-full">
                                                                SA
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Decide the live discussion<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">17 Feb 2023</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>3 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                        <img src="<?php echo e(asset('build/assets/img/users/14.jpg')); ?>" alt="" class="avatar avatar-sm rounded-full">
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Meeting at 3:00 pm<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">29 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="ti-list-group bg-white text-gray-800 dark:bg-bgdark dark:border-white/10 dark:text-white border-x-0">
                                                    <div class="flex items-center w-full">
                                                        <div class="ltr:mr-2 rtl:ml-2">
                                                            <span class="inline-flex items-center justify-center avatar avatar-sm bg-success  text-white rounded-full">
                                                                RC
                                                            </span>
                                                        </div>
                                                        <div class="flex-auto">
                                                            <p class="font-semibold mb-0">Prepare for presentation<span class="badge bg-gray-100 text-gray-500 dark:text-white/70 dark:bg-black/20 ltr:float-right rtl:float-left px-2 py-1 leading-none text-[10px]">31 Dec 2022</span></p>
                                                            <span class="text-xs text-gray-500 dark:text-white/70 inline-flex"><i class="ri-time-line align-middle ltr:mr-1 rtl:ml-1"></i>4 hrs ago</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                </ul>
                                            </div>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\laravel\vite\synto\synto\resources\views/pages/offcanvas.blade.php ENDPATH**/ ?>