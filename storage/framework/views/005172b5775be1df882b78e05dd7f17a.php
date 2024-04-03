

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
                                        Professional Activity Conducted
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                </li>
                                
                                
                            </ol>
                        </div>
                        <!-- Page Header Close -->
                        
                    </div>
                    
                    <!-- Start::main-content -->
                    <div class="grid grid-cols-12 gap-x-6">
                          <!-- Add count boxes here -->
                        <div class="col-span-2 xl:col-span-2">
                            <!-- Count box 1 -->
                            <div class="box box-sm">
                                <!-- Content for count box 1 -->
                                <div class="box-body">
                                    <div class="flex">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 
                                                <?php if($conducted_category_counts->seminar_count == 0): ?> text-red-500 <?php endif; ?>">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">Seminar</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold 
                                                        <?php if($conducted_category_counts->seminar_count == 0): ?> text-red-500 <?php else: ?> text-gray-800 dark:text-white <?php endif; ?>">
                                                        <?php echo e($conducted_category_counts->seminar_count); ?>

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
                                                <?php if($conducted_category_counts->webinar_count == 0): ?> text-red-500 <?php endif; ?>">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">Webinar</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold 
                                                        <?php if($conducted_category_counts->webinar_count == 0): ?> text-red-500 <?php else: ?> text-gray-800 dark:text-white <?php endif; ?>">
                                                        <?php echo e($conducted_category_counts->webinar_count); ?>

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
                                                <?php if($conducted_category_counts->certification_count == 0): ?> text-red-500 <?php endif; ?>">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">Certification</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold 
                                                        <?php if($conducted_category_counts->certification_count == 0): ?> text-red-500 <?php else: ?> text-gray-800 dark:text-white <?php endif; ?>">
                                                        <?php echo e($conducted_category_counts->certification_count); ?>

                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-2 xl:col-span-2">
                            <!-- Count box 4 -->
                            <div class="box box-sm">
                                <!-- Content for count box 4 -->
                                <div class="box-body">
                                    <div class="flex">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 
                                                <?php if($conducted_category_counts->workshop_count == 0): ?> text-red-500 <?php endif; ?>">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">Workshop</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold 
                                                        <?php if($conducted_category_counts->workshop_count == 0): ?> text-red-500 <?php else: ?> text-gray-800 dark:text-white <?php endif; ?>">
                                                        <?php echo e($conducted_category_counts->workshop_count); ?>

                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-2 xl:col-span-2">
                            <!-- Count box 5 -->
                            <div class="box box-sm">
                                <!-- Content for count box 4 -->
                                <div class="box-body">
                                    <div class="flex">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 
                                                <?php if($conducted_category_counts->FDP_count == 0): ?> text-red-500 <?php endif; ?>">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">FDP</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold 
                                                        <?php if($conducted_category_counts->FDP_count == 0): ?> text-red-500 <?php else: ?> text-gray-800 dark:text-white <?php endif; ?>">
                                                        <?php echo e($conducted_category_counts->FDP_count); ?>

                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-2 xl:col-span-1">
                            <!-- Count box 6 -->
                            <div class="box box-sm">
                                <!-- Content for count box 4 -->
                                <div class="box-body">
                                    <div class="flex">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 
                                                <?php if($conducted_category_counts->STTP_count == 0): ?> text-red-500 <?php endif; ?>">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">STTP</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold 
                                                        <?php if($conducted_category_counts->STTP_count == 0): ?> text-red-500 <?php else: ?> text-gray-800 dark:text-white <?php endif; ?>">
                                                        <?php echo e($conducted_category_counts->STTP_count); ?>

                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-2 xl:col-span-1">
                            <!-- Count box 7 -->
                            <div class="box box-sm">
                                <!-- Content for count box 4 -->
                                <div class="box-body">
                                    <div class="flex">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 
                                                <?php if($conducted_category_counts->MDP_FDP_count == 0): ?> text-red-500 <?php endif; ?>">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">MDP/FDP</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold 
                                                        <?php if($conducted_category_counts->MDP_FDP_count == 0): ?> text-red-500 <?php else: ?> text-gray-800 dark:text-white <?php endif; ?>">
                                                        <?php echo e($conducted_category_counts->MDP_FDP_count); ?>

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
                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                        <!-- Add the export button here -->
                                        <div style="display: flex; align-items: center;">
                                            <button id="filterBtn" class="bg-blue-500 text-white px-4 py-2 rounded-md focus:outline-none">Filter</button>
                                            <input type="date" id="from_date" class="mx-2" placeholder="From Date">
                                            <input type="date" id="to_date" class="mx-2" placeholder="To Date" >
                                        </div>
                                        <div class="flex justify-end mt-4">
                                            <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none">Export to Excel</button>
                                        </div>
                                        <table id="conducted" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                            <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr class="">
                                                <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Staff Name</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Dept Short Name</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">E-Gov ID</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Title</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Role</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Level</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Oragnizer</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Category</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">From_date</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">to_date</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">No Of Days</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Sponsored</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Sponsoring Agency Name And Address</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Place</th>
                                                
                                                <?php if(!isset($export) || !$export): ?>
                                                    <th scope="col" class="dark:text-white/80 font-bold ">Document</th>
                                                <?php endif; ?>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                 <?php
                                                    $i=1;
                                                ?>
                                                <?php $__currentLoopData = $professional_activity_conducteds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $con): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr class="">

                                                        <td><span><?php echo e($i++); ?></span></td>
                                                        <td><span><?php echo e($con->fname . ' ' . $con->mname . ' ' . $con->lname); ?></span></td>
                                                        <td><span><?php echo e($con->dept_shortname); ?></span></td>
                                                        <td><span><?php echo e($con->egov_id); ?></span></td>
                                                        <td><span><?php echo e($con->title); ?></span></td>
                                                        <td><span><?php echo e($con->role); ?></span></td>
                                                        <td><span><?php echo e($con->level); ?></span></td>
                                                        <td><span><?php echo e($con->organizer); ?></span></td>
                                                        <td><span><?php echo e($con->category); ?></span></td>
                                                        <td><span><?php echo e(\Carbon\Carbon::parse($con->from_date)->format('d-M-Y')); ?></span></td>
                                                        <td><span><?php echo e(\Carbon\Carbon::parse($con->to_date)->format('d-M-Y')); ?></span></td>
                                                        <td><span><?php echo e($con->no_of_days); ?></span></td>
                                                        <td><span><?php echo e($con->sponsored); ?></span></td>
                                                        <td>
                                                            <span>
                                                                <?php echo e($con->sponsored == 'No' ? '--NA--' : $con->sponsoring_agency_name_address); ?>

                                                            </span>
                                                        </td>
                                                        
                                                        <td><span><?php echo e($con->place); ?></span></td>
                                                         
                                                        <?php if(!isset($export) || !$export): ?>
                                                            <td><span><a href=<?php echo e(asset('Uploads/Professional_Activity_Conducted/'.$con->document)); ?> class='font-medium text-blue-600 dark:text-blue-500 hover:underline' target="_blank"><?php echo e($con->document); ?></a></span></td>

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

        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
        <script href="https://cdn.tailwindcss.com/3.3.5"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        
        <script>
            $(document).ready(function(){
               //alert('Hello from jquery');
                new DataTable('#conducted');


                $('#exportToExcel').on('click', function () {
                    var table = $('#conducted').clone();

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
                        window.navigator.msSaveOrOpenBlob(blob, 'conducted_data.xls');
                    } else {
                        var link = $('<a>', {
                            href: URL.createObjectURL(blob),
                            download: 'conducted_data.xls'
                        });

                        // Trigger the click to download
                        link[0].click();
                    }
                });


              
                 // Function to handle the filter button click
                $('#filterBtn').click(function () {
                    var fromDate = $('#from_date').val();
                    var toDate = $('#to_date').val();

                    console.log('From Date:', fromDate);
                    console.log('To Date:', toDate);

                    // Determine the column indices dynamically based on table headers
                    var fromColumnIndex = $('#conducted th:contains("From_date")').index();
                    var toColumnIndex = $('#conducted th:contains("to_date")').index();

                    console.log('From Column Index:', fromColumnIndex);
                    console.log('To Column Index:', toColumnIndex);

                    $('#conducted tbody tr').each(function () {
                        var rowFromDate = $(this).find('td:eq(' + fromColumnIndex + ') span').text();
                        var rowToDate = $(this).find('td:eq(' + toColumnIndex + ') span').text();

                        console.log('Row From Date:', rowFromDate);
                        console.log('Row To Date:', rowToDate);

                        var rowFromDateParsed = moment(rowFromDate, 'DD-MMM-YYYY');
                        var rowToDateParsed = moment(rowToDate, 'DD-MMM-YYYY');

                        console.log('Parsed Row From Date:', rowFromDateParsed.format('YYYY-MM-DD'));
                        console.log('Parsed Row To Date:', rowToDateParsed.format('YYYY-MM-DD'));

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
                
            });
        </script>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.components.egov_admin.master-egov', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views//egov/Teaching/activityconducted.blade.php ENDPATH**/ ?>