@extends('layouts.master')

@section('styles')

        {{-- datatables css --}}
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.tailwindcss.min.css">

        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">
@endsection

@section('content')

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
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                         Leave Entitlement
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg>
                                    </a>
                                    </li>
                            
                                </ol>
                            </div>
                            <!-- Page Header Close -->

            
                          

                            <!-- Start::row-5 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12">
                                    @if(session('status'))
                                        @if (session('status') == 1)
                                        <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                            <span class='font-bold'>Result</span> DataBase transaction Successful
                                        </div>
                                        @elseif(session('status') == 0)
                                        <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                            <span class='font-bold'>Result</span> Error in Database transaction
                                        </div>
                                    
                                        @endif
                                        @php 
                                            Illuminate\Support\Facades\Session::forget('status');  
                                            header("refresh: 3"); 
                                        @endphp
                                    @endif
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="flex">
                                                <h5 class="box-title my-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                                    Leave Entitlement
                                                </h5>
                                                <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#hs-medium-modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                                        Add Leave Entitlement
                                                    </button>
                                                    <div id="hs-medium-modal" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                                                        Add New Leave Entitlement
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
                                                                {{-- <form  action="{{route('ESTB.leaves.leave_rules.store')}}" method="post"> --}}
                                                                    @csrf
                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0 pb-4"> 
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Department</label>
                                                                                <select class="ti-form-select" name="department_list" id="department_list">
                                                                                    <option>Choose a Department</option>
                                                                                    {{-- @foreach ($departments as $depts)
                                                                                        <option value="{{$religion->id}}">{{$religion->religion_name}}</option>
                                                                                    @endforeach --}}
                                                                        
                                                                                </select>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6 ">
                                                                                <label for="" class="ti-form-label font-bold">Staff Name : </label>
                                                                                <select class="ti-form-select" name="staff_list" id="staff_list">
                                                                                    <option>Choose a Staff</option>
                                                                                    {{-- @foreach ($departments as $depts)
                                                                                        <option value="{{$religion->id}}">{{$religion->religion_name}}</option>
                                                                                    @endforeach --}}
                                                                        
                                                                                </select>    
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Applicable for (vacation_type)?</label>
                                                                                <input type="radio" name="vacation_type" class="ti-form-radio year1" value="Vacational">
                                                                                <label for="year1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> Vacational</label>
                                                                                <input type="radio" name="vacation_type" class="ti-form-radio year2" value="Non-vacational" >
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
                                                                                <input type="text" name="min" class="ti-form-input"  placeholder="min availment no">
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6 ">
                                                                                <label for="" class="ti-form-label font-bold">Max No : </label>
                                                                                <input type="text" name="max" class="ti-form-input"  placeholder="max availment no">
                                                                            </div>
                                                                        </div>   
                                                                        <div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">    
                                                                            <div class="flex items-center">
                                                                                
                                                                                    <label for="" class="ti-form-label font-bold pr-4">Is Carry Forwardable</label>
                                                                                
                                                                                    <input type="radio" name="carry_forwardable" class="ti-form-radio year1" value="1" >
                                                                                    <label for="carry_forwardable-yes" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 pr-4"> Yes</label>
                                                                                    <input type="radio" name="carry_forwardable" class="ti-form-radio year2" value="0" >
                                                                                    <label for="carry_forwardable-no" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> No</label>
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">With Effect From</label>
                                                                                <input type="text" name="cf_wef" class="ti-form-input flatpickr-input date"
                                                                                    placeholder="Choose date" readonly>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6 ">
                                                                                <label for="" class="ti-form-label font-bold">GC Res NO: </label>
                                                                                <input type="text" name="cf_gcr" class="ti-form-input"  placeholder="GCR">
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">    
                                                                            <div class="flex items-center">
                                                                                <label for="" class="ti-form-label font-bold pr-4">Is Encashable</label>
                                                                                <br/>
                                                                                <input type="radio" name="encashable" class="ti-form-radio year2" value="0" >
                                                                                <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70 font-bold pr-4">No</label>
                                                                                <input type="radio" name="encashable" class="ti-form-radio year1" value="1" >
                                                                                <label class="text-sm text-gray-500 ltr:ml-3 rtl:ml-3 dark:text-white/70 font-bold">Yes</label>
                                                                                
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">With Effect From</label>
                                                                                <input type="text" name="enc_wef" class="ti-form-input flatpickr-input date"
                                                                                    placeholder="Choose date" readonly>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6 ">
                                                                                <label for="" class="ti-form-label font-bold">GC Res NO: </label>
                                                                                <input type="text" name="enc_gcr" class="ti-form-input"  placeholder="GCR">
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">    
                                                                            
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Max Encashable</label>
                                                                                <input type="text" name="max_encashable" class="ti-form-input flatpickr-input"
                                                                                    placeholder="Max encashable">
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6 ">
                                                                                <label for="" class="ti-form-label font-bold">Gap between Leaves </label>
                                                                                <input type="text" name="gap" class="ti-form-input"  placeholder="Gap between 2 similar leaves">
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
                                                                {{-- </form>   --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                                <button class="bg-primary" id="get_count_btn">Get Count</button>
                                            <div class="table-bordered  rounded-sm ti-custom-table-head overflow-auto  max-h-96">
                                                <table id="entitlement_table" class="ti-custom-table ti-custom-table-head ">
                                                    <thead class="bg-gray-50 dark:bg-black/20 ">
                                                        <tr class="">
                                                            <th scope="col" class="dark:text-white/80 font-bold" rowspan="2" >Employee Name</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold text-center" colspan="{{count($leave_types)}}"> Entitled </th> 
                                                           
                                                            <th scope="col" class="dark:text-white/80 font-bold text-center" colspan="{{count($leave_types_taken)}}"> Taken </th>
                                                                                 
                                                            <th scope="col" class="dark:text-white/80 font-bold text-center" colspan="{{count($leave_types)}}"> Balance </th>
                                                            
                                                            <th scope="col" class="dark:text-white/80 font-bold" rowspan="2" >Actions</th>
                                                        </tr>
                                                        <tr>
                                                      
                                                        <!--For Displaying Entitle menu options in header-->
                                                            @foreach ($leave_types as $l_type)
                                                            <th scope="col" class="dark:text-white/80 font-bold">{{$l_type->shortname}}</th>
                                                            @endforeach
                                                            <!--For Displaying Taken menu options in header-->
                                                            @foreach ($leave_types_taken as $l_type_taken)
                                                            <th scope="col" class="dark:text-white/80 font-bold">{{$l_type_taken->shortname}}</th>
                                                            @endforeach
                                                        <!--For Displaying Balance menu options in header (the Same variable is used as of entitlement.)-->
                                                            @foreach ($leave_types as $l_type)
                                                            <th scope="col" class="dark:text-white/80 font-bold">{{$l_type->shortname}}</th>
                                                            @endforeach
                                                           
                                                        </tr>
                                                    </thead>
                                                    @php
                                                        $i=1;
                                                        
                                                    @endphp
                                                    <tbody class="">

                                                        @foreach ($staff as $st)
                                                            <tr>
                                                              
                                                                <td>{{$st->fname." ".$st->mname." ".$st->lname }}</td>
                                                                    
                                                                {{-- @foreach ($st as ) --}}
                                                                            @php
                                                                                $count = 0;
                                                                            @endphp

                                                                    @foreach ($leave_types as $l_type)
                                                                   
                                                                        @foreach($st->leave_staff_entitlements as $lse)
                                                                        
                                                                            @if($lse->shortname == $l_type->shortname)
                                                                                @php
                                                                                    ++$count
                                                                                @endphp
                                                                                <td scope="col" class="dark:text-white/80 font-bold">{{$lse->pivot->entitled_curr_year}}</td>
                                                                                
                                                                            @endif
                                                                        @endforeach
                                                                    @endforeach
                                                                {{-- @endforeach --}}
                                                                {{$count}}
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                             
                                                                <td></td>
                                                                <td></td>
                                                               
                                                                
                                                                
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                  
                                                </table>
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

                    </div>

@endsection

@section('scripts')

        <!-- APEX CHARTS JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        @vite('resources/assets/js/flatpickr.js')
       
        <!-- Include the latest jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <!-- Include the latest DataTables -->
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

        <!-- Include jQuery library (if not already included) -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        
        
        
        <script>
            $(document).ready(function(){
                new DataTable('#entitlement_table');
                 alert('page loaded');

                    $(document).on('click','#get_count_btn',function(){
                        alert('clicked');
                        alert("header (th) count :"+ $('th').length);
                        alert("cells (td) count :"+ $('td').length);
                    });
            });
        </script> 

       

        <!-- INDEX JS -->
        @vite('resources/assets/js/index-8.js')
        

@endsection





@extends('layouts.master')

@section('styles')

        {{-- datatables css --}}
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.tailwindcss.min.css">

        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">
@endsection

@section('content')

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
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                         Leave Entitlement
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg>
                                    </a>
                                    </li>
                            
                                </ol>
                            </div>
                            <!-- Page Header Close -->

            
                          

                            <!-- Start::row-5 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12">
                                    @if(session('status'))
                                        @if (session('status') == 1)
                                        <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                            <span class='font-bold'>Result</span> DataBase transaction Successful
                                        </div>
                                        @elseif(session('status') == 0)
                                        <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                            <span class='font-bold'>Result</span> Error in Database transaction
                                        </div>
                                    
                                        @endif
                                        @php 
                                            Illuminate\Support\Facades\Session::forget('status');  
                                            header("refresh: 3"); 
                                        @endphp
                                    @endif
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="flex">
                                                <h5 class="box-title my-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                                    Leave Entitlement
                                                </h5>
                                                <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#hs-medium-modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                                        Add Leave Entitlement
                                                    </button>
                                                    <div id="hs-medium-modal" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                                                                        Add New Leave Entitlement
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
                                                                {{-- <form  action="{{route('ESTB.leaves.leave_rules.store')}}" method="post"> --}}
                                                                    @csrf
                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0 pb-4"> 
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Department</label>
                                                                                <select class="ti-form-select" name="department_list" id="department_list">
                                                                                    <option>Choose a Department</option>
                                                                                    {{-- @foreach ($departments as $depts)
                                                                                        <option value="{{$religion->id}}">{{$religion->religion_name}}</option>
                                                                                    @endforeach --}}
                                                                        
                                                                                </select>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6 ">
                                                                                <label for="" class="ti-form-label font-bold">Staff Name : </label>
                                                                                <select class="ti-form-select" name="staff_list" id="staff_list">
                                                                                    <option>Choose a Staff</option>
                                                                                    {{-- @foreach ($departments as $depts)
                                                                                        <option value="{{$religion->id}}">{{$religion->religion_name}}</option>
                                                                                    @endforeach --}}
                                                                        
                                                                                </select>    
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Applicable for (vacation_type)?</label>
                                                                                <input type="radio" name="vacation_type" class="ti-form-radio year1" value="Vacational">
                                                                                <label for="year1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> Vacational</label>
                                                                                <input type="radio" name="vacation_type" class="ti-form-radio year2" value="Non-vacational" >
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
                                                                                <input type="text" name="min" class="ti-form-input"  placeholder="min availment no">
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6 ">
                                                                                <label for="" class="ti-form-label font-bold">Max No : </label>
                                                                                <input type="text" name="max" class="ti-form-input"  placeholder="max availment no">
                                                                            </div>
                                                                        </div>   
                                                                        <div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">    
                                                                            <div class="flex items-center">
                                                                                
                                                                                    <label for="" class="ti-form-label font-bold pr-4">Is Carry Forwardable</label>
                                                                                
                                                                                    <input type="radio" name="carry_forwardable" class="ti-form-radio year1" value="1" >
                                                                                    <label for="carry_forwardable-yes" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 pr-4"> Yes</label>
                                                                                    <input type="radio" name="carry_forwardable" class="ti-form-radio year2" value="0" >
                                                                                    <label for="carry_forwardable-no" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> No</label>
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">With Effect From</label>
                                                                                <input type="text" name="cf_wef" class="ti-form-input flatpickr-input date"
                                                                                    placeholder="Choose date" readonly>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6 ">
                                                                                <label for="" class="ti-form-label font-bold">GC Res NO: </label>
                                                                                <input type="text" name="cf_gcr" class="ti-form-input"  placeholder="GCR">
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">    
                                                                            <div class="flex items-center">
                                                                                <label for="" class="ti-form-label font-bold pr-4">Is Encashable</label>
                                                                                <br/>
                                                                                <input type="radio" name="encashable" class="ti-form-radio year2" value="0" >
                                                                                <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70 font-bold pr-4">No</label>
                                                                                <input type="radio" name="encashable" class="ti-form-radio year1" value="1" >
                                                                                <label class="text-sm text-gray-500 ltr:ml-3 rtl:ml-3 dark:text-white/70 font-bold">Yes</label>
                                                                                
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">With Effect From</label>
                                                                                <input type="text" name="enc_wef" class="ti-form-input flatpickr-input date"
                                                                                    placeholder="Choose date" readonly>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6 ">
                                                                                <label for="" class="ti-form-label font-bold">GC Res NO: </label>
                                                                                <input type="text" name="enc_gcr" class="ti-form-input"  placeholder="GCR">
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">    
                                                                            
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Max Encashable</label>
                                                                                <input type="text" name="max_encashable" class="ti-form-input flatpickr-input"
                                                                                    placeholder="Max encashable">
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6 ">
                                                                                <label for="" class="ti-form-label font-bold">Gap between Leaves </label>
                                                                                <input type="text" name="gap" class="ti-form-input"  placeholder="Gap between 2 similar leaves">
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
                                                                {{-- </form>   --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                                <button class="bg-primary" id="get_count_btn">Get Count</button>
                                            <div class="table-bordered  rounded-sm ti-custom-table-head overflow-auto  max-h-96">
                                                <table id="entitlement_table" class="ti-custom-table ti-custom-table-head ">
                                                    <thead class="bg-gray-50 dark:bg-black/20 ">
                                                        <tr class="">
                                                            <th>Sl.No</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold"  >Employee Name</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold text-center" > Entitled </th> 
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold text-center" > Taken </th>
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>             
                                                            <th scope="col" class="dark:text-white/80 font-bold text-center" > Balance </th>
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold"  >Actions</th>
                                                        </tr>
                                                        <tr>
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>
                                                            <th>&nbsp;</th>
                                                        <!--For Displaying Entitle menu options in header-->
                                                            {{-- @foreach ($leave_types as $l_type) --}}
                                                            <th scope="col" class="dark:text-white/80 font-bold">CL</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">RH</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">EL</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">DL-Other</th>

                                                            {{-- @endforeach --}}
                                                            <!--For Displaying Taken menu options in header-->
                                                            {{-- @foreach ($leave_types_taken as $l_type_taken) --}}
                                                            <th scope="col" class="dark:text-white/80 font-bold">CL</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">RH</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">EL</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">LWP</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">DL-GIT</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">DL-VTU</th>

                                                            <th scope="col" class="dark:text-white/80 font-bold">DL-Other</th>
                                                            {{-- @endforeach --}}
                                                        <!--For Displaying Balance menu options in header (the Same variable is used as of entitlement.)-->
                                                            {{-- @foreach ($leave_types as $l_type) --}}
                                                            <th scope="col" class="dark:text-white/80 font-bold">CL</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">RH</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">EL</th>
                                                            <th scope="col" class="dark:text-white/80 font-bold">DL-Other</th>
                                                            {{-- @endforeach --}}
                                                           
                                                        </tr>
                                                    </thead>
                                                    @php
                                                        $i=1;
                                                        
                                                    @endphp
                                                    <tbody class="">

                                                        @foreach ($staff as $st)
                                                            <tr>
                                                              <td>{{$i++}}</td>
                                                                <td>{{$st->fname." ".$st->mname." ".$st->lname }}</td>
                                                                
                                                                    @foreach ($leave_types as $l_type)
                                                                   
                                                                        @foreach($st->leave_staff_entitlements as $lse)
                                                                        
                                                                            @if($lse->shortname == $l_type->shortname)
                                                                               
                                                                                <td scope="col" class="dark:text-white/80 font-bold">{{$lse->pivot->entitled_curr_year}}</td>
                                                                            @endif
                                                                        @endforeach
                                                                    @endforeach
                                                                {{-- @endforeach --}}
                                                               
                                                                <td>0</td>
                                                                <td>0</td>
                                                                <td>0</td>
                                                                <td>0</td>
                                                                <td>0</td>
                                                                <td>0</td>
                                                                <td>0</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                             
                                                                <td></td>
                                                                <td></td>
                                                               
                                                                
                                                                
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                  
                                                </table>
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

                    </div>

@endsection

@section('scripts')

        <!-- APEX CHARTS JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        @vite('resources/assets/js/flatpickr.js')
       
        <!-- Include the latest jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <!-- Include the latest DataTables -->
        <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>

       
        
        
        
        <script>
            $(document).ready(function(){
                new DataTable('#entitlement_table');
                 alert('page loaded');

                    $(document).on('click','#get_count_btn',function(){
                        alert('clicked');
                        alert("header (th) count :"+ $('th').length);
                        alert("cells (td) count :"+ $('td').length);
                    });
            });
        </script> 

       

        <!-- INDEX JS -->
        @vite('resources/assets/js/index-8.js')
        

@endsection


<div class=" block ltr:ml-auto rtl:mr-auto my-auto">
    <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#hs-medium-modal">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
        Add Leave Entitlement
    </button>
    <div id="hs-medium-modal" class="hs-overlay hidden ti-modal">
        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:mx-auto">
            <div class="ti-modal-content">
                <div class="ti-modal-header">
                    <h3 class="ti-modal-title">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z"></path></svg>
                        Add New Leave Entitlement
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
                {{-- <form  action="{{route('ESTB.leaves.leave_rules.store')}}" method="post"> --}}
                    @csrf
                    <div class="ti-modal-body">
                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0 pb-4"> 
                            <div class="space-y-2">
                                <label class="ti-form-label mb-0 font-bold">Department</label>
                                <select class="ti-form-select" name="department_list" id="department_list">
                                    <option>Choose a Department</option>
                                    {{-- @foreach ($departments as $depts)
                                        <option value="{{$religion->id}}">{{$religion->religion_name}}</option>
                                    @endforeach --}}
                        
                                </select>
                            </div>
                            <div class="max-w-sm space-y-3 pb-6 ">
                                <label for="" class="ti-form-label font-bold">Staff Name : </label>
                                <select class="ti-form-select" name="staff_list" id="staff_list">
                                    <option>Choose a Staff</option>
                                    {{-- @foreach ($departments as $depts)
                                        <option value="{{$religion->id}}">{{$religion->religion_name}}</option>
                                    @endforeach --}}
                        
                                </select>    
                            </div>
                            <div class="max-w-sm space-y-3 pb-6">
                                <label for="with-corner-hint" class="ti-form-label font-bold">Applicable for (vacation_type)?</label>
                                <input type="radio" name="vacation_type" class="ti-form-radio year1" value="Vacational">
                                <label for="year1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> Vacational</label>
                                <input type="radio" name="vacation_type" class="ti-form-radio year2" value="Non-vacational" >
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
                                <input type="text" name="min" class="ti-form-input"  placeholder="min availment no">
                            </div>
                            <div class="max-w-sm space-y-3 pb-6 ">
                                <label for="" class="ti-form-label font-bold">Max No : </label>
                                <input type="text" name="max" class="ti-form-input"  placeholder="max availment no">
                            </div>
                        </div>   
                        <div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">    
                            <div class="flex items-center">
                                
                                    <label for="" class="ti-form-label font-bold pr-4">Is Carry Forwardable</label>
                                
                                    <input type="radio" name="carry_forwardable" class="ti-form-radio year1" value="1" >
                                    <label for="carry_forwardable-yes" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 pr-4"> Yes</label>
                                    <input type="radio" name="carry_forwardable" class="ti-form-radio year2" value="0" >
                                    <label for="carry_forwardable-no" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> No</label>
                            </div>
                            <div class="space-y-2">
                                <label class="ti-form-label mb-0 font-bold">With Effect From</label>
                                <input type="text" name="cf_wef" class="ti-form-input flatpickr-input date"
                                    placeholder="Choose date" readonly>
                            </div>
                            <div class="max-w-sm space-y-3 pb-6 ">
                                <label for="" class="ti-form-label font-bold">GC Res NO: </label>
                                <input type="text" name="cf_gcr" class="ti-form-input"  placeholder="GCR">
                            </div>
                        </div>
                        <div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">    
                            <div class="flex items-center">
                                <label for="" class="ti-form-label font-bold pr-4">Is Encashable</label>
                                <br/>
                                <input type="radio" name="encashable" class="ti-form-radio year2" value="0" >
                                <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70 font-bold pr-4">No</label>
                                <input type="radio" name="encashable" class="ti-form-radio year1" value="1" >
                                <label class="text-sm text-gray-500 ltr:ml-3 rtl:ml-3 dark:text-white/70 font-bold">Yes</label>
                                
                            </div>
                            <div class="space-y-2">
                                <label class="ti-form-label mb-0 font-bold">With Effect From</label>
                                <input type="text" name="enc_wef" class="ti-form-input flatpickr-input date"
                                    placeholder="Choose date" readonly>
                            </div>
                            <div class="max-w-sm space-y-3 pb-6 ">
                                <label for="" class="ti-form-label font-bold">GC Res NO: </label>
                                <input type="text" name="enc_gcr" class="ti-form-input"  placeholder="GCR">
                            </div>
                        </div>
                        <div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">    
                            
                            <div class="space-y-2">
                                <label class="ti-form-label mb-0 font-bold">Max Encashable</label>
                                <input type="text" name="max_encashable" class="ti-form-input flatpickr-input"
                                    placeholder="Max encashable">
                            </div>
                            <div class="max-w-sm space-y-3 pb-6 ">
                                <label for="" class="ti-form-label font-bold">Gap between Leaves </label>
                                <input type="text" name="gap" class="ti-form-input"  placeholder="Gap between 2 similar leaves">
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
                {{-- </form>   --}}
            </div>
        </div>
    </div>
</div>