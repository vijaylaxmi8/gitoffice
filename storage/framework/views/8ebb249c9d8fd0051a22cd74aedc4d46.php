

<?php $__env->startSection('styles'); ?>

    
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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Establishment Section</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z"></path></svg>
                                        Leaves
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z"></path></svg> 
                                                    Leave
                                                </h5>
                                                <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#hs-medium-modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path></svg>
                                                        Add a Leave
                                                    </button>
                
                                                    <div id="hs-medium-modal" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:mx-auto">
                                                            <div class="ti-modal-content">
                                                            <div class="ti-modal-header">
                                                                <h3 class="ti-modal-title">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>
                                                                    Add New Leave
                                                                </h3>
                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                data-hs-overlay="#hs-medium-modal">
                                                                <span class="sr-only">Close</span>
                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                    fill="currentColor" />
                                                                </svg>
                                                                </button>
                                                            </div>
                                                            <form  action="<?php echo e(route('ESTB.leaves.store')); ?>" method="post">
                                                                <?php echo csrf_field(); ?>
                                                                <div class="ti-modal-body">
                                                                    <div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">
                                                                        <div class="max-w-sm space-y-3 pb-6 ">
                                                                            <label for="with-corner-hint" class="ti-form-label font-bold">Long Name : </label>
                                                                            <input type="text" name="longname" class="ti-form-input"  placeholder="Leave Long name">
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6 ">
                                                                            <label for="" class="ti-form-label font-bold">Leave Short Name : </label>
                                                                            <input type="text" name="shortname" class="ti-form-input"  placeholder="Leave short name">
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="with-corner-hint" class="ti-form-label font-bold">Applicable for (vacation_type)?</label>
                                                                            <input type="radio" name="vacation_type" class="pr-4 ml-2 ti-form-radio year1" value="Vacational">
                                                                            <label for="year1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> Vacational</label>
                                                                            <input type="radio" name="vacation_type" class="pr-4 ml-2 ti-form-radio year2" value="Non-vacational" >
                                                                            <label for="year2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> Non-vacational</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">    
                                                                        
                                                                        <div class="max-w-sm space-y-3 pb-6 ">
                                                                            <label for="" class="ti-form-label font-bold">Maximum Entitlement: </label>
                                                                            <input type="text" name="max_entitlement" class="ti-form-input"  placeholder="Maximum Entitlement">
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6 ">
                                                                            <label for="" class="ti-form-label font-bold">Minimum No : </label>
                                                                            <input type="text" name="min_days" class="ti-form-input"  placeholder="min availment no">
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6 ">
                                                                            <label for="" class="ti-form-label font-bold">Max No : </label>
                                                                            <input type="text" name="max_days" class="ti-form-input"  placeholder="max availment no">
                                                                        </div>
                                                                    </div>   
                                                                    <div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">  
                                                                        <div class="space-y-2">
                                                                            <label class="ti-form-label mb-0 font-bold">Leave, With Effect From</label>
                                                                            <input type="date" name="leave_wef" class="ti-form-input flatpickr-input date"
                                                                                    placeholder="Choose date">
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="with-corner-hint" class="ti-form-label font-bold">Applicable for (Employee Type)?</label>
                                                                            <input type="radio" name="applicable_to" class="pr-4 ml-2 ti-form-radio year1" value="confirmed">
                                                                            <label for="year1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> Confirmed</label>
                                                                            <input type="radio" name="applicable_to" class="pr-4 ml-2 ti-form-radio year2" value="all" >
                                                                            <label for="year2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> All</label>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="ti-modal-footer">
                                                                    <button type="button"
                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                    data-hs-overlay="#hs-medium-modal">
                                                                    Close
                                                                    </button>
                                                                    
                                                                    <input type="submit" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                                                    
                                                                    </div>
                                                                </form>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="table-bordered  rounded-sm ti-custom-table-head overflow-auto">
                                                <table id="leavestable" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                    <thead class="bg-gray-50 dark:bg-black/20">
                                                    <tr class="">
                                                        <th scope="col" class="dark:text-white/80 font-bold" >S.no</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Long Name</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Short Name</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Entitlement</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Vacation Type</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Min</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Max</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Status</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Actions</th>
                                                        
                                                    </tr>
                                                    </thead>
                                                    <tbody class="">
                                                    
                                                        <?php
                                                            $i = 1;
                                                        ?>
                                                        <?php $__empty_1 = true; $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                        
                                                            <tr class="<?php echo e($lr->status =='active'?'':'bg-gray-200'); ?>">
                                                                <td><?php echo e($i++); ?></td>
                                                                <td> <?php echo e($lr->longname); ?>

                                                                    <?php if(count($lr->leave_rules)>0): ?> 
                                                                            <span title="Rules are set"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="rgba(53,227,116,1)"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM11.0026 16L18.0737 8.92893L16.6595 7.51472L11.0026 13.1716L8.17421 10.3431L6.75999 11.7574L11.0026 16Z"></path></svg> </span>
                                                                    <?php endif; ?>       
                                                                </td>
                                                                <td><span><?php echo e($lr->shortname); ?></span></td>
                                                                
                                                                <td><span><?php echo e($lr->max_entitlement); ?></span></td>
                                                                <td><span><?php echo e($lr->vacation_type); ?></span></td>
                                                                <td><span><?php echo e($lr->min_days); ?></span></td>
                                                                <td><span><?php echo e($lr->max_days); ?></span></td>
                                                                
                                                                <td><span><?php echo e($lr->status); ?></span></td>
                                                                
                                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                        <a href="<?php echo e(route('ESTB.leave.leave_rules',$lr->id)); ?>"
                                                                        class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.50026 14.4853 7.50026 12C7.50026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.5003 9.51472 16.5003 12C16.5003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.5003 13.3807 14.5003 12C14.5003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.50026 10.6193 9.50026 12C9.50026 13.3807 10.6196 14.5 12.0003 14.5Z" fill="rgba(0,0,0,1)"></path></svg>
                                                                            <span
                                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                role="tooltip">
                                                                                View
                                                                            </span>
                                                                        </a>
                                                                        <?php if($lr->status=='active'): ?>
                                                                            <button data-hs-overlay="#leave_rule_edit_modal<?php echo e($i); ?>"
                                                                            class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                <span
                                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                    role="tooltip">
                                                                                    Edit
                                                                                </span>
                                                                            </button>
                                                            
                                                                            
                                                                                <div id="leave_rule_edit_modal<?php echo e($i); ?>" class="hs-overlay hidden ti-modal">
                                                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                        <div class="ti-modal-content">
                                                                                        <div class="ti-modal-header">
                                                                                            <h3 class="ti-modal-title">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                Edit Leave Rule <b><?php echo e($lr->longname.'['.$lr->vacation_type.']'); ?></b>
                                                                                            </h3>
                                                                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                            data-hs-overlay="#leave_rule_edit_modal<?php echo e($i); ?>">
                                                                                            <span class="sr-only">Close</span>
                                                                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                fill="currentColor" />
                                                                                            </svg>
                                                                                            </button>
                                                                                        </div>
                                                                                        <form  action="<?php echo e(route('ESTB.leaves.update',$lr->id)); ?>" method="post">
                                                                                            <?php echo csrf_field(); ?>
                                                                                            <?php echo method_field('patch'); ?>
                                                                                            <div class="ti-modal-body">
                                                                                                <div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">
                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="with-corner-hint" class="ti-form-label">Leave Long Name : </label>
                                                                                                        <input type="text" name="longname" class="ti-form-input"  placeholder="Long name" value="<?php echo e($lr->longname); ?>">
                                                                                                    </div>
                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label">Short Name : </label>
                                                                                                        <input type="text" name="shortname" class="ti-form-input"  placeholder="Short name" value="<?php echo e($lr->shortname); ?>">
                                                                                                    </div>
                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="with-corner-hint" class="ti-form-label font-bold">Applicable for (vacation_type)?</label>
                                                                                                        <input type="radio" name="vacation_type" class="pr-4 ml-2 ti-form-radio year1" value="Vacational"  <?php echo e(($lr->vacation_type =="Vacational") ?'checked':''); ?>>
                                                                                                        <label for="year1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> Vacational</label>
                                                                                                        <input type="radio" name="vacation_type" class="pr-4 ml-2 ti-form-radio year2" value="Non-vacational"  <?php echo e(($lr->vacation_type =="Non-vacational")?'checked':''); ?>>
                                                                                                        <label for="year2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> Non-vacational</label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">    
                                                                                                
                                                                                                    <div class="max-w-sm space-y-3 pb-6 ">
                                                                                                        <label for="" class="ti-form-label font-bold">Maximum Entitlement: </label>
                                                                                                        <input type="text" name="max_entitlement" class="ti-form-input"  placeholder="Maximum Entitlement" value="<?php echo e($lr->max_entitlement); ?>">
                                                                                                    </div>
                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label">Min: </label>
                                                                                                        <input type="text" name="min_days" class="ti-form-input"  placeholder="Min Availment" value="<?php echo e($lr->min_days); ?>">
                                                                                                    </div>
                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="" class="ti-form-label font-bold">Max : </label>
                                                                                                        <input type="text" name="max_days" class="ti-form-input"  placeholder="Max Availment" value="<?php echo e($lr->max_days); ?>">
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">    
                                                                                                    <div class="space-y-2">
                                                                                                        <label class="ti-form-label mb-0 font-bold">With Effect From</label>
                                                                                                        <input type="date" name="leave_wef" class="ti-form-input flatpickr-input date"
                                                                                                            placeholder="Choose date" value="<?php echo e($lr->leave_wef); ?>">
                                                                                                    </div>
                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                        <label for="with-corner-hint" class="ti-form-label font-bold">Applicable for (Employee Type)?</label>
                                                                                                        <input type="radio" name="applicable_to" class="pr-4 ml-2 ti-form-radio year1" value="confirmed" <?php echo e($lr->applicable_to=='confirmed'?'checked':''); ?>>
                                                                                                        <label for="year1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> Confirmed</label>
                                                                                                        <input type="radio" name="applicable_to" class="pr-4 ml-2 ti-form-radio year2" value="all" <?php echo e($lr->applicable_to=='all'?'checked':''); ?> >
                                                                                                        <label for="year2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> All</label>
                                                                                                    </div>
                                                                                                    <div class="space-y-2">
                                                                                                        <label class="ti-form-label mb-0 font-bold">Close Date</label>
                                                                                                        <input type="date" name="leave_end_date" class="ti-form-input flatpickr-input date"
                                                                                                            placeholder="Choose date" value="<?php echo e($lr->leave_end_date); ?>">
                                                                                                    </div>
                                                                                
                                                                                                </div>
                                                                                                <?php if($lr->status == 'inactive'): ?>
                                                                                                <br/>
                                                                                                    <div class="flex">
                                                                                                        <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active" >
                                                                                                        <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                                                                    </div>
                                                                                                <?php endif; ?>
                                                                                        
                                                                                            </div>
                                                                                            <div class="ti-modal-footer">
                                                                                                <button type="button"
                                                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                data-hs-overlay="#leave_rule_edit_modal<?php echo e($i); ?>">
                                                                                                Close
                                                                                                </button>
                                                                                                
                                                                                                <input type="submit" class="ti-btn  bg-warning text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                                
                                                                                                </div>
                                                                                            </form>  
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            <?php endif; ?>
                                                                    </div>
                                                                    <?php if($lr->status=='active'): ?>
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                        <form action="<?php echo e(route('ESTB.leaves.destroy',$lr->id)); ?>" method="post">
                                                                        
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
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <!-- End::row-5 -->
                    </div>
                        <!-- End::main-content -->
                    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

        <!-- APEX CHARTS JS -->
        <script src="<?php echo e(asset('build/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

        <!-- FLATPICKR JS -->
        <script src="<?php echo e(asset('build/assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/flatpickr.js'); ?>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <!-- Include DataTables CSS and JS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

        <script>
            $(document).ready(function(){
            //alert('Hello from jquery');
            new DataTable('#leavestable');
            
            });
        </script>

        
        <script>
            $(document).ready(function(){
               //for Checking whether the checkbox is checked or no , for updating the leave rules that can be combined.
                $(document).on('click','.Leave_type',function(){
                    //alert($(this).val());
                    if(!$(this).is(":checked")){
                        //if not checked, allow it to be checked
                        //alert('CHecked'+$(this).val()); // No ALert 
                        //remove the radions buttons selected
                        $('input:radio[name="allowed['+$(this).val()+']"]').removeAttr('checked');
                    }else{
                        //allow to be unchecked.
                        //alert('Not CHecked');
                        //DO Nothing
                    }
                });
            });   
        </script>


        <!-- INDEX JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/index-8.js'); ?>
        
       
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views/ESTB/leaves/index.blade.php ENDPATH**/ ?>