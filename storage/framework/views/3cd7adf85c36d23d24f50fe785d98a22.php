<?php $__env->startSection('styles'); ?>

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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Contacts</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Pages
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Contacts
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 xxl:col-span-9">
                                <div class="box">
                                <div class="box-header">
                                    <div class="grid grid-cols-12 gap-6">
                                    <div class="col-span-12 lg:col-span-4">
                                        <div class="relative sm:max-w-xs max-w-[210px]">
                                        <label for="hs-table-search" class="sr-only">Search</label>
                                        <div
                                            class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center pointer-events-none ltr:pr-4 rtl:pl-4">
                                            <i class="ti ti-search"></i>
                                        </div>
                                        <input type="text" name="hs-table-search" id="hs-table-search"
                                            class="p-2 ltr:pr-10 rtl:pl-10 ti-form-input" placeholder="Search Contact">
                                        </div>
                                    </div>
                                    <div class="col-span-12 lg:sm:col-span-8">
                                        <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-2 lg:justify-end team-right rtl:space-x-reverse">
                                        <div class="hs-dropdown ti-dropdown">
                                            <button id="hs-dropdown-custom-icon-trigger2" type="button"
                                            class="hs-dropdown-toggle ti-btn ti-btn-primary m-0">Sort By<i
                                                class="ri-arrow-down-s-line align-middle"></i></button>
                                            <div class="hs-dropdown-menu ti-dropdown-menu hidden"
                                            aria-labelledby="hs-dropdown-custom-icon-trigger2">
                                            <a class="ti-dropdown-item" href="javascript:void(0)">A To Z</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Z To A</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">Favorites</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0)">All</a>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="team-add-btn m-0 ti-btn ti-btn-secondary whitespace-nowrap">
                                            <i class="ti ti-circle-plus leading-none"> </i>Add New Contact
                                        </a>
                                        <div class="hs-dropdown ti-dropdown">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                            class="hs-dropdown-toggle ti-dropdown-toggle inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                            <i class="ri ri-more-2-line text-lg leading-none"></i>
                                            </a>
                                            <div class="hs-dropdown-menu ti-dropdown-menu">
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                class="ri-folder-shared-line me-2 align-middle"></i>Move To</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                class="ri-file-copy-line me-2 align-middle"></i>Copy All</a>
                                            <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                class="ri-delete-bin-5-line me-2 align-middle"></i>Delete All</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="sm:grid sm:space-y-0 space-y-6 xl:!grid-cols-3 md:grid-cols-2 gap-6">
                                    <div class="box mb-0">
                                        <div class="box-body space-y-5">
                                        <div class="flex">
                                            <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-4 rtl:space-x-reverse">
                                            <img class="avatar avatar-lg rounded-sm" src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>"
                                                alt="Image Description">
                                            <div class="space-y-1 my-auto">
                                                <h5 class="font-semibold text-base leading-none">Julia Walker</h5>
                                                <p class="text-gray-500 dark:text-white/70 font-semibold text-xs truncate xxxl:max-w-[9rem] max-w-[8rem]">
                                                juliawalker@gmail.com</p>
                                                <p class="text-primary dark:text-primary text-xs font-semibold">+121 2525252352</p>
                                            </div>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                            <a aria-label="anchor" href="javascript:void(0);"><i
                                                class="ri ri-heart-fill text-base text-danger hover:text-danger"></i></a>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="grid grid-cols-12 gap-x-3">
                                            <div class="sm:col-span-2 col-span-4">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-phone-line text-lg leading-none"></i>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-8 col-span-4">
                                            <a href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri-chat-2-line text-lg leading-none"></i> <span
                                                class="text-sm leading-none hidden sm:block">Message</span>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-2 col-span-4">
                                            <div class="hs-dropdown ti-dropdown flex justify-end">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                                </a>
                                                <div class="hs-dropdown-menu ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-share-line me-2 align-middle"></i>Share</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-video-chat-line me-2 align-middle"></i>Video Call</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box mb-0">
                                        <div class="box-body space-y-5">
                                        <div class="flex">
                                            <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-4 rtl:space-x-reverse">
                                            <img class="avatar avatar-lg rounded-sm" src="<?php echo e(asset('build/assets/img/users/11.jpg')); ?>"
                                                alt="Image Description">
                                            <div class="space-y-1 my-auto">
                                                <h5 class="font-semibold text-base leading-none">Ben Dover</h5>
                                                <p class="text-gray-500 dark:text-white/70 font-semibold text-xs truncate xxxl:max-w-[9rem] max-w-[8rem]">
                                                BenDover@gmail.com</p>
                                                <p class="text-primary dark:text-primary text-xs font-semibold">+121 9585652655</p>
                                            </div>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                            <a aria-label="anchor" href="javascript:void(0);"><i
                                                class="ri ri-heart-fill text-base text-gray-300 dark:text-white/70 hover:text-danger"></i></a>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="grid grid-cols-12 gap-x-3">
                                            <div class="sm:col-span-2 col-span-4">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-phone-line text-lg leading-none"></i>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-8 col-span-4">
                                            <a href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri-chat-2-line text-lg leading-none"></i> <span
                                                class="text-sm leading-none hidden sm:block">Message</span>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-2 col-span-4">
                                            <div class="hs-dropdown ti-dropdown flex justify-end">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                                </a>
                                                <div class="hs-dropdown-menu ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-share-line me-2 align-middle"></i>Share</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-video-chat-line me-2 align-middle"></i>Video Call</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box mb-0">
                                        <div class="box-body space-y-5">
                                        <div class="flex">
                                            <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-4 rtl:space-x-reverse">
                                            <img class="avatar avatar-lg rounded-sm" src="<?php echo e(asset('build/assets/img/users/12.jpg')); ?>"
                                                alt="Image Description">
                                            <div class="space-y-1 my-auto">
                                                <h5 class="font-semibold text-base leading-none">Eos Tempor</h5>
                                                <p class="text-gray-500 dark:text-white/70 font-semibold text-xs truncate xxxl:max-w-[9rem] max-w-[8rem]">
                                                EosTempor@gmail.com</p>
                                                <p class="text-primary dark:text-primary text-xs font-semibold">+121 9585652655</p>
                                            </div>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                            <a aria-label="anchor" href="javascript:void(0);"><i
                                                class="ri ri-heart-fill text-base text-gray-300 dark:text-white/70 hover:text-danger"></i></a>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="grid grid-cols-12 gap-x-3">
                                            <div class="sm:col-span-2 col-span-4">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-phone-line text-lg leading-none"></i>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-8 col-span-4">
                                            <a href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri-chat-2-line text-lg leading-none"></i> <span
                                                class="text-sm leading-none hidden sm:block">Message</span>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-2 col-span-4">
                                            <div class="hs-dropdown ti-dropdown flex justify-end">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                                </a>
                                                <div class="hs-dropdown-menu ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-share-line me-2 align-middle"></i>Share</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-video-chat-line me-2 align-middle"></i>Video Call</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box mb-0">
                                        <div class="box-body space-y-5">
                                        <div class="flex">
                                            <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-4 rtl:space-x-reverse">
                                            <img class="avatar avatar-lg rounded-sm" src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>"
                                                alt="Image Description">
                                            <div class="space-y-1 my-auto">
                                                <h5 class="font-semibold text-base leading-none">Json Taylor</h5>
                                                <p class="text-gray-500 dark:text-white/70 font-semibold text-xs truncate xxxl:max-w-[9rem] max-w-[8rem]">
                                                JsonTaylor2023@gmail.com
                                                </p>
                                                <p class="text-primary dark:text-primary text-xs font-semibold">+121 9585652655</p>
                                            </div>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                            <a aria-label="anchor" href="javascript:void(0);"><i
                                                class="ri ri-heart-fill text-base text-gray-300 dark:text-white/70 hover:text-danger"></i></a>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="grid grid-cols-12 gap-x-3">
                                            <div class="sm:col-span-2 col-span-4">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-phone-line text-lg leading-none"></i>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-8 col-span-4">
                                            <a href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri-chat-2-line text-lg leading-none"></i> <span
                                                class="text-sm leading-none hidden sm:block">Message</span>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-2 col-span-4">
                                            <div class="hs-dropdown ti-dropdown flex justify-end">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                                </a>
                                                <div class="hs-dropdown-menu ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-share-line me-2 align-middle"></i>Share</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-video-chat-line me-2 align-middle"></i>Video Call</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box mb-0">
                                        <div class="box-body space-y-5">
                                        <div class="flex">
                                            <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-4 rtl:space-x-reverse">
                                            <img class="avatar avatar-lg rounded-sm" src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>"
                                                alt="Image Description">
                                            <div class="space-y-1 my-auto">
                                                <h5 class="font-semibold text-base leading-none">Socrates Itumay</h5>
                                                <p class="text-gray-500 dark:text-white/70 font-semibold text-xs truncate xxxl:max-w-[9rem] max-w-[8rem]">
                                                SocratesItumay2023@gmail.com</p>
                                                <p class="text-primary dark:text-primary text-xs font-semibold">+121 9585652655</p>
                                            </div>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                            <a aria-label="anchor" href="javascript:void(0);"><i
                                                class="ri ri-heart-fill text-base text-danger hover:text-danger"></i></a>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="grid grid-cols-12 gap-x-3">
                                            <div class="sm:col-span-2 col-span-4">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-phone-line text-lg leading-none"></i>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-8 col-span-4">
                                            <a href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri-chat-2-line text-lg leading-none"></i> <span
                                                class="text-sm leading-none hidden sm:block">Message</span>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-2 col-span-4">
                                            <div class="hs-dropdown ti-dropdown flex justify-end">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                                </a>
                                                <div class="hs-dropdown-menu ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-share-line me-2 align-middle"></i>Share</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-video-chat-line me-2 align-middle"></i>Video Call</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box mb-0">
                                        <div class="box-body space-y-5">
                                        <div class="flex">
                                            <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-4 rtl:space-x-reverse">
                                            <img class="avatar avatar-lg rounded-sm" src="<?php echo e(asset('build/assets/img/users/3.jpg')); ?>"
                                                alt="Image Description">
                                            <div class="space-y-1 my-auto">
                                                <h5 class="font-semibold text-base leading-none">Wiley Waites</h5>
                                                <p class="text-gray-500 dark:text-white/70 font-semibold text-xs truncate xxxl:max-w-[9rem] max-w-[8rem]">
                                                WileyWaites2023@gmail.com
                                                </p>
                                                <p class="text-primary dark:text-primary text-xs font-semibold">+121 9585652655</p>
                                            </div>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                            <a aria-label="anchor" href="javascript:void(0);"><i
                                                class="ri ri-heart-fill text-base text-gray-300 dark:text-white/70 hover:text-danger"></i></a>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="grid grid-cols-12 gap-x-3">
                                            <div class="sm:col-span-2 col-span-4">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-phone-line text-lg leading-none"></i>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-8 col-span-4">
                                            <a href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri-chat-2-line text-lg leading-none"></i> <span
                                                class="text-sm leading-none hidden sm:block">Message</span>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-2 col-span-4">
                                            <div class="hs-dropdown ti-dropdown flex justify-end">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                                </a>
                                                <div class="hs-dropdown-menu ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-share-line me-2 align-middle"></i>Share</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-video-chat-line me-2 align-middle"></i>Video Call</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box mb-0">
                                        <div class="box-body space-y-5">
                                        <div class="flex">
                                            <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-4 rtl:space-x-reverse">
                                            <img class="avatar avatar-lg rounded-sm" src="<?php echo e(asset('build/assets/img/users/4.jpg')); ?>"
                                                alt="Image Description">
                                            <div class="space-y-1 my-auto">
                                                <h5 class="font-semibold text-base leading-none">Alica Nestle</h5>
                                                <p class="text-gray-500 dark:text-white/70 font-semibold text-xs truncate xxxl:max-w-[9rem] max-w-[8rem]">
                                                AlicaNestle2023@gmail.com
                                                </p>
                                                <p class="text-primary dark:text-primary text-xs font-semibold">+121 9585652655</p>
                                            </div>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                            <a aria-label="anchor" href="javascript:void(0);"><i
                                                class="ri ri-heart-fill text-base text-gray-300 dark:text-white/70 hover:text-danger"></i></a>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="grid grid-cols-12 gap-x-3">
                                            <div class="sm:col-span-2 col-span-4">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-phone-line text-lg leading-none"></i>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-8 col-span-4">
                                            <a href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri-chat-2-line text-lg leading-none"></i> <span
                                                class="text-sm leading-none hidden sm:block">Message</span>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-2 col-span-4">
                                            <div class="hs-dropdown ti-dropdown flex justify-end">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                                </a>
                                                <div class="hs-dropdown-menu ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-share-line me-2 align-middle"></i>Share</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-video-chat-line me-2 align-middle"></i>Video Call</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box mb-0">
                                        <div class="box-body space-y-5">
                                        <div class="flex">
                                            <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-4 rtl:space-x-reverse">
                                            <img class="avatar avatar-lg rounded-sm" src="<?php echo e(asset('build/assets/img/users/21.jpg')); ?>"
                                                alt="Image Description">
                                            <div class="space-y-1 my-auto">
                                                <h5 class="font-semibold text-base leading-none">Edgardo Huel</h5>
                                                <p class="text-gray-500 dark:text-white/70 font-semibold text-xs truncate xxxl:max-w-[9rem] max-w-[8rem]">
                                                EdgardoHuel2023@gmail.com
                                                </p>
                                                <p class="text-primary dark:text-primary text-xs font-semibold">+121 9585652655</p>
                                            </div>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                            <a aria-label="anchor" href="javascript:void(0);"><i
                                                class="ri ri-heart-fill text-base text-gray-300 dark:text-white/70 hover:text-danger"></i></a>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="grid grid-cols-12 gap-x-3">
                                            <div class="sm:col-span-2 col-span-4">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-phone-line text-lg leading-none"></i>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-8 col-span-4">
                                            <a href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri-chat-2-line text-lg leading-none"></i> <span
                                                class="text-sm leading-none hidden sm:block">Message</span>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-2 col-span-4">
                                            <div class="hs-dropdown ti-dropdown flex justify-end">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                                </a>
                                                <div class="hs-dropdown-menu ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-share-line me-2 align-middle"></i>Share</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-video-chat-line me-2 align-middle"></i>Video Call</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box mb-0">
                                        <div class="box-body space-y-5">
                                        <div class="flex">
                                            <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-4 rtl:space-x-reverse">
                                            <img class="avatar avatar-lg rounded-sm" src="<?php echo e(asset('build/assets/img/users/5.jpg')); ?>"
                                                alt="Image Description">
                                            <div class="space-y-1 my-auto">
                                                <h5 class="font-semibold text-base leading-none">Willie Makit</h5>
                                                <p class="text-gray-500 dark:text-white/70 font-semibold text-xs truncate xxxl:max-w-[9rem] max-w-[8rem]">
                                                Williemakit2023@gmail.com
                                                </p>
                                                <p class="text-primary dark:text-primary text-xs font-semibold">+121 9585652655</p>
                                            </div>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                            <a aria-label="anchor" href="javascript:void(0);"><i
                                                class="ri ri-heart-fill text-base text-danger hover:text-danger"></i></a>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="grid grid-cols-12 gap-x-3">
                                            <div class="sm:col-span-2 col-span-4">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-phone-line text-lg leading-none"></i>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-8 col-span-4">
                                            <a href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri-chat-2-line text-lg leading-none"></i> <span
                                                class="text-sm leading-none hidden sm:block">Message</span>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-2 col-span-4">
                                            <div class="hs-dropdown ti-dropdown flex justify-end">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                                </a>
                                                <div class="hs-dropdown-menu ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-share-line me-2 align-middle"></i>Share</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-video-chat-line me-2 align-middle"></i>Video Call</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box mb-0">
                                        <div class="box-body space-y-5">
                                        <div class="flex">
                                            <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-4 rtl:space-x-reverse">
                                            <img class="avatar avatar-lg rounded-sm" src="<?php echo e(asset('build/assets/img/users/6.jpg')); ?>"
                                                alt="Image Description">
                                            <div class="space-y-1 my-auto">
                                                <h5 class="font-semibold text-base leading-none">Katherina Kat</h5>
                                                <p class="text-gray-500 dark:text-white/70 font-semibold text-xs truncate xxxl:max-w-[9rem] max-w-[8rem]">
                                                KatherinaKat2023@gmail.com
                                                </p>
                                                <p class="text-primary dark:text-primary text-xs font-semibold">+121 9585652655</p>
                                            </div>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                            <a aria-label="anchor" href="javascript:void(0);"><i
                                                class="ri ri-heart-fill text-base text-gray-300 dark:text-white/70 hover:text-danger"></i></a>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="grid grid-cols-12 gap-x-3">
                                            <div class="sm:col-span-2 col-span-4">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-phone-line text-lg leading-none"></i>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-8 col-span-4">
                                            <a href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri-chat-2-line text-lg leading-none"></i> <span
                                                class="text-sm leading-none hidden sm:block">Message</span>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-2 col-span-4">
                                            <div class="hs-dropdown ti-dropdown flex justify-end">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                                </a>
                                                <div class="hs-dropdown-menu ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-share-line me-2 align-middle"></i>Share</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-video-chat-line me-2 align-middle"></i>Video Call</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box mb-0">
                                        <div class="box-body space-y-5">
                                        <div class="flex">
                                            <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-4 rtl:space-x-reverse">
                                            <img class="avatar avatar-lg rounded-sm" src="<?php echo e(asset('build/assets/img/users/13.jpg')); ?>"
                                                alt="Image Description">
                                            <div class="space-y-1 my-auto">
                                                <h5 class="font-semibold text-base leading-none">Wiley Dover</h5>
                                                <p class="text-gray-500 dark:text-white/70 font-semibold text-xs truncate xxxl:max-w-[9rem] max-w-[8rem]">
                                                Wileydover2023@gmail.com
                                                </p>
                                                <p class="text-primary dark:text-primary text-xs font-semibold">+121 9585652655</p>
                                            </div>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                            <a aria-label="anchor" href="javascript:void(0);"><i
                                                class="ri ri-heart-fill text-base text-danger hover:text-danger"></i></a>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="grid grid-cols-12 gap-x-3">
                                            <div class="sm:col-span-2 col-span-4">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-phone-line text-lg leading-none"></i>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-8 col-span-4">
                                            <a href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri-chat-2-line text-lg leading-none"></i> <span
                                                class="text-sm leading-none hidden sm:block">Message</span>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-2 col-span-4">
                                            <div class="hs-dropdown ti-dropdown flex justify-end">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                                </a>
                                                <div class="hs-dropdown-menu ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-share-line me-2 align-middle"></i>Share</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-video-chat-line me-2 align-middle"></i>Video Call</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box mb-0">
                                        <div class="box-body space-y-5">
                                        <div class="flex">
                                            <div class="sm:flex sm:space-x-3 sm:space-y-0 space-y-4 rtl:space-x-reverse">
                                            <img class="avatar avatar-lg rounded-sm" src="<?php echo e(asset('build/assets/img/users/21.jpg')); ?>"
                                                alt="Image Description">
                                            <div class="space-y-1 my-auto">
                                                <h5 class="font-semibold text-base leading-none">Benz Makit</h5>
                                                <p class="text-gray-500 dark:text-white/70 font-semibold text-xs truncate xxxl:max-w-[9rem] max-w-[8rem]">
                                                BenzMakit2023@gmail.com
                                                </p>
                                                <p class="text-primary dark:text-primary text-xs font-semibold">+121 9585652655</p>
                                            </div>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                            <a aria-label="anchor" href="javascript:void(0);"><i
                                                class="ri ri-heart-fill text-base text-danger hover:text-danger"></i></a>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <div class="grid grid-cols-12 gap-x-3">
                                            <div class="sm:col-span-2 col-span-4">
                                            <a aria-label="anchor" href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-phone-line text-lg leading-none"></i>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-8 col-span-4">
                                            <a href="javascript:void(0);"
                                                class="inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 w-full rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri-chat-2-line text-lg leading-none"></i> <span
                                                class="text-sm leading-none hidden sm:block">Message</span>
                                            </a>
                                            </div>
                                            <div class="sm:col-span-2 col-span-4">
                                            <div class="hs-dropdown ti-dropdown flex justify-end">
                                                <a aria-label="anchor" href="javascript:void(0);"
                                                class="hs-dropdown-toggle ti-dropdown-toggle inline-flex !p-2 flex-shrink-0 justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-xs dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:focus:ring-offset-white/10">
                                                <i class="ri ri-more-2-line text-lg leading-none"></i>
                                                </a>
                                                <div class="hs-dropdown-menu ti-dropdown-menu">
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-share-line me-2 align-middle"></i>Share</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-video-chat-line me-2 align-middle"></i>Video Call</a>
                                                <a class="ti-dropdown-item" href="javascript:void(0);"><i
                                                    class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <nav class="mt-6 flex justify-end items-center space-x-2 rtl:space-x-reverse">
                                    <a class="text-gray-500 dark:text-white/70 hover:text-primary e py-1 px-2 leading-none inline-flex items-center gap-2 rounded-sm"
                                        href="javascript:void(0);">
                                        <span aria-hidden="true">Prev</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="bg-primary text-white py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm"
                                        href="javascript:void(0);" aria-current="page">1</a>
                                    <a class="text-gray-500 dark:text-white/70 hover:text-primary e py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm"
                                        href="javascript:void(0);">2</a>
                                    <a class="text-gray-500 dark:text-white/70 hover:text-primary e py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm"
                                        href="javascript:void(0);">3</a>
                                    <a class="text-gray-500 dark:text-white/70 hover:text-primary e py-1 px-2 leading-none inline-flex items-center gap-2 rounded-sm"
                                        href="javascript:void(0);">
                                        <span class="sr-only">Next</span>
                                        <span aria-hidden="true">Next</span>
                                    </a>
                                    </nav>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xxl:col-span-3">
                                <div class="box">
                                <div class="box-body">
                                    <div class="relative">
                                    <div
                                        class="flex relative before:bg-black/50 before:absolute before:w-full before:h-full before:rounded-sm">
                                        <img src="<?php echo e(asset('build/assets/img/png-images/14.jpg')); ?>" alt="" class="h-[150px] w-full rounded-sm" id="profile-img2">
                                        <span
                                        class="absolute top-5 ltr:right-5 rtl:left-5 flex p-2 rounded-sm ring-1 ring-black/10 text-white bg-black/10 leading-none">
                                        <i class="ri ri-pencil-line"></i>
                                        <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                                            id="profile-change2">
                                        </span>
                                    </div>
                                    <div class="absolute top-[5.5rem] inset-x-0 text-center space-y-3">
                                        <div class="flex justify-center w-full">
                                        <div class="relative">
                                            <img src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" class="w-24 h-24 rounded-full ring-4 ring-white/10 mx-auto"
                                            id="profile-img" alt="pofile-img">
                                            <span
                                            class="absolute top-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white/10 text-white bg-white/10 dark:bg-bgdark leading-none">
                                            <i class="ri ri-pencil-line"></i>
                                            <input type="file"
                                                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" id="profile-change">
                                            </span>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="mt-14 space-y-5">
                                    <div class="mt-4  text-center">
                                        <h2 class="text-xl font-semibold">Airi Satou</h2>
                                        <p class="text-sm text-gray-500 dark:text-white/70 font-semibold">Team Lead</p>
                                    </div>
                                    <h5 class="box-title my-3">Contact Information</h5>
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                        <i
                                        class="ri ri-phone-line text-lg leading-none p-3 avatar avatar-sm bg-gray-100 dark:bg-black/20 rounded-sm"></i>
                                        <div class="my-auto">
                                        <h5 class="text-sm font-semibold">Phone Number</h5>
                                        <a href="javascript:void(0);" class="text-xs text-gray-500 dark:text-white/70">+121 9585652655</a>
                                        </div>
                                    </div>
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                        <i
                                        class="ri ri-mail-line text-lg leading-none p-3 avatar avatar-sm bg-gray-100 dark:bg-black/20 rounded-sm"></i>
                                        <div class="my-auto">
                                        <h5 class="text-sm font-semibold">Email Id</h5>
                                        <a href="javascript:void(0);"
                                            class="text-xs text-gray-500 dark:text-white/70">juliawalker@gmail.com</a>
                                        </div>
                                    </div>
                                    <h5 class="box-title my-3">WebSite Information</h5>
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                        <i
                                        class="ri ri-github-line text-lg leading-none p-3 avatar avatar-sm bg-primary/20 dark:bg-primary/20 text-primary dark:text-primary rounded-sm"></i>
                                        <div class="my-auto">
                                        <h5 class="text-sm font-semibold">Github Id</h5>
                                        <a href="javascript:void(0);"
                                            class="text-xs text-gray-500 dark:text-white/70">https://github.com/</a>
                                        </div>
                                    </div>
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                        <i
                                        class="ri ri-facebook-line text-lg leading-none p-3 avatar avatar-sm bg-secondary/20 dark:bg-secondary/20 text-secondary dark:text-secondary rounded-sm"></i>
                                        <div class="my-auto">
                                        <h5 class="text-sm font-semibold">Facebook Id</h5>
                                        <a href="javascript:void(0);"
                                            class="text-xs text-gray-500 dark:text-white/70">https://facebook.com/</a>
                                        </div>
                                    </div>
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                        <i
                                        class="ri ri-instagram-line text-lg leading-none p-3 avatar avatar-sm bg-danger/20 dark:bg-danger/20 text-danger dark:text-danger rounded-sm"></i>
                                        <div class="my-auto">
                                        <h5 class="text-sm font-semibold">instagram Id</h5>
                                        <a href="javascript:void(0);"
                                            class="text-xs text-gray-500 dark:text-white/70">https://instagram.com/</a>
                                        </div>
                                    </div>
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                        <i
                                        class="ri ri-twitter-line text-lg leading-none p-3 avatar avatar-sm bg-info/20 dark:bg-info/20 text-info dark:text-info rounded-sm"></i>
                                        <div class="my-auto">
                                        <h5 class="text-sm font-semibold">twitter Id</h5>
                                        <a href="javascript:void(0);"
                                            class="text-xs text-gray-500 dark:text-white/70">https://twitter.com/</a>
                                        </div>
                                    </div>
                                    <div class="flex space-x-3 rtl:space-x-reverse">
                                        <i
                                        class="ri ri-linkedin-line text-lg leading-none p-3 avatar avatar-sm bg-warning/20 dark:bg-warning/20 text-warning dark:text-warning rounded-sm"></i>
                                        <div class="my-auto">
                                        <h5 class="text-sm font-semibold">linkedin Id</h5>
                                        <a href="javascript:void(0);"
                                            class="text-xs text-gray-500 dark:text-white/70">https://linkedin.com/</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="button" class="w-full ti-btn ti-btn-primary">
                                    <i class="ti ti-report"></i>Report
                                    </button><button type="button"
                                    class="w-full ti-btn font-medium border-gray-200 bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10">
                                    <i class="ti ti-ban"></i>Block
                                    </button>
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

        <!-- CHOICES JS -->
        <script src="<?php echo e(asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')); ?>"></script>

        <!-- CONTACTS JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/contacts.js'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\projects\my-projects\laravel\vite\synto\synto-laravel\synto\resources\views/pages/contacts.blade.php ENDPATH**/ ?>