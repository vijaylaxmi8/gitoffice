

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
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="<?php echo e(route('ESTB.leaves.index')); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z"></path></svg>
                                        Leaves 
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg>
                                    </a>
                                    </li>
                                    <li class="text-sm">
                                            Leave Rules
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
                                                    Leave Rules <b style="color:red;font-size:18px"><?php echo e($leaves->longname.' for '.$leaves->vacation_type.' staff'); ?> </b>
                                                </h5>
                                                <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#hs-medium-modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path></svg>
                                                        Add Leave Rule
                                                    </button>
            
                                                    <div id="hs-medium-modal" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>
                                                                        Add New Leave Rule <b style="color:red;font-size:18px"><?php echo e($leaves->longname.' for '.$leaves->vacation_type.' staff'); ?> </b>
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
                                                                <form  action="<?php echo e(route('ESTB.leave.leave_rules.store',$leaves->id)); ?>" method="post"> 
                                                                    <?php echo csrf_field(); ?>
                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-4 gap-2 space-y-2 lg:space-y-0">    
                                                                            <div class="flex items-center">
                                                                            
                                                                                <label for="" class="ti-form-label font-bold pr-4">Is Carry Forwardable</label>
                                                                                <input type="radio" name="carry_forwardable" class="ti-form-radio year1" value="Yes" >
                                                                                <label for="carry_forwardable-yes" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 pr-4"> Yes</label>
                                                                                <input type="radio" name="carry_forwardable" class="ti-form-radio year2" checked value="No" >
                                                                                <label for="carry_forwardable-no" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> No</label>
                                                                            
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">With Effect From</label>
                                                                                <input type="date" name="cf_wef" class="ti-form-input flatpickr-input date"
                                                                                    placeholder="Choose date">
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6 ">
                                                                                <label for="" class="ti-form-label font-bold">GC Res NO: </label>
                                                                                <input type="text" name="cf_gcr" class="ti-form-input"  placeholder="GCR">
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Max Carry Forwardable</label>
                                                                                <input type="text" name="max_carry_forwardable" value="0" class="ti-form-input flatpickr-input"
                                                                                placeholder="Max Carry Forwardable">
                                                                            </div>
                                                                        </div>
                                                                        <hr class="pb-4 border-1 dark:bg-gray-700"/>
                                                                        <div class="grid lg:grid-cols-4 gap-2 space-y-2 lg:space-y-0">    
                                                                            <div class="flex items-center">
                                                                                <label for="" class="ti-form-label font-bold pr-2">Is Encashable</label>
                                                                                <input type="radio" name="encashable" class="pr-2 ml-2 ti-form-radio year1" value="Yes" >
                                                                                <label class="text-sm text-gray-500 ltr:ml-3 rtl:ml-3 dark:text-white/70 font-bold">Yes</label>
                                                                                <input type="radio" name="encashable" class="pr-2 ml-3 ti-form-radio year2" checked value="No" >
                                                                                <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70 font-bold pr-4">No</label>
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold pl-4">With Effect From</label>
                                                                                <input type="date" name="enc_wef" class="ti-form-input flatpickr-input pl-4 date"
                                                                                    placeholder="Choose date">
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6 ">
                                                                                <label for="" class="ti-form-label font-bold">GC Res NO: </label>
                                                                                <input type="text" name="enc_gcr" class="ti-form-input"  placeholder="GCR">
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Max Encashable</label>
                                                                                <input type="text" name="max_encashable"  value="0" class="ti-form-input flatpickr-input"
                                                                                    placeholder="Max encashable">
                                                                            </div>
                                                                        </div>
                                                                        <hr class="pb-4 border-1 dark:bg-gray-700"/>
                                                                        <div class="grid lg:grid-cols-4 gap-2 space-y-2 lg:space-y-0">    
                                                                            <div class="flex items-center">
                                                                                <label for="" class="ti-form-label font-bold pr-2">Gap for reapplying this leave</label>
                                                                                <input type="radio" name="gap" class="pr-2 ml-2 ti-form-radio gap" value="Yes" >
                                                                                <label class="text-sm text-gray-500 ltr:ml-3 rtl:ml-3 dark:text-white/70 font-bold">Yes</label>
                                                                            
                                                                                <input type="radio" name="gap" class="pr-2 ml-3 ti-form-radio gap" checked value="No" >
                                                                                <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70 font-bold pr-4">No</label>
                                                                                
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold pl-4">With Effect From</label>
                                                                                <input type="date" name="gap_wef" class="ti-form-input flatpickr-input pl-4 date"
                                                                                    placeholder="Choose date">
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6 ">
                                                                                <label for="" class="ti-form-label font-bold">GC Res NO: </label>
                                                                                <input type="text" name="gap_gcr" class="ti-form-input"  placeholder="GCR">
                                                                            </div>
                                                                    
                                                                            <div class="max-w-sm space-y-3 pb-6 ">
                                                                                <label for="" class="ti-form-label font-bold">Gap in No. of Days </label>
                                                                                <input type="text" name="min_gap"  value="0" class="ti-form-input"  placeholder="Gap between 2 similar leaves">
                                                                            </div>
                                                                        </div>
                                                                        <hr class="pb-4 border-1 dark:bg-gray-700"/>
                                                                        <div class="grid lg:grid-cols-4 gap-2 pb-4 space-y-2 lg:space-y-0">    
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Maximum times this leave can be availed</label>
                                                                                <input type="text" name="max_time_allowed"  class="ti-form-input flatpickr-input pb-4"
                                                                                    placeholder="Maximum times the leave can be taken">
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Period in which Maximum times this leave can be availed</label>
                                                                                <select class="ti-form-select" name="period">
                                                                                    <option value=''>Select the Period</option>
                                                                                    <option value='entire service'>Entire Service</option>
                                                                                    <option value='five years'>Once in Five Years</option>
                                                                                    <option value='one year'>Once in a Year</option>
                                                                                    <option value='six months'>Once in six months</option>
                                                                                    <option value='one month'>Once in a month</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="pb-4 border-1 dark:bg-gray-700"/>
                                                                        <div class="grid lg:grid-cols-4 gap-2 space-y-2 lg:space-y-0">    
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Prior Intimation days</label>
                                                                                <input type="text" name="no_days_prior_intimation" class="ti-form-input flatpickr-input"
                                                                                    placeholder="Approval required before going on leave">
                                                                            </div>

                                                                        </div>
                                                                        <hr class="pb-4 border-1 dark:bg-gray-700"/>
                                                                            <!-- Combination Rules Setting Section -->
                                                                        <label for="" class="ti-form-label font-bold">Check the leaves that can be combined with this leave type </label>
                                                                                            
                                                                        <?php $__currentLoopData = $allleaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!--For running the leave list-->
                                                                            <?php if($l->vacation_type == $leaves->vacation_type && $l->id!=$leaves->id && $l->status=='active'): ?>
                                                                                <?php
                                                                                    $checked="";
                                                                                    $combination_type_checked="";
                                                                                    $wef="";
                                                                                ?>
                                                                                <?php if($leaves->combineleaves !=null): ?>
                                                                                    <?php $__currentLoopData = $leaves->combine_leave; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l_combination): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <!--To make checkboxes to be checked when the value available in DB for Leave Type-->
                                                                                        <?php if($l_combination->pivot->combined_with==$l->id && $l_combination->pivot->status=='active'): ?>
                                                                                            <?php
                                                                                                $checked="checked";
                                                                                                $combination_type_checked=$l_combination->pivot->sandwitchable;
                                                                                                $wef=$l_combination->pivot->wef;
                                                                                                echo $wef;
                                                                                            ?>
                                                                                    
                                                                                        <?php endif; ?>    
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php endif; ?>
                                                                                <div class="flex">
                                                                                    <div class="max-w-sm space-y-3 pb-6 ">
                                                                                        <div class="max-w-sm pb-2">
                                                                                        
                                                                                            <input type="checkbox" name="leavetype[]" class="pr-4 pb-4 Leave_type"  <?php echo e($checked); ?> value="<?php echo e($l->id); ?>"> <?php echo e($l->longname); ?> <?php echo e($wef); ?>

                                                                                            <div class="py-4"><label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"><b>Combination Type:</b></label>
                                                                                                <input type="radio" name="allowed[<?php echo e($l->id); ?>]" class="pr-4 combo_type" <?php echo e(($combination_type_checked == "Bothside" && $checked=="checked")?'checked':''); ?> value="Bothside"> Both Side
                                                                                                <input type="radio" name="allowed[<?php echo e($l->id); ?>]" class="pr-4 combo_type" <?php echo e(($combination_type_checked == "Oneside" && $checked=="checked")?'checked':''); ?> value="Oneside"> One Side
                                                                                            
                                                                                            </div>
                                                                                        </div>
                                                                                
                                                                                    </div>
                                                                                </div>
                                                                        
                                                                            <?php endif; ?>
                                                                    
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <div class="max-w-sm space-y-3 pb-6 ">
                                                                            <label class="ti-form-label mb-0 font-bold">With Effect From <?php echo e($wef); ?></label>
                                                                            <input type="text" name="com_wef" class="ti-form-input flatpickr-input date"  placeholder="Choose date" value="<?php echo e($wef); ?>">
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
                                                <table id="leave_rule_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                    <thead class="bg-gray-50 dark:bg-black/20">
                                                        <tr class="">
                                                            <th scope="col" class="dark:text-white/80 font-bold" >S.no</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">Rule</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">Applicable(Yes/No)</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">With Effect From</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">GCR</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">Closed On</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">Closing GCR</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">Max/Min Allowed</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">Actions</th>
                                                        
                                                        </tr>
                                                    </thead>
                                                    <tbody class="">
                                                        <?php
                                                            $i = 1;
                                                        ?>
                                                        <?php if($leaves!=null): ?>
                                                            <?php $__empty_1 = true; $__currentLoopData = $leaves->leave_rules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    
                                                                <tr class="<?php echo e($lr->status =='active'?'':'bg-gray-200 border-white'); ?> ">
                                                                    <td class="<?php echo e($lr->status =='active'?'':'border-black'); ?>" rowspan="5"><?php echo e($i++); ?></td>
                                                                    <td class="<?php echo e($lr->status =='active'?'':'border-black'); ?>"> Carry Forwardable </td>
                                                                    <td><span><?php echo e($lr->carry_forwardable); ?></span></td>
                                                                    
                                                                    <td><span><?php echo e($lr->cf_wef); ?></span></td>
                                                                    <td><span><?php echo e($lr->cf_gcr); ?></span></td>
                                                                    <td><span><?php echo e($lr->cf_closing_date); ?></span></td>
                                                                    <td><span><?php echo e($lr->cf_closing_gcr); ?></span></td>
                                                                    <td><span><?php echo e($lr->max_cf); ?></span></td>
                                                                    <td rowspan="5" ><span>
                                                                        <?php if($lr->status=='active'): ?>
                                                                            <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                                                <div class="hs-tooltip ti-main-tooltip">
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
                                                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:mx-auto ">
                                                                                    
                                                                                            <div class="ti-modal-content">
                                                                                                <div class="ti-modal-header">
                                                                                                    <h3 class="ti-modal-title">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                            Edit Leave Rule <b style="color:red;font-size:18px"><?php echo e($leaves->longname.' for '.$leaves->vacation_type.' staff'); ?> </b>
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
                                                                                                <form  action="<?php echo e(route('ESTB.leave.leave_rules.update',[$leaves->id,$lr->id])); ?>" method="post">
                                                                                                    <?php echo csrf_field(); ?>
                                                                                                    <?php echo method_field('patch'); ?>
                                                                                                    <div class="ti-modal-body">
                                                                                                        <div class="grid lg:grid-cols-4 gap-2 space-y-2 lg:space-y-0">    
                                                                                                            <div class="grid-rows-2">
                                                                                                                <label for="" class="ti-form-label font-bold pr-4 ">Is Carry Forwardable?</label>
                                                                                                                <input type="radio" name="carry_forwardable" class="ti-form-radio year1" value="Yes" <?php echo e($lr->carry_forwardable =='Yes'?'checked':''); ?>>
                                                                                                                <label for="carry_forwardable-yes" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 pr-4"> Yes</label>
                                                                                                                <input type="radio" name="carry_forwardable" class="ti-form-radio year2" value="No" <?php echo e($lr->carry_forwardable =='No'?'checked':''); ?> >
                                                                                                                <label for="carry_forwardable-no" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> No</label>
                                                                                                            </div>
                                                                                                            <div class="space-y-2 pb-6">
                                                                                                                <label class="ti-form-label mb-0 font-bold">With Effect From</label>
                                                                                                                <input type="date" name="cf_wef" class="ti-form-input flatpickr-input date"
                                                                                                                    placeholder="Choose date" readonly value=<?php echo e($lr->cf_wef); ?>>
                                                                                                            </div>
                                                                                                            <div class="space-y-2 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">GC Res NO: </label>
                                                                                                                <input type="text" name="cf_gcr" class="ti-form-input"  placeholder="GCR" value=<?php echo e($lr->cf_gcr); ?>>
                                                                                                            </div>
                                                                                                            <div class="space-y-2 pb-6">
                                                                                                                <label class="ti-form-label mb-0 font-bold">Max Carry Forwardable</label>
                                                                                                                <input type="text" name="max_cf" class="ti-form-input flatpickr-input"
                                                                                                                    placeholder="Max Carry Forwardable" value=<?php echo e($lr->max_cf); ?>>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <hr class="pb-4 border-1 dark:bg-gray-700"/>
                                                                                                        <div class="grid lg:grid-cols-4 gap-2 space-y-2 lg:space-y-0">    
                                                                                                            <div class="grid-rows-2">
                                                                                                                <label for="" class="ti-form-label font-bold pr-2">Is Encashable</label>
                                                                                                        
                                                                                                                <input type="radio" name="encashable" class="pr-2 ml-2 ti-form-radio year1" value="Yes" <?php echo e($lr->encashable =='Yes'?'checked':''); ?>>
                                                                                                                <label class="text-sm text-gray-500 ltr:ml-3 rtl:ml-3 dark:text-white/70 font-bold">Yes</label>
                                                                                                            
                                                                                                                <input type="radio" name="encashable" class="pr-2 ml-3 ti-form-radio year2" value="No" <?php echo e($lr->encashable =='No'?'checked':''); ?>>
                                                                                                                <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70 font-bold pr-4">No</label>
                                                                                                        
                                                                                                            </div>
                                                                                                            <div class="space-y-2  pb-6 ">
                                                                                                                <label class="ti-form-label mb-0 font-bold pl-4">With Effect From</label>
                                                                                                                <input type="date" name="enc_wef" class="ti-form-input flatpickr-input pl-4 date"
                                                                                                                    placeholder="Choose date" readonly value=<?php echo e($lr->enc_wef); ?>>
                                                                                                            </div>
                                                                                                            <div class="space-y-2  pb-6 ">
                                                                                                                <label for="" class="ti-form-label font-bold">GC Res NO: </label>
                                                                                                                <input type="text" name="enc_gcr" class="ti-form-input"  placeholder="GCR" value="<?php echo e($lr->enc_gcr); ?>">
                                                                                                            </div>
                                                                                                            <div class="space-y-2  pb-6 ">
                                                                                                                <label class="ti-form-label mb-0 font-bold">Max Encashable</label>
                                                                                                                <input type="text" name="max_enc" class="ti-form-input flatpickr-input"
                                                                                                                    placeholder="Max encashable" value=<?php echo e($lr->max_enc); ?>>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        
                                                                                                        <hr class="pb-4 border-1 dark:bg-gray-700"/>
                                                                                                        <div class="grid lg:grid-cols-4 gap-2 space-y-2 lg:space-y-0 ">    
                                                                                                            <div class="grid-rows-2">
                                                                                                                <div>
                                                                                                                    <label for="" class="ti-form-label font-bold pr-2 ">Gap for reapplying leave</label>
                                                                                                                </div>
                                                                                                            <div> 
                                                                                                                    <input type="radio" name="gap" class="pr-2 ml-2 ti-form-radio gap" value="Yes" <?php echo e($lr->gap =='Yes'?'checked':''); ?>>
                                                                                                                    <label class="text-sm text-gray-500 ltr:ml-3 rtl:ml-3 dark:text-white/70 font-bold">Yes</label>
                                                                                                                
                                                                                                                
                                                                                                                    <input type="radio" name="gap" class="pr-2 ml-3 ti-form-radio gap" value="No" <?php echo e($lr->gap =='No'?'checked':''); ?>>
                                                                                                                    <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70 font-bold pr-4">No</label>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="space-y-2 pb-6">
                                                                                                                <label class="ti-form-label mb-0 font-bold pl-4">With Effect From</label>
                                                                                                                <input type="date" name="gap_wef" class="ti-form-input flatpickr-input pl-4 date"
                                                                                                                    placeholder="Choose date" readonly value=<?php echo e($lr->gap_wef); ?>>
                                                                                                            </div>
                                                                                                            <div class="space-y-2 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">GC Res NO: </label>
                                                                                                                <input type="text" name="gap_gcr" class="ti-form-input"  placeholder="GCR"  value=<?php echo e($lr->gap_gcr); ?>>
                                                                                                            </div>
                                                                                                            <div class="space-y-2 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">Gap in No. of Days </label>
                                                                                                                <input type="text" name="min_gap" class="ti-form-input"  placeholder="Gap between 2 similar leaves" value=<?php echo e($lr->min_gap); ?>>
                                                                                                            </div>
                                                                                                        </div> 
                                                                                                    
                                                                                                        <hr class="pb-4 border-1 dark:bg-gray-700"/>
                                                                                                        <div class="grid lg:grid-cols-2 gap-2 pb-4 space-y-2 lg:space-y-0">    
                                                                                                            <div class="space-y-2  pb-4 ">
                                                                                                                <label class="ti-form-label mb-0 font-bold">Maximum times this leave can be availed </label>
                                                                                                                <input type="text" name="max_time_allowed" class="ti-form-input flatpickr-input pb-4"
                                                                                                                    placeholder="Maximum times the leave can be taken" value="<?php echo e($lr->max_time_allowed); ?>">
                                                                                                            </div>
                                                                                                            <div class="space-y-2  pb-4 ">
                                                                                                                <label class="ti-form-label mb-0 font-bold">Period in which Maximum times this leave can be availed</label>
                                                                                                                <select class="ti-form-select" name="period">
                                                                                                                    <option value=''>Select the Period</option>
                                                                                                                    <option value='entire service' <?php echo e($lr->period == "entire service"?'selected':''); ?>>Entire Service</option>
                                                                                                                    <option value='five years' <?php echo e($lr->period == "five years"?'selected':''); ?>>Once in Five Years</option>
                                                                                                                    <option value='one year' <?php echo e($lr->period == "one year"?'selected':''); ?>>Once in a Year</option>
                                                                                                                    <option value='six months' <?php echo e($lr->period == "six months"?'selected':''); ?>>Once in six months</option>
                                                                                                                    <option value='one month' <?php echo e($lr->period == 'one month'? 'selected':''); ?>>Once in a month</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <hr class="pb-4 border-1 dark:bg-gray-700"/>
                                                                                                        <div class="grid lg:grid-cols-4 gap-2 space-y-2 lg:space-y-0">    
                                                                                                            <div class="space-y-2  pb-4 ">
                                                                                                                <label class="ti-form-label mb-0 font-bold">Prior Intimation days</label>
                                                                                                                <input type="text" name="prior_intimation_days" class="ti-form-input flatpickr-input"
                                                                                                                    placeholder="Approval required before going on leave" value="<?php echo e($lr->prior_intimation_days); ?>">
                                                                                                            </div>
                                
                                                                                                        </div>
                                                                                                        <hr class="pb-4 border-1 dark:bg-gray-700"/>
                                                                                                            <!-- Combination Rules Setting Section -->
                                                                                                        <label for="" class="ti-form-label font-bold">Check the leaves that can be combined with this leave type </label>
                                                                                                                    
                                                                                                        <?php $__currentLoopData = $allleaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!--For running the leave list-->
                                                                                                            <?php if($l->vacation_type == $leaves->vacation_type && $l->id!=$leaves->id && $l->status=='active'): ?>
                                                                                                                <?php
                                                                                                                    $checked="";
                                                                                                                    $combination_type_checked="";
                                                                                                                
                                                                                                                ?>
                                                                                                                <?php if($leaves->combine_leave !=null): ?>
                                                                                                                    <?php $__currentLoopData = $leaves->combine_leave; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l_combination): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                                        <!--To make checkboxes to be checked when the value available in DB for Leave Type-->

                                                                                                                        <?php if($l_combination->pivot->combined_id ==$l->id && $l_combination->pivot->status=='active'): ?>
                                                                                                                            <?php
                                                                                                                                $checked="checked";
                                                                                                                                $combination_type_checked=$l_combination->pivot->sandwitchable;
                                                                                                                                $wef=$l_combination->pivot->wef;
                                                                                                                            ?>
                                                                                                                    
                                                                                                                        <?php endif; ?>    
                                                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                                <?php endif; ?>
                                                                                                                <div class="flex">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6 ">
                                                                                                                        <div class="max-w-sm pb-2">
                                                                                                                            
                                                                                                                            <input type="checkbox" name="leavetype[]" class="pr-4 pb-4 Leave_type"  <?php echo e($checked); ?> value="<?php echo e($l->id); ?>"> <?php echo e($l->longname); ?>

                                                                                                                            <div class="py-4"><label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"><b>Combination Type:</b></label>
                                                                                                                                <input type="radio" name="allowed[<?php echo e($l->id); ?>]" class="pr-4 combo_type" <?php echo e(($combination_type_checked == "Bothside" && $checked=="checked")?'checked':''); ?> value="Bothside"> Both Side
                                                                                                                                <input type="radio" name="allowed[<?php echo e($l->id); ?>]" class="pr-4 combo_type" <?php echo e(($combination_type_checked == "Oneside" && $checked=="checked")?'checked':''); ?> value="Oneside"> One Side
                                                                                                                            
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                
                                                                                                            <?php endif; ?>
                                                                                                
                                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                        <div class="max-w-sm space-y-3 pb-6 ">
                                                                                                            <label class="ti-form-label mb-0 font-bold">With Effect From</label>
                                                                                                            <input type="text" name="com_wef" class="ti-form-input flatpickr-input date"  placeholder="Choose date" value="<?php echo e($wef); ?>">
                                                                                                        </div>
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
                                                                                </div>
                                                                            
                                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                                    <form action="<?php echo e(route('ESTB.leave.leave_rules.destroy',[$leaves->id,$lr->id])); ?>" method="post">
                                                                        
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
                                                                            </div>
                                                                        <?php endif; ?>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="<?php echo e($lr->status =='active'?'':'bg-gray-200'); ?>">
                                                                    <td> Encashable </td>
                                                                    <td><span><?php echo e($lr->encashable); ?></span></td>
                                                                    
                                                                    <td><span><?php echo e($lr->enc_wef); ?></span></td>
                                                                    <td><span><?php echo e($lr->enc_gcr); ?></span></td>
                                                                    <td><span><?php echo e($lr->enc_closing_date); ?></span></td>
                                                                    <td><span><?php echo e($lr->enc_closing_gcr); ?></span></td>
                                                                    
                                                                    <td><span><?php echo e($lr->max_enc); ?></span></td>
                                                                </tr>
                                                                <tr class="<?php echo e($lr->status =='active'?'':'bg-gray-200'); ?>">
                                                                    <td> Gap between two <br/>consecutive similar leaves</td>
                                                                    <td><span><?php echo e($lr->gap); ?></span></td>
                                                                    
                                                                    <td><span><?php echo e($lr->gap_wef); ?></span></td>
                                                                    <td><span><?php echo e($lr->gap_gcr); ?></span></td>
                                                                    <td><span><?php echo e($lr->gap_closing_date); ?></span></td>
                                                                    <td><span><?php echo e($lr->gap_closing_gcr); ?></span></td>
                                                                    
                                                                    <td><span><?php echo e($lr->min_gap); ?></span></td>
                                                                </tr>
                                                                <tr class="<?php echo e($lr->status =='active'?'':'bg-gray-200'); ?>">
                                                                    <td> Maximum Times Allowed</td>
                                                                    <td><?php echo e($lr->period); ?></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td><span><?php echo e($lr->max_time_allowed); ?></span></td>
                                                                </tr>
                                                                <tr class="<?php echo e($lr->status =='active'?'':'bg-gray-200'); ?>">
                                                                    <td> Prior Intimation Required</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td><span><?php echo e($lr->prior_intimation_days); ?></span></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                                
                                        </div>
                                </div>
                                <div class="box">
                                    <div class="box-header">
                                        <div class="flex">
                                            <h5 class="box-title my-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z"></path></svg> 
                                                Leave Combinations Rules <b style="color:red;font-size:18px"><?php echo e($leaves->longname.' for '.$leaves->vacation_type.' staff'); ?> </b>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="table-bordered  rounded-sm ti-custom-table-head overflow-auto">
                                            <table id="combinationleavetable" class="ti-custom-table ti-custom-table-head whitespace-nowrap ">
                                                <thead class="bg-gray-50 dark:bg-black/20">
                                                    <tr class="">
                                                        <th scope="col" class="dark:text-white/80 font-bold" >S.no </th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Leave</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Combination Type</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">With Effect From</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Closed On</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Status</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="">
                                              
                                                    <?php
                                                        $i = 1;
                                                    ?>
                                                    <?php $__currentLoopData = $leaves->latest_combine_leave; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l_combination): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr class="<?php echo e($l_combination->status =='active'?'':'bg-gray-200 border-white'); ?> ">
                                                            <td>
                                                                <?php echo e($i++); ?>

                                                            </td>
                                                            <td>
                                                                <?php echo e($l_combination->longname); ?>

                                                            </td>
                                                            <td>
                                                                <?php echo e($l_combination->pivot->sandwitchable); ?>

                                                            </td>
                                                            <td>
                                                                <?php echo e($l_combination->pivot->wef); ?>

                                                            </td>
                                                            <td>
                                                                <?php echo e($l_combination->pivot->closing_wef); ?>

                                                            </td>    
                                                            <td><?php echo e($l_combination->pivot->status); ?></td>
                                                            <td ><span>
                                                                <?php if($l_combination->pivot->status=='active'): ?>
                                                                    <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                            <button data-hs-overlay="#leave_rule_edit_modal<?php echo e($i); ?>"
                                                                                class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                    <span
                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                        role="tooltip">
                                                                                        Edit
                                                                                    </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            </td>
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

        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
        <link rel="stylesheet" href="https://cdn.tailwindcss.com/3.3.5">
        <script>
            $(document).ready(function(){
                //alert('Hello from jquery');
                new DataTable('#leave_rule_table');
                new DataTable('#combinationleavetable');
                //$('#leave_rule_table').DataTable();
            });
                
        </script>
        <script>
            $(document).ready(function(){
               //for Checking whether the checkbox is checked or no , for updating the leave rules that can be combined.
                $(document).on('click','.Leave_type',function(){
                   // alert($(this).val());
                    if(!$(this).is(":checked")){
                        //if not checked, allow it to be checked
                        //alert('CHecked'+$(this).val()); // No ALert 
                        //remove the radions buttons selected
                        $('input:radio[name="allowed['+$(this).val()+']"]').prop('checked', false);;
                    }else{
                        //allow to be unchecked.
                       // alert('Not CHecked');
                        //DO Nothing
                    }
                });
            });   
        </script>
        <!-- INDEX JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/index-8.js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views/ESTB/leaves/leave_rules/index.blade.php ENDPATH**/ ?>