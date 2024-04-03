

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
                                   Funded Project
                                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                </a>
                                </li>
                                
                                
                            </ol>
                        </div>
                        <!-- Page Header Close -->
                        
                    </div>
                    <!-- Start::main-content -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-2 xl:col-span-3">
                            <!-- Count box 2 -->
                            <div class="box box-sm">
                                <!-- Content for count box 2 -->
                                <div class="box-body">
                                    <div class="flex">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 
                                                <?php if($books_chapters_count->national_count == 0): ?> text-red-500 <?php endif; ?>">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">National</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold 
                                                        <?php if($books_chapters_count->national_count == 0): ?> text-red-500 <?php else: ?> text-gray-800 dark:text-white <?php endif; ?>">
                                                        <?php echo e($books_chapters_count->national_count); ?>

                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-2 xl:col-span-3">
                            <!-- Count box 3 -->
                            <div class="box box-sm">
                                <!-- Content for count box 3 -->
                                <div class="box-body">
                                    <div class="flex">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 
                                                <?php if($books_chapters_count->international_count == 0): ?> text-red-500 <?php endif; ?>">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">International</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold 
                                                        <?php if($books_chapters_count->international_count == 0): ?> text-red-500 <?php else: ?> text-gray-800 dark:text-white <?php endif; ?>">
                                                        <?php echo e($books_chapters_count->international_count); ?>

                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-span-2 xl:col-span-3">
                            <!-- Count box 3 -->
                            <div class="box box-sm">
                                <!-- Content for count box 3 -->
                                <div class="box-body">
                                    <div class="flex">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 
                                                <?php if($books_chapters_count->book_count == 0): ?> text-red-500 <?php endif; ?>">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">Book</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold 
                                                        <?php if($books_chapters_count->book_count == 0): ?> text-red-500 <?php else: ?> text-gray-800 dark:text-white <?php endif; ?>">
                                                        <?php echo e($books_chapters_count->book_count); ?>

                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 xl:col-span-3">
                            <!-- Count box 3 -->
                            <div class="box box-sm">
                                <!-- Content for count box 3 -->
                                <div class="box-body">
                                    <div class="flex">
                                        <div class="ltr:mr-2 rtl:ml-2">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 
                                                <?php if($books_chapters_count->chapter_count == 0): ?> text-red-500 <?php endif; ?>">
                                                <i class="ti ti-users text-2xl leading-none"></i>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm font-bold">Chapter</p>
                                            <div class="flex justify-between items-center">
                                                <div class="flex flex-col">
                                                    <h5 class="mb-0 text-2xl font-semibold 
                                                        <?php if($books_chapters_count->chapter_count == 0): ?> text-red-500 <?php else: ?> text-gray-800 dark:text-white <?php endif; ?>">
                                                        <?php echo e($books_chapters_count->chapter_count); ?>

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
                                        <div style="display: flex; align-items: center;">
                                            <button id="filterBtn" class="bg-blue-500 text-white px-4 py-2 rounded-md focus:outline-none">Filter</button>
                                            <input type="date" id="fromDate" class="mx-2" placeholder="From Date">
                                            <input type="date" id="toDate" class="mx-2" placeholder="To Date" >
                                        </div>
                                        <div class="flex justify-end mt-4">
                                            <button id="exportToExcel" class="bg-green-500 text-white px-4 py-2 rounded-md focus:outline-none">Export to Excel</button>
                                        </div>
                                        <table id="book_chapter_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                <tr class="">
                                                    <th scope="col" class="dark:text-white/80 font-bold">S NO</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">Staff Name</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">Dept Short Name</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">E-Gov ID</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">title</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">Book Level</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">Publisher Name</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">Edition</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">DOI Number</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">Date</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">Issue</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">Type</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">Chapter Title</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">Start Page No</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">End Page No</th>
                                                    
                                                    <?php if(!isset($export) || !$export): ?>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Document</th>
                                                    <?php endif; ?>
                                                </tr>
                                            </thead>
                                            <?php
                                                $i=1;
                                            ?>
                                            <tbody class="">
                                                <?php $__currentLoopData = $books_chapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr class="">

                                                        <td><span><?php echo e($i++); ?></span></td>
                                                        <td><span><?php echo e($book->fname . ' ' . $book->mname . ' ' . $book->lname); ?></span></td>
                                                        <td><span><?php echo e($book->dept_shortname); ?></span></td>
                                                        <td><span><?php echo e($book->egov_id); ?></span></td>
                                                        <td><span><?php echo e($book->title); ?></span></td>
                                                        <td><span><?php echo e($book->book_level); ?></span></td>
                                                        <td><span><?php echo e($book->publisher_name); ?></span></td>
                                                        <td><span><?php echo e($book->edition); ?></span></td>
                                                        <td><span><?php echo e($book->doi); ?></span></td>
                                                        <td><span><?php echo e(\Carbon\Carbon::parse($book->date)->format('d-M-Y')); ?></span></td>
                                                        <td><span><?php echo e($book->issue); ?></span></td>
                                                        
                                                        <td><span><?php echo e($book->type); ?></span></td>
                                                        <td><span><?php echo e($book->type == 'Book' ? '--NA--' : $book->chapter_title); ?></span></td>
                                                        <td><span><?php echo e($book->type == 'Book' ? '--NA--' : $book->start_page_no); ?></span></td>
                                                        <td><span><?php echo e($book->type == 'Book' ? '--NA--' : $book->end_page_no); ?></span></td>
                                                        
                                                        <?php if(!isset($export) || !$export): ?>
                                                            <td><span><a href=<?php echo e(asset('Uploads/Research/Book_Chapters/'.$book->document)); ?> class='font-medium text-blue-600 dark:text-blue-500 hover:underline' target="_blank"><?php echo e($book->document); ?></a></span></td>

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
        
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
        <script href="https://cdn.tailwindcss.com/3.3.5"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        

        <script>
            $(document).ready(function(){
                new DataTable('#book_chapter_table');
                // Function to handle the filter Date Range
                $('#filterBtn').click(function () {
                    var fromDate = $('#fromDate').val();
                    var toDate = $('#toDate').val();

                    //Determine the column index dynamically based on table headers
                    var dateIndex = $('#book_chapter_table th:contains("Date")').index();

                    $('#book_chapter_table tbody tr').each(function () {
                        var rowDate = $(this).find('td:eq(' + dateIndex + ') span').text();

                        var rowDateParsed = moment(rowDate, 'D-MMM-YYYY');

                        if (
                            (fromDate !== '' && rowDateParsed.isBefore(moment(fromDate, 'YYYY-MM-DD'))) ||
                            (toDate !== '' && rowDateParsed.isAfter(moment(toDate, 'YYYY-MM-DD')))
                        ) {
                            $(this).hide();
                        } else {
                            $(this).show();
                        }
                    });
                });

                //Export to Excel
                $('#exportToExcel').on('click', function () {
                    var table = $('#book_chapter_table').clone();

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

                    
                    if (window.navigator && window.navigator.msSaveOrOpenBlob) {
                        window.navigator.msSaveOrOpenBlob(blob, 'book_chapter_data.xls');
                    } else {
                        var link = $('<a>', {
                            href: URL.createObjectURL(blob),
                            download: 'book_chapter_data.xls'
                        });

                        // Trigger the click to download
                        link[0].click();
                    }
                });

            });
        </script>








        

        

        <!--Get Selected--->
        



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.components.egov_admin.master-egov', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel Apps\gitoffice\resources\views//egov/Teaching/research/book_chapter.blade.php ENDPATH**/ ?>