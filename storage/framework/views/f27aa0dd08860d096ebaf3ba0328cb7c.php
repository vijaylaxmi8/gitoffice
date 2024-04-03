

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
                                            Leaves Activities
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
                                    <nav class="-mb-0.5 flex justify-center space-x-6 rtl:space-x-reverse" aria-label="Tabs">
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-gray-500 rounded-sm hover:text-primary  dark:text-white/70 dark:hover:text-white active" id="pills-with-brand-color-item-1" data-hs-tab="#pills-with-brand-color-1" aria-controls="pills-with-brand-color-1">
                                        Leaves Form
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-gray-500 rounded-sm hover:text-primary  dark:text-white/70 dark:hover:text-white" id="pills-with-brand-color-item-2" data-hs-tab="#pills-with-brand-color-2" aria-controls="pills-with-brand-color-2">
                                        Entitlements
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-gray-500 rounded-sm hover:text-primary  dark:text-white/70 dark:hover:text-white" id="pills-with-brand-color-item-3" data-hs-tab="#pills-with-brand-color-3" aria-controls="pills-with-brand-color-3">
                                        Leave List
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-gray-500 rounded-sm hover:text-primary  dark:text-white/70 dark:hover:text-white" id="pills-with-brand-color-item-4" data-hs-tab="#pills-with-brand-color-4" aria-controls="pills-with-brand-color-4">
                                        Holiday and RH List 
                                        </button>
                                    </nav>

                                    <div class="mt-3">
                                        <!--Start Leaves Form Section  Here-->
                                        <div id="pills-with-brand-color-1" role="tabpanel" aria-labelledby="pills-with-brand-color-item-1">
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i>Leave Form Activity</h5>
                                                </div>
                                                <div class="box-body">
                                                    <button data-hs-overlay="#add_leaveform" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                            Add Leave Form 
                                                    </button>
                                                    <div id="add_leaveform" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Add New Leave Form  <span class="text-red-400">
                                                                    </h3>
                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                            data-hs-overlay="#add_leaveform">
                                                                            <span class="sr-only">Close</span>
                                                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                fill="currentColor" />
                                                                            </svg>
                                                                        </button>
                                                                </div>
                                                                
                                                                    <?php echo csrf_field(); ?> 
                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Name:<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="name" class="ti-form-input" required placeholder=" Name">
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Monbile Number:<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="title" class="ti-form-input" required placeholder=" Mobile Number">
                                                                            </div>   
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Balance:<span class="text-red-500">*</span></label>
                                                                                <input type="text" class="form-control" name="balance" id="balance" readonly="" value="CL=2, ML=0, EL=0, DL=5, RH=1">
                                                                            </div>                                                             
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Application Number:<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="application_no" class="ti-form-input" required placeholder="Apllication Number">
                                                                            </div>
                                                                                                                                                                    
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Leave Type:<span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select" name="type" id="type" required>
                                                                                    <option value="#">Choose Leave Type</option>
                                                                                    <option value="Cl">CL</option>
                                                                                    <option value="CL/Morning">CL/Morning</option>
                                                                                    <option value="CL/Morning">CL/Morning</option>
                                                                                    <option value="CL/Afternoon">CL/Afternoon</option>
                                                                                    <option value="RH">RH</option>
                                                                                    <option value="DL/Other">CL/Other</option>
                                                                                    <option value="DL/VTU">DL/VTU</option>
                                                                                    <option value="DL/GIT">DL/GIT</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">From Date:<span class="text-red-500">*</span></label>
                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                    </div>
                                                        
                                                                                    <input type="text" name="from_date"
                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                        id="date" required placeholder="Choose date" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">TO Date:<span class="text-red-500">*</span></label>
                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                    </div>
                                                        
                                                                                    <input type="text" name="to_date"
                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                        id="date" required placeholder="Choose date" >
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Leave Reason:<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="leave_reason" class="ti-form-input" required placeholder="Leave Reason">
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Alternate:</label>
                                                                                <select class="ti-form-select" name="alternate" id="alternate" required>
                                                                                    <option value="#">Choose Alternate</option>
                                                                                    
                                                                                </select>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Additional Alternate:</label>
                                                                                <input type="text" name="addiotnal_alternate" class="ti-form-input" required placeholder="Additional Alternate">
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#add_leaveform">
                                                                            Cancel
                                                                        </button>
                                                                                        
                                                                        <input type="submit" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Apply"/>
                                                                                    
                                                                    </div>
                                                                </form>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                                <tr class="">
                                                                    <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Name</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Mobile Number</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Balance</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Application Number</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Leave Type</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">From Date</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">To Date</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Leave Reasons</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Select Alternate</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Additional Alternate</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">actions</th>
                                                                </tr>
                                                            </thead>
                                                            <?php
                                                                $i=1;
                                                            ?>
                                                            
                                                        </table>  
                                                    </div>   
                                                </div>

                                            </div>
                                        </div>   
                                        <!--End Leaves Form Section Here-->
                                        
                                        <!--Start of Entile Section-->
                                        <div id="pills-with-brand-color-2" class="hidden" role="tabpanel" aria-labelledby="pills-with-brand-color-item-2">
                                            
                                        </div>
                                        <!--End of Entile Section-->

                                        <!-- Start of Leave List-->
                                        <div id="pills-with-brand-color-3" class="hidden" role="tabpanel" aria-labelledby="pills-with-brand-color-item-3">
                                            

                                        </div>
                                        <!-- End of Leave List-->
                                        
                                        
                                        <!--Start Of Holiday And RH List-->
                                        <div id="pills-with-brand-color-4" class="hidden" role="tabpanel" aria-labelledby="pills-with-brand-color-item-4">
                                            <div class="box-body">
                                                <div class="table-bordered rounded-sm ti-striped-table ti-custom-table-head overflow-auto">
                                                    <table id="leaves" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                        <thead class="bg-gray-50 dark:bg-black/20">
                                                            <tr class="">
                                                                <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Year</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Title</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Holiday RH Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Day</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Type</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <?php
                                                            $i=1;
                                                        ?>
                                                        <tbody class="">
                                                            <?php $__currentLoopData = $holidayrh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $holiday): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr class="">    
                                                                    <td><span><?php echo e($i++); ?></span></td>
                                                                    <td><span><?php echo e($holiday->year); ?></span></td>
                                                                    <td><span><?php echo e($holiday->title); ?></span></td>
                                                                    <td><span><?php echo e(\Carbon\Carbon::parse($holiday->holidayrh_date)->format('d-M-Y')); ?></span></td>  
                                                                    <td><span><?php echo e($holiday->day); ?></span></td>
                                                                    <td><span><?php echo e($holiday->type); ?></span></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Of Holiday And RH List-->
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

               new DataTable('#leaves');
            });
        </script>
           
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.components.staff.master-teaching', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views/staff/Teaching/leavesentitlements.blade.php ENDPATH**/ ?>