@extends('layouts.components.HOD.master-hod')

@section('styles')

        <!-- CHOICES CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

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
                                <h3 class="text-neutral-900 hover:text-neutral-900 dark:text-white dark:hover:text-white text-2xl font-medium"><span class="text-primary">
                                      @if(session('deptid')==8)
                                        Weclome HOD Civil Engineering
                                        @elseif(session('deptid')==5)
                                        Welcome HOD Computer Science and Engineering
                                         @elseif(session('deptid')==17)
                                        Welcome HOD Architecture
                                         @elseif(session('deptid')==9)
                                        Welcome HOD Aeronautical Engineering
                                         @elseif(session('deptid')==2)
                                        Welcome HOD Electronics and Communication Engineering
                                         @elseif(session('deptid')==7)
                                        Welcome HOD Electrtical and Electronics Engineering
                                         @elseif(session('deptid')==6)
                                        Welcome HOD Information Science & Engineering
                                         @elseif(session('deptid')==1)
                                        Welcome HOD Mechanical Engineering
                                        @elseif(session('deptid')==24)
                                        Welcome HOD Master of Business Administration
                                         @elseif(session('deptid')==3)
                                        Welcome HOD Master of Computer Applications
                                         @elseif(session('deptid')==13)
                                        Welcome HOD Physics
                                         @elseif(session('deptid')==12)
                                        Welcome HOD Mathematics
                                         @elseif(session('deptid')==14)
                                        Welcome HOD Chemistry
                                    @endif 
                                    </span></h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-sm">
                                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="#">
                                   Staff List
                                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-neutral-300 dark:text-neutral-300 rtl:rotate-180"></i>
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
                        <div class="col-span-12 xl:col-span-9">
                            <div class="box">
                                <div class="box-header">
                                    {{-- <h4>Research Activities</h4> --}}
                                </div>
       
                                <div class="box-body pt-0">
                                    <div class="mt-3">
                                        <div id="pills-with-brand-color-1" role="tabpanel" aria-labelledby="pills-with-brand-color-item-1">
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-body">
                                                    <div class="box-header">
                                                        <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i>Satff Details</h5>
                                                    </div>
                                                    <div class=" rounded-sm  overflow-auto">
                                                        <table id="staffdetails" class="  whitespace-nowrap">
                                                            <thead class="bg-neutral-50 dark:bg-black/20">
                                                                <tr class="">
                                                                    <th scope="col" class="dark:text-white/80 font-bold  border border-neutral-900">S.No</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold  border border-neutral-900">Staff Name</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold  border border-neutral-900">Employee Type</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold  border border-neutral-900">Designation</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold  border border-neutral-900">Association</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold  border border-neutral-900">Contact No</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold  border border-neutral-900">View</th>
                                                                </tr>
                                                            </thead>
                                                            @php
                                                                $i=1;
                                                            @endphp
                                                            <tbody class="">
                                                                @foreach ($staff_list as $st)
                                                                    <tr class="">

                                                                        <td class="dark:text-white/80 font-bold text-center border border-neutral-900"><span>{{ $i++ }}</span></td>
                                                                        <td class="dark:text-white/80 font-bold  border border-neutral-900"><span>{{ $st->fname . ' ' . $st->mname . ' ' . $st->lname }}</span></td>
                                                                        <td class="dark:text-white/80 font-bold  border border-neutral-900"><span>{{ $st->latest_employee_type()->first()->employee_type }}</span></td>
                                                                        <td class="dark:text-white/80 font-bold  border border-neutral-900"><span>
                                                                            @foreach ($st->designations as $design)
                                                                            @if( $design->pivot->status == 'active')
                                                                                {{$design->design_name}} <br/>
                                                                            @endif
                                                                            @endforeach
                                                                        </span></td>
                                                                         <td class="dark:text-white/80 font-bold  border border-neutral-900"><span>
                                                                            @foreach ($st->associations as $st_asso)
                                                                                @if($st_asso->pivot->status=='active')
                                                                                    {{$st_asso->asso_name}}
                                                                                @endif
                                                                            @endforeach
                                                                        </span></td>    
                                                                         <td class="dark:text-white/80 font-bold  border text-center border-neutral-900"><span>{{ $st->contactno	}}</span></td>

                                                                        <td class="font-medium space-x-2 rtl:space-x-reverse border border-neutral-900">
                                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                                <button
                                                                                    class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                                    <a href="{{route('HOD.staff.view',$st->id)}}">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.90026 14.4853 7.90026 12C7.90026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.9003 9.51472 16.9003 12C16.9003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.9003 13.3807 14.9003 12C14.9003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.90026 10.6193 9.90026 12C9.90026 13.3807 10.6196 14.5 12.0003 14.5Z"></path></svg>
                                                                                        <span
                                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-neutral-900 text-xs font-medium text-white shadow-sm dark:bg-neutral-900"
                                                                                            role="tooltip">
                                                                                            View
                                                                                        </span>
                                                                                    </a>
                                                                                </button>                                                
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            
                                                            </tbody>
                                                            
                                                        </table>  
                                                    </div>   
                                                </div>
                                            </div>
                                            
                                            
                                        </div>   
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

               new DataTable('#staffdetails');
            });
        </script>

       
@endsection