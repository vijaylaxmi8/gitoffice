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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Staff Details <span class="text-primary">{{$staff_view->fname.' '.$staff_view->mname.' '.$staff_view->lname}}</span></span></h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex  items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="{{route('HOD.staff.stafflist')}}">
                                            Go Back to Staff
                                            <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 xl:col-span-3">
                                <div class="box">
                                    <div class="box-body relative">
                                        <div class="flex relative before:bg-black/50 before:absolute before:w-full before:h-full before:rounded-sm">
                                            <img src="{{asset('build/assets/img/png-images/2.png')}}" alt="" class="h-[200px] w-full rounded-sm" id="profile-img2">
                                            <span class="absolute top-5 ltr:right-5 rtl:left-5 flex p-2 rounded-sm ring-1 ring-black/10 text-white bg-black/10 leading-none">
                                                <i class="ri ri-pencil-line"></i>
                                                <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" id="profile-change2">
                                            </span>
                                        </div>
                                        <div class="absolute top-[4.5rem] inset-x-0 text-center space-y-3">
                                            <div class="flex justify-center w-full">
                                                <div class="relative">
                                                    <img src="{{asset('build/assets/img/users/1.jpg')}}" class="w-24 h-24 rounded-full ring-4 ring-white/10 mx-auto" id="profile-img" alt="pofile-img">
                                                    <span class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white/10 text-white bg-white/10 dark:bg-bgdark leading-none">
                                                        <i class="ri ri-pencil-line"></i>
                                                        <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" id="profile-change">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-body pt-0">
                                        <nav class="flex flex-col space-y-2" aria-label="Tabs" role="tablist" data-hs-tabs-vertical="true">
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 active" id="profile-settings-item-1" data-hs-tab="#profile-settings-1" aria-controls="profile-settings-1" role="tab">
                                            <i class="ri ri-shield-user-line"></i>Staff Basic Information
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-2" data-hs-tab="#profile-settings-2" aria-controls="profile-settings-2" role="tab">
                                            <i class="ri ri-global-line"></i>Qualification
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-3" data-hs-tab="#profile-settings-3" aria-controls="profile-settings-3" role="tab">
                                            <i class="ri ri-lock-line"></i> Department
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-4" data-hs-tab="#profile-settings-4" aria-controls="profile-settings-4" role="tab">
                                            <i class="ri ri-account-circle-line"></i> Asociation
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-5" data-hs-tab="#profile-settings-5" aria-controls="profile-settings-5" role="tab">
                                            <i class="ri ri-notification-4-line"></i> Designation And Payscale
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-6" data-hs-tab="#profile-settings-6" aria-controls="profile-settings-6" role="tab">
                                            <i class="ri ri-notification-4-line"></i> Leaves
                                        </button>
                                        
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-9">
                                <div class="box">
                                    <div class="box-body p-0">
                                        <!-- Staff Information Start-->
                                        <div id="profile-settings-1" role="tabpanel" aria-labelledby="profile-settings-item-1">
                                            <div class="table-bordered ti-striped-table rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                <table id="attended" class="ti-custom-table ti-custom-table-head whitespace-nowrap mix-blend-overlay">
                                                    <tbody class="">
                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Staff Name</td>
                                                                <td><span>{{ $staff_view->fname . ' ' . $staff_view->mname . ' ' . $staff_view->lname }}</span></td>
                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Employee Type</td>
                                                                <td><span>{{ $staff_view->latest_employee_type()->first()->employee_type }}</span></td>

                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Email</td>
                                                                <td><span>{{ $staff_view->email}}</span></td>
                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Religion</td>
                                                                <td>
                                                                    @if($staff_view->religion)
                                                                        <span>{{ $staff_view->religion->religion_name }}</span>
                                                                    @else
                                                                        <span>--NA--</span>
                                                                    @endif
                                                                </td>
                                                            </tr>

                                                             <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Caste Category</td>
                                                                {{-- <td><span>{{ $staff_view->caste_name }}</span></td> --}}
                                                                <td>
                                                                    @if($staff_view->caste)
                                                                        <span>{{ $staff_view->caste->caste_name }}</span>
                                                                    @else
                                                                        <span>--NA--</span>
                                                                    @endif
                                                                </td>
                                                            </tr>                

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Date Of Birth</td>
                                                                <td><span>{{\Carbon\Carbon::parse($staff_view->dob)->format('d-M-Y') }}</span></td>

                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Date Of Joining</td>
                                                                <td><span>{{\Carbon\Carbon::parse($staff_view->doj)->format('d-M-Y') }}</span></td>

                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Date Of Superannuation</td>
                                                                <td><span>{{\Carbon\Carbon::parse($staff_view->date_of_superanuation)->format('d-M-Y') }}</span></td>

                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Date Of Confirmation</td>
                                                                <td><span>{{\Carbon\Carbon::parse($staff_view->date_of_confirmation)->format('d-M-Y') }}</span></td>

                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Date Of Increment</td>
                                                                <td><span>{{\Carbon\Carbon::parse($staff_view->date_of_increment)->format('d-M-Y') }}</span></td>

                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Blood Group</td>
                                                                <td><span>{{ $staff_view->bloodgroup }}</span></td>
                                                            </tr>

                                                             <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Pancard No</td>
                                                                <td>
                                                                    @if($staff_view->pan_card)
                                                                        <span>{{ $staff_view->pan_card }}</span>
                                                                    @else
                                                                        <span>--NA--</span>
                                                                    @endif
                                                                </td>
                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Adharcard No</td>
                                                                <td>
                                                                    @if($staff_view->adhar_card)
                                                                        <span>{{ $staff_view->adhar_card }}</span>
                                                                    @else
                                                                        <span>--NA--</span>
                                                                    @endif
                                                                </td>
                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Contact No</td>
                                                                <td>
                                                                    @if($staff_view->contactno)
                                                                        <span>{{ $staff_view->contactno }}</span>
                                                                    @else
                                                                        <span>--NA--</span>
                                                                    @endif
                                                                </td>

                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">AICTE ID</td>
                                                                <td>
                                                                    @if($staff_view->aicte_id)
                                                                        <span>{{ $staff_view->aicte_id }}</span>
                                                                    @else
                                                                        <span>--NA--</span>
                                                                    @endif
                                                                </td>
                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">VTU ID</td>
                                                                 <td>
                                                                    @if($staff_view->vtu_id)
                                                                        <span>{{ $staff_view->vtu_id }}</span>
                                                                    @else
                                                                        <span>--NA--</span>
                                                                    @endif
                                                                </td>
                                                            </tr>        

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Local Address</td>
                                                                <td><span>{{ $staff_view->local_address }}</span></td>
                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Permanent Address</td>
                                                                <td><span>{{ $staff_view->permanent_address }}</span></td>
                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Emergency No</td>
                                                                <td>
                                                                    @if($staff_view->emergency_no)
                                                                        <span>{{ $staff_view->emergency_no }}</span>
                                                                    @else
                                                                        <span>--NA--</span>
                                                                    @endif
                                                                </td>
                                                            </tr>

                                                            <tr class="">
                                                                <td class="dark:text-white/80 font-bold">Emergency Name</td>
                                                                <td>
                                                                    @if($staff_view->emergency_name)
                                                                        <span>{{ $staff_view->emergency_name }}</span>
                                                                    @else
                                                                        <span>--NA--</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Staff Information Ends-->

                                        <!-- Qualification Start-->
                                        <div id="profile-settings-2" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-2">
                                            <div class="table-bordered ti-striped-table rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                <table id="attended" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                    <thead class="bg-gray-50 dark:bg-black/20">
                                                    <tr class="">
                                                        <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Qualification Name</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Board/University</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Year Of Passing</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Grade</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $i=1;
                                                        @endphp
                                                        <tr class="">
                                                            <td><span>{{$i++}}</span></td>
                                                            <td><span>{{$staff_view->qual_name}}</span></td>
                                                            <td><span>{{$staff_view->board_university}}</span></td>
                                                            <td><span>{{$staff_view->yop}}</span></td>
                                                            {{-- <td><span>{{\Carbon\Carbon::parse($staff_view->doj)->format('d-M-Y') }}</span></td> --}}
                                                            <td><span>{{$staff_view->grade}}</span></td>
                                                            <td><span>{{$staff_view->status}}</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>  
                                            </div>
                                        </div>
                                        <!-- Qualification Ends-->

                                        <!-- Department Start-->
                                        <div id="profile-settings-3" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-3">
                                            <div class="table-bordered ti-striped-table rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                <table id="attended" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                    <thead class="bg-gray-50 dark:bg-black/20">
                                                    <tr class="">
                                                        <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Department Name</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Start Date</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">End Date</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Duration</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $i=1;
                                                        @endphp
                                                            <tr class="">
                                                                <td><span>{{ $i++ }}</span></td>
                                                                 <td><span>
                                                                    @foreach ($staff_view->departments as $st_dept)
                                                                        @if($st_dept->pivot->status=='active')
                                                                            {{$st_dept->dept_name}}
                                                                        @endif
                                                                    @endforeach
                                                                </span></td>
                                                                <td><span>{{\Carbon\Carbon::parse($st_dept->pivot->start_date)->format('d-M-Y') }}</span></td>
                                                                <td><span>{{ $st_dept->pivot->end_date==null?'--NA--':\Carbon\Carbon::parse($st_dept->pivot->end_date)->format('d-M-Y') }}</span></td>
                                                                <td><span>
                                                                    @php
                                                                        $sdate=new DateTime($st_dept->pivot->start_date);
                                                                
                                                                        if ($st_dept->pivot->end_date!=null)
                                                                            $edate=new DateTime($st_dept->pivot->end_date);
                                                                        else
                                                                            $edate=Carbon\Carbon::now();
                                                                            $difference=$sdate->diff($edate);
                                                                        @endphp    
                                                                
                                                                        {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}
                                                                </span></td>
                                                                <td><span>{{$st_dept->pivot->status}}</span></td>
                                                            </tr>
                                                    </tbody>
                                                </table>  
                                            </div>
                                       
                                        </div>
                                        <!-- Department Ends-->

                                        <!-- Asociation Start-->
                                        <div id="profile-settings-4" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-4">
                                             <div class="table-bordered ti-striped-table rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                <table id="attended" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                    <thead class="bg-gray-50 dark:bg-black/20">
                                                    <tr class="">
                                                        <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">association</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Start Date</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">TENURE END DATE</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">End Date</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Duration</th>
                                                        <th scope="col" class="dark:text-white/80 font-bold ">Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $i=1;
                                                        @endphp
                                                        <tr class="">
                                                            <td><span>{{ $i++ }}</span></td>
                                                            <td><span>
                                                                @foreach ($staff_view->associations as $st_asso)
                                                                    @if($st_asso->pivot->status=='active')
                                                                        {{$st_asso->asso_name}}
                                                                    @endif
                                                                @endforeach
                                                            </span></td>
                                                            <td><span>{{\Carbon\Carbon::parse($st_asso->pivot->start_date)->format('d-M-Y') }}</span></td>
                                                            <td><span class="text-red-500">{{$st_asso->pivot->closing_date==null?'--NA--':\Carbon\Carbon::parse($st_asso->pivot->closing_date)->format('d-M-Y') }}</span></td>
                                                            <td><span>{{$st_asso->pivot->end_date==null?'--NA--': \Carbon\Carbon::parse($st_asso->pivot->end_date)->format('d-M-Y') }}</span></td>
                                                            <td><span>
                                                                @php
                                                                        $sdate=new DateTime($st_asso->pivot->start_date);
                                                                
                                                                    
                                                                if($st_asso->pivot->end_date!=null)
                                                                        $edate=new DateTime($st_asso->pivot->end_date);
                                                                else
                                                                        $edate=Carbon\Carbon::now();
                                                                
                                                                
                                                                $difference=$sdate->diff($edate);
                                                                @endphp    
                                                                
                                                                    {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}
                                                            </span></td>
                                                            <td><span>{{$st_asso->pivot->status}}</span></td>

                                                        </tr>
                                                    </tbody>
                                                </table>  
                                            </div>
                                       
                                        </div>
                                        <!-- Asociation Ends-->


                                        <!--Designation And Payscale Start-->
                                        <div id="profile-settings-5" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-5">
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-body">
                                                    <div class="box-header">
                                                        <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i>Designation And Payscale Details</h5>
                                                    </div>
                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                            <tr class="">
                                                                <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Designation Name</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Start Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">End Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Duration</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Payscale Title</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Start Date </th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">End Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Duration</th>
                                                           
                            
                                                            </tr>
                                                            </thead>
                                                            @php
                                                                $i=1;
                                                            @endphp
                                                            <tbody class="">
                                                                @foreach ($staff_view->designations as $designation)
                                                                    @if($designation->isadditional == 0 ) <!--For working with regular designations-->
                                                                        @php
                                                                        $rowcount=0;
                                                                            if($staff_view->employee_type=="Teaching" )
                                                                            {
                                                                                if($staff_view->teaching_payscale !=null){
                                                                                    foreach($staff_view->teaching_payscale as $tp)
                                                                                    {
                                                                                        if($designation->pivot->end_date==null && $tp->pivot->start_date>=$designation->pivot->start_date)
                                                                                        {    
                                                                                            $rowcount++;
                                                                                            
                                                                                        }
                                                                                        elseif($tp->pivot->start_date>=$designation->pivot->start_date && $tp->pivot->end_date<=$designation->pivot->end_date && $tp->pivot->end_date!=null)
                                                                                        {
                                                                                            $rowcount++;
                                                                                        
                                                                                        }
                                                                                    }
                                                                                }
                                                                            //  $rowcount++;
                                                                                if($staff_view->consolidated_teaching_pay !=null){
                                                                                    foreach($staff_view->consolidated_teaching_pay as $ctp){
                                                                                        if($designation->pivot->end_date==null && $ctp->start_date>=$designation->pivot->start_date)
                                                                                        {
                                                                                            $rowcount++;
                                                                                        }
                                                                                        elseif($ctp->start_date>=$designation->pivot->start_date && $ctp->end_date<=$designation->pivot->end_date && $ctp->end_date!=null)
                                                                                        {
                                                                                            $rowcount++;
                                                                                        
                                                                                        }
                                                                                    }
                                                                                }
                                                                                
                                                                                $rowcount++;
                                                                            }
                                                                            
                                                                        @endphp

                                                                        <tr class="{{$designation->pivot->status =='inactive'?'bg-gray-200':''}}">
                                                                            <td rowspan={{$rowcount}}>{{ $i++ }}  </td>
                                                                            <td rowspan={{$rowcount}}>
                                                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                                                    <div class="block w-full my-auto">
                                                                                    {{$designation->design_name}}
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td rowspan={{$rowcount}}><span>{{\Carbon\Carbon::parse($designation->pivot->start_date)->format('d-M-Y') }}</span></td>
                                                                            <td rowspan={{$rowcount}}><span>{{$designation->pivot->end_date==null?'--NA--': \Carbon\Carbon::parse($designation->pivot->end_date)->format('d-M-Y') }}</span></td>
                                                                            <td rowspan={{$rowcount}}><span>
                                                                                @php
                                                                                    $sdate=new DateTime($designation->pivot->start_date);
                                                                            
                                                                                    if ($designation->pivot->end_date!=null)
                                                                                        $edate=new DateTime($designation->pivot->end_date);
                                                                                    else
                                                                                        $edate=Carbon\Carbon::now();
                                                                                        $difference=$sdate->diff($edate);
                                                                                    @endphp    
                                                                        
                                                                                        {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}
                                                                            </span>
                                                                            </td>
                                                                        </tr>

                                                                        <!-- Payscale and Designation Display for Teaching-->
                                                                        @if($staff_view->employee_type=='Teaching')
                                                                            
                                                                            @if($staff_view->teaching_payscale != null) <!-- For checking if teaching payscale is null-->
                                                                                
                                                                                @forelse($staff_view->teaching_payscale as $payscale)
                                                                                    @if($designation->pivot->end_date!=null && $designation->isadditonal==0)
                                                                                        @if($payscale->pivot->start_date>=$designation->pivot->start_date && $payscale->pivot->end_date!=null && $payscale->pivot->end_date<=$designation->pivot->end_date)
                                                                                            <tr class="{{$payscale->pivot->status =='inactive'?'bg-gray-200':''}}">
                                                                                                    
                                                                                                <td><span>{{$payscale->payscale_title.'-'.$payscale->agp}}</span></td>
                                                                                                <td><span>{{\Carbon\Carbon::parse($payscale->pivot->start_date)->format('d-M-Y')}}</span></td>
                                                                                                <td><span>{{$payscale->pivot->end_date ==null ?'--NA--': \Carbon\Carbon::parse($payscale->pivot->end_date)->format('d-M-Y')}}</span></td>
                                                                                                <td><span>
                                                                                                    @php
                                                                                                        $sdate=new DateTime($payscale->pivot->start_date);
                                                                                    
                                                                                                        if ($payscale->pivot->end_date!=null)
                                                                                                            $edate=new DateTime($payscale->pivot->end_date);
                                                                                                        else
                                                                                                            $edate=Carbon\Carbon::now();
                                                                                                            $difference=$sdate->diff($edate);
                                                                                                    @endphp    
                                                                                
                                                                                                    {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                                                                </span></td>
                                                                                            </tr>    
                                                                                        @endif
                                                                                    @else
                                                                                        @if($payscale->pivot->end_date==null|| ($payscale->pivot->end_date>$designation->pivot->start_date ))
                                                                                            <tr class="{{$payscale->pivot->status =='inactive'?'bg-gray-200':''}}"> 
                                                                                                            
                                                                                                <td><span>{{$payscale->payscale_title.'-'.$payscale->agp}}</span></td>
                                                                                                <td><span>{{ \Carbon\Carbon::parse($payscale->pivot->start_date)->format('d-M-Y')}}</span></td>
                                                                                                <td><span>{{($payscale->pivot->end_date ==null ?'--NA--':\Carbon\Carbon::parse($payscale->pivot->end_date)->format('d-M-Y'))}}</span></td>
                                                                                                <td><span>
                                                                                                    @php
                                                                                                        $sdate=new DateTime($payscale->pivot->start_date);
                                                                            
                                                                                                        if ($payscale->pivot->end_date!=null)
                                                                                                            $edate=new DateTime($payscale->pivot->end_date);
                                                                                                        else
                                                                                                                        $edate=Carbon\Carbon::now();
                                                                                                                        $difference=$sdate->diff($edate);
                                                                                                                    @endphp    
                                                                        
                                                                                                                    {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                                                                </span></td>
                                                                                            
                                                                                            </tr>   
                                                                                        @endif
                                                                                        
                                                                                                
                                                                                    @endif
                                                                                    @empty

                                                                                @endforelse
                                                                            @endif 
                                                                        <!-- For displaying the consolidated payscales for teaching staff.-->
                                                                        @if($staff_view->consolidated_teaching_pay != null)
                                                                                @forelse ($staff_view->consolidated_teaching_pay as $cons_teaching_pay)
                                                                                    @if($designation->pivot->end_date!=null && $designation->isadditonal==0)
                                                                                        @if($cons_teaching_pay->start_date>=$designation->pivot->start_date && $cons_teaching_pay->end_date!=null && $cons_teaching_pay->end_date<=$designation->pivot->end_date)
                                                                                            <tr class="{{$cons_teaching_pay->status =='inactive'?'bg-gray-200':''}}">
                                                                                                
                                                                                                <td><span>{{$cons_teaching_pay->pay}}</span></td>
                                                                                                <td><span>{{\Carbon\Carbon::parse($cons_teaching_pay->start_date)->format('d-M-Y')}}</span></td>
                                                                                                <td><span>{{$cons_teaching_pay->end_date ==null ?'--NA--': \Carbon\Carbon::parse($cons_teaching_pay->end_date)->format('d-M-Y')}}</span></td>
                                                                                                <td><span>
                                                                                                        @php
                                                                                                            $sdate=new DateTime($cons_teaching_pay->start_date);
                                                                                
                                                                                                            if ($cons_teaching_pay->end_date!=null)
                                                                                                                $edate=new DateTime($cons_teaching_pay->end_date);
                                                                                                            else
                                                                                                                $edate=Carbon\Carbon::now();
                                                                                                                $difference=$sdate->diff($edate);
                                                                                                            @endphp    
                                                                            
                                                                                                            {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                                                                </span></td>
                                                                                                <td><!--Action button not added.--></td>
                                                                                            </tr>
                                                                                        @endif  
                                                                                    @else
                                                                                        @if($cons_teaching_pay->end_date==null|| ($cons_teaching_pay->end_date>$designation->pivot->start_date))
                                                                                            <tr class="{{$cons_teaching_pay->status =='inactive'?'bg-gray-200':''}}"> 
                                                                                                        
                                                                                                    <td><span>{{$cons_teaching_pay->pay}}</span></td>
                                                                                                    <td><span>{{ \Carbon\Carbon::parse($cons_teaching_pay->start_date)->format('d-M-Y')}}</span></td>
                                                                                                    <td><span>{{($cons_teaching_pay->end_date ==null ?'--NA--':\Carbon\Carbon::parse($cons_teaching_pay->end_date)->format('d-M-Y'))}}</span></td>
                                                                                                    <td><span>
                                                                                                        @php
                                                                                                            $sdate=new DateTime($cons_teaching_pay->start_date);
                                                                        
                                                                                                                if ($cons_teaching_pay->end_date!=null)
                                                                                                                    $edate=new DateTime($cons_teaching_pay->end_date);
                                                                                                                else
                                                                                                                    $edate=Carbon\Carbon::now();
                                                                                                                    $difference=$sdate->diff($edate);
                                                                                                                @endphp    
                                                                    
                                                                                                                {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                                                                    </span></td>
                                                                                            </tr>   
                                                                                            @endif
                                                                                    
                                                                                            
                                                                                    @endif 
                                                                                    @empty
                                                                                
                                                                                @endforelse
                                                                            @endif
                                                                            <!-- End of Teaching consolidated payscale -->
                                                                        </tr>  
                                                                        <!-- Teaching section designation and payscale ends here-->
                                                                    @else
                                                                    <!--Non teaching Section starts here-->
                                                                    
                                                                            @if($staff_view->ntpayscale != null)
                                                                                    @foreach ($staff_view->ntpayscale as $ntpays )
                                                                                        <tr class="{{$ntpays->pivot->status =='inactive'?'bg-gray-200':''}}">
                                                                                            
                                                                                            <td>  
                                                                                                @php
                                                                                                    $level1_payscales =  explode("-",$ntpays->payband)
                                                                                                @endphp 
                                                                                                @if ($ntpays->pivot->level == 1)
                                                                                                    
                                                                                                    {{$level1_payscales[0].'-'.$level1_payscales[1].'-'.$level1_payscales[2]}}
                                                                                                
                                                                                                @elseif ($ntpays->pivot->level == 2)
                                                                                                
                                                                                                    {{$level1_payscales[2].'-'.$level1_payscales[3].'-'.$level1_payscales[4]}}
                                                                                                    
                                                                                                @else
                                                                                                        
                                                                                                    {{$level1_payscales[4].'-'.$level1_payscales[5].'-'.$level1_payscales[6]}}
                                                                                                
                                                                                                @endif
                                                                                            </td>
                                                                                            <td>{{ \Carbon\Carbon::parse($ntpays->pivot->start_date)->format('d-M-Y')}}</td>
                                                                                            <td>{{($ntpays->pivot->end_date == null ? '--NA--': \Carbon\Carbon::parse($ntpays->pivot->end_date)->format('d-M-Y') )}}</td>
                                                                                            <td>
                                                                                            @php
                                                                                                        $sdate=new DateTime($ntpays->pivot->start_date);
                                                                            
                                                                                                        if ($ntpays->pivot->end_date!=null)
                                                                                                            $edate=new DateTime($ntpays->pivot->end_date);
                                                                                                        else
                                                                                                            $edate=Carbon\Carbon::now();
                                                                                                            $difference=$sdate->diff($edate);
                                                                                                        @endphp    
                                                                        
                                                                                                        {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}
                                                                                            </td>
                                                                                        </tr>
                                                                                    
                                                                                    @endforeach
                                                                                @endif
                                                                                <!--End of non teaching designation and poayscale section-->
                                                                                    <!--For non-teaching Consolidated payscale-->
                                                                                @if($staff_view->ntcpayscale !=null)
                                                                                    @foreach ($staff_view->ntcpayscale as $ntcpays )
                                                                                    <tr class="{{$ntcpays->pivot->status =='inactive'?'bg-gray-200':''}}">
                                                                                        <td>  
                                                                                            {{$ntcpays->basepay.'-'.$ntcpays->allowance.'-'.$ntcpays->year.' Year'}}
                                                                                        </td>
                                                                                        <td>{{\Carbon\Carbon::parse($ntcpays->pivot->start_date)->format('d-M-Y') }}</td>
                                                                                        <td>{{$ntcpays->pivot->end_date == null? '--NA--': \Carbon\Carbon::parse($ntcpays->pivot->end_date)->format('d-M-Y') }}</td>
                                                                                        <td>
                                                                                            @php
                                                                                                $sdate=new DateTime($ntcpays->pivot->start_date);
                                                                    
                                                                                                if ($ntcpays->pivot->end_date!=null)
                                                                                                    $edate=new DateTime($ntcpays->pivot->end_date);
                                                                                                else
                                                                                                    $edate=Carbon\Carbon::now();
                                                                                                    $difference=$sdate->diff($edate);
                                                                                            @endphp    
                                                                            
                                                                                            {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                                                        </td>
                                                                                        
                                                                                    </tr>
                                                                                    
                                                                                    @endforeach
                                                                                @endif
                                                                                <!--Non Teaching fixed salary section-->
                                                                                @if ($staff_view->fixed_nt_pay !=null)
                                                                                        @forelse ($staff_view->fixed_nt_pay as $fntp)
                                                                                        <tr class="{{$fntp->status =='inactive'?'bg-gray-200':''}}">
                                                                                            <td>  
                                                                                                {{$fntp->pay}}
                                                                                            </td>
                                                                                            <td>{{\Carbon\Carbon::parse($fntp->start_date)->format('d-M-Y') }}</td>
                                                                                            <td>{{$fntp->end_date == null? '--NA--': \Carbon\Carbon::parse($fntp->end_date)->format('d-M-Y') }}</td>
                                                                                            <td>
                                                                                                @php
                                                                                                    $sdate=new DateTime($fntp->start_date);
                                                                        
                                                                                                    if ($fntp->end_date!=null)
                                                                                                        $edate=new DateTime($fntp->end_date);
                                                                                                    else
                                                                                                        $edate=Carbon\Carbon::now();
                                                                                                        $difference=$sdate->diff($edate);
                                                                                                @endphp    
                                                                                
                                                                                                                {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                                                            </td>
                                                                                        </tr>
                                                                                        @empty
                                                                                            
                                                                                        @endforelse
                                                                                    
                                                                                @endif

                                                                            <!--End of non-teaching fixed pay (if)-->
                                                                            
                                                                        @endif  
                                                                @endif <!--end if for addiotional designation checking--> 
                                                                @endforeach 
                                                            </tbody>
                                                        </table>  
                                                    </div>   
                                                </div>
                                            </div>
                                            <!--Additional Designation start-->
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-body">
                                                    <div class="box-header">
                                                        <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i>Additional Designation</h5>
                                                    </div>
                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                            <tr class="">
                                                                <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Additional Designation</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Department</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Start Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">End Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Duration</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Gcr</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Status</th>
                                                            </tr>
                                                            </thead>
                                                            @php
                                                                $i=1;
                                                            @endphp
                                                            <tbody class="">
                                                                @foreach ($staff_view->designations as $desig)
                                                                    @if($desig->isadditional==1)
                                                                        @foreach($staff_view->departments as $department)
                                                                    
                                                                            @if($department->id==$desig->pivot->dept_id)
                                                                                @php
                                                                                    $dept=$department->dept_name;
                                                                                    break;
                                                                                @endphp
                                                                    
                                                                            @endif
                                                                        @endforeach
                                                                        <tr class="{{$desig->pivot->status =='inactive'?'bg-gray-200':''}}">
                                                                            <td>{{$i++}}</td>
                                                                            <td>{{$desig->design_name}}</td>
                                                                            <td>{{$desig->pivot->dept_id==null?'---NA---':$dept}}</td>
                                                                            <td>{{\Carbon\Carbon::parse($desig->pivot->start_date)->format('d-M-Y') }}</td>
                                                                            <td>{{$desig->pivot->end_date==null?'--NA--':\Carbon\Carbon::parse($desig->pivot->end_date)->format('d-M-Y') }}</td>
                                                                            <td><span>
                                                                                @php
                                                                                    $sdate=new DateTime($desig->pivot->start_date);
                                                                            
                                                                                    if ($desig->pivot->end_date!=null)
                                                                                        $edate=new DateTime($desig->pivot->end_date);
                                                                                    else
                                                                                        $edate=Carbon\Carbon::now();
                                                                                        $difference=$sdate->diff($edate);
                                                                                @endphp 
                                                                                {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}
                                                                            </span></td>


                                                                            <td>{{$desig->pivot->gcr}}</td>
                                                                            <td>{{$desig->status}}</td>
                                                                        </tr>
                                                                    @endif
                                                                @endforeach
                                                            </tbody>
                                                        </table>  
                                                    </div>   
                                                </div>
                                            </div>
                                            <!--Additional Designation Ends-->
                                        </div>
                                        <!--Designation And Payscale Ends-->

                                        <!-- Leaves Start-->
                                        <div id="profile-settings-6" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-6">
                                       
                                        </div>
                                        <!-- Leaves End-->
                                        
                                    </div>
                               
                                </div>
                            </div>
                        </div>
                        <!-- End::row-1 -->

                    </div>
                    <!-- Start::main-content -->

                </div>

@endsection

@section('scripts')

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- FORM-LAYOUT JS -->
        @vite('resources/assets/js/profile-settings.js')
        

@endsection
