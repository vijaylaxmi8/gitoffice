

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
                                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">
                                    <span class="text-primary">
                                        <?php if(session('deptid')==8): ?>
                                            Weclome E-Governance Admin,Civil Engineering
                                            <?php elseif(session('deptid')==5): ?>
                                            Welcome E-Governance Admin,Computer Science and Engineering
                                            <?php elseif(session('deptid')==17): ?>
                                            Welcome E-Governance Admin,Architecture
                                            <?php elseif(session('deptid')==9): ?>
                                            Welcome E-Governance Admin, Aeronautical Engineering
                                            <?php elseif(session('deptid')==2): ?>
                                            Welcome E-Governance Admin, Electronics and Communication Engineering
                                            <?php elseif(session('deptid')==7): ?>
                                            Welcome E-Governance Admin,Electrtical and Electronics Engineering
                                            <?php elseif(session('deptid')==6): ?>
                                            Welcome E-Governance Admin, Information Science & Engineering
                                            <?php elseif(session('deptid')==1): ?>
                                            Welcome E-Governance Admin, Mechanical Engineering
                                            <?php elseif(session('deptid')==24): ?>
                                            Welcome E-Governance Admin,Master of Business Administration
                                            <?php elseif(session('deptid')==3): ?>
                                            Welcome E-Governance Admin Master of Computer Applications
                                            <?php elseif(session('deptid')==13): ?>
                                            Welcome E-Governance Admin, Physics
                                            <?php elseif(session('deptid')==12): ?>
                                            Welcome E-Governance Admin, Mathematics
                                            <?php elseif(session('deptid')==14): ?>
                                            Welcome E-Governance Admin, Chemistry
                                        <?php endif; ?> 
                                    </span>
                                </h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-sm">
                                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="#">
                                   Conference Activity Attended
                                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                </a>
                                </li>
                                
                                
                            </ol>
                        </div>
                        <!-- Page Header Close -->
                        
                    </div>
                    <!-- Start::main-content -->
                    <div class="grid grid-cols-12 gap-x-6">
                         <div class="col-span-2 xl:col-span-2">
                            <!-- Count box 1 -->
                            <div class="box box-sm">
                                <!-- Content for count box 1 -->
                                <div class="box-body">
                                    <div class="flex">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 
                                                <?php if($teaching_conferences_attendees->resource_person_count == 0): ?> text-red-500 <?php endif; ?>">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">ResourcePerson</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold 
                                                        <?php if($teaching_conferences_attendees->resource_person_count == 0): ?> text-red-500 <?php else: ?> text-gray-800 dark:text-white <?php endif; ?>">
                                                        <?php echo e($teaching_conferences_attendees->resource_person_count); ?>

                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-2 xl:col-span-2">
                            <!-- Count box 2 -->
                            <div class="box box-sm">
                                <!-- Content for count box 2 -->
                                <div class="box-body">
                                    <div class="flex">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 
                                                <?php if($teaching_conferences_attendees->paper_presenter_count == 0): ?> text-red-500 <?php endif; ?>">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">PaperPresenter</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold 
                                                        <?php if($teaching_conferences_attendees->paper_presenter_count == 0): ?> text-red-500 <?php else: ?> text-gray-800 dark:text-white <?php endif; ?>">
                                                        <?php echo e($teaching_conferences_attendees->paper_presenter_count); ?>

                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-2 xl:col-span-2">
                            <!-- Count box 3 -->
                            <div class="box box-sm">
                                <!-- Content for count box 3 -->
                                <div class="box-body">
                                    <div class="flex">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 
                                                <?php if($teaching_conferences_attendees->participant_count == 0): ?> text-red-500 <?php endif; ?>">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">Participant</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold 
                                                        <?php if($teaching_conferences_attendees->participant_count == 0): ?> text-red-500 <?php else: ?> text-gray-800 dark:text-white <?php endif; ?>">
                                                        <?php echo e($teaching_conferences_attendees->participant_count); ?>

                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-span-2 xl:col-span-2">
                            <!-- Count box 3 -->
                            <div class="box box-sm">
                                <!-- Content for count box 3 -->
                                <div class="box-body">
                                    <div class="flex">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 
                                                <?php if($teaching_conferences_attendees->participant_count == 0): ?> text-red-500 <?php endif; ?>">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">National</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold 
                                                        <?php if($teaching_conferences_attendees->national_count == 0): ?> text-red-500 <?php else: ?> text-gray-800 dark:text-white <?php endif; ?>">
                                                        <?php echo e($teaching_conferences_attendees->national_count); ?>

                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-span-2 xl:col-span-2">
                            <!-- Count box 3 -->
                            <div class="box box-sm">
                                <!-- Content for count box 3 -->
                                <div class="box-body">
                                    <div class="flex">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 
                                                <?php if($teaching_conferences_attendees->international_count == 0): ?> text-red-500 <?php endif; ?>">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">International</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold 
                                                        <?php if($teaching_conferences_attendees->international_count == 0): ?> text-red-500 <?php else: ?> text-gray-800 dark:text-white <?php endif; ?>">
                                                        <?php echo e($teaching_conferences_attendees->international_count); ?>

                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-12">
                            <div class="box">
                                <div class="box-body">                
                                    <div class="table-bordered rounded-sm ti-custom-table-head relative overflow-x-auto">
                                        <div style="display: flex; align-items: center;">
                                            <button id="filterBtn" class="bg-blue-500 text-white px-4 py-2 rounded-md focus:outline-none">Filter</button>
                                            <input type="date" id="from_date" class="mx-2" placeholder="From Date">
                                            <input type="date" id="to_date" class="mx-2" placeholder="To Date" >
                                        </div>
                                        <div class="flex justify-end mt-4">
                                            <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none">Export to Excel</button>
                                        </div>
                                        <table id="conference" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                            <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr class="">
                                                <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Staff Name</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Dept Short Name</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">E-Gov ID</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Conferene Name</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Attended As</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">From Date</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">To Date</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">No Of Days</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Title</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Place</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Sponsored</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Sponsored By</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">amount</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Web-Link</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Type Of Level</th>
                                                 <th scope="col" class="dark:text-white/80 font-bold ">ISSN NO</th>
                                                 
                                                <?php if(!isset($export) || !$export): ?>
                                                    <th scope="col" class="dark:text-white/80 font-bold ">Document</th>
                                                <?php endif; ?>
                                                

                                            </tr>
                                            </thead>
                                            <tbody>
                                                 <?php
                                                    $i=1;
                                                ?>
                                                <?php $__currentLoopData = $conferences_attendees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conference): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr class="">

                                                        <td><span><?php echo e($i++); ?></span></td>
                                                        <td><span><?php echo e($conference->fname . ' ' . $conference->mname . ' ' . $conference->lname); ?></span></td>
                                                        <td><span><?php echo e($conference->dept_shortname); ?></span></td>
                                                        <td><span><?php echo e($conference->egov_id); ?></span></td>
                                                        <td><span><?php echo e($conference->conference_name); ?></span></td>
                                                        <td><span><?php echo e($conference->attended_as); ?></span></td>
                                                        <td><span><?php echo e(\Carbon\Carbon::parse($conference->from_date)->format('d-M-Y')); ?></span></td>
                                                        <td><span><?php echo e(\Carbon\Carbon::parse($conference->to_date)->format('d-M-Y')); ?></span></td>
                                                        <td><span><?php echo e($conference->no_of_days); ?></span></td>
                                                        <td><span><?php echo e($conference->title); ?></span></td>
                                                        <td><span><?php echo e($conference->place); ?></span></td>
                                                        <td><span><?php echo e($conference->sponsored); ?></span></td>
                                                        <td><span><?php echo e(($conference->sponsored=="No"? '--NA--' : $conference->sponsored_by)); ?></span></td>
                                                        <td><span><?php echo e($conference->amount); ?></span></td>
                                                        <td>
                                                            <span>
                                                                <a href="<?php echo e($conference->weblink); ?>" 
                                                                class='font-medium text-blue-600 dark:text-blue-500 hover:underline' target="_blank">
                                                                    <?php echo e($conference->weblink); ?>

                                                                </a>
                                                            </span>
                                                        </td>
                                                        <td><span><?php echo e($conference->type_of_level); ?></span></td>
                                                        <td><span><?php echo e($conference->ISSN_NO); ?></span></td>

                                                         
                                                        <?php if(!isset($export) || !$export): ?>
                                                            <td><span><a href=<?php echo e(asset('Uploads/Research/Conference_attended/'.$conference->document)); ?> class='font-medium text-blue-600 dark:text-blue-500 hover:underline' target="_blank"><?php echo e($conference->document); ?></a></span></td>

                                                        <?php endif; ?>

                                                        
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
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        
        <script>
            $(document).ready(function(){
               //alert('Hello from jquery');

                new DataTable('#conference');


                // Function to handle the filter Date Range
                $('#filterBtn').click(function () {
                    var fromDate = $('#from_date').val();
                    var toDate = $('#to_date').val();

                    // Determine the column indices dynamically based on table headers
                    var fromColumnIndex = $('#conference th:contains("From Date")').index();
                    var toColumnIndex = $('#conference th:contains("To Date")').index();

                    $('#conference tbody tr').each(function () {
                        var rowFromDate = $(this).find('td:eq(' + fromColumnIndex + ') span').text();
                        var rowToDate = $(this).find('td:eq(' + toColumnIndex + ') span').text();
                        var rowFromDateParsed = moment(rowFromDate, 'DD-MMM-YYYY');
                        var rowToDateParsed = moment(rowToDate, 'DD-MMM-YYYY');
                        
                        if (
                            (fromDate !== '' && rowFromDateParsed.isBefore(moment(fromDate, 'YYYY-MM-DD'))) ||
                            (toDate !== '' && rowToDateParsed.isAfter(moment(toDate, 'YYYY-MM-DD')))
                        ) {
                            $(this).hide();
                        } else {
                            $(this).show();
                        }
                    });
                });

                //Export to Exceel
                $('#exportToExcel').on('click', function () {
                    var table = $('#conference').clone();

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
                        window.navigator.msSaveOrOpenBlob(blob, 'conference_data.xls');
                    } else {
                        var link = $('<a>', {
                            href: URL.createObjectURL(blob),
                            download: 'conference_data.xls'
                        });

                        // Trigger the click to download
                        link[0].click();
                    }
                });
            });
        </script>
  
   
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.components.egov_admin.master-egov', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views//egov/Teaching/research/conferenceattended.blade.php ENDPATH**/ ?>