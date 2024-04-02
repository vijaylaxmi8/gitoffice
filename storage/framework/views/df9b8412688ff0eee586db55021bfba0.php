

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
                        
                        <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">Welcome<span class="text-primary"> <?php echo e($staff->fname.' '.$staff->mname.' '.$staff->lname); ?></span></h3>
                    </div>       
                    <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-sm">
                            <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                Professioanl Activities
                                <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                            </a>
                        </li>
                               
                    </ol>
                </div>
            <!-- Page Header Close -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-6">
                             <!-- For Checking whether status is set or no-->
                                
                                 <?php if(session('return_data')): ?>
                                    <?php if(Session::get('return_data')['status'] == 1): ?>
                                        <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                            <span class='font-bold'>Result: </span> Database transaction Successful
                                        </div>
                                    <?php elseif(Session::get('return_data')['status'] == 0 && Session::get('return_data')['file_size_status'] == 0): ?>
                                        <?php if(Session::get('return_data')['status'] == 0): ?>
                                            <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                                <span class='font-bold'>Result : </span> Something went Wrong !
                                            </div>
                                        <?php endif; ?>
                                        <?php if(Session::get('return_data')['file_size_status'] == 0): ?>
                                            <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                                <span class='font-bold'>Result : </span> File size is more than 500KB. Please consider re-uploading
                                            </div>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php 
                                        Illuminate\Support\Facades\Session::forget('return_data'); 
                                        header("refresh: 2"); 
                                    ?>
                                <?php endif; ?>   

                        </div>
                    </div>

                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-x-6">
                            
                            <div class="col-span-12 xl:col-span-12">
                                    <div class="box">

                                            
                                            <div class="box-body">
                                                <div class="border-b border-gray-200 dark:border-white/10">
                                                    <nav class="-mb-0.5 flex justify-center space-x-6 rtl:space-x-reverse" aria-label="Tabs">
                                                        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-primary dark:text-white/70 active" id="horizontal-alignment-item-1" data-hs-tab="#horizontal-alignment-1" aria-controls="horizontal-alignment-1">
                                                            Attended
                                                        </button>
                                                        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-primary hs-tab-active:text-primary py-4 px-1 inline-flex items-center gap-2 border-b-[3px] border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-primary dark:text-white/70" id="horizontal-alignment-item-2" data-hs-tab="#horizontal-alignment-2" aria-controls="horizontal-alignment-2">
                                                            Conducted
                                                        </button>
                                                        
                                                    </nav>
                                                    </div>
            
                                                    <div class="mt-3">
                                                    <div id="horizontal-alignment-1" role="tabpanel" aria-labelledby="horizontal-alignment-item-1">
                                                       
                                                            <!--Professional Activity Attended-->
                                                            <div class="flex">
                                                                <h5 class="box-title my-auto">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z"></path></svg> 
                                                                    Professional Activity Attended Details
                                                                </h5>
                                                            </div> 
                                                            <div class="flex">
                                                                <button type="button" id="activity_attended_btn" class="hs-dropdown-toggle ti-btn ti-btn-primary float-right" data-hs-overlay="#add_professional_activity_attended">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path></svg>
                                                                        Add Professional Activity Attended
                                                                </button>
                                                                    
                                                                <div id="add_professional_activity_attended" class="hs-overlay hidden ti-modal">
                                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                        <div class="ti-modal-content">
                                                                            <div class="ti-modal-header">
                                                                                <h3 class="ti-modal-title">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>
                                                                                    Add New Professional Activities attended details
                                                                                </h3>
                                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" 
                                                                                    data-hs-overlay="#add_professional_activity_attended">
                                                                                    <span class="sr-only">Close</span>
                                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                        fill="currentColor"/>
                                                                                    </svg>
                                                                                </button>
                                                                                <?php if(($errors->has('title'))||($errors->has('organizer'))||($errors->has('role'))||($errors->has('level'))||($errors->has('category'))||($errors->has('sponsored'))||($errors->has('sponsored_by'))||($errors->has('from_date'))||($errors->has('to_date'))||($errors->has('no_of_days'))||($errors->has('document'))): ?>
                                                                                    <script>
                                                                                        //alert(1);
                                                                                        $(window).on('load', function() {
                                                                                            //if($('#horizontal-alignment-item-1').parent().find('.active')){
                                                                                                //alert('attended');
                                                                                                
                                                                                                $('#horizontal-alignment-item-1').trigger('click')
                                                                                               $('#activity_attended_btn').trigger("click");

                                                                                            
                                                                                                
                                                                                        });      
                                                                                    </script>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                            <form action="<?php echo e(route('Teaching.professionalactivities.attended.store')); ?>" method="post" enctype="multipart/form-data">
                                                                                <?php echo csrf_field(); ?>
                                                                                <div class="ti-modal-body">
                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="with-corner-hint" class="ti-form-label font-bold">Title:<span class="text-red-500">*</span></label>
                                                                                            <input type="text" name="title" id="pro_att_title" class="ti-form-input" required placeholder="Title">
                                                                                            <?php if($errors->has('title')): ?>
                                                                                                <div class="text-red-700"><?php echo e($errors->first('title')); ?></div>
                                                                                            <?php endif; ?>
                                                                                            <div id="pr_att_titleNameError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label font-bold">Organizer: <span class="text-red-500">*</span></label>
                                                                                            <input type="text" name="organizer" id="pro_att_organizer" class="ti-form-input" required placeholder="Organizer">
                                                                                            <?php if($errors->has('organizer')): ?>
                                                                                                <div class="text-red-700"><?php echo e($errors->first('organizer')); ?></div>
                                                                                            <?php endif; ?>
                                                                                            <div id="pr_att_organizerError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label mb-0 font-bold">Role<span class="text-red-500">*</span></label> 
                                                                                                <select class="ti-form-select" id="pro_att_role" name="role" required>
                                                                                                    <option value="#">Choose Role</option>
                                                                                                    <option value="Participant">Participant</option>
                                                                                                    <option value="Resource Person">Resource Person</option>
                                                                                                </select>
                                                                                                <?php if($errors->has('role')): ?>
                                                                                                    <div class="text-red-700"><?php echo e($errors->first('role')); ?></div>
                                                                                                <?php endif; ?>
                                                                                            <div id="pro_att_roleError" class="error text-red-700"></div>
                                                                                        </div>
                                                        
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label mb-0 font-bold">Level <span class="text-red-500">*</span></label>
                                                                                            <select class="ti-form-select" id="pro_att_level" name="level"  required>
                                                                                                <option value="#">Choose Level</option>
                                                                                                <option value="Local">Local</option>
                                                                                                <option value="National">National</option>
                                                                                                <option value="International">International</option>
                                                                                            </select>
                                                                                            <?php if($errors->has('level')): ?>
                                                                                                <div class="text-red-700"><?php echo e($errors->first('level')); ?></div>
                                                                                            <?php endif; ?>
                                                                                            <div id="pro_att_levelError" class="error text-red-700"></div>
                                                                                        </div>   
                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label  font-bold">Category:<span class="text-red-500">*</span></label>
                                                                                            <select class="ti-form-select category" id="pro_att_category" name="category">
                                                                                                <option value="#">Choose Category</option>
                                                                                                <option value="Workshop">Workshop</option>
                                                                                                <option value="FDP">FDP</option>
                                                                                                <option value="Seminar">Seminar</option>
                                                                                                <option value="Webinar">Webinar</option>
                                                                                                <option value="STTP">STTP</option>
                                                                                                <option value="Certification Program">Certification Program</option>
                                                                                                <option value="MDP/EDP">MDP/EDP</option>
                                                                                            </select>
                                                                                            <?php if($errors->has('category')): ?>
                                                                                                <div class="text-red-700"><?php echo e($errors->first('category')); ?></div>
                                                                                            <?php endif; ?>
                                                                                            <div id="pro_att_categoryError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label  font-bold">Sponsored: <span class="text-red-500">*</span></label>
                                                                                            <select class="ti-form-select sponsored_type sponsored" id="pro_att_sponsored" name="sponsored" required>
                                                                                                <option value="#">Choose One</option>
                                                                                                <option value="Yes">Yes</option>
                                                                                                <option value="No">No</option>                       
                                                                                            </select>
                                                                                            <?php if($errors->has('sponsored')): ?>
                                                                                                <div class="text-red-700"><?php echo e($errors->first('sponsored')); ?></div>
                                                                                            <?php endif; ?>
                                                                                            <div id="pro_att_sponsoredError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                        
                                                                                        <div class="max-w-sm space-y-3 pb-6 sponsored_by">
                                                                                            <label for="" class="ti-form-label font-bold">Sponsored By:</label>
                                                                                            <select class="ti-form-select sponsoredBy" id="pro_att_sponsoredby" name="sponsored_by">
                                                                                                <option value="#">Choose One</option>
                                                                                                <option  value="KLS GIT">KLS GIT</option>
                                                                                                <option value="Other">Other</option>
                                                                                            </select>
                                                                                            <?php if($errors->has('sponsored_by')): ?>
                                                                                                <div class="text-red-700"><?php echo e($errors->first('sponsored_by')); ?></div>
                                                                                            <?php endif; ?>
                                                                                            <div id="pro_att_sponsoredbyError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                        <div class="max-w-sm space-y-3 pb-6 otherSponsor othersponsored">
                                                                                            <label for="" class="ti-form-label font-bold">Other Sponsor:</label>
                                                                                            <input type="text" name="other_sponsored" class="ti-form-input othersponsored" id="pro_att_otherSponsor" placeholder="Other Sponsor">
                                                                                            <?php if($errors->has('other_sponsored')): ?>
                                                                                                <div class="text-red-700"><?php echo e($errors->first('other_sponsored')); ?></div>
                                                                                            <?php endif; ?>
                                                                                            <div id="othersponsoredError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                    </div> 
                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">  
                                                                                        <div class="flex max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label font-bold">From Date: <span class="text-red-500">*</span></label>
                                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                            </div>
                                                        
                                                                                            <input type="date" name="from_date"
                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date attended_from_date"
                                                                                                id="pro_att_from_date" required placeholder="Choose date" >

                                                                                            <?php if($errors->has('from_date')): ?>
                                                                                                <div class="text-red-700"><?php echo e($errors->first('from_date')); ?></div>
                                                                                            <?php endif; ?>
                                                                                            <div id="pro_att_fromdateError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                        <div class="flex max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label font-bold">To Date : <span class="text-red-500">*</span></label>
                                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                            </div>
                                                        
                                                                                            <input type="date" name="to_date"
                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date attended_to_date border "
                                                                                                    id="pro_att_to_date" required placeholder="Choose date">

                                                                                            <?php if($errors->has('to_date')): ?>
                                                                                                <div class="text-red-700"><?php echo e($errors->first('to_date')); ?></div>
                                                                                            <?php endif; ?>
                                                                                            <div id="pr_att_todateError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">   
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label pt-4 font-bold">No Of Days :<span class="text-red-500">*</span></label>
                                                                                            <input type="text" name="no_of_days" id="pro_att_no_of_days" class="ti-form-input no_of_days_attended " placeholder="No of Days" readonly >
                                                                                            <?php if($errors->has('no_of_days')): ?>
                                                                                                <div class="text-red-700"><?php echo e($errors->first('no_of_days')); ?></div>
                                                                                            <?php endif; ?>
                                                                                            <div id="pro_att_noofdaysError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                            <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">*</span></label>
                                                                                            <span class="sr-only">Choose Profile photo</span>
                                                                                                <input type="file" accept="application/pdf" name="document" required id="pro_att_doc" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                                ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                                file:rounded-sm file:border-0
                                                                                                file:text-sm file:font-semibold
                                                                                                file:bg-primary file:text-white
                                                                                                hover:file:bg-primary focus-visible:outline-none doc">
                                                                                                <?php if($errors->has('document')): ?>
                                                                                                <div class="text-red-700"><?php echo e($errors->first('document')); ?></div>
                                                                                            <?php endif; ?>
                                                                                            <div id="pro_att_docError" class="error text-red-700"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="ti-modal-footer">
                                                                                    <button type="button"
                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                    data-hs-overlay="#add_professional_activity_attended">
                                                                                    Close
                                                                                    </button>
                                                                                    
                                                                                    <input type="submit" id="professional_activity_attended_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                                                                    
                                                                                </div>
                                                                            </form>  
                                                                        </div>
                                                                    </div>
                                                                </div>   
                                                                <!-- modal Ending--> 
                                                            </div> 
                                                            
                                                        
                                                        
                                                            <!-- tabel content-->
                                                            <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto">
                                                                <div class="flex justify-end mt-4">
                                                                    <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none hover:bg-green-600">Export to Excel</button>
                                                                </div>
                                                                <table id="activity_attended_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                                    <thead class="bg-gray-50 dark:bg-black/20">
                                                                        <tr class="">
                                                                            <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold ">E-Gov ID</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold ">Title</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold">Orgnizer</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold">Role</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold">Level</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold">Category</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold">Sponsored</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold">Sponsored By</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold">From Date</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold">To Date</th>
                                                                            <th scope="col" class="dark:text-white/80 font-bold">No OF days</th>
                                                                            
                                                                            <?php if(!isset($export) || !$export): ?>
                                                                                <th scope="col" class="dark:text-white/80 font-bold ">Document</th>
                                                                            <?php endif; ?>
                                                                            <th scope="col" class="dark:text-white/80 font-bold">Actions</th>
                                                                        
                                                                        </tr>
                                                                    </thead>
                                                                    <?php
                                                                        $i = 1;
                                                                    ?>
                                                                    <tbody class="">
                                                                        <?php if($staff->professional_activity_attendee !=null): ?>
                                                                            <?php $__empty_1 = true; $__currentLoopData = $staff->professional_activity_attendee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $act): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                
                                                                                <tr class="">
                                                                                
                                                                                    <td><span><?php echo e($i++); ?></span></td>
                                                                                    <td><span><?php echo e($act->egov_id); ?></span></td>
                                                                                    <td><span><?php echo e($act->title); ?></span></td>
                                                                                    <td><span><?php echo e($act->organizer); ?></span></td>
                                                                                    <td><span><?php echo e($act->role); ?></span></td>
                                                                                    <td><span><?php echo e($act->level); ?></span></td>
                                                                                    <td><span><?php echo e($act->category); ?></span></td>
                                                                                    <td><span><?php echo e($act->sponsored); ?></span></td>
                                                                                    <td><span><?php echo e(($act->sponsored=="No"? '--NA--' : $act->sponsored_by)); ?></span></td>
                                                                                    <td><span><?php echo e(\Carbon\Carbon::parse($act->from_date)->format('d-M-Y')); ?></span></td>
                                                                                    <td><span><?php echo e(\Carbon\Carbon::parse($act->to_date)->format('d-M-Y')); ?></span></td>
                                                                                    <td><span><?php echo e($act->no_of_days); ?></span></td>
                                                                                    
                                                                                    <?php if(!isset($export) || !$export): ?>
                                                                                        <td><span><a href=<?php echo e(asset('Uploads/Professional_Activity_Attended/'.$act->document)); ?> class='font-medium text-blue-600 dark:text-blue-500 hover:underline' target="_blank"><?php echo e($act->document); ?></a></span></td>
                                                                                    <?php endif; ?>
                                                                                    
                                                                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <button data-hs-overlay="#professional_activity_edit_modal<?php echo e($i); ?>" id="btn<?php echo e($i); ?>" btn-val=<?php echo e($i); ?>

                                                                                            class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary professional_activity_edit_modal_click">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                <span
                                                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                    role="tooltip">
                                                                                                    Edit
                                                                                                </span>
                                                                                            </button>
                                                                                            <div id="professional_activity_edit_modal<?php echo e($i); ?>" class="hs-overlay hidden ti-modal">
                                                                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                                    <div class="ti-modal-content">
                                                                                                        <div class="ti-modal-header">
                                                                                                            <h3 class="ti-modal-title">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                                Edit Professional Activities Attended
                                                                                                            </h3>
                                                                                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                                data-hs-overlay="#professional_activity_edit_modal<?php echo e($i); ?>">
                                                                                                                <span class="sr-only">Close</span>
                                                                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <path
                                                                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                                    fill="currentColor"/>
                                                                                                                </svg>
                                                                                                            </button>
                                                                                                            <?php if(($errors->has('edit_title'))||($errors->has('edit_organizer'))||($errors->has('edit_role'))||($errors->has('edit_level'))||($errors->has('edit_category'))||($errors->has('edit_sponsored'))||($errors->has('edit_sponsored_by'))||($errors->has('edit_from_date'))||($errors->has('edit_to_date'))||($errors->has('edit_no_of_days'))): ?>
                                                                                                                <script>
                                                                                                                    //alert(387);
                                                                                                                        window.onload=function(){
                                                                                                                        //alert('123');
                                                                                                                        //alert("Validation errors");

                                                                                                                    // document.getElementById('btn'+<?php echo e(old('modal_no')); ?>).click();
                                                                                                                    };   
                                                                                                                
                                                                                                                </script>
                                                                                                            <?php endif; ?>
                                                                                                        </div>
                                                                                                        <form  action="<?php echo e(route('Teaching.professionalactivities.attended.update',$act->id)); ?>" method="post" enctype="multipart/form-data">
                                                                                                            <?php echo csrf_field(); ?>
                                                                                                            <?php echo method_field('patch'); ?>
                                                                                                            <div class="ti-modal-body">
                                                                                                                <input type='hidden' name='attended_modal_no' class='attended_modal_no' value=<?php echo e(old('attended_modal_no')); ?>/>
                                                                                                                <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="with-corner-hint" class="ti-form-label">Title : <span class="text-red-500">*</span></label>
                                                                                                                        <input type="text" name="edit_title" class="ti-form-input" placeholder="Title" value="<?php echo e($act->title); ?>">
                                                                                                                        <?php if($errors->has('edit_title')): ?>
                                                                                                                            <div class="text-red-700"><?php echo e($errors->first('edit_title')); ?></div>
                                                                                                                        <?php endif; ?>
                                                                                                                        <div id="titleNameError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label">Organizer : <span class="text-red-500">*</span></label>
                                                                                                                        <input type="text" name="edit_organizer" class="ti-form-input" required placeholder="Organizer" value="<?php echo e($act->organizer); ?>">
                                                                                                                        <div id="organizerError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Role: <span class="text-red-500">*</span></label>
                                                                                                                        <select class="ti-form-select" name="edit_role" >
                                                                                                                            <option value="#">Choose Role</option>
                                                                                                                            <option value="Participant" <?php echo e(($act->role=='Participant'? 'selected':'')); ?>>Participant</option>
                                                                                                                            <option value="Resource Person" <?php echo e(($act->role=='Resource Person'? 'selected':'')); ?>>Resource Person</option>
                                                                                                                            
                                                                                                                        </select>
                                                                                                                            <?php if($errors->has('edit_role')): ?>
                                                                                                                            <div class="text-red-700"><?php echo e($errors->first('edit_title')); ?></div>
                                                                                                                        <?php endif; ?>
                                                                                                                        <div id="roleError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Level <span class="text-red-500">*</span></label>
                                                                                                                        <select class="ti-form-select" name="edit_level" >
                                                                                                                            <option value="#">Choose Level</option>
                                                                                                                            <option value="Local" <?php echo e(($act->level=='Local'? 'selected':'')); ?>>Local</option>
                                                                                                                            <option value="National" <?php echo e(($act->level=='National'? 'selected':'')); ?>>National</option>
                                                                                                                            <option value="International" <?php echo e(($act->level=='International'? 'selected':'')); ?>>International</option>
                                                                                                                        </select>
                                                                                                                            <?php if($errors->has('edit_level')): ?>
                                                                                                                            <div class="text-red-700"><?php echo e($errors->first('edit_title')); ?></div>
                                                                                                                        <?php endif; ?>
                                                                                                                        <div id="levelError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label">Category : <span class="text-red-500">*</span></label>
                                                                                                                        <select class="ti-form-select" name="edit_category">
                                                                                                                                <option value="#">Choose Category</option>
                                                                                                                                <option value="Workshop" <?php echo e(($act->category=='Workshop'? 'selected':'')); ?>>Workshop</option>
                                                                                                                                <option value="FDP" <?php echo e(($act->category=='FDP'? 'selected':'')); ?>>FDP</option>
                                                                                                                                <option value="Seminar" <?php echo e(($act->category=='Seminar'? 'selected':'')); ?>>Seminar</option>
                                                                                                                                <option value="Webinar" <?php echo e(($act->category=='Webinar'? 'selected':'')); ?>>Webinar</option>
                                                                                                                                <option value="STTP" <?php echo e(($act->category=='STTP'? 'selected':'')); ?>>STTP</option>
                                                                                                                                <option value="Certification Program" <?php echo e(($act->category=='Certification Program'? 'selected':'')); ?>>Certification Program</option>
                                                                                                                                <option value="MDP/EDP" <?php echo e(($act->category=='MDP/EDP'? 'selected':'')); ?>>MDP/EDP</option>
                                                                                                                        </select>
                                                                                                                        <?php if($errors->has('edit_category')): ?>
                                                                                                                            <div class="text-red-700"><?php echo e($errors->first('edit_category')); ?></div>
                                                                                                                        <?php endif; ?>
                                                                                                                        <div id="categoryError" class="error text-red-700"></div>
                                                                                                                    </div>
                                    
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label">Sponsored:<span class="text-red-500">*</span></label>
                                                                                                                        <select class="ti-form-select sponsored_type sponsored" name="edit_sponsored"  required>
                                                                                                                            <option value="#">Choose One</option>
                                                                                                                            <option value="Yes" <?php echo e($act->sponsored=='Yes'? 'selected':''); ?>>Yes</option>
                                                                                                                            <option value="No" <?php echo e($act->sponsored=='No'? 'selected':''); ?>>No</option>
                                                                                                                        </select>
                                                                                                                            <?php if($errors->has('edit_sponsored')): ?>
                                                                                                                            <div class="text-red-700"><?php echo e($errors->first('edit_sponsored')); ?></div>
                                                                                                                        <?php endif; ?>
                                                                                                                        <div id="sponsoredError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                    
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                    

                                                                                                                    <div class="max-w-sm space-y-3 pb-6 sponsored_by">
                                                                                                                        <label for="" class="ti-form-label font-bold">Sponsored By:</label>
                                                                                                                        <select class="ti-form-select sponsoredBy" name="edit_sponsored_by">
                                                                                                                            <option value="#">Choose One</option>
                                                                                                                            <option value="KLS GIT" <?php echo e($act->sponsored_by=='KLS GIT'? 'selected':''); ?>>KLS GIT</option>
                                                                                                                            <option value="Other" <?php echo e($act->sponsored_by=='Other'? 'selected':''); ?>>Other</option>
                                                                                                                        </select>
                                                                                                                            <?php if($errors->has('edit_sponsored_by')): ?>
                                                                                                                            <div class="text-red-700"><?php echo e($errors->first('edit_sponsored_by')); ?></div>
                                                                                                                        <?php endif; ?>
                                                                                                                        <div id="sponsoredbyError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6 otherSponsor" id="otherSponsor">
                                                                                                                        <label for="" class="ti-form-label font-bold">Other Sponsor:</label>
                                                                                                                        <input type="text" name="edit_other_sponsored" class="ti-form-input othersponsored" placeholder="Other Sponsor" value="<?php echo e($act->other_sponsored); ?>">
                                                                                                                            <?php if($errors->has('edit_othersponsor')): ?>
                                                                                                                            <div class="text-red-700"><?php echo e($errors->first('edit_othersponsor')); ?></div>
                                                                                                                        <?php endif; ?>
                                                                                                                        <div id="othersponsorError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">

                                                                                                                    <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label">From Date :<span class="text-red-500">*</span></label>
                                                                                                                                                                    
                                                                                                                        <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                            <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                                    class="ri ri-calendar-line"></i></span>
                                                                                                                        </div>
                                                                        
                                                                                                                        <input type="date" name="edit_from_date"
                                                                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date attended_from_date_edit"
                                                                                                                            required placeholder="Choose date" value="<?php echo e($act->from_date); ?>">
                                                                                                                            <?php if($errors->has('edit_from_date')): ?>
                                                                                                                                <div class="text-red-700"><?php echo e($errors->first('edit_from_date')); ?></div>
                                                                                                                            <?php endif; ?>
                                                                                                                            <div id="fromdateError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                    <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                            <label for="" class="ti-form-label">To Date : <span class="text-red-500">*</span></label>
                                                                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                                <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                                                            </div>
                                                                            
                                                                                                                            <input type="date" name="edit_to_date"
                                                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date attended_to_date_edit"
                                                                                                                                required placeholder="Choose date" value="<?php echo e($act->to_date); ?>">
                                                                                                                                <?php if($errors->has('edit_to_date')): ?>
                                                                                                                                    <div class="text-red-700"><?php echo e($errors->first('edit_to_date')); ?></div>
                                                                                                                                <?php endif; ?>
                                                                                                                                <div id="todateError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                    
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label">No Of Days :</label>
                                                                                                                        <input type="text" name="edit_no_of_days" class="ti-form-input no_of_days_attended_edit" value="<?php echo e($act->no_of_days); ?>" readonly placeholder="enter number of days">
                                                                                                                            <?php if($errors->has('edit_no_of_days')): ?>
                                                                                                                            <div class="text-red-700"><?php echo e($errors->first('edit_no_of_days')); ?></div>
                                                                                                                        <?php endif; ?>
                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                                            <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">* <?php echo e($act->document); ?></span></label>
                                                                                                                            <span class="sr-only">Choose Profile photo</span>
                                                                                                                                <input type="file" accept="application/pdf" name="document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                                                                ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                                                                file:rounded-sm file:border-0
                                                                                                                                file:text-sm file:font-semibold
                                                                                                                                file:bg-primary file:text-white
                                                                                                                                hover:file:bg-primary focus-visible:outline-none doc" required value="<?php echo e($act->document); ?>">
                                                                                                                                <?php if($errors->has('document')): ?>
                                                                                                                                    <div class="text-red-700"><?php echo e($errors->first('document')); ?></div>
                                                                                                                                <?php endif; ?>
                                                                                                                            <div id="docEditError" class="error text-red-700"></div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>    
                                                                                                                        
                                                                                                            </div>
                                                                                                            <div class="ti-modal-footer">
                                                                                                                <button type="button"
                                                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                                    data-hs-overlay="#professional_activity_edit_modal<?php echo e($i); ?>">
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
                                                                                            <form action="<?php echo e(route('Teaching.professionalactivities.attended.destroy',$act->id)); ?>" method="post">
                                                                                            
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
                                                                                    </td>
                                                                            </tr>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                                <tr>
                                                                                    <td>no records</td>
                                                                                </tr>
                                                                                <?php endif; ?>
                                                                        
                                                                        <?php endif; ?>
                                                                
                                                                
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- End of profesional Activity Attended-->
                                                    </div>
                                                    <div id="horizontal-alignment-2" class="hidden" role="tabpanel" aria-labelledby="horizontal-alignment-item-2">
                                                            
                                                        <!--Professional Activity Conducted-->
                                                        <div class="flex">
                                                            <h5 class="box-title my-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z"></path></svg> 
                                                                Professional Activity Conducted Details
                                                            </h5>
                                                        </div> 
                                                        <div class="flex">
                                                            <button type="button" id="conducted_btn" class="hs-dropdown-toggle ti-btn ti-btn-primary float-right" data-hs-overlay="#professional_activity_conducted">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path></svg>
                                                                Add Professional Activities Conducted
                                                            </button>
                                                            <div id="professional_activity_conducted" class="hs-overlay hidden ti-modal">
                                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                    <div class="ti-modal-content">
                                                                        <div class="ti-modal-header">
                                                                            <h3 class="ti-modal-title">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>
                                                                                Add New Professional Activities Conducted
                                                                            </h3>
                                                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                            data-hs-overlay="#professional_activity_conducted">
                                                                            <span class="sr-only">Close</span>
                                                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                fill="currentColor"/>
                                                                            </svg>
                                                                            </button>
                                                                            <?php if(($errors->has('con_title'))||($errors->has('con_level'))||($errors->has('con_organizer'))||($errors->has('con_co_organizer'))||($errors->has('con_category'))||($errors->has('con_sponsored'))||($errors->has('con_sponsoring_agency_name_address'))||($errors->has('con_from_date'))||($errors->has('con_to_date'))||($errors->has('con_no_of_days'))||($errors->has('con_place'))||($errors->has('con_role'))): ?>
                                                                                <script>
                                                                                    // alert(1);
                                                                                    $(window).on('load', function() {
                                                                                        //if($('#horizontal-alignment-item-2').parent().find('.active')){
                                                                                            //alert('Its active');
                                                                                            //alert(614);
                                                                                            $('#horizontal-alignment-item-2').trigger('click');
                                                                                            //alert('conducted clicked');
                                                                                            $('#conducted_btn').trigger("click");

                                                                                    }); 
                                                                                </script>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                        <form action="<?php echo e(route('Teaching.professionalactivities.conducted.store')); ?>" method="post" enctype="multipart/form-data"> 
                                                                            <?php echo csrf_field(); ?>
                                                                            <div class="ti-modal-body">
                                                                                <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                        <label for="with-corner-hint" class="ti-form-label font-bold">Title : <span class="text-red-500">*</span> </label>
                                                                                        <input type="text" name="con_title" id="pro_cond_title" class="ti-form-input" placeholder="Title">
                                                                                        <?php if($errors->has('con_title')): ?>
                                                                                            <div class="text-red-700"><?php echo e($errors->first('con_title')); ?></div>
                                                                                        <?php endif; ?>
                                                                                        <div id="pro_con_titleNameError" class="error text-red-700"></div>
                                                                                    </div>
                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                        <input type="hidden" value="1" name="attended">
                                                                                        <label for="with-corner-hint" class="ti-form-label font-bold">Level:<span class="text-red-500">*</span> </label>
                                                                                        <select class="ti-form-select" name="con_level" id="pro_cond_level">
                                                                                            <option value="#">Choose Level</option>
                                                                                            <option value="Local">Local</option>
                                                                                            <option value="National">National</option>
                                                                                            <option value="International">International</option>
                                                                                        </select>
                                                                                            <?php if($errors->has('con_level')): ?>
                                                                                            <div class="text-red-700"><?php echo e($errors->first('con_level')); ?></div>
                                                                                        <?php endif; ?>
                                                                                        <div id="pro_con_levelNameError" class="error text-red-700"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                        <label for="" class="ti-form-label font-bold">Organizer : <span class="text-red-500">*</span></label>
                                                                                        <input type="text" name="con_organizer" class="ti-form-input" placeholder="Organizer" id="pro_cond_organizer">
                                                                                        <?php if($errors->has('con_organizer')): ?>
                                                                                            <div class="text-red-700"><?php echo e($errors->first('con_organizer')); ?></div>
                                                                                        <?php endif; ?>
                                                                                        <div id="pro_con_organizerNameError" class="error text-red-700"></div>
                                                                                    </div>
                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                        <label for="" class="ti-form-label font-bold">Co Organizer :</label>
                                                                                        <input type="text" name="con_co_organizer" class="ti-form-input" placeholder="Co Organizer" id="pro_cond_co_organizer">
                                                                                        <?php if($errors->has('con_co_organizer')): ?>
                                                                                            <div class="text-red-700"><?php echo e($errors->first('con_co_organizer')); ?></div>
                                                                                        <?php endif; ?>
                                                                                        <div id="pro_con_coorganizerNameError" class="error text-red-700"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                        <label for="" class="ti-form-label  font-bold">Category : <span class="text-red-500">*</span></label>
                                                                                        <select class="ti-form-select" name="con_category" id="pro_cond_category" required>
                                                                                                <option value="#">Choose Category</option>
                                                                                                <option value="Workshop">Workshop</option>
                                                                                                <option value="FDP">FDP</option>
                                                                                                <option value="Seminar">Seminar</option>
                                                                                                <option value="Webinar">Webinar</option>
                                                                                                <option value="STTP">STTP</option>
                                                                                                <option value="Certification Program">Certification Program</option>
                                                                                                <option value="MDP/EDP">MDP/EDP</option>
                                                                                        </select>
                                                                                            <?php if($errors->has('con_category')): ?>
                                                                                            <div class="text-red-700"><?php echo e($errors->first('con_category')); ?></div>
                                                                                        <?php endif; ?>
                                                                                        <div id="pro_con_categoryNameError" class="error text-red-700"></div>
                                                                                    </div>
                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                        <label for="" class="ti-form-label font-bold">Sponsored:<span class="text-red-500">*</span></label>
                                                                                        <select class="ti-form-select sponsored_type_conducted sponsored" name="con_sponsored" id="pro_cond_sponsored" required>
                                                                                            <option value="#">Choose One</option>
                                                                                            <option value="Yes">Yes</option>
                                                                                            <option value="No">No</option>
                                                                                        </select>
                                                                                            <?php if($errors->has('con_sponsored')): ?>
                                                                                            <div class="text-red-700"><?php echo e($errors->first('con_sponsored')); ?></div>
                                                                                        <?php endif; ?>
                                                                                        <div id="pro_con_sponsoredNameError" class="error text-red-700"></div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                
                                                                                <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                    <div class="max-w-sm space-y-3 pb-6 sponsoring_agency_name_address">
                                                                                        <label for="" class="ti-form-label  font-bold">Sponsoring Agency Name Address:</label>
                                                                                        <input type="text" name="con_sponsoring_agency_name_address" class="ti-form-input" placeholder="Sponsoring Agency Name Address" id="pro_cond_sponsoring_agency_name_address">
                                                                                        <?php if($errors->has('con_sponsoring_agency_name_address')): ?>
                                                                                            <div class="text-red-700"><?php echo e($errors->first('con_sponsoring_agency_name_address')); ?></div>
                                                                                        <?php endif; ?>
                                                                                        <div id="pro_con_sponsoring_agencyNameError" class="error text-red-700"></div>
                                                                                    </div>
                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                        <label for="" class="ti-form-label pt-4 font-bold">Role: <span class="text-red-500">*</span></label>
                                                                                        <select class="ti-form-select" name="con_role" id="pro_cond_role">
                                                                                            <option value="#">Choose Role</option>
                                                                                            <option value="Coordinator">Coordinator</option>
                                                                                            <option value="Convenor">Convenor</option>
                                                                                            <option value="Member">Member</option>
                                                                                            
                                                                                        </select>
                                                                                        <?php if($errors->has('con_role')): ?>
                                                                                            <div class="text-red-700"><?php echo e($errors->first('con_role')); ?></div>
                                                                                        <?php endif; ?>
                                                                                        <div id="pro_con_roleNameError" class="error text-red-700"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                    <div class="flex max-w-sm space-y-3 pb-6">
                                                                                        <label for="" class="ti-form-label font-bold">From Date:<span class="text-red-500">*</span></label>
                                                                                        
                                                                                        <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                            <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                    class="ri ri-calendar-line"></i></span>
                                                                                        </div>
                                        
                                                                                        <input type="text" name="con_from_date" id="pro_cond_from_date"
                                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conducted_from_date"
                                                                                                required placeholder="Choose date" >
                                                                                                <?php if($errors->has('con_from_date')): ?>
                                                                                                <div class="text-red-700"><?php echo e($errors->first('con_from_date')); ?></div>
                                                                                            <?php endif; ?>
                                                                                            <div id="pro_con_fromdateError" class="error text-red-700"></div>
                                                                                    </div>

                                                                                    <div class="flex max-w-sm space-y-3 pb-6">
                                                                                        <label for="" class="ti-form-label font-bold">To Date:<span class="text-red-500">*</span></label>
                                                                                        
                                                                                        <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                            <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                    class="ri ri-calendar-line"></i></span>
                                                                                        </div>
                                                                                            <input type="text" name="con_to_date" id="pro_cond_to_date"
                                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conducted_to_date"
                                                                                            required placeholder="Choose date" >
                                                                                            <?php if($errors->has('con_to_date')): ?>
                                                                                            <div class="text-red-700"><?php echo e($errors->first('con_to_date')); ?></div>
                                                                                        <?php endif; ?>
                                                                                        <div id="pro_con_todateError" class="error text-red-700"></div>
                                                                                
                                                                                    </div>
                                                                                </div>
                                                
                                                                                <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                        <label for="" class="ti-form-label pt-4 font-bold">Place : <span class="text-red-500">*</span></label>
                                                                                        <input type="text" name="con_place" class="ti-form-input" placeholder="Place" id="pro_cond_place">
                                                                                            <?php if($errors->has('con_place')): ?>
                                                                                            <div class="text-red-700"><?php echo e($errors->first('con_place')); ?></div>
                                                                                        <?php endif; ?>
                                                                                        <div id="pro_con_placeNameError" class="error text-red-700"></div>
                                                                                        
                                                                                    </div>
                                                                                    
                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                        <label for="" class="ti-form-label pt-4 font-bold">No Of Days:<span class="text-red-500">*</span></label>
                                                                                        <input type="text" name="con_no_of_days" class="ti-form-input no_of_days_conducted" required readonly placeholder="No of Days" id="pro_cond_no_of_days">
                                                                                        <?php if($errors->has('con_no_of_days')): ?>
                                                                                            <div class="text-red-700"><?php echo e($errors->first('con_no_of_days')); ?></div>
                                                                                        <?php endif; ?>
                                                                                        <div id="pro_con_noofdaysError" class="error text-red-700"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                        <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">*</span></label>
                                                                                        <span class="sr-only">Choose Profile photo</span>
                                                                                            <input type="file" accept="application/pdf" name="document" id="pro_con_document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                            ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                            file:rounded-sm file:border-0
                                                                                            file:text-sm file:font-semibold
                                                                                            file:bg-primary file:text-white
                                                                                            hover:file:bg-primary focus-visible:outline-none doc" required value="">
                                                                                            <?php if($errors->has('document')): ?>
                                                                                            <div class="text-red-700"><?php echo e($errors->first('document')); ?></div>
                                                                                        <?php endif; ?>
                                                                                        <div id="pro_con_documentError" class="error text-red-700"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ti-modal-footer">
                                                                                <button type="button"
                                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                data-hs-overlay="#professional_activity_conducted">
                                                                                Close
                                                                                </button>
                                                                                
                                                                                <input type="submit" id="profssional_activity_conducted_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                                                                
                                                                            </div>
                                                                        </form>  
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                    
                                                            <!-- modal Ending--> 
                                                        
                                                        </div>
                                                        
                                                        <!-- tabel content-->
                                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto">
                                                            <div class="flex justify-end mt-4">
                                                                <button id="conduct_exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none hover:bg-green-600">Export to Excel</button>
                                                            </div>
                                                            <table id="activity_conducted_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                                <thead class="bg-gray-50 dark:bg-black/20">
                                                                    <tr class="">
                                                                        <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold ">E-Gov ID</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold ">Title</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold ">Level</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Organizer</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Co Organizer</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Category</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Sponsored</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Sponsoring Agency Name Address</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">From Date</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">To Date</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Place</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">No Of Days</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Role</th>
                                                                        
                                                                        
                                                                            <th scope="col" class="dark:text-white/80 font-bold ">Document</th>
                                                                        
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Actions</th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <?php
                                                                    $i = 1;
                                                                ?>
                                                                <tbody class="">
                                                                    
                                                                    <?php if($staff->professional_activity_conducted !=null): ?>
                                                                        <?php $__empty_1 = true; $__currentLoopData = $staff->professional_activity_conducted; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    
                                                                            <tr class="">
                                                                                <td><span><?php echo e($i++); ?></span></td>
                                                                                <td><span><?php echo e($conduct->egov_id); ?></span></td>
                                                                                <td><span><?php echo e($conduct->title); ?></span></td>
                                                                                <td><span><?php echo e($conduct->level); ?></span></td>
                                                                                <td><span><?php echo e($conduct->organizer); ?></span></td>
                                                                                <td><span><?php echo e($conduct->co_organizer); ?></span></td>
                                                                                <td><span><?php echo e($conduct->category); ?></span></td>
                                                                                <td><span><?php echo e($conduct->sponsored); ?></span></td>
                                                                                <td><span><?php echo e(($conduct->sponsored=="No"? '--NA--' : $conduct->sponsoring_agency_name_address)); ?></span></td>
                                                                                
                                                                                <td><span><?php echo e(\Carbon\Carbon::parse($conduct->from_date)->format('d-M-Y')); ?></span></td>
                                                                                <td><span><?php echo e(\Carbon\Carbon::parse($conduct->to_date)->format('d-M-Y')); ?></span></td>
                                                                                <td><span><?php echo e($conduct->place); ?></span></td>
                                                                                <td><span><?php echo e($conduct->no_of_days); ?></span></td>
                                                                                <td><span><?php echo e($conduct->role); ?></span></td>
                                                                                
                                                                                
                                                                                   <td><span><a href=<?php echo e(asset('Uploads/Professional_Activity_Conducted/'.$conduct->document)); ?> class='font-medium text-blue-600 dark:text-blue-500 hover:underline' target="_blank"><?php echo e($conduct->document); ?></a></span></td>
                                                                                
                                                                                
                                                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                                        <button data-hs-overlay="#_edit_modal<?php echo e($i); ?>" id="btn<?php echo e($i); ?>" btn-val=<?php echo e($i); ?>

                                                                                            class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary _edit_modal_click">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                            <span
                                                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                role="tooltip">
                                                                                                Edit
                                                                                            </span>
                                                                                        </button>
                                                                                        <div id="_edit_modal<?php echo e($i); ?>" class="hs-overlay hidden ti-modal">
                                                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                                <div class="ti-modal-content">
                                                                                                    <div class="ti-modal-header">
                                                                                                        <h3 class="ti-modal-title">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                            Edit Professional Activities
                                                                                                        </h3>
                                                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                        data-hs-overlay="#_edit_modal<?php echo e($i); ?>">
                                                                                                        <span class="sr-only">Close</span>
                                                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path
                                                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                            fill="currentColor" />
                                                                                                        </svg>
                                                                                                        </button>
                                                                                                        <?php if(($errors->has('e_title'))||($errors->has('e_level'))||($errors->has('e_organizer'))||($errors->has('e_co_organizer'))||($errors->has('e_category'))||($errors->has('e_sponsored'))||($errors->has('e_sponsoring_agency_name_address'))||($errors->has('e_from_date'))||($errors->has('e_to_date'))||($errors->has('e_no_of_days'))||($errors->has('e_place'))||($errors->has('e_role'))): ?>)
                                                                                                            <script>
                                                                                                             window.onload=function(){
                                                                                                                //alert('123');
                                                                                                                //alert(899);
                                                                                                                // document.getElementById('btn'+<?php echo e(old('modal_no')); ?>).click();

                                                                                                                };   
                                                                                                            
                                                                                                            </script>
                                                                                                        <?php endif; ?>   
                                                                                                    </div>
                                                                                                    <form  action="<?php echo e(route('Teaching.professionalactivities.conducted.update',$conduct->id)); ?>" enctype="multipart/form-data" method="post">
                                                                                                        <?php echo csrf_field(); ?>
                                                                                                        <?php echo method_field('patch'); ?>
                                                                                                        <div class="ti-modal-body">
                                                                                                            <input type='hidden' name='conducted_modal_no' class='conducted_modal_no' value=<?php echo e(old('conducted_modal_no')); ?>/>
                                                                                                            <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="with-corner-hint" class="ti-form-label font-bold">Title : <span class="text-red-500">*</span></label>
                                                                                                                    <input type="text" name="e_title" class="ti-form-input" required placeholder="Title" value="<?php echo e($conduct->title); ?>">
                                                                                                                    <?php if($errors->has('e_title')): ?>
                                                                                                                        <div class="text-red-700"><?php echo e($errors->first('e_title')); ?></div>
                                                                                                                    <?php endif; ?>
                                                                                                                </div>
                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="" class="ti-form-label mb-0 font-bold">Level: <span class="text-red-500">*</span> </label>
                                                                                                                    <select class="ti-form-select" name="e_level" required>
                                                                                                                            <option value="#">Choose Level</option>
                                                                                                                            <option value="Local" <?php echo e(($conduct->level=='Local'? 'selected':'')); ?>>Local</option>
                                                                                                                            <option value="National" <?php echo e(($conduct->level=='National'? 'selected':'')); ?>>National</option>
                                                                                                                            <option value="International" <?php echo e(($conduct->level=='International'? 'selected':'')); ?>>International</option>
                                                                                                                    </select>
                                                                                                                    <?php if($errors->has('e_level')): ?>
                                                                                                                        <div class="text-red-700"><?php echo e($errors->first('e_level')); ?></div>
                                                                                                                    <?php endif; ?>
                                                                                                                </div>
                                                                                                                
                                                                                                            </div>
                                                                                                            <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="" class="ti-form-label">Organizer:<span class="text-red-500">*</span></label>
                                                                                                                    <input type="text" name="e_organizer" class="ti-form-input" required placeholder="Organizer" value="<?php echo e($conduct->organizer); ?>">
                                                                                                                    <?php if($errors->has('e_organizer')): ?>
                                                                                                                        <div class="text-red-700"><?php echo e($errors->first('e_organizer')); ?></div>
                                                                                                                    <?php endif; ?>
                                                                                                                </div>
                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="" class="ti-form-label">Co Organizer:</label>
                                                                                                                    <input type="text" name="e_co_organizer" class="ti-form-input" placeholder="Co Organizer" value="<?php echo e($conduct->co_organizer); ?>">
                                                                                                                    <?php if($errors->has('e_co_organizer')): ?>
                                                                                                                        <div class="text-red-700"><?php echo e($errors->first('e_co_organizer')); ?></div>
                                                                                                                    <?php endif; ?>
                                                                                                                </div>
                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="" class="ti-form-label">Category : <span class="text-red-500">*</span></label>
                                                                                                                    <select class="ti-form-select" name="e_category">
                                                                                                                        <option value="#">Choose Category</option>
                            
                                                                                                                        <option value="Workshop" <?php echo e(($conduct->category=='Workshop'? 'selected':'')); ?>>Workshop</option>
                                                                                                                        <option value="FDP" <?php echo e(($conduct->category=='FDP'? 'selected':'')); ?>>FDP</option>
                                                                                                                        <option value="Seminar" <?php echo e(($conduct->category=='Seminar'? 'selected':'')); ?>>Seminar</option>
                                                                                                                        <option value="Webinar"<?php echo e(($conduct->category=='Webinar'? 'selected':'')); ?>>Webinar</option>
                                                                                                                        <option value="STTP" <?php echo e(($conduct->category=='STTP'? 'selected':'')); ?>>STTP</option>
                                                                                                                        <option value="Certification Program" <?php echo e(($conduct->category=='Certification Program'? 'selected':'')); ?>>Certification Program</option>
                                                                                                                        <option value="MDP/EDP" <?php echo e(($conduct->category=='MDP/EDP'? 'selected':'')); ?>>MDP/EDP</option>
                                                                                                                    </select>
                                                                                                                    <?php if($errors->has('e_category')): ?>
                                                                                                                        <div class="text-red-700"><?php echo e($errors->first('e_category')); ?></div>
                                                                                                                    <?php endif; ?>
                                                                                                                </div>
                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="" class="ti-form-label">Role : <span class="text-red-500">*</span></label>
                                                                                                                    <select class="ti-form-select" name="e_role" >
                                                                                                                        <option value="#">Choose Role</option>
                                                                                                                        <option value="Coordinator" <?php echo e(($conduct->role=='Coordinator'? 'selected':'')); ?>>Coordinator</option>
                                                                                                                        <option value="Convenor" <?php echo e(($conduct->role=='Convenor'? 'selected':'')); ?>>Convenor</option>
                                                                                                                        <option value="Member" <?php echo e(($conduct->role=='Member'? 'selected':'')); ?>>Member</option>
                                                                                                                    </select>
                                                                                                                    <?php if($errors->has('e_role')): ?>
                                                                                                                        <div class="text-red-700"><?php echo e($errors->first('e_role')); ?></div>
                                                                                                                    <?php endif; ?>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="" class="ti-form-label">Sponsored:<span class="text-red-500">*</span></label>
                                                                                                                    <select class="ti-form-select sponsored_type_conducted sponsored" name="e_sponsored" >
                                                                                                                        <option value="#">Choose One</option>
                                                                                                                        <option value="Yes" <?php echo e($conduct->sponsored=='Yes'? 'selected':''); ?>>Yes</option>
                                                                                                                        <option value="No" <?php echo e($conduct->sponsored=='No'? 'selected':''); ?>>No</option>
                                                                                                                    </select>
                                                                                                                    <?php if($errors->has('e_sponsored')): ?>
                                                                                                                        <div class="text-red-700"><?php echo e($errors->first('e_sponsored')); ?></div>
                                                                                                                    <?php endif; ?>
                                                                                                                </div>
                                                                                                                <div class="max-w-sm space-y-3 pb-6 sponsoring_agency_name_address">
                                                                                                                    <label for="" class="ti-form-label">Sponsoring Agency Name Address : </label>
                                                                                                                    <input type="text" name="e_sponsoring_agency_name_address" class="ti-form-input" placeholder="Sponsoring Agency Name Address" value="<?php echo e($conduct->sponsoring_agency_name_address); ?>">
                                                                                                                    <?php if($errors->has('e_sponsoring_agency_name_address')): ?>
                                                                                                                        <div class="text-red-700"><?php echo e($errors->first('e_sponsoring_agency_name_address')); ?></div>
                                                                                                                    <?php endif; ?>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="" class="ti-form-label">From Date : <span class="text-red-500">*</span></label>
                                                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                            class="ri ri-calendar-line"></i></span>
                                                                                                                    </div>
                                                                    
                                                                                                                    <input type="date" name="e_from_date"
                                                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conducted_from_date_edit"
                                                                                                                        required placeholder="Choose date" value="<?php echo e($conduct->from_date); ?>">
                                                                                                                    <?php if($errors->has('e_from_date')): ?>
                                                                                                                        <div class="text-red-700"><?php echo e($errors->first('e_from_date')); ?></div>
                                                                                                                    <?php endif; ?>
                                                                                                                </div>
                                                                                                                <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="" class="ti-form-label">To Date : <span class="text-red-500">*</span></label>
                                                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                                                    </div>
                                                                                                                    <input type="date" name="e_to_date"
                                                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conducted_to_date_edit"
                                                                                                                        required placeholder="Choose date" value="<?php echo e($conduct->to_date); ?>">
                                                                                                                    <?php if($errors->has('e_to_date')): ?>
                                                                                                                        <div class="text-red-700"><?php echo e($errors->first('e_to_date')); ?></div>
                                                                                                                    <?php endif; ?>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="" class="ti-form-label">Place : <span class="text-red-500">*</span></label>
                                                                                                                    <input type="text" name="e_place" class="ti-form-input" value="<?php echo e($conduct->place); ?>" placeholder="place">
                                                                                                                    <?php if($errors->has('e_place')): ?>
                                                                                                                        <div class="text-red-700"><?php echo e($errors->first('e_place')); ?></div>
                                                                                                                    <?php endif; ?>
                                                                                                                </div>
                                
                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="" class="ti-form-label">No Of Days : </label>
                                                                                                                    <input type="text" name="e_no_of_days" class="ti-form-input no_of_days_conducted_edit" value="<?php echo e($conduct->no_of_days); ?>" required readonly placeholder="enter number of days">
                                                                                                                    <?php if($errors->has('e_no_of_days')): ?>
                                                                                                                        <div class="text-red-700"><?php echo e($errors->first('e_no_of_days')); ?></div>
                                                                                                                    <?php endif; ?>
                                                                                                                </div>
                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">* <?php echo e($conduct->document); ?></span></label>
                                                                                                                        <span class="sr-only">Choose Profile photo</span>
                                                                                                                            <input type="file" accept="application/pdf" name="document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                                                            ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                                                            file:rounded-sm file:border-0
                                                                                                                            file:text-sm file:font-semibold
                                                                                                                            file:bg-primary file:text-white
                                                                                                                            hover:file:bg-primary focus-visible:outline-none doc" required value="<?php echo e($conduct->document); ?>">
                                                                                                                            <?php if($errors->has('document')): ?>
                                                                                                                                <div class="text-red-700"><?php echo e($errors->first('document')); ?></div>
                                                                                                                            <?php endif; ?>
                                                                                                                        <div id="docEditError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                           
                                                                                                        </div>
                                                                                                        <div class="ti-modal-footer">
                                                                                                            <button type="button"
                                                                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                                data-hs-overlay="#_edit_modal<?php echo e($i); ?>">
                                                                                                                Close
                                                                                                            </button>
                                                                                                            <input type="submit" class="ti-btn  bg-warning text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                                                
                                                                                                        </div>
                                                                                                    </form>  
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                
                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <form action="<?php echo e(route('Teaching.professionalactivities.conducted.destroy',$conduct->id)); ?>" method="post">
                                                                                            
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
                                                                                </td>
                                                                            </tr>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                            <tr>
                                                                            <td>no records</td>
                                                                            </tr>
                                                                            <?php endif; ?>
                                                                    
                                                                    <?php endif; ?>
                                                            
                                                            
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- End of tab 2 content Conducted --> 
                                                    </div>
                                                    
                                                </div>    
                                            </div>
                                    
                                        </div>
                                    
                                    </div>

                            </div><!-- end of div colspan 9-->
                        </div>
                        <!-- End::row-1 -->
                    </div>       

        </div>
                    
        <!-- Ends::main-content -->
                    

                    

    </div>
                

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

        <!-- FLATPICKR JS -->
        <script src="<?php echo e(asset('build/assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>

        <!-- CHOICES JS -->
        <script src="<?php echo e(asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')); ?>"></script>

        <!-- FORM-LAYOUT JS -->
        <?php echo app('Illuminate\Foundation\Vite')('resources/assets/js/profile-settings.js'); ?>
        
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"
        ></script>
        <!-- pro activity other sponsored code start-->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
           <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        
        <!-- pro activity other sponsored code Ends-->
        
        <script>
            $(document).ready(function(){

                $('.sponsoredBy').change(function () {
                    if ($(this).val() === 'Other') {
                        $('.othersponsored').show();
                    } else {
                        $('.othersponsored').hide();
                    }
                });


                //for calculating the no of days for professional activities attended (Adding)
                $(document).on('change', '.attended_to_date',function(){
                        //alert('Date altered');

                    var attended_from_date = $('.attended_from_date').val();
                    var attended_to_date = $('.attended_to_date').val();
                    // alert(attended_to_date+'-'+attended_from_date);
                    if(attended_to_date != ""){
                        if(attended_from_date == attended_to_date){
                            $('.no_of_days_attended').removeClass('border border-red-500 focus:border-blue-500');
                            
                            $('.no_of_days_attended').val(1); // when both from date and to date are same, it means the no of days should be 1.
                            
                        }else if(attended_from_date > attended_to_date){
                            $('.no_of_days_attended').val(0);
                            $('.no_of_days_attended').addClass('border border-red-500 focus:border-blue-500');
                            $('.attended_to_date').val();
                            $('.attended_to_date').focus();
                        
                        }else{
                            $('.no_of_days_attended').removeClass('border border-red-500 focus:border-blue-500');
                            var startDay = new Date(attended_from_date);  
                            var endDay = new Date(attended_to_date);  

                        
                            // Determine the time difference between two dates     
                            var millisBetween = endDay.getTime() - startDay.getTime();  
                            
                            // Determine the number of days between two dates  
                            var days = millisBetween / (1000 * 3600 * 24);  
                            var days=days+1; //for acurate no calculation.

                            $('.no_of_days_attended').val(days);
                        }
                    }else{
                            $('.attended_from_date').focus();
                            alert('Please fill the from date');
                    }
                    
                    

                });

                ////////
                ////////

                    //Calculating the no of days while Editing th entry
                ///////
                //for calculating the no of days for professional activities attended (Editing)
                $(document).on('change', '.attended_to_date_edit',function(){
                        //alert('Date altered');

                    var attended_from_date_edit = $('.attended_from_date_edit').val();
                    var attended_to_date_edit = $('.attended_to_date_edit').val();
                    //alert(attended_to_date_edit+'-'+attended_from_date_edit);
                    if(attended_from_date_edit != ""){
                        if(attended_from_date_edit == attended_to_date_edit){
                            //when both dates are same , then no of days would be 1.
                            $('.no_of_days_attended_edit').removeClass('border border-red-500 focus:border-blue-500');
                            
                            $('.no_of_days_attended_edit').val(1);
                        }else if(attended_from_date_edit > attended_to_date_edit){
                            //alert('not correct')
                            $('.no_of_days_attended_edit').val(0);
                            $('.no_of_days_attended_edit').addClass('border border-red-500 focus:border-blue-500');
                            $('.attended_to_date_edit').val();
                            $('.attended_to_date_edit').focus();
                            //$('.no_of_days_attended_edit').val(days);
                        }else{
                            $('.no_of_days_attended_edit').removeClass('border border-red-500 focus:border-blue-500');
                            
                            var startDay = new Date(attended_from_date_edit);  
                            var endDay = new Date(attended_to_date_edit);  

                            //alert(startDay+'-'+endDay);

                            // Determine the time difference between two dates     
                            var millisBetween = endDay.getTime() - startDay.getTime();  
                            
                            // Determine the number of days between two dates  
                            var days = millisBetween / (1000 * 3600 * 24);
                            days =  days+1;  
                            $('.no_of_days_attended_edit').val(days);
                        }

                        
                    }else{
                        $('.attended_from_date_edit').focus();
                        alert('Please fill the from date');
                    }
                    
                    //alert(millisBetween);
                    


                });

                

                //for calculating the no of days for professional activities conducted (Adding)
                $(document).on('change', '.conducted_to_date',function(){
                        //alert('Date altered');

                    var conducted_from_date = $('.conducted_from_date').val();
                    var conducted_to_date = $('.conducted_to_date').val();
                    // alert(attended_to_date+'-'+attended_from_date);
                    if(conducted_from_date != ""){
                        if(conducted_from_date == conducted_to_date){
                            $('.no_of_days_conducted').removeClass('border border-red-500 focus:border-blue-500');
                            
                            $('.no_of_days_conducted').val(1);
                        }else if(conducted_from_date > conducted_to_date){
                            $('.no_of_days_conducted').val(0);
                            $('.no_of_days_conducted').addClass('border border-red-500 focus:border-blue-500');
                            $('.conducted_to_date').val();
                            $('.conducted_to_date').focus();
                        }else{
                            $('.no_of_days_conducted').removeClass('border border-red-500 focus:border-blue-500');
                            
                            var startDay = new Date(conducted_from_date);  
                            var endDay = new Date(conducted_to_date);  

                            //alert(startDay+'-'+endDay);

                            // Determine the time difference between two dates     
                            var millisBetween = endDay.getTime() - startDay.getTime();  
                            
                            // Determine the number of days between two dates  
                            var days = millisBetween / (1000 * 3600 * 24); 
                            days=days+1; 
                            $('.no_of_days_conducted').val(days);
                        }
                        
                    }else{
                        $('.conducted_from_date').focus();
                        alert('Please fill the from date');
                    }
                    
                    //alert(millisBetween);
                    });

                    //for calculating the no of days for professional activities conducted (Editing)
                    $(document).on('change', '.conducted_to_date_edit',function(){
                                //alert('Date altered');

                            var conducted_from_date_edit = $('.conducted_from_date_edit').val();
                            var conducted_to_date_edit = $('.conducted_to_date_edit').val();
                            // alert(attended_to_date+'-'+attended_from_date);
                            if(conducted_from_date_edit != ""){

                                if(conducted_from_date_edit == conducted_to_date_edit){
                                    $('.no_of_days_conducted_edit').removeClass('border border-red-500 focus:border-blue-500');
                                    
                                    $('.no_of_days_conducted_edit').val(1);
                                }else if(conducted_from_date_edit > conducted_to_date_edit){
                                    $('.no_of_days_conducted_edit').val(0);
                                    $('.no_of_days_conducted_edit').addClass('border border-red-500 focus:border-blue-500');
                                    $('.conducted_to_date_edit').val();
                                    $('.conducted_to_date_edit').focus();
                                }else{
                                    $('.no_of_days_conducted_edit').removeClass('border border-red-500 focus:border-blue-500');
                                    
                                    var startDay = new Date(conducted_from_date_edit);  
                                    var endDay = new Date(conducted_to_date_edit);  

                                    //alert(startDay+'-'+endDay);

                                    // Determine the time difference between two dates     
                                    var millisBetween = endDay.getTime() - startDay.getTime();  
                                    
                                    // Determine the number of days between two dates  
                                    var days = millisBetween / (1000 * 3600 * 24);
                                    days=days+1;  
                                    $('.no_of_days_conducted_edit').val(days);
                                }
                                
                            }else{
                                $('.conducted_from_date').focus();
                                alert('Please fill the from date');
                            }
                            
                            //alert(millisBetween);
                    });


                    //profeesional activity attented
                    $(document).on('change','.sponsored_type',function(){
                    //   alert('changed');
                        if($(this).val() == "Yes"){
                            //if yes 
                            $('.sponsored_by').show();
                            

                        }else{
                            //if no
                            $('.sponsored_by').hide();
                            $('.otherSponsor').hide();
                            
                        }
                    });


                
                    //professional activity conducted
                    $(document).on('change','.sponsored_type_conducted',function(){
                        //   alert('changed');
                        if($(this).val() == "Yes"){
                            //if yes 
                            $('.sponsoring_agency_name_address').show();
                            

                        }else{
                            //if no
                            $('.sponsoring_agency_name_address').hide();
                            
                        }
                    });

                    //Validation for Pro Activity Attended
               
                    //alert('Hello from jquery');
                    new DataTable('#activity_attended_table');
                    
                    $(document).on('click','.professional_activity_edit_modal_click',function(){
                        //var 
                        var attended_modal_no = $(this).attr("btn-val");
                        
                        //alert($(this).find('.caste_edit_modal_no').val());
                        $('.attended_modal_no').val(attended_modal_no); 
                    });


                    //Validation for Pro Activity Conducted
                
                    //alert('Hello from jquery');
                    new DataTable('#activity_conducted_table');
                    
                    $(document).on('click','._edit_modal_click',function(){
                        //var 
                        var conducted_modal_no = $(this).attr("btn-val");
                        
                        //alert($(this).find('.caste_edit_modal_no').val());
                        $('.conducted_modal_no').val(conducted_modal_no); 
                    });

                  //  $(document).on('submit','#proattended_form',function(){
                        //alert('submitted');
                    //});

                    //professional_activity_attended add checking
                    $(document).on('click','#professional_activity_attended_add_btn',function(e){
                        //alert('clicked');
                        //e.preventDefault();
                        
                        var pro_att_title = $('#pro_att_title').val();
                        var pro_att_organizer = $('#pro_att_organizer').val();
                        var pro_att_role =  $('#pro_att_role').val();

                        var pro_att_level = $('#pro_att_level').val();
                        var pro_att_category =$('#pro_att_category').val();

                        var pro_att_sponsored = $('#pro_att_sponsored').val();
                        var pro_att_sponsoredby = $('#pro_att_sponsoredby').val();
                        var pro_att_otherSponsor = $('#pro_att_otherSponsor').val();
                        var pro_att_from_date = $('#pro_att_from_date').val();
                        var pro_att_to_date = $('#pro_att_to_date').val();
                        var pro_att_no_of_days = $('#pro_att_no_of_days').val();
                        var pro_att_doc = $('#pro_att_doc').val();

                        var flag = false;
                        
                        //alert(pro_att_title+'-'+pro_att_organizer+'-'+pro_att_role+'-'+pro_att_level+'-'+pro_att_category+'-'+pro_att_sponsored+'-'+pro_att_sponsoredby+'-'+pro_att_otherSponsor+'-'+pro_att_from_date+'-'+pro_att_to_date+'-'+pro_att_no_of_days);
                        
                        if(pro_att_title == ''){
                            $('#pr_att_titleNameError').text('Title is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(pro_att_title.trim())){
                            $('#pr_att_titleNameError').text('Please fill the correct value');
                            flag = true;
                        }

                        if(pro_att_organizer == ''){
                            $('#pr_att_organizerError').text('Data is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(pro_att_organizer.trim())){
                            $('#pr_att_organizerError').text('Please fill the correct value');
                            flag = true;
                        }
                        
                        if(pro_att_role == '#'){
                            //alert('# choosen');
                            $('#pro_att_roleError').text('Please Choose a correct option');
                            flag = true;

                        }

                        if(pro_att_level == '#'){
                            $('#pro_att_levelError').text('Please Choose a correct option');
                            flag = true;
                        }

                        if(pro_att_category == '#'){
                            $('#pro_att_categoryError').text('Please Choose a correct option');
                            flag = true;
                        }
                        if(pro_att_sponsored == '#'){
                            $('#pro_att_sponsoredError').text('Please Choose a correct option');
                            flag = true;
                        }

                        //end

                        if(pro_att_from_date.trim() === ''){
                            $('#pro_att_fromdateError').text('Please Select a proper date');
                            flag = true;
                        }

                        if(pro_att_to_date.trim() === ''){
                            $('#pr_att_todateError').text('Please Select a proper date');
                            flag = true;
                        }

                        if(pro_att_no_of_days <= 0){
                            $('#pro_att_noofdaysError').text('Choose a proper from date and to date.');
                            flag = true;
                        }
                        if(pro_att_doc[0].files.length === 0){
                            //alert('file not choosen');
                            $('#pro_att_docError').text('Please choose a file');
                            flag = true;
                        }


                        if(flag == true){
                            e.preventDefault();
                        }
                    });


                    //Profesional Activity Conducted Add Validation

                    $(document).on('click','#profssional_activity_conducted_add_btn',function(e){
                        //alert('123')
                        //e.preventDefault();

                        var pro_cond_title = $('#pro_cond_title').val();
                        var pro_cond_level = $('#pro_cond_level').val();
                        var pro_cond_organizer = $('#pro_cond_organizer').val();
                        var pro_cond_co_organizer = $('#pro_cond_co_organizer').val();
                        var pro_cond_category = $('#pro_cond_category').val();
                        var pro_cond_sponsored = $('#pro_cond_sponsored').val();
                        var pro_cond_sponsoring_agency_name_address = $('#pro_cond_sponsoring_agency_name_address').val();
                        var pro_cond_role = $('#pro_cond_role').val();
                        var pro_cond_from_date = $('#pro_cond_from_date').val();
                        var pro_cond_to_date = $('#pro_cond_to_date').val();
                        var pro_cond_place = $('#pro_cond_place').val();
                        var pro_cond_no_of_days = $('#pro_cond_no_of_days').val();
                        var pro_con_document = $('#pro_con_document').val();

                         var flag = false;

                        //alert(pro_cond_title+'-'+pro_cond_level+'-'+pro_cond_organizer+'-'+pro_cond_co_organizer+'-'+pro_cond_category+'-'+pro_cond_sponsored+'-'+pro_cond_sponsoring_agency_name_address+'-'+pro_cond_role+'-'+pro_cond_from_date+'-'+pro_cond_to_date+'-'+pro_cond_place+'-'+pro_cond_no_of_days);

                        if(pro_cond_title == ''){
                            $('#pro_con_titleNameError').text('Title is missing');
                             flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(pro_cond_title.trim())){
                            $('#pro_con_titleNameError').text('Please fill the correct value');
                             flag = true;
                        }
                        if(pro_cond_level == '#'){
                            $('#pro_con_levelNameError').text('Please Choose a correct Option');
                             flag = true;
                        }
                        if(pro_cond_organizer == ''){
                            $('#pro_con_organizerNameError').text('Organizer is missing');
                             flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(pro_cond_organizer.trim())){
                            $('#pro_con_organizerNameError').text('Please fill the correct value');
                             flag = true;
                        }
                        if(pro_cond_co_organizer == ''){
                            $('#pro_con_coorganizerNameError').text('Co-Organizer is missing');
                             flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(pro_cond_co_organizer.trim())){
                            $('#pro_con_coorganizerNameError').text('Please fill the correct value');
                             flag = true;
                        }
                        if(pro_cond_category == '#'){
                            $('#pro_con_categoryNameError').text('Please Choose a correct Option');
                             flag = true;
                        }
                        if(pro_cond_sponsored == '#'){
                            $('#pro_con_sponsoredNameError').text('Please Choose a correct option');
                             flag = true;
                        }

                        //try code for sponsoring agency
                        if(pro_cond_sponsoring_agency_name_address == '#'){
                            $('#pro_con_sponsoring_agencyNameError').text('Please fill the correct value');
                             flag = true;
                        }
                        //end

                        //if(pro_cond_sponsoring_agency_name_address == ''){
                            //$('#pro_con_sponsoring_agencyNameError').text('Sponsoring Agency Name is missing');
                             //flag = true;
                        //}else if (!/^[a-zA-Z\s]+$/.test(pro_cond_sponsoring_agency_name_address.trim())){
                            //$('#pro_con_sponsoring_agencyNameError').text('Please fill the correct value');
                             //flag = true;
                        //}

                        if(pro_cond_role == '#'){
                            //alert('# choosen');
                            $('#pro_con_roleNameError').text('Please Choose a correct option');
                             flag = true;
                        }
                        if(pro_cond_from_date.trim() === ''){
                            $('#pro_con_fromdateError').text('Please Select a proper date');
                             flag = true;
                        }

                        if(pro_cond_to_date.trim() === ''){
                            $('#pro_con_todateError').text('Please Select a proper date');
                             flag = true;
                        }
                        if(pro_cond_place == ''){
                            $('#pro_con_placeNameError').text('Place Name is missing');
                             flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(pro_cond_place.trim())){
                            $('#pro_con_placeNameError').text('Please fill the correct value');
                             flag = true;
                        }
                        if(pro_cond_no_of_days <= 0){
                            $('#pro_con_noofdaysError').text('Choose a proper from date and to date.');
                             flag = true;
                        }
                        if(pro_con_document[0].files.length === 0){
                            //alert('file not choosen');
                            $('#pro_con_documentError').text('Please choose a file');
                            flag = true;
                        }

                        if(flag == true){
                            e.preventDefault();
                        }
                    });
            });
        </script>

        <!--Export to Excel professional activity attended-->
        
    <script>
        $(document).ready(function () {
            $('#exportToExcel').on('click', function () {
                var table = $('#activity_attended_table').clone();

                table.find('td:last-child').remove();

                table.find('thead tr th:last-child').remove();

                // Remove any colspan attributes from table cells
                table.find('td').removeAttr('colspan');

                // Ensure each cell has proper formatting
                table.find('td').css({
                    'border': '1px solid #000',
                    'padding': '5px'
                });

                // Create a Blob containing the modified table data
                var blob = new Blob([table[0].outerHTML], { type: 'application/vnd.ms-excel;charset=utf-8' });

                // Check for Internet Explorer and Edge
                if (window.navigator && window.navigator.msSaveOrOpenBlob) {
                    window.navigator.msSaveOrOpenBlob(blob, 'proactivityattended_data.xls');
                } else {
                    var link = $('<a>', {
                        href: URL.createObjectURL(blob),
                        download: 'proactivityattended_data.xls'
                    });

                    // Trigger the click to download
                    link[0].click();
                }
            });
        });
    </script>

        <!-- <script>
            //Front-end validation for Attended
            function validateForm() {
                var titleName = document.forms["proattended_from"]["title"].value;
                var oragnizerName = document.forms["proattended_from"]["organizer"].value;
                 var roleName = document.forms["proattended_from"]["role"].value;
                 var levelName = document.forms["proattended_from"]["level"].value;
                 var categoryName = document.forms["proattended_from"]["category"].value;
                 var sponsoredName = document.forms["proattended_from"]["sponsored"].value;
                 var sponsoredbyName = document.forms["proattended_from"]["sponsored_by"].value;
                 var fromdateName = document.forms["proattended_from"]["from_date"].value;
                 var todateName = document.forms["proattended_from"]["to_date"].value;
                 var nodaysName = document.forms["proattended_from"]["no_of_days"].value;

                 document.getElementById("titleNameError").innerHTML = "";
                 document.getElementById("organizerError").innerHTML = "";
                 document.getElementById("roleError").innerHTML = "";
                 document.getElementById("levelError").innerHTML = "";
                 document.getElementById("categoryError").innerHTML = "";
                 document.getElementById("sponsoredError").innerHTML = "";
                 document.getElementById("sponsoredbyError").innerHTML = "";
                 document.getElementById("fromdateError").innerHTML = "";
                 document.getElementById("todateError").innerHTML = "";
                 document.getElementById("noofdaysError").innerHTML = "";



                 if (titleName.trim() === "") {
                     document.getElementById("titleNameError").innerHTML = "title Name is required";
                     return false;

                 }else if (!/^[a-zA-Z\s]+$/.test(titleName.trim())) {
                     document.getElementById("titleNameError").innerHTML = "Title Name should contain only alphabetic characters";
                     return false;
                 }

                 if (oragnizerName.trim() === "") {
                     document.getElementById("organizerError").innerHTML = "Oragnizer Name is required";
                     return false;
                 }else if (!/^[a-zA-Z\s]+$/.test(oragnizerName.trim())) {
                     document.getElementById("organizerError").innerHTML = "Oragnizer Name should contain only alphabetic characters";
                     return false;
                 }
                 if (roleName.trim() === "") {
                     document.getElementById("roleError").innerHTML = "Role Name is required";
                     return false;
                 }else if (!/^[a-zA-Z]+$/.test(roleName.trim())) {
                     document.getElementById("roleError").innerHTML = "Please select valid option";
                     return false;
                 }
                 if (levelName.trim() === "") {
                     document.getElementById("levelError").innerHTML = "Level Name is required";
                     return false;
                 }else if (!/^[a-zA-Z]+$/.test(levelName.trim())) {
                     document.getElementById("levelError").innerHTML = "Please select valid option";
                     return false;
                 }
                 if (categoryName.trim() === "") {
                     document.getElementById("categoryError").innerHTML = "Category Name is required";
                     return false;
                 }else if (!/^[a-zA-Z]+$/.test(categoryName.trim())) {
                     document.getElementById("categoryError").innerHTML = "Please select valid option";
                     return false;
                 }
                 if (sponsoredName.trim() === "") {
                     document.getElementById("sponsoredError").innerHTML = "Sponsored Name is required";
                     return false;
                 }else if (!/^[a-zA-Z]+$/.test(sponsoredName.trim())) {
                     document.getElementById("sponsoredError").innerHTML = "Please select valid option";
                     return false;
                 }
                 if (sponsoredbyName.trim() === "") {
                    document.getElementById("sponsoredbyError").innerHTML = "Sponsored By Name is required";
                    return false;
                 }else if (!/^[a-zA-Z]+$/.test(sponsoredbyName.trim())) {
                 document.getElementById("sponsoredbyError").innerHTML = "Please select valid option";
                    return false;
                }
                 if (fromdateName.trim() === "") {
                     document.getElementById("fromdateError").innerHTML = "From Date is required";
                     return false;
                }
                 if (todateName.trim() === "") {
                     document.getElementById("todateError").innerHTML = "To Date is required";
                     return false;
                }
                 if (nodaysName.trim() === "") {
                     document.getElementById("noofdaysError").innerHTML = "No Of Days required";
                     return false;
                 }
                 return true;
            }
        </script> -->


        <!---Export to Excel professional activity conducted--->
        <script>
            $(document).ready(function () {
                $('#conduct_exportToExcel').on('click', function () {
                    var table = $('#activity_conducted_table').clone();

                    table.find('td:last-child').remove();

                    table.find('thead tr th:last-child').remove();

                    // Remove any colspan attributes from table cells
                    table.find('td').removeAttr('colspan');

                    // Ensure each cell has proper formatting
                    table.find('td').css({
                        'border': '1px solid #000',
                        'padding': '5px'
                    });

                    // Create a Blob containing the modified table data
                    var blob = new Blob([table[0].outerHTML], { type: 'application/vnd.ms-excel;charset=utf-8' });

                    // Check for Internet Explorer and Edge
                    if (window.navigator && window.navigator.msSaveOrOpenBlob) {
                        window.navigator.msSaveOrOpenBlob(blob, 'proactivityconducted_data.xls');
                    } else {
                        var link = $('<a>', {
                            href: URL.createObjectURL(blob),
                            download: 'proactivityconducted_data.xls'
                        });

                        // Trigger the click to download
                        link[0].click();
                    }
                });
            });
        </script>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.components.staff.master-teaching', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views/Staff/Teaching/professional_activity.blade.php ENDPATH**/ ?>