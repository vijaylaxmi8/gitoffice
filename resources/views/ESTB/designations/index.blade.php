@extends('layouts.master')

@section('styles')
         <!-- TABULATOR CSS -->
         <link rel="stylesheet" href="{{asset('build/assets/libs/tabulator-tables/css/tabulator.min.css')}}">

         <!-- CHOICES CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

       
    
        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

        {{-- datatables css --}}
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.tailwindcss.min.css">

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
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 15.2454V22.1169C17 22.393 16.7761 22.617 16.5 22.617C16.4094 22.617 16.3205 22.5923 16.2428 22.5457L12 20L7.75725 22.5457C7.52046 22.6877 7.21333 22.6109 7.07125 22.3742C7.02463 22.2964 7 22.2075 7 22.1169V15.2454C5.17107 13.7793 4 11.5264 4 9C4 4.58172 7.58172 1 12 1C16.4183 1 20 4.58172 20 9C20 11.5264 18.8289 13.7793 17 15.2454ZM12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15ZM12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13Z"></path></svg>
                                        Designations
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg>    
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
                                            header("refresh: 3"); 
                                        @endphp
                                    @endif

                                </div>
                            </div>
                            <!-- Closing of designation insertion div-->
                            <!-- Start::row-5 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12">
                                    
                                <div class="box">
                                    <div class="box-header">
                                        <div class="flex">
                                        <h5 class="box-title my-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path d="M17 15.2454V22.1169C17 22.393 16.7761 22.617 16.5 22.617C16.4094 22.617 16.3205 22.5923 16.2428 22.5457L12 20L7.75725 22.5457C7.52046 22.6877 7.21333 22.6109 7.07125 22.3742C7.02463 22.2964 7 22.2075 7 22.1169V15.2454C5.17107 13.7793 4 11.5264 4 9C4 4.58172 7.58172 1 12 1C16.4183 1 20 4.58172 20 9C20 11.5264 18.8289 13.7793 17 15.2454ZM12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15ZM12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13Z"></path></svg>
                                            Designations Details</h5>
                                                <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button type="button" id="designation_btn" data-hs-overlay="#add_designation" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                    
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path></svg>
                                                        Add Designation
                                                    </button>
                                                    <div id="add_designation" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                            <div class="ti-modal-header">
                                                                <h3 class="ti-modal-title">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>
                                                                
                                                                    Add New Designation
                                                                </h3>
                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                data-hs-overlay="#add_designation">
                                                                <span class="sr-only">Close</span>
                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                    fill="currentColor" />
                                                                </svg>
                                                                </button>
                                                                @if(($errors->has('design_name')))
                                                                    <script>
                                                                        //alert(1);
                                                                        $(window).on('load', function() {
                                                                            
                                                                            //alert('attended');
                                                                            //$('#horizontal-alignment-item-1').trigger('click')
                                                                            $('#designation_btn').trigger("click");
                                                                                
                                                                        });      
                                                                    </script>
                                                                @endif
                                                            </div>
                                                        
                                                                <div class="ti-modal-body">
                                                                    <form action="{{route('ESTB.designations.store')}}" method="post">
                                                                        @csrf
                                                                        
                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                            <label for="with-corner-hint" class="ti-form-label font-bold">Designation Name : </label>
                                                                            <input type="text" name="design_name" class="ti-form-input" placeholder="Designation name" id="designname">
                                                                            @if($errors->has('design_name'))
                                                                                <div class="text-red-700">{{ $errors->first('design_name')}}</div>
                                                                            @endif
                                                                            <div id="designNameError" class="error text-red-700"></div>
                                                                        </div>
                                                                        <br/>
                                                                        <label for="with-corner-hint" class="ti-form-label font-bold">Is Vacational ?</label>
                                                                        <div class="flex pb-6">
                                                                            
                                                                            <input type="radio" name="isvacational" class="ti-form-radio" id="isvacational1" value="Vacational" required>
                                                                            <label for="isadditional1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 pr-4 font-bold"> Vacational</label>
                                                                            <input type="radio" name="isvacational" class="ti-form-radio" id="isvacational2" value="Non-vacational" required>
                                                                            <label for="isadditional2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 font-bold"> Non-vacational</label>
                                                                        </div>
                                                                        <br/>
                                                                        <label for="with-corner-hint" class="ti-form-label font-bold">Is it Additional Designation ?</label>
                                                                        <div class="flex pb-6">
                                                                            
                                                                            <input type="radio" name="isadditional" class="ti-form-radio" id="isadditional1" value="1" required>
                                                                            <label for="isadditional1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 pr-4 font-bold"> Yes</label>
                                                                            <input type="radio" name="isadditional" class="ti-form-radio" id="isadditional2" value="0" required>
                                                                            <label for="isadditional2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 pr-4 font-bold"> No</label>
                                                                        </div>
                                                                        <br/>
                                                                        <label for="with-corner-hint" class="ti-form-label font-bold">Applicable for employee type ?</label>
                                                                        <div class="flex pb-6">
                                                                            
                                                                            <input type="radio" name="emp_type" class="ti-form-radio" id="emptype1" value="Non-Teaching" required>
                                                                            <label for="emptype1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 pr-4 font-bold"> Non-Teaching Employees</label>
                                                                            <input type="radio" name="emp_type" class="ti-form-radio" id="emptype2" value="Teaching" required>
                                                                            <label for="emptype2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 font-bold"> Teaching Employees</label>
                                                                        </div>
                                                                        
                                                                        </div>
                                                                        <div class="ti-modal-footer">
                                                                            <button type="button" id="add_designation_close"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#add_designation">
                                                                                Close
                                                                                    </button>
                                                        
                                                                                <input type="submit" id="designation_store_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10 float-right" value="Add"/>
                                                    
                                                                        </div>
                                                                    </form>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div id="basic-table" class="ti-custom-table ti-striped-table ti-custom-table-hover table-bordered rounded-sm  overflow-auto">
                                        <table id="designations_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                            <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr class="">
                                                <th scope="col" class="dark:text-white/80 ">S.No</th>
                                                <th scope="col" class="dark:text-white/80 ">Designation Name</th>
                                                <th scope="col" class="dark:text-white/80 ">Is Additional Designation</th>
                                                <th scope="col" class="dark:text-white/80 ">Is vacational</th>
                                                <th scope="col" class="dark:text-white/80 ">Employee Type</th>
                                                <th scope="col" class="dark:text-white/80 ">Status</th>
                                                <th scope="col" class="dark:text-white/80 ">Actions</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody class="">
                                               
                                            @php
                                                $i = 1;
                                            @endphp
                                            <div id="designation_serachresults">
                                            @forelse($designation as $design)
                                            
                                                <tr class="bg-red-700">
                                                    <td>{{ $i++ }}</td>
                                                    <td>
                                                    <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                        <div class="block w-full my-auto">
                                                            {{$design->design_name}}
                                                        </div>
                                                    </div>
                                                    </td>
                                                    <td><span>{{($design->isadditional == 0)? 'No':'Yes'}}</span></td>
                                                    <td><span>{{$design->isvacational}}</span></td>
                                                    <td><span>{{($design->emp_type=="Teaching")?'Teaching':'Non-Teaching'}}</span></td>
                                                    <td><span>{{$design->status}}</span></td>
                                                                                            
                                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button data-hs-overlay="#design_edit_modal{{$i}}" id="btn{{$i}}" btn-val={{$i}}
                                                        class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary design_edit_modal_click">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Edit
                                                            </span>
                                                        </button>
                            
                        
                                                            <div id="design_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto">
                                                                    <div class="ti-modal-content">
                                                                    <div class="ti-modal-header">
                                                                        <h3 class="ti-modal-title">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Edit Designation
                                                                        </h3>
                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                            data-hs-overlay="#design_edit_modal{{$i}}">
                                                                            <span class="sr-only">Close</span>
                                                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                fill="currentColor" />
                                                                            </svg>
                                                                        </button>
                                                                        @if(($errors->has('design_name'))||($errors->has('edit_isadditional'))||($errors->has('edit_isvacational'))||($errors->has('edit_emp_type')))
                                                                            <script>
                                                                                //alert(1);
                                                                                $(window).on('load', function() {
                                                                                    //alert(249)
                                                                                });      
                                                                            </script>
                                                                        @endif
                                                                    </div>
                                                                    <form  action="{{route('ESTB.designations.update',$design->id)}}" method="post">
                                                                        @csrf
                                                                        @method('patch')
                                                                        <div class="ti-modal-body">
                                                                            <input type='hidden' name='modal_no' class='modal_no' value={{old('modal_no')}}/>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label">Designation Name : </label>
                                                                                <input type="text" name="edit_design_name" class="ti-form-input designationname" placeholder="Designation name" value="{{$design->design_name}}">
                                                                                @if($errors->has('design_name'))
                                                                                    <div class="text-red-700">{{ $errors->first('design_name')}}</div>
                                                                                @endif
                                                                                <div id="designNameError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <label for="with-corner-hint" class="ti-form-label">Is it Addditional Designation.? </label>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <input type="radio" name="edit_isadditional" class="pr-4 ti-form-radio"  value="1"  {{($design->isadditional == 1)?'checked':''}}>
                                                                                <label for="isadditional1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 pr-4 font-bold"> Yes</label>
                                                                            
                                                                                <input type="radio" name="edit_isadditional" class="pr-4 ti-form-radio"  value="0"  {{($design->isadditional == 0)?'checked':''}}>
                                                                                <label for="isadditional2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 pr-4 font-bold"> No</label>
                                                                            </div>
                                                                            <br/>
                                                                            <label for="with-corner-hint" class="ti-form-label font-bold">Is Vacational ?</label>
                                                                            <div class="flex pb-6">
                                                                                
                                                                                <input type="radio" name="edit_isvacational" class="ti-form-radio"  value="Vacational"  {{($design->isvacational == 'Vacational')? 'checked':''}}>
                                                                                <label for="isvacational1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 pr-4 font-bold" > Vacational</label>
                                                                                <input type="radio" name="edit_isvacational" class="ti-form-radio"  value="Non-vacational"  {{($design->isvacational == 'Non-Vacational')? 'checked':''}}>
                                                                                <label for="isvacational2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 font-bold" > Non-vacational</label>
                                                                            </div>
                                                                            <label for="with-corner-hint" class="ti-form-label">This designation is applicable for employee type ?</label>
                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                    
                                                                                    <input type="radio" name="edit_emp_type" class="ti-form-radio"  value="Non-Teaching" {{($design->emp_type == "Non-Teaching")?'checked':''}}>
                                                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 pr-4"> Non-Teaching Employees</label>
                                                                                    <input type="radio" name="edit_emp_type" class="ti-form-radio" value="Teaching"  {{$design->emp_type== "Teaching"?'checked':''}}>
                                                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> Teaching Employees</label>
                                                                                </div>
                                                                                

                                                                            @if($design->status == 'inactive')
                                                                            <br/>
                                                                                <div class="flex pb-6">
                                                                                    <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active" >
                                                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                                                </div>
                                                                            @endif
                                                                    
                                                                        </div>
                                                                        <div class="ti-modal-footer">
                                                                            <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#design_edit_modal{{$i}}">
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
                                                    <form action="{{ route('ESTB.designations.destroy',$design->id) }}" method="post">
                                                    
                                                    <button onclick="return confirm('Are you Sure')"
                                                        class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                        @method('delete')
                                                        @csrf
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
                                                @empty
                                                    <p class="text-dark"><b>No Designations Added.</b></p>
                                                @endforelse
                                            </div>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <!-- Pagination-->
                                        
                                                   
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

         <!-- TABULATOR JS -->
         <script src="{{asset('build/assets/libs/tabulator-tables/js/tabulator.min.js')}}"></script>

         <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>
        

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

               new DataTable('#designations_table');

               $(document).on('click','#add_designation',function(){
                    $('#add_designation_box').slideDown();
                    $('#add_designation_box').removeClass('hidden');
                    
               });

               $(document).on('click','#add_designation_close',function(){
                    //alert('hi');
                    $('#add_designation_box').hide();
                    
               });

               $(document).on('click','.nt_update_level_disp',function(){
                    alert('Clicked');
                    $(this).parent().next().find('#nt_level_details_up_tbl').toggleClass('hidden');
               });
               
              /* $(document).on('input','#search_designation',function(){
                    //alert('Changed');
                    var design_search_val = $(this).val();
                   // alert(design_search_val);
                    $.ajax({
                            url:'/ESTB/getsearchdesignations_list',
                            method:'GET',
                            data:{'design_search_val':design_search_val},
                            success:function(data) {
                                //console.log(data.designation_results);
                                var table = '<table><thead><tr><th>Sno</th><th>Designation Name</th></tr></thead><tbody>';
            
                                    $.each(data, function(index, item) {
                                        console.log(item[0]);
                                        table += '<tr><td>' + item.id + '</td><td>' + item.emp_type + '</td></tr>';
                                    });
                                    
                                    table += '</tbody></table>';
                                $('#designation_serachresults').html(table);
                            }    
                                /*console.log(data);
                                var designationsDropdown = $('#designation_id');
                                designationsDropdown.empty(); // Clear existing options
                                data.forEach(function(item) {
                                    designationsDropdown.append($('<option>').text(item['design_name']).attr('value', item['id']));
                                
                    });
                });*/
            });
        </script>

        <script>
            $(document).ready(function(){
                //alert('Hello from jquery');
                new DataTable('#castecategory_table');
                
                $(document).on('click','.caste_edit_modal_click',function(){
                    //var 
                    var modal_no = $(this).attr("btn-val");
                    
                    //alert($(this).find('.caste_edit_modal_no').val());
                    $('.modal_no').val(modal_no); 
                });



                $(document).on('click','#designation_store_add_btn',function(e){
                    var designationname = $('.designationname').val();
                    var flag = false;

                    if(designationname == ''){
                        $('.designNameError').text('Caste Name is missing');
                        flag = true;
                    }else if (!/^[a-zA-Z\s]+$/.test(designationname.trim())){
                        $('.designNameError').text('Please fill the correct value');
                        flag = true;
                    }

                    if(flag == true){
                        e.preventDefault();
                    }
                });
            });

        </script> 

        <!--<script>
            function validateForm() {
                var designName = document.forms["desig_form"]["design_name"].value;

                document.getElementById("designNameError").innerHTML = "";
                
                if (designName.trim() === "") {
                    document.getElementById("designNameError").innerHTML = "Designation Name is required";
                    return false;
                }else if (!/^[a-zA-Z\s]+$/.test(designName.trim())) {
                document.getElementById("designNameError").innerHTML = "Designation Name should contain only alphabetic characters";
                return false;
                }
                return true;
            }
        </script>-->

        <!-- INDEX JS -->
        @vite('resources/assets/js/index-8.js')
        

@endsection