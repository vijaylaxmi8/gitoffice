@extends('layouts.master')

@section('styles')

    
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
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.998 2V3H19.998V5H12.998V19H16.998V21H6.99805V19H10.998V5H3.99805V3H10.998V2H12.998ZM4.99805 6.34315L7.82647 9.17157C8.55033 9.89543 8.99805 10.8954 8.99805 12C8.99805 14.2091 7.20719 16 4.99805 16C2.78891 16 0.998047 14.2091 0.998047 12C0.998047 10.8954 1.44576 9.89543 2.16962 9.17157L4.99805 6.34315ZM18.998 6.34315L21.8265 9.17157C22.5503 9.89543 22.998 10.8954 22.998 12C22.998 14.2091 21.2072 16 18.998 16C16.7889 16 14.998 14.2091 14.998 12C14.998 10.8954 15.4458 9.89543 16.1696 9.17157L18.998 6.34315ZM18.998 9.17157L17.5838 10.5858C17.2099 10.9597 16.998 11.4606 16.998 12L20.998 12.001C20.998 11.4606 20.7862 10.9597 20.4123 10.5858L18.998 9.17157ZM4.99805 9.17157L3.58383 10.5858C3.20988 10.9597 2.99805 11.4606 2.99805 12L6.99805 12.001C6.99805 11.4606 6.78621 10.9597 6.41226 10.5858L4.99805 9.17157Z" fill="rgba(0,0,0,1)"></path></svg>
                                    PayScales  
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg>    
                                    </a>
                                    </li>
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7.38938 16.5386C5.33894 15.0901 4 12.7014 4 10C4 5.58172 7.58172 2 12 2C16.4183 2 20 5.58172 20 10C20 12.7014 18.6611 15.0901 16.6106 16.5386L18.6936 21.2996C18.8043 21.5526 18.6889 21.8474 18.4359 21.9581C18.3727 21.9857 18.3045 22 18.2355 22H5.76451C5.48837 22 5.26451 21.7761 5.26451 21.5C5.26451 21.431 5.27878 21.3628 5.30643 21.2996L7.38938 16.5386ZM8.11851 10.9704C8.55217 12.7106 10.1255 14 12 14C13.8745 14 15.4478 12.7106 15.8815 10.9704L13.9407 10.4852C13.7239 11.3553 12.9372 12 12 12C11.0628 12 10.2761 11.3553 10.0593 10.4852L8.11851 10.9704Z"></path></svg>
                                            Non Teaching
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg>    
                                        </a>
                                        </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

            
                          

                            <!-- Start::row-5 KLS Pay Scale -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12">
                                    @if(session('status'))
                                        @if (session('status') == 1)
                                        <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                            <span class='font-bold'>Result: </span> DataBase transaction Successful
                                        </div>
                                        @elseif(session('status') == 0)
                                        <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                            <span class='font-bold'>Result : </span> Error in Database transaction
                                        </div>
                                    
                                        @endif
                                        @php 
                                            Illuminate\Support\Facades\Session::forget('status');  
                                        @endphp
                                    @endif
                                    <div class="box">
                                    <div class="box-header">
                                        <div class="flex">
                                        <h5 class="box-title my-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.998 2V3H19.998V5H12.998V19H16.998V21H6.99805V19H10.998V5H3.99805V3H10.998V2H12.998ZM4.99805 6.34315L7.82647 9.17157C8.55033 9.89543 8.99805 10.8954 8.99805 12C8.99805 14.2091 7.20719 16 4.99805 16C2.78891 16 0.998047 14.2091 0.998047 12C0.998047 10.8954 1.44576 9.89543 2.16962 9.17157L4.99805 6.34315ZM18.998 6.34315L21.8265 9.17157C22.5503 9.89543 22.998 10.8954 22.998 12C22.998 14.2091 21.2072 16 18.998 16C16.7889 16 14.998 14.2091 14.998 12C14.998 10.8954 15.4458 9.89543 16.1696 9.17157L18.998 6.34315ZM18.998 9.17157L17.5838 10.5858C17.2099 10.9597 16.998 11.4606 16.998 12L20.998 12.001C20.998 11.4606 20.7862 10.9597 20.4123 10.5858L18.998 9.17157ZM4.99805 9.17157L3.58383 10.5858C3.20988 10.9597 2.99805 11.4606 2.99805 12L6.99805 12.001C6.99805 11.4606 6.78621 10.9597 6.41226 10.5858L4.99805 9.17157Z" fill="rgba(0,0,0,1)"></path></svg>
                                    PayScale Details (Non Teaching - Confirmed (KLS Pay Scale))</h5>
                                        <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#hs-medium-modal">
                                                
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path></svg>
                                                    Add KLS Payscale
                                                </button>
            
                                                <div id="hs-medium-modal" class="hs-overlay hidden ti-modal">
                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                        <div class="ti-modal-content">
                                                        <div class="ti-modal-header">
                                                            <h3 class="ti-modal-title">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>
                                                               
                                                                Add New KLS Payscale
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
                                                        <form  action="{{route('ESTB.payscales.non_teaching.store')}}" method="post">
                                                            @csrf
                                                            <div class="ti-modal-body">
                                                               
                                                                <div class="max-w-sm space-y-3">
                                                                    <label for="with-corner-hint" class="ti-form-label">Payscale Title : </label>
                                                                    <input type="text" name="title" class="ti-form-input" placeholder="Payscale title">
                                                                </div>
                                                                <div class="max-w-sm space-y-3">
                                                                    <label for="with-corner-hint" class="ti-form-label">Payband : </label>
                                                                    <input type="text" name="payband" class="ti-form-input" placeholder="payband">
                                                                </div>
                                                                
                                                                <label for="" class="ti-form-label">Effect from Date :</label>
                                                                <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                    
                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                class="ri ri-calendar-line"></i></span>
                                                                    </div>
                    
                                                                    <input type="text" name="wef"
                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                                        id="date" placeholder="Choose date" readonly>
                                                                </div>
                                                                <label for="" class="ti-form-label">Level </label>
                                                                <div class="flex shadow-sm max-w-sm space-y-3">
                                                                    
                                                               
                                                                    <select class="ti-form-select" name="level">
                                                                        <option value="0">Select the level</option>
                                                                        @foreach ($design_levels as $level)
                                                                            <option value="{{$level->level}}">Level {{$level->level}}</option>
                                                                        @endforeach
                                                                    </select>
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
                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                            <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                <thead class="bg-gray-50 dark:bg-black/20">
                                                <tr class="">
                                                    <th scope="col" class="dark:text-white/80">S.no</th>
                                                    <th scope="col" class="dark:text-white/80">PayScale Name</th>
                                                    <th scope="col" class="dark:text-white/80">Payband</th>
                                                    <th scope="col" class="dark:text-white/80">Designation</th>
                                                    <th scope="col" class="dark:text-white/80">Level</th>
                                                    <th scope="col" class="dark:text-white/80">WEF</th>
                                                    <th scope="col" class="dark:text-white/80">Closed On</th>
                                                    <th scope="col" class="dark:text-white/80">Status</th>
                                                    <th scope="col" class="dark:text-white/80">Actions</th>
                                                    
                                                </tr>
                                                </thead>
                                                <tbody class="">
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @forelse($non_teaching_payscale as $ntp)
                                
                                                <tr class="bg-red-700">
                                                    <td>{{ $i++ }}</td>
                                                    <td>
                                                    <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                        <div class="block w-full my-auto">
                                                            {{$ntp->title}}
                                                        </div>
                                                    </div>
                                                    </td>
                                                    <td><span>{{$ntp->payband}}</span></td>
                                                    <td><span>{{$ntp->design_name}}</span></td>
                                                    <td><span>{{$ntp->level}}</span></td>
                                                    <td><span>{{$ntp->wef}}</span></td>
                                                    <td><span>{{($ntp->closedon=='NULL')?'Not Closed': $ntp->closedon}}</span></td>
                                                    <td><span>{{$ntp->status}}</span></td>
                                                                                             
                                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                    <div class="hs-tooltip ti-main-tooltip">
                                                        <button data-hs-overlay="#nt_consolidated_payscale_edit_modal{{$i}}"
                                                        class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                role="tooltip">
                                                                Edit
                                                            </span>
                                                        </button>
                            
                        
                                                            <div id="nt_consolidated_payscale_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                    <div class="ti-modal-content">
                                                                        <div class="ti-modal-header">
                                                                            <h3 class="ti-modal-title">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                Edit Payscale
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
                                                                    <form  action="{{route('ESTB.payscales.non_teaching.update',$ntp->id)}}" method="post">
                                                                        @csrf
                                                                        @method('patch')
                                                                        <div class="ti-modal-body">
                                                                           
                                                                            <div class="max-w-sm space-y-3">
                                                                                <label for="with-corner-hint" class="ti-form-label">Title : </label>
                                                                                <input type="text" name="title" class="ti-form-input" placeholder="Payscale title" value="{{$ntp->title}}">
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3">
                                                                                <label for="with-corner-hint" class="ti-form-label">Payband : </label>
                                                                                <input type="text" name="payband" class="ti-form-input" placeholder="payband" value="{{$ntp->payband}}">
                                                                            </div>
                                                                            
                                                                            <label for="" class="ti-form-label">Effect from Date :</label>
                                                                            <div class="flex shadow-sm max-w-sm space-y-3">
                                                                                
                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9V3H15V1H17V3ZM4 9V19H20V9H4ZM6 13H11V17H6V13Z"></path></svg>
                                                                                </div>
                                
                                                                                <input type="text" name="wef"
                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                                                    id="date" placeholder="Choose date" value="{{$ntp->wef}}">
                                                                            </div>
                                                                            <label for="" class="ti-form-label">Closed On :</label>
                                                                            <div class="flex shadow-sm max-w-sm space-y-3">
                                                                                
                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9V3H15V1H17V3ZM4 9V19H20V9H4ZM6 13H11V17H6V13Z"></path></svg>
                                                                                </div>
                                
                                                                                <input type="text" name="closedon"
                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                                                    id="date" placeholder="Choose date" value="{{$ntp->closedon}}">
                                                                            </div>
                                                                            @if($ntp->status == 'inactive')
                                                                            <br/>
                                                                                <div class="flex">
                                                                                    <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active">
                                                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                                                </div>
                                                                            @endif
                                                                    
                                                                        </div>
                                                                            <div class="ti-modal-footer">
                                                                                <button type="button"
                                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                data-hs-overlay="#hs-medium-modal">
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
                                                    <form action="{{ route('ESTB.payscales.non_teaching.destroy',$ntp->id) }}" method="post">
                                                       
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
                                                    <p class="text-dark"><b>No Payscales Added.</b></p>
                                                @endforelse
                                                </tbody>
                                            </table>

                                        
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <div class="sm:flex items-center">
                                            <div class="">
                                                showing 5 Entries <i class="ri-arrow-right-line ml-2 font-semibold"></i>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                                <nav class="flex justify-center items-center space-x-2 rtl:space-x-reverse">
                                                    <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center gap-2 rounded-sm" href="javascript:void(0);">
                                                        <span aria-hidden="true">Prev</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="bg-primary text-white py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm" href="javascript:void(0);" aria-current="page">1</a>
                                                    <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm" href="javascript:void(0);">2</a>
                                                    <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm" href="javascript:void(0);">3</a>
                                                    <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center gap-2 rounded-sm" href="javascript:void(0);">
                                                        <span class="sr-only">Next</span>
                                                        <span aria-hidden="true">Next</span>
                                                    </a>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-5 -->

                            <!-- Start::Consolidated Pay Scale-->
                                <div class="grid grid-cols-12 gap-x-6">
                                    <div class="col-span-12">
                                        @if(session('status'))
                                            @if (session('status') == 1)
                                            <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                                <span class='font-bold'>Result: </span> DataBase transaction Successful
                                            </div>
                                            @elseif(session('status') == 0)
                                            <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                                <span class='font-bold'>Result : </span> Error in Database transaction
                                            </div>
                                        
                                            @endif
                                            @php 
                                                Illuminate\Support\Facades\Session::forget('status');  
                                            @endphp
                                        @endif
                                        <div class="box">
                                        <div class="box-header">
                                            <div class="flex">
                                            <h5 class="box-title my-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.998 2V3H19.998V5H12.998V19H16.998V21H6.99805V19H10.998V5H3.99805V3H10.998V2H12.998ZM4.99805 6.34315L7.82647 9.17157C8.55033 9.89543 8.99805 10.8954 8.99805 12C8.99805 14.2091 7.20719 16 4.99805 16C2.78891 16 0.998047 14.2091 0.998047 12C0.998047 10.8954 1.44576 9.89543 2.16962 9.17157L4.99805 6.34315ZM18.998 6.34315L21.8265 9.17157C22.5503 9.89543 22.998 10.8954 22.998 12C22.998 14.2091 21.2072 16 18.998 16C16.7889 16 14.998 14.2091 14.998 12C14.998 10.8954 15.4458 9.89543 16.1696 9.17157L18.998 6.34315ZM18.998 9.17157L17.5838 10.5858C17.2099 10.9597 16.998 11.4606 16.998 12L20.998 12.001C20.998 11.4606 20.7862 10.9597 20.4123 10.5858L18.998 9.17157ZM4.99805 9.17157L3.58383 10.5858C3.20988 10.9597 2.99805 11.4606 2.99805 12L6.99805 12.001C6.99805 11.4606 6.78621 10.9597 6.41226 10.5858L4.99805 9.17157Z" fill="rgba(0,0,0,1)"></path></svg>
                                                PayScale Details (Non Teaching - Consolidated)</h5>
                                            <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                    <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#add_new_consolidated_payscale_modal">
                                                    
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path></svg>
                                                        Add Consolidated Payscale
                                                    </button>

                                                    <div id="add_new_consolidated_payscale_modal" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                            <div class="ti-modal-header">
                                                                <h3 class="ti-modal-title">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>
                                                                
                                                                    Add New Consolidated Payscale
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
                                                            <form  action="{{route('ESTB.payscales.non_teaching_consolidated.store')}}" method="post">
                                                                @csrf
                                                                <div class="ti-modal-body">
                                                                
                                                                    <div class="max-w-sm space-y-3">
                                                                        <label for="with-corner-hint" class="ti-form-label">Base Pay : </label>
                                                                        <input type="text" name="basepay" class="ti-form-input" placeholder="Base Pay">
                                                                    </div>
                                                                    <div class="max-w-sm space-y-3">
                                                                        <label for="with-corner-hint" class="ti-form-label">Allowance : </label>
                                                                        <input type="text" name="allowance" class="ti-form-input" placeholder="Allowance">
                                                                    </div>
                                                                    
                                                                    <div class="max-w-sm space-y-3">
                                                                        <label for="with-corner-hint" class="ti-form-label">Applicable for ?</label>
                                                                        <input type="radio" name="year" class="ti-form-radio" id="year1" value="1">
                                                                        <label for="year1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> 1st Year</label>
                                                                        <input type="radio" name="year" class="ti-form-radio" id="year2" value="2">
                                                                        <label for="year2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> 2nd year</label>
                                                                    </div>
                                                                    <label for="" class="ti-form-label">Effect from Date :</label>
                                                                    <div class="flex shadow-sm max-w-sm space-y-3">
                                                                        
                                                                        <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                            <span class="text-sm text-gray-500 dark:text-white/70"> <i class="ri-calendar-2-line"></i> </span>
                                                                        </div>
                                                                        

                                                                        <input type="text" name="wef"
                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                                            id="date" placeholder="Choose date" >
                                                                    </div>
                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                    
                                                                        <label for="with-corner-hint" class="ti-form-label font-bold">Level

                                                                            <div class="hs-tooltip ti-main-tooltip [--placement:right]">
                                                                                <button type="button" class="hs-tooltip-toggle w-10 h-10 ti-btn rounded-full p-0 transition-none focus:outline-none bg-gray-50 border-gray-200 text-gray-600 hover:bg-primary/30 hover:border-primary hover:text-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70 dark:hover:bg-white/[.05] dark:hover:border-white/[.1] dark:hover:text-white">
                                                                                NT ?
                                                                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                                                        
                                                                                        <table class="ti-custom-table ti-table-bordered ti-custom-table-head whitespace-nowrap">
                                                                                            <tr>
                                                                                                <td>Designation</td>
                                                                                                <td>Level</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>PEONS/HELPERS/AYAS/CLEANERS</td>
                                                                                                <td>Level 1</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>ATTENDERS</td>
                                                                                                <td>Level 2</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>DRIVERS</td>
                                                                                                <td>Level 3</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>SECOND DIVISION ASSISTANT/RECEPTIONIST</td>
                                                                                                <td>Level 4</td>
                                                                                            </tr>
                                                                                
                                                                                            <tr>
                                                                                                <td>FIRST DIVISION ASSISTANT</td>
                                                                                                <td>Level 5</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td> O.S.(ADMIN ) & (ACCOUNTS)</td>
                                                                                                <td>Level 6</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>ASSISTANT LIBRARIAN</td>
                                                                                                <td>Level 7</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>MECHANIC/MOULDERS/CARPENTER/ELECTRICIAN</td>
                                                                                                <td>Level 8</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>ASSISTANT INSTRUCTOR</td>
                                                                                                <td>Level 9</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>INSTRUCTOR</td>
                                                                                                <td>Level 10</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td> FOREMAN</td>
                                                                                                <td>Level 11</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td> NETWORK SYSTEM ANALYST</td>
                                                                                                <td>Level 12</td>
                                                                                            </tr>
                                                                                                
                                                                                        </table>
                                                                                    </span>
                                                                                </button>
                                                                            </div>
                                                                        </label>
                                                                                        
                                                                        <select class="ti-form-select" name="level">
                                                                            <option value="0">Select the level</option>
                                                                            <option value="1">Level 1</option>
                                                                            <option value="2">Level 2</option>
                                                                            <option value="3">Level 3</option>
                                                                            <option value="4">Level 4</option>
                                                                            <option value="5">Level 5</option>
                                                                            <option value="6">Level 6</option>
                                                                            <option value="7">Level 7</option>
                                                                            <option value="8">Level 8</option>
                                                                            <option value="9">Level 9</option>
                                                                            <option value="10">Level 10</option>
                                                                            <option value="11">Level 11</option>
                                                                            <option value="12">Level 12</option>
                                                                        </select>
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
                                            <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                            
                                                <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                    <thead class="bg-gray-50 dark:bg-black/20">
                                                    <tr class="">
                                                        <th scope="col" class="dark:text-white/80">S.no</th>
                                                        <th scope="col" class="dark:text-white/80">Base Pay</th>
                                                        <th scope="col" class="dark:text-white/80">Allowance</th>
                                                    
                                                        <th scope="col" class="dark:text-white/80">Year</th>
                                                        <th scope="col" class="dark:text-white/80">WEF</th>
                                                        <th scope="col" class="dark:text-white/80">Closed On</th>
                                                        <th scope="col" class="dark:text-white/80">Status</th>
                                                        <th scope="col" class="dark:text-white/80">Actions</th>
                                                        
                                                    </tr>
                                                    </thead>
                                                    <tbody class="">
                                                    @php
                                                        $i = 1;
                                                    @endphp
                                                    @forelse($ntcps as $ntcp)
                                    
                                                    <tr class="bg-red-700">
                                                        <td>{{ $i++ }}</td>
                                                        <td>
                                                        <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                            <div class="block w-full my-auto">
                                                                {{$ntcp->basepay}}
                                                            </div>
                                                        </div>
                                                        </td>
                                                        <td><span>{{$ntcp->allowance}}</span></td>
                                                        
                                                        <td><span>{{$ntcp->year}}</span></td>
                                                        <td><span>{{$ntcp->wef}}</span></td>
                                                        <td><span>{{($ntcp->closedon=='NULL')?'Not Closed': $ntcp->closedon}}</span></td>
                                                        <td><span>{{$ntcp->status}}</span></td>
                                                                                                
                                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                        <div class="hs-tooltip ti-main-tooltip">
                                                            <button data-hs-overlay="#design_edit_modal{{$i}}"
                                                            class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                    role="tooltip">
                                                                    Edit
                                                                </span>
                                                            </button>


                                                                <div id="design_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                        <div class="ti-modal-content">
                                                                        <div class="ti-modal-header">
                                                                            <h3 class="ti-modal-title">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                Edit Payscale Consolidated
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
                                                                        <form  action="{{route('ESTB.payscales.non_teaching_consolidated.update',$ntcp->id)}}" method="post">
                                                                            @csrf
                                                                            @method('patch')
                                                                            <div class="ti-modal-body">
                                                                            
                                                                                <div class="max-w-sm space-y-3">
                                                                                    <label for="with-corner-hint" class="ti-form-label">Base Pay : </label>
                                                                                    <input type="text" name="basepay" class="ti-form-input" placeholder="Base Pay" value="{{$ntcp->basepay}}">
                                                                                </div>
                                                                                <div class="max-w-sm space-y-3">
                                                                                    <label for="with-corner-hint" class="ti-form-label">Allowance : </label>
                                                                                    <input type="text" name="allowance" class="ti-form-input" placeholder="Allowance" value="{{$ntcp->allowance}}">
                                                                                </div>
                                                                                
                                                                                <div class="max-w-sm space-y-3">
                                                                                    <label for="with-corner-hint" class="ti-form-label">Applicable for ?</label>
                                                                                    <input type="radio" name="year" class="ti-form-radio" id="year1" value="1"  {{($ntcp->year==1)?'checked':''}}>
                                                                                    <label for="year1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> 1st Year</label>
                                                                                    <input type="radio" name="year" class="ti-form-radio" id="year2" value="2" {{($ntcp->year==2)?'checked':''}}>
                                                                                    <label for="year2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> 2nd year</label>
                                                                                </div>
                                                                                <label for="" class="ti-form-label">Effect from Date :</label>
                                                                                <div class="flex shadow-sm max-w-sm space-y-3">
                                                                                    
                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                class="ri ri-calendar-line"></i></span>
                                                                                    </div>
                                    
                                                                                    <input type="text" name="wef"
                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                                                        id="date" placeholder="Choose date" value="{{$ntcp->wef}}">
                                                                                </div>
                                                                                <label for="" class="ti-form-label">Closed On :</label>
                                                                                <div class="flex shadow-sm max-w-sm space-y-3">
                                                                                    
                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                class="ri ri-calendar-line"></i></span>
                                                                                    </div>
                                    
                                                                                    <input type="text" name="closedon"
                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                                                        id="date" placeholder="Choose date" value="{{$ntcp->closedon}}">
                                                                                </div>
                                                                                @if($ntcp->status == 'inactive')
                                                                                <br/>
                                                                                    <div class="flex">
                                                                                        <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active">
                                                                                        <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                                                    </div>
                                                                                @endif
                                                                        
                                                                            </div>
                                                                            <div class="ti-modal-footer">
                                                                                <button type="button"
                                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                data-hs-overlay="#hs-medium-modal">
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
                                                        <form action="{{ route('ESTB.payscales.non_teaching_consolidated.destroy',$ntcp->id)}}" method="post">
                                                        
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
                                                        <p class="text-dark"><b>No Payscales Added.</b></p>
                                                    @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            {{$ntcps->links()}}
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


        <!-- INDEX JS -->
        @vite('resources/assets/js/index-8.js')
        

@endsection