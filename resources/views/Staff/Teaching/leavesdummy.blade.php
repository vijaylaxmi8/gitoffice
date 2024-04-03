@extends('layouts.components.staff.master-teaching')

@section('styles')

    <!-- CHOICES CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

    <!-- FLATPICKR CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

    
    <!-- FULLCALENDAR CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/fullcalendar/main.min.css')}}">
        
@endsection

@section('content')

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
                                 @if(session('status'))
                                    @if (session('status') == 1)
                                    <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                        <span class='font-bold'>Result: </span> Database transaction Successful
                                    </div>
                                    @elseif(session('status') == 0)
                                    <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                        <span class='font-bold'>Result : </span> Error in Database transaction
                                    </div>
                                
                                    @endif
                                    @php 
                                        Illuminate\Support\Facades\Session::forget('status'); 
                                        header("refresh: 1"); 
                                    @endphp
                                @endif

                            </div>
                        </div>
                        
                        <!-- Start::row-1 -->
                        <div class="col-span-12 xl:col-span-9 sm:col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    {{-- <h4>Leaves Activities</h4> --}}
                                </div>
       
                                <div class="box-body pt-0">
                                    <nav class="-mb-0.5 flex justify-center space-x-6 rtl:space-x-reverse sm:col-span-6" aria-label="Tabs">
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-gray-500 rounded-sm hover:text-primary  dark:text-white/70 dark:hover:text-white active" id="pills-with-brand-color-item-1" data-hs-tab="#pills-with-brand-color-1" aria-controls="pills-with-brand-color-1">
                                        Leaves
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
                                                    <button data-hs-overlay="#add_leaveform" class="hs-dropdown-toggle ti-btn ti-btn-primary" id="leave_apply_modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                                        Apply Leave
                                                    </button>
                                                    <div id="add_leaveform" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                                                         Apply leave  
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
                                                                {{-- <form  action="{{route('')}}" method="post"> --}}
                                                                    @csrf 
                                                                    <div class="ti-modal-body">
                                                                       
                                                                       
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            
                                                                            <div class="max-w-sm space-y-2 pb-6 ">
                                                                                <label for="" class="ti-form-label font-bold">Leave Type:<span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select" name="type" id="type" required>
                                                                                    <option value="#">Choose Leave Type</option>
                                                                                    @foreach ($leaves as $l)
                                                                                        <option value="{{$l->id}}">{{$l->shortname}}</option>
                                                                                    @endforeach
                                                                                    
                                                                                </select>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">From Date:<span class="text-red-500">*</span></label>
                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                    </div>
                                                        
                                                                                    <input type="text" name="from_date"
                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                        id="from_date" required placeholder="Choose date" >
                                                                            </div>
                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">TO Date:<span class="text-red-500">*</span></label>
                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                    </div>
                                                        
                                                                                    <input type="text" name="to_date"
                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                         id="to_date" required placeholder="Choose date" >
                                                                            </div>
                                                                            
                                                                            
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-1 gap-2 space-y-4 lg:space-y-0">
                                                                            <div class="flex max-w-sm space-y-4 pb-6 content-center">
                                                                                <p class="font-bold">No. of Days :</p> <span class="text-green-500" id="no_of_days_count"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-1 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Leave Reason:<span class="text-red-500">*</span></label>
                                                                                 <textarea class="ti-form-input" required placeholder="Leave Reason"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Alternate:</label>
                                                                                <select class="ti-form-select" name="alternate" id="alternate" required>
                                                                                    <option value="#">Choose Alternate</option>
                                                                                    
                                                                                    @foreach ($dept_staff as $depts)
                                                                                    <optgroup label="{{$depts->dept_name}}">
                                                                                        @foreach ($depts->staff as $dstaff)
                                                                                                <option value="{{$dstaff->id}}">{{$dstaff->fname.' '.$dstaff->mname.' '.$dstaff->lname}}</option>
                                                                                        @endforeach
                                                                                    </optgroup>
                                                                                    @endforeach
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

                                                    <!-- Calender for leaves starts here-->
                                                    <div class="grid grid-cols-12 gap-x-6">
                                                       
                                                        <div class="col-span-12 xl:col-span-12">
                                                            <div class="box">
                                                                <div class="box-body">
                                                                    <div id="calendar2"></div>
                                                                </div>
                                                            </div>
                                                        </div>  

                                                    </div> 
                                                    <!-- Calender for leaves ends here-->
                                                    <!-- Modal for Viewing the events added on the calender-->
                                                    <button data-hs-overlay="#view_leave" class="hs-dropdown-toggle ti-btn ti-btn-primary hidden" id="view_leave_modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                                        View Leave
                                                    </button>
                                                    <div id="view_leave" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header bg-warning">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                                                         View leave  <span class="text-red-500 event_title"></span>
                                                                    </h3>
                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                            data-hs-overlay="#view_leave">
                                                                            <span class="sr-only">Close</span>
                                                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                fill="currentColor" />
                                                                            </svg>
                                                                        </button>
                                                                </div>
                                                                
                                                                    <div class="ti-modal-body">
                                                                        <!-- Leave list on clicked date-->
                                                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                                            <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                                                <thead class="bg-gray-50 dark:bg-black/20">
                                                                                    <tr class="">
                                                                                        
                                                                                        <th scope="col" class="dark:text-white/80 font-bold">Application Number</th>
                                                                                        <th scope="col" class="dark:text-white/80 font-bold">Leave Type</th>
                                                                                        <th scope="col" class="dark:text-white/80 font-bold">From Date</th>
                                                                                        <th scope="col" class="dark:text-white/80 font-bold">To Date</th>
                                                                                        <th scope="col" class="dark:text-white/80 font-bold">Leave Reasons</th>
                                                                                        <th scope="col" class="dark:text-white/80 font-bold">Alternate</th>
                                                                                        <th scope="col" class="dark:text-white/80 font-bold">Additional Alternate</th>
                                                                                        <th scope="col" class="dark:text-white/80 font-bold">actions</th>
                                                                                    </tr>
                                                                                </thead>
                                                                               
                                                                            </table>  
                                                                        </div>
                                                                    </div>
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#view_leave">
                                                                            Cancel
                                                                        </button>
                                                                                    
                                                                    </div>
                                                                </form>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal for viewinf the events on calender ends here-->
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
                                                        @php
                                                            $i=1;
                                                        @endphp
                                                        <tbody class="">
                                                            @foreach($holidayrh as $holiday)
                                                                <tr class="">    
                                                                    <td><span>{{$i++}}</span></td>
                                                                    <td><span>{{$holiday->year}}</span></td>
                                                                    <td><span>{{$holiday->title}}</span></td>
                                                                    <td><span>{{\Carbon\Carbon::parse($holiday->holidayrh_date)->format('d-M-Y') }}</span></td>  
                                                                    <td><span>{{$holiday->day}}</span></td>
                                                                    <td><span>{{$holiday->type}}</span></td>
                                                                </tr>
                                                            @endforeach
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
               

            

@endsection

@section('scripts')

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

         <!-- TABULATOR JS -->
         <script src="{{asset('build/assets/libs/tabulator-tables/js/tabulator.min.js')}}"></script>

        <!-- FORM-LAYOUT JS -->
        @vite('resources/assets/js/profile-settings.js')

        <!-- MOMENT JS -->
        <script src="{{asset('build/assets/libs/moment/moment.js')}}"></script>

        <!-- FULLCALENDAR JS -->
        <script src="{{asset('build/assets/libs/fullcalendar/main.min.js')}}"></script>
        @vite('resources/assets/js/fullcalendar.js')


        

        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"
        ></script>

        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>

        <script href="https://cdn.tailwindcss.com/3.3.5"></script>

        <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

       
        
        <script>
            $(document).ready(function(){
               //alert('Hello from jquery');
               
                
               new DataTable('#leaves');
                    //
               
            });

                //for generating the no of days between the leave dates.
            $(document).on('change', '#to_date',function(){
                       
                 var from_date = $('#from_date').val();
                 var to_date = $('#to_date').val();
                   // alert(from_date+'-'+to_date);
                    if(from_date != ""){

                        if(from_date == to_date){
                            //$('.no_of_days_count').removeClass('border border-red-500 focus:border-blue-500');
                            
                            $('#no_of_days_count').html(1);
                        }else if(from_date > to_date){
                            $('#no_of_days_count').html(0);
                            //$('.no_of_days_count').addClass('border border-red-500 focus:border-blue-500');
                            $('#to_date').val();
                            $('#to_date').focus();
                        }else{
                            //$('.no_of_days_count').removeClass('border border-red-500 focus:border-blue-500');
                            
                            var startDay = new Date(from_date);  
                            var endDay = new Date(to_date);  

                            //alert(startDay+'-'+endDay);

                            // Determine the time difference between two dates     
                            var millisBetween = endDay.getTime() - startDay.getTime();  
                            
                            // Determine the number of days between two dates  
                            var days = millisBetween / (1000 * 3600 * 24);
                            days=days+1;  
                            $('#no_of_days_count').html(days);
                        }
                        
                    }else{
                        $('#from_date').focus();
                        alert('Please fill the from date');
                    }
                            
            });

            
             //Calender javscript Starts here.
            document.addEventListener('DOMContentLoaded', function() {
                var TileColor = '';
                //var clientevents = $('#calender2').fullCalendar('clientEvents');
                //console.log(clientevents);
                const calendarEl = document.getElementById('calendar2')
                const calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                 
                    eventSources: [
                    {
                        url: '/holidayrhevents',
                        method: 'GET',
                        success:function(data){
                           
                        },
                        failure: function(data) {
                           // alert(data);
                            //console.log(data);
                        },
                        allDay:true,
                        eventTextColor:'#000',
                        display:'background',
                        selectable: false,
                        // a non-ajax option
                    },
                    {
                        events: [ // put the array in the `events` property
                            {
                            title  : 'CL',
                            start  : '2024-01-01'
                            },
                            {
                            title  : 'DL',
                            start  : '2024-01-05',
                            end    : '2024-01-07'
                            },
                            {
                            title  : 'event3',
                            start  : '2024-01-09',
                            }
                        ],
                        color: 'black',     // an option!
                        textColor: 'yellow' // an option!
                        }
                                            
                    ],
                    eventDidMount: function (info) {
                        info.el.onclick = "disabled";
                       console.log(info);
                       if (info.event.extendedProps.type=="Holiday") {
                           info.el.style.background = "green";//info.event.extendedProps.background;
                           info.el.style.color  = "white";
                           info.el.style.fontSize  = "15px";
                       }else if (info.event.extendedProps.type=="RH") {
                           info.el.style.background = "orange";
                           info.el.style.color = "white";
                           info.el.style.fontSize  = "15px";
                       }   
                   },  dateClick: function(info) {
                    
                       //console.log(info);
                       //   alert('Current view: ' + info.view.type);
                    
                       $('#leave_apply_modal').trigger('click');
                        $('#from_date').val(info.dateStr);
                        $('#add_leaveform').css('z-index', 3333);
                    },
                    eventClick: function(info) {
                        ///alert('Event: ' + info.event.start);
                        console.log(info.event.start);
                        var Clickeddate = info.event.start;
                        $('#view_leave_modal').trigger('click');
                        $('.event_title').html(info.event.title+' on '+ Clickeddate.getDate()+"/"+Clickeddate.getMonth()+"/"+Clickeddate.getFullYear());
                        $('#view_leave').css('z-index', 9999);
                         // change the border color just for fun
                        info.el.style.borderColor = 'red';
                    }
                  
                   
                //    
                //         selectAllow: function(selectInfo) {
                //             return moment().diff(selectInfo.start) <= 0
                //     }
                                    
                })
                calendar.render()
            });
        </script>
           
        
@endsection