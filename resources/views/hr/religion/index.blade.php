@extends('layouts.master')

@section('styles')
     <!-- CHOICES CSS -->
     <link rel="stylesheet" href="{{asset('../build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

     <!-- TOM SELECT CSS -->
     <link rel="stylesheet" href="{{asset('../build/assets/libs/tom-select/css/tom-select.default.min.css')}}">

@endsection

@section('content')

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 text-2xl font-medium"> Religion</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary truncate" href="javascript:void(0);">
                                    Religion
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <!--li class="text-sm text-gray-500 hover:text-primary " aria-current="page">
                                        HRM Dashboard
                                    </li-->
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                    <div class="box-body">
                                        <div class="flex">
                                        <div class="ltr:mr-3 rtl:ml-3">
                                            <div class="avatar rounded-sm text-primary p-2.5 bg-primary/20 "><i
                                                class="ti ti-users text-2xl leading-none"></i></div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm">Total Employees</p>
                                            <div class="flex justify-between items-center">
                                            <h5 class="mb-0 text-2xl font-semibold text-gray-800">550</h5>
                                            <span class="text-success badge bg-success/20 rounded-sm p-1"><i
                                                class="ti ti-trending-up leading-none"></i> +1.03%</span>
                                            </div>
                                            <span class="text-xs text-gray-500">This Month</span>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                    <div class="box-body">
                                        <div class="flex">
                                        <div class="ltr:mr-3 rtl:ml-3">
                                            <div class="avatar rounded-sm text-secondary p-2.5 bg-secondary/20"><i
                                                class="ti ti-users-minus text-2xl leading-none"></i></div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm">Employees In Leave</p>
                                            <div class="flex justify-between items-center">
                                            <h5 class="mb-0 text-2xl font-semibold text-gray-800">12</h5>
                                            <span class="text-success badge bg-success/20 rounded-sm p-1"><i
                                                class="ti ti-trending-up leading-none"></i> +0.36%</span>
                                            </div>
                                            <span class=" text-gray-500 text-xs">Today</span>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                    <div class="box-body">
                                        <div class="flex">
                                        <div class="ltr:mr-3 rtl:ml-3">
                                            <div class="avatar rounded-sm text-warning p-2.5 bg-warning/20 "><i
                                                class="ti ti-briefcase text-2xl leading-none"></i></div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm">Deans & Section Heads</p>
                                            <div class="flex justify-between items-center">
                                            <h5 class="mb-0 text-2xl font-semibold text-gray-800">20</h5>
                                            <span class="text-danger badge bg-danger/20 rounded-sm p-1"><i
                                                class="ti ti-trending-down leading-none"></i> -1.28%</span>
                                            </div>
                                            <span class=" text-gray-500 text-xs">Current</span>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-6 xxl:col-span-3">
                                    <div class="box">
                                    <div class="box-body">
                                        <div class="flex">
                                        <div class="ltr:mr-3 rtl:ml-3">
                                            <div class="avatar rounded-sm text-success p-2.5 bg-success/20 "><i
                                                class="ti ti-chart-bar text-2xl leading-none"></i></div>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-sm">New Leads</p>
                                            <div class="flex justify-between items-center">
                                            <h5 class="mb-0 text-2xl font-semibold text-gray-800">773</h5>
                                            <span class="text-success badge bg-success/20 rounded-sm p-1"><i
                                                class="ti ti-trending-down leading-none"></i>+4.25%</span>
                                            </div>
                                            <span class=" text-gray-500 text-xs">This Month</span>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-1 -->
                                <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#hs-medium-modal">
                                    Add Religion
                                </button>

                                <div id="hs-medium-modal" class="hs-overlay hidden ti-modal">
                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                        <div class="ti-modal-content">
                                            <form method="post" action="{{route('hr.religion.store')}}" >
                                            @csrf
                                                <div class="ti-modal-header">
                                                    <h3 class="ti-modal-title">
                                                        Add Caste
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
                                                <div class="ti-modal-body">
                                                    <!--p class="mt-1 text-gray-800">
                                                    This is a wider card with supporting text below as a natural lead-in to additional content.
                                                    </p-->
                                                    <div class="max-w-sm space-y-3">
                                                        <input type="text" class="ti-form-input" name="religion_name" placeholder="Religion Name">
                                                        
                                                    </div>
                                                </div>
                                                <div class="ti-modal-footer">
                                                    <button type="button"
                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary"
                                                    data-hs-overlay="#hs-medium-modal">
                                                    Close
                                                    </button>
                                                    <input type="submit" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary " value="Save"/>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            <!-- Start::row-5 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12">
                                    <div class="box">
                                    <div class="box-header">
                                        <div class="flex">
                                        <h5 class="box-title my-auto">Religion List</h5>
                                        <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                            <button type="button" class="ti-btn m-0 rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200 ">
                                                View All</button>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto">
                                        <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                            <thead class="bg-gray-50">
                                            <tr class="">
                                                <th scope="col" class="dark:text-white/80">Sl.No</th>
                                                <th scope="col" class="dark:text-white/80">Religion</th>
                                                <th scope="col" class="dark:text-white/80">Created At </th>
                                                <th scope="col" class="dark:text-white/80">Updated At </th>
                                                <th scope="col" class="dark:text-white/80">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody class="">
                                            
                                                @foreach ($religion_master as $key => $religion)
                                                
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $religion->religion_name}}</td>
                                                <td>{{ isset($religion->created_at)? date('d-M-Y', strtotime($religion->created_at)) : 'NULL'}}</td>
                                                <td>{{ isset($religion->updated_at)? date('d-M-Y', strtotime($religion->updated_at)) : 'NULL'}}</td>
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <a href="{{route('hr.religion.caste.index',$religion->id)}}"
                                                        class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                                        <i class="ti ti-eye"></i>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm"
                                                            role="tooltip">
                                                            View
                                                        </span>
                                                        </a>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button data-hs-overlay="#religion-edit-modal{{$key}}" 
                                                        class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                            <i class="ti ti-pencil"></i>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm"
                                                                role="tooltip">
                                                                Edit
                                                            </span>
                                                        </button>
                                                            <div id="religion-edit-modal{{$key}}" class="hs-overlay hidden ti-modal">
                                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                    <div class="ti-modal-content">
                                                                        <form method="post" action="{{route('hr.religion.update',$religion->id)}}" >
                                                                        @csrf
                                                                        @method('patch')
                                                                            <div class="ti-modal-header">
                                                                                <h3 class="ti-modal-title">
                                                                                    <i class="ti ti-pencil"></i>  Edit Religion
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
                                                                            <div class="ti-modal-body">
                                                                                <!--p class="mt-1 text-gray-800">
                                                                                This is a wider card with supporting text below as a natural lead-in to additional content.
                                                                                </p-->
                                                                                <div class="max-w-sm space-y-3">
                                                                                    <input type="text" class="ti-form-input" name="religion_name" placeholder="Religion Name" value="{{$religion->religion_name}}">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="ti-modal-footer">
                                                                                <button type="button"
                                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary"
                                                                                data-hs-overlay="#hs-medium-modal">
                                                                                Close
                                                                                </button>
                                                                                <input type="submit" class="ti-btn  bg-warning text-white hover:bg-primary  focus:ring-primary " value="Update"/>
                                                                                
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <form method="post" action="{{route('religion.destroy',$religion->id)}}">
                                                            @csrf
                                                            @method('delete')
                                                            <button onclick="return confirm('Are you sure?');"
                                                            class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                            <i class="ti ti-trash"></i>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm"
                                                                    role="tooltip">
                                                                    Delete
                                                                </span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            @endforeach
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <div class="sm:flex items-center">
                                            
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                                <nav class="flex justify-center items-center space-x-2 rtl:space-x-reverse">
                                                    
                                                    {{ $religion_master->links()  }}
                                                  
                                                </nav>
                                            </div>
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
        <script src="{{asset('../build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- INDEX JS -->
        @vite('../resources/assets/js/index-8.js')

        <!-- CHOICES JS -->
        <script src="{{asset('../build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>
        @vite('resources/assets/js/choices.js')
        
        <!-- TOM SELECT JS -->
        <script src="{{asset('../build/assets/libs/tom-select/js/tom-select.complete.min.js')}}"></script>
        @vite('resources/assets/js/tom-select.js')
        

@endsection